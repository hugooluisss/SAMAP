<?php /* Smarty version Smarty-3.1.11, created on 2015-12-23 10:09:09
         compiled from "templates/plantillas/modulos/usuarios/modalUbicar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1149017118567abc83839bb9-42401137%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4300c29b498055c89456781bd4191d7e00bc7c3b' => 
    array (
      0 => 'templates/plantillas/modulos/usuarios/modalUbicar.tpl',
      1 => 1450886919,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1149017118567abc83839bb9-42401137',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_567abc8383fad5_51888592',
  'variables' => 
  array (
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567abc8383fad5_51888592')) {function content_567abc8383fad5_51888592($_smarty_tpl) {?><div class="modal fade" id="modalUbicar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel">Solicitar ubicación</h3>
			</div>
			<div class="modal-body">
				<ul class="list-group">
					<li class="list-group-item">
						<button class="btn btn-primary" id="sendMail"><i class="fa fa-envelope-o"></i> Correo electrónico</button>
					</li>
					<li class="list-group-item">
						<button class="btn btn-primary" id="sendSMS"><i class="fa fa-phone"></i> SMS</button>
					</li>
				</ul>
			</div>
		</div>
	</div>
	
	<input type="hidden" value="" id="usuario" />
	<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['sesion']['usuario'];?>
" id="origen" />
	
</div>
<?php }} ?>