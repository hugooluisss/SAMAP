<?php /* Smarty version Smarty-3.1.11, created on 2015-12-08 13:06:06
         compiled from "templates/plantillas/modulos/localizacion/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14336023665660845e0229a2-10859021%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a88b9ab138275058b3aba7941f799de0f4a959a9' => 
    array (
      0 => 'templates/plantillas/modulos/localizacion/panel.tpl',
      1 => 1449601515,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14336023665660845e0229a2-10859021',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5660845e0230c9_50534580',
  'variables' => 
  array (
    'PAGE' => 0,
  ),
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
		<br /><br />
    	<div id="dvMapa" class="col-xs-12 col-sm-12" style="height: 300px; width: 100%;"></div>
    </div>
</div>

<div id="dvLista"></div>

<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/localizacion/addComentario.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>