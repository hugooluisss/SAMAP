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
	case 'gw_reporte':
		switch($objModulo->getAction()){
			case 'add':
				$obj = new TReporte();
				$obj->setId($_POST['id']);
				$obj->setUsuario($sesion['usuario']);
				$obj->setLatitud($_POST['latitud']);
				$obj->setLongitud($_POST['longitud']);
				$obj->setDireccion($_POST['direccion']);
				$obj->setCampo1($_POST['campo1']);
				$obj->setCampo2($_POST['campo2']);
				$obj->setCampo3($_POST['campo3']);
				
				echo json_encode(array("band" => $obj->guardar()));
				
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
				$tiempo = $ini["parametros"]["reportarCada"];
				$rs = $db->Execute("select * from reporte where idUsuario = ".$sesion['usuario']." order by fecha desc");
				$band = false;
				
				if ($rs->EOF){
					$proxTimeStamp = strtotime("now");
					$nuevaFecha = date("Y-m-d H:i:s");
				}else{
					$proxTimeStamp = strtotime('+'.$tiempo.' second', strtotime($rs->fields['fecha']));
					$nuevaFecha = date("Y-m-d H:i:s", $proxTimeStamp);
				}
				
				if ($proxTimeStamp <= strtotime("now")){
					$obj = new TReporte();
					$obj->setUsuario($sesion['usuario']);
					$obj->setLatitud($_POST['latitud']);
					$obj->setLongitud($_POST['longitud']);
					$obj->setDireccion($_POST['direccion']);
					$band = $obj->guardar();
					
					$proxTimeStamp = strtotime('+'.$tiempo.' second', strtotime("now"));
					$nuevaFecha = date("Y-m-d H:i:s", $proxTimeStamp);
				}
				
				echo json_encode(array("band" => $band, "proxima" => $nuevaFecha, "proximoTimeStamp" => $proxTimeStamp, "proximo" => $tiempo * 1000, "aux" => strtotime("now")));
			break;
		}
	break;
}
?>