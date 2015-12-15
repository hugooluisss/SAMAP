<?php /* Smarty version Smarty-3.1.11, created on 2015-12-15 12:10:16
         compiled from "templates/plantillas/modulos/reporte/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:602867926567048869234e1-85268456%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7fa4569d1c5dad4d9c9f93447ff6e54b31e817c' => 
    array (
      0 => 'templates/plantillas/modulos/reporte/panel.tpl',
      1 => 1450203006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '602867926567048869234e1-85268456',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56704886940ff7_31409707',
  'variables' => 
  array (
    'usuarios' => 0,
    'item' => 0,
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56704886940ff7_31409707')) {function content_56704886940ff7_31409707($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Library/WebServer/Documents/SAMAP/librerias/smarty/plugins/modifier.date_format.php';
?><div class="panel panel-info">
	<div class="panel-head">
		<h1>Reporte diario</h1>
	</div>
	<div class="panel-body">
		<div class="row">
			<label for="lstUsuarios" class="col-xs-4">Usuario</label>
			<div class="col-xs-8">
				<select id="lstUsuario" name="lstUsuario">
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['usuarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['idUsuario'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>

					<?php } ?>
				</select>
			</div>
		</div>
		<div class="row">
			<label for="txtFecha" class="col-xs-4">Fecha</label>
			<div class="col-xs-4">
				<input type="text" value="<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d");?>
" id="txtFecha" name="txtFecha" placeholder="Y-m-d" />
			</div>
		</div>
    	<div class="btn-group pull-right">
    		<input type="button" value="Buscar" id="btnBuscar" name="btnBuscar" class="btn btn-success"/>
    	</div>
    </div>
</div>

<div id="dvLista"></div>

<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/reporte/ubicacion.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>