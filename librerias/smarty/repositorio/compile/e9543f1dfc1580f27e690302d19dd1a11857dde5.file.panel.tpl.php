<?php /* Smarty version Smarty-3.1.11, created on 2015-12-23 11:43:00
         compiled from "templates/plantillas/modulos/configuracion/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:747239298567963641c2725-14038446%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9543f1dfc1580f27e690302d19dd1a11857dde5' => 
    array (
      0 => 'templates/plantillas/modulos/configuracion/panel.tpl',
      1 => 1450892576,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '747239298567963641c2725-14038446',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_567963641c4f71_23657241',
  'variables' => 
  array (
    'reportarCada' => 0,
    'x' => 0,
    'servidorEmail' => 0,
    'usuarioEmail' => 0,
    'passEmail' => 0,
    'web' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567963641c4f71_23657241')) {function content_567963641c4f71_23657241($_smarty_tpl) {?><div class="panel panel-info" id="configuracion">
	<div class="panel-head">
		<h1>Configuración del sistema</h1>
	</div>
	<div class="panel-body">
		<div class="row">
			<label for="reportarCada" class="col-xs-3">Reporte de cada usuario cada</label>
			<div class="col-xs-8">

				<select id="reportarCada" name="reportarCada">
					<option value="1" <?php if (1==$_smarty_tpl->tpl_vars['reportarCada']->value){?>selected<?php }?>>1
					<?php $_smarty_tpl->tpl_vars['x'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['x']->step = 5;$_smarty_tpl->tpl_vars['x']->total = (int)ceil(($_smarty_tpl->tpl_vars['x']->step > 0 ? 59+1 - (5) : 5-(59)+1)/abs($_smarty_tpl->tpl_vars['x']->step));
if ($_smarty_tpl->tpl_vars['x']->total > 0){
for ($_smarty_tpl->tpl_vars['x']->value = 5, $_smarty_tpl->tpl_vars['x']->iteration = 1;$_smarty_tpl->tpl_vars['x']->iteration <= $_smarty_tpl->tpl_vars['x']->total;$_smarty_tpl->tpl_vars['x']->value += $_smarty_tpl->tpl_vars['x']->step, $_smarty_tpl->tpl_vars['x']->iteration++){
$_smarty_tpl->tpl_vars['x']->first = $_smarty_tpl->tpl_vars['x']->iteration == 1;$_smarty_tpl->tpl_vars['x']->last = $_smarty_tpl->tpl_vars['x']->iteration == $_smarty_tpl->tpl_vars['x']->total;?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['x']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['x']->value==$_smarty_tpl->tpl_vars['reportarCada']->value){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['x']->value;?>

					<?php }} ?>
				</select> minutos
			</div>
		</div>
		<div class="row">
			<label for="servidorEmail" class="col-xs-3">Servidor de email</label>
			<div class="col-xs-4">
				<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['servidorEmail']->value;?>
" id="servidorEmail" name="servidorEmail" class="form-control" />
			</div>
		</div>
		<div class="row">
			<label for="usuarioEmail" class="col-xs-3">Usuario del servidor de email</label>
			<div class="col-xs-4">
				<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['usuarioEmail']->value;?>
" id="usuarioEmail" name="usuarioEmail" class="form-control" />
			</div>
		</div>
		<div class="row">
			<label for="passEmail" class="col-xs-3">Constraseña del servidor de email</label>
			<div class="col-xs-4">
				<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['passEmail']->value;?>
" id="passEmail" name="passEmail" class="form-control" />
			</div>
		</div>
		<br />
		<div class="row">
			<label for="passEmail" class="col-xs-3">Dirección web</label>
			<div class="col-xs-4">
				<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['web']->value;?>
" id="web" name="web" class="form-control" />
			</div>
		</div>
	</div>
	<div class="panel-footer">
		<input type="button" value="Guardar" id="btnGuardar" name="btnGuardar" class="btn btn-success"/>
	</div>
</div><?php }} ?>