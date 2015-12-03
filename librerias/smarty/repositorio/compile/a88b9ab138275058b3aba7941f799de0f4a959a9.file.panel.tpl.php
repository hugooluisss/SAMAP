<?php /* Smarty version Smarty-3.1.11, created on 2015-12-03 13:09:57
         compiled from "templates/plantillas/modulos/localizacion/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14336023665660845e0229a2-10859021%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a88b9ab138275058b3aba7941f799de0f4a959a9' => 
    array (
      0 => 'templates/plantillas/modulos/localizacion/panel.tpl',
      1 => 1449169794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14336023665660845e0229a2-10859021',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5660845e0230c9_50534580',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5660845e0230c9_50534580')) {function content_5660845e0230c9_50534580($_smarty_tpl) {?><div class="panel panel-default">
	<div class="panel-head">
		<h1>Mapa</h1>
	</div>
	<div class="panel-body">
		<div class="btn-group" role="group" aria-label="...">
			<button type="button" class="btn btn-default" id="btnEnviarUbicacion">Enviar ubicación</button>
		</div>
		<br />
    	<div id="dvMapa" class="col-xs-12" style="height: 300px;"></div>
    </div>
</div><?php }} ?>