<?php
global $objModulo;
global $sesion;
switch($objModulo->getId()){
	case 'listaReportes': case 'posicionesPorDia':
		$fecha = $_GET['fecha'] == ''?date("Y-m-d"):$_GET['fecha'];
		$usuario = $_GET['usuario'] == ''?$sesion['usuario']:$_GET['usuario'];
		
		$db = TBase::conectaDB();
		global $sesion;
		
		$rs = $db->Execute("select * from reporte where idUsuario = ".$usuario." and cast(fecha as date) = '".$fecha."'");
		$datos = array();
		while(!$rs->EOF){
			$rs->fields['json'] = json_encode($rs->fields);
			
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		$smarty->assign("lista", $datos);
	break;
	case 'reporte':
		$db = TBase::conectaDB();
		$objUser = new TUsuario($sesion['usuario']);
		
		if ($objUser->getIdTipo() != 1)
			$rs = $db->Execute("select * from usuario where idUsuario = ".$sesion['usuario']);
		else
			$rs = $db->Execute("select * from usuario order by nombre");
			
		$datos = array();
		while(!$rs->EOF){
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		$smarty->assign("usuarios", $datos);
	break;
	case 'reportarUbicacion':
		$smarty->assign("origen", base64_decode($_GET['usuario']));
		$smarty->assign("destino", base64_decode($_GET['solicita']));
	break;
	case 'gw_reporte':
		switch($objModulo->getAction()){
			case 'add':
				$obj = new TReporte();
				$obj->setId($_POST['id']);
				$obj->setUsuario($_POST['usuario'] == ''?$sesion['usuario']:$_POST['usuario']);
				$obj->setLatitud($_POST['latitud']);
				$obj->setLongitud($_POST['longitud']);
				$obj->setDireccion($_POST['direccion']);
				$obj->setCampo1($_POST['campo1']);
				$obj->setCampo2($_POST['campo2']);
				$obj->setCampo3($_POST['campo3']);
				
				echo json_encode(array("band" => $obj->guardar(), "id" => $obj->getId()));
				
				$obj->setComentarios();
			break;
			case 'del':
				$obj = new TReporte();
				$obj->setId($_POST['id']);
				
				echo json_encode(array("band" => $obj->eliminar()));
			break;
			case 'getUbicacion':
				$db = TBase::conectaDB();
				global $sesion;
				global $ini;
				$data = json_decode(file_get_contents("data.json"));
				$configuracion = array();
				foreach($data as $key => $val)
					$configuracion[$key] = $val;
					
				$tiempo = $configuracion["reportarCada"] == ''?$ini["parametros"]["reportarCada"]:$configuracion["reportarCada"];
				$rs = $db->Execute("select * from reporte where idUsuario = ".$sesion['usuario']." order by fecha desc");
				$band = false;
				
				if ($rs->EOF){
					$proxTimeStamp = strtotime("now");
					$nuevaFecha = date("Y-m-d H:i:s");
				}else{
					$proxTimeStamp = strtotime('+'.$tiempo.' minutes', strtotime($rs->fields['fecha']));
					$nuevaFecha = date("Y-m-d H:i:s", $proxTimeStamp);
				}
				
				if ($proxTimeStamp <= strtotime("now")){
					$obj = new TReporte();
					$obj->setUsuario($sesion['usuario']);
					$obj->setLatitud($_POST['latitud']);
					$obj->setLongitud($_POST['longitud']);
					$obj->setDireccion($_POST['direccion']);
					$band = $obj->guardar();
					
					$proxTimeStamp = strtotime('+'.$tiempo.' minutes', strtotime("now"));
					$nuevaFecha = date("Y-m-d H:i:s", $proxTimeStamp);
				}
				
				echo json_encode(array("band" => $band, "proxima" => $nuevaFecha, "proximoTimeStamp" => $proxTimeStamp, "proximo" => $tiempo * 1000 * 60, "aux" => strtotime("now")));
			break;
			case 'reportarViaEMail':
				$db = TBase::conectaDB();
				$email = new TMail;
				$usuario = new TUsuario();
				$reporte = new TReporte($_GET['reporte']);
				
				$email->setTema(utf8_decode("Reporte de ubicación"));
				$rs = $db->Execute("select * from usuario where idTipo = 1".($_GET['usuario'] == ''?'':(" and idUsuario = ".$_GET['usuario'])));
				
				$img = "temporal/img.jpg";
				file_put_contents($img, file_get_contents("https://maps.googleapis.com/maps/api/staticmap?center=".$reporte->getLatitud().",".$reporte->getLongitud()."&zoom=16&size=300x250&format=JPG&markers=color:green|label:M|".$reporte->getLatitud().",".$reporte->getLongitud().""));
				
				$documento = "";
				while(!$rs->EOF){
					$email->setDestino($rs->fields['email'], utf8_decode($rs->fiels['nombre']));
					$documento .= " ".$rs->fields['email'];
					$datos = array();
					$usuario->setId($rs->fields['idUsuario']);
					$datos['nombreCompleto'] = $usuario->getNombre();
					$usuario->setId($reporte->getIdUsuario());
					$datos['nombreCompletoReportado'] = $usuario->getNombre();
					$datos['Latitud'] = $reporte->getLatitud();
					$datos['Longitud'] = $reporte->getLongitud();
					$datos['Fecha'] = $reporte->getFecha();
					$datos['Direccion'] = $reporte->getDireccion();
					$datos['comentario1'] = $reporte->getCampo1();
					$datos['comentario2'] = $reporte->getCampo2();
					$datos['comentario3'] = $reporte->getCampo3();
					
					$email->setBodyHTML(utf8_decode($email->construyeMail(file_get_contents("repositorio/mail/ubicacion.txt"), $datos)));
					$email->adjuntar($img);
					$email->send();
					
					$rs->moveNext();
				}
				
				$result = array("doc" => $documento, "band" => true);
				echo json_encode($result);
			break;
			case 'solicitarUbicacionMail':
				$db = TBase::conectaDB();
				$email = new TMail;
				$usuario = new TUsuario($_GET['user']);
				$origen = new TUsuario($_GET['solicita']);
				$datos = json_decode(file_get_contents("data.json"));
				foreach($datos as $key => $val)
					$config[$key] = $val;
				
				$email->setTema(utf8_decode("Solicitud de ubicación"));
				$email->setDestino($usuario->getEmail(), utf8_decode($usuario->getNombre()));
				
				$datos = array();
				$datos['nombreCompleto'] = $usuario->getNombre();
				$datos['direccionReportar'] = $config['web']."/?mod=reportarUbicacion&usuario=".base64_encode($usuario->getId())."&solicita=".base64_encode($origen->getId());
				
				$email->setBodyHTML(utf8_decode($email->construyeMail(file_get_contents("repositorio/mail/ubicar.txt"), $datos)));
				echo json_encode(array("band" => $email->send()));
			break;
		}
	break;
}
?>