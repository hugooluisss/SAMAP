<?php
define('SISTEMA', 'SAMAP');
define('VERSION', 'v 1.0');
define('ALIAS', '');
define('AUTOR', 'Hugo Luis Santiago Altamirano');
define('EMAIL', 'hugooluisss@gmail.com');
define('EMAILSOPORTE', 'hugooluisss@gmail.com');
define('STATUS', 'En desarrollo');

define('LAYOUT_DEFECTO', 'layout/default.tpl');
define('LAYOUT_AJAX', 'layout/update.tpl');

#Login y su controlador	
$conf['inicio'] = array(
	'descripcion' => '',
	'seguridad' => false,
	'js' => array('usuario.class.js'),
	'jsTemplate' => array('login.js'),
	'capa' => 'layout/login.tpl');

$conf['logout'] = array(
	'controlador' => 'login.php',
	#'vista' => 'usuarios/panel.tpl',
	'descripcion' => 'Salir del sistema',
	'seguridad' => false,
	'js' => array(),
	'capa' => LAYOUT_DEFECTO);
	
#Login y su controlador
$conf['clogin'] = array(
	'controlador' => 'login.php',
	'descripcion' => 'Inicio de sesion',
	'seguridad' => false,
	'capa' => LAYOUT_AJAX);
	
$conf['bienvenida'] = array(
	'controlador' => 'usuarios.php',
	'vista' => 'usuarios/bienvenida.tpl',
	'descripcion' => 'Bienvenida al sistema',
	'seguridad' => true,
	'capa' => LAYOUT_DEFECTO);

$conf['admonUsuarios'] = array(
	'controlador' => 'usuarios.php',
	'vista' => 'usuarios/panel.tpl',
	'descripcion' => 'Administración de usuarios',
	'seguridad' => true,
	'js' => array('usuario.class.js'),
	'jsTemplate' => array('usuarios.js'),
	'capa' => LAYOUT_DEFECTO);

$conf['listaUsuarios'] = array(
	'controlador' => 'usuarios.php',
	'vista' => 'usuarios/lista.tpl',
	'descripcion' => 'Lista de usuarios',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['cusuarios'] = array(
	'controlador' => 'usuarios.php',
	'descripcion' => 'Controlador de usuarios',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
/*Datos de usuario desde el panel*/
$conf['usuarioDatosPersonales'] = array(
	'controlador' => 'usuarios.php',
	'vista' => 'usuarios/datosPersonales.tpl',
	'descripcion' => 'Cambiar datos personales',
	'seguridad' => true,
	'js' => array('usuario.class.js'),
	'jsTemplate' => array('datosUsuario.js'),
	'capa' => LAYOUT_DEFECTO);
	
/**/
$conf['ubicacion'] = array(
	'controlador' => 'reporte.php',
	'vista' => 'localizacion/panel.tpl',
	'descripcion' => 'Panel que muestra el mapa con la ubicación del usuario',
	'seguridad' => true,
	'js' => array('mapa.class.js', 'reporte.class.js'),
	'jsTemplate' => array('localizacion.js'),
	'capa' => LAYOUT_DEFECTO);

$conf['gw_reporte'] = array(
	'controlador' => 'reporte.php',
	'descripcion' => 'Gateway ubicaciones',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['listaReportes'] = array(
	'controlador' => 'reporte.php',
	'vista' => 'localizacion/lista.tpl',
	'descripcion' => 'Lista de reportes',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['reporte'] = array(
	'controlador' => 'reporte.php',
	'vista' => 'reporte/panel.tpl',
	'descripcion' => 'Lista de ubicaciones',
	'seguridad' => true,
	#'js' => array('mapa.class.js', 'reporte.class.js'),
	'jsTemplate' => array('reporte.js'),
	'capa' => LAYOUT_DEFECTO);
	
$conf['posicionesPorDia'] = array(
	'controlador' => 'reporte.php',
	'vista' => 'reporte/lista.tpl',
	'descripcion' => 'Lista de reportes',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
?>