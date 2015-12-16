<?php /* Smarty version Smarty-3.1.11, created on 2015-12-16 11:50:41
         compiled from "templates/plantillas/modulos/usuarios/datosPersonales.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4044189145671a453543015-30088224%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a940e7d5dc47a23fad0b1c3a9214c0cebf94027a' => 
    array (
      0 => 'templates/plantillas/modulos/usuarios/datosPersonales.tpl',
      1 => 1450288240,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4044189145671a453543015-30088224',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5671a453638352_46760604',
  'variables' => 
  array (
    'nombre' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5671a453638352_46760604')) {function content_5671a453638352_46760604($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Datos personales</h1>
	</div>
</div>

<form role="form" id="frmAdd" class="form-horizontal" onsubmit="javascript: return false;">
	<div class="box">
		<div class="box-body">
			<div class="form-group">
				<label for="txtNombre" class="col-lg-2">Nombre completo</label>
				<div class="col-lg-5">
					<input class="form-control" id="txtNombre" name="txtNombre" value="<?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
">
				</div>
			</div>
		</div>
		<div class="box-footer">
			<button type="submit" class="btn btn-info pull-right">Guardar</button>
			<input type="hidden" id="id"/>
		</div>
	</div>
</form><?php }} ?>