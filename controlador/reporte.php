<?php
global $objModulo;
global $sesion;
switch($objModulo->getId()){
	case 'listaReportes':
		$db = TBase::conectaDB();
		global $sesion;
		
		$rs = $db->Execute("select * from reporte where idUsuario = ".$sesion['usuario']);
		$datos = array();
		while(!$rs->EOF){
			$rs->fields['json'] = json_encode($rs->fields);
			
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		$smarty->assign("lista", $datos);
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

				echo json_encode(array("band" => $obj->guardar()));
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
				
				if ($rs->EOF){
					$nuevaFecha = date("Y-m-d H:i:s");
				}else{
					$nuevaFecha = strtotime('+'.$tiempo.' minute', strtotime($rs->fields['fecha']));
					$nuevaFecha = date("Y-m-d H:i:s", $nuevaFecha);
					
					echo $nuevaFecha;
				}
				
				echo json_encode(array("band", ));

			break;
		}
	break;
}
?>