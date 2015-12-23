<?php
global $objModulo;

switch($objModulo->getId()){
	case 'configuracion':
		if (file_exists("data.json")){
			$datos = json_decode(file_get_contents("data.json"));
			
			foreach($datos as $key => $val)
				$smarty->assign($key, $val);
		}
	break;
	case 'cconfiguracion':
		switch($objModulo->getAction()){
			case 'guardar':
				$data = $_POST["data"];
				file_put_contents("data.json", $data);
				
				echo json_encode(array("band" => true));
			break;
		}
	break;
}
?>