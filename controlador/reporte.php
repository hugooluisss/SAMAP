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
				$obj->setComentario($_POST['comentario']);
				$obj->setDireccion($_POST['direccion']);

				echo json_encode(array("band" => $obj->guardar()));
			break;
			case 'del':
				$obj = new TReporte();
				$obj->setId($_POST['id']);
				
				echo json_encode(array("band" => $obj->eliminar()));
			break;
		}
	break;
}
?>