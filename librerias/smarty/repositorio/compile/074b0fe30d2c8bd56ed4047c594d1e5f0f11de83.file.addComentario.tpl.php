<?php /* Smarty version Smarty-3.1.11, created on 2015-12-08 12:58:43
         compiled from "templates/plantillas/modulos/localizacion/addComentario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:164617632456671a61b81116-24940169%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '074b0fe30d2c8bd56ed4047c594d1e5f0f11de83' => 
    array (
      0 => 'templates/plantillas/modulos/localizacion/addComentario.tpl',
      1 => 1449601121,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164617632456671a61b81116-24940169',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56671a61bacd44_32494893',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56671a61bacd44_32494893')) {function content_56671a61bacd44_32494893($_smarty_tpl) {?><div class="modal fade" id="modalComentario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel">Enviar ubicación</h3>
			</div>
			<div class="modal-body">
				<div class="row">
					<label class="col-xs-4" for="txtComentario">Dirección</label>
					<div class="col-xs-8" id="ubicacion"></div>
				</div>
				<div class="row">
					<label class="col-xs-4" for="txtComentario">Coordenadas</label>
					<div class="col-xs-4" id="latitud"></div>
				</div>
				<div class="row">
					<div class="col-xs-offset-4 col-xs-4" id="longitud"></div>
				</div>
				<div class="row">
					<label class="col-xs-4" for="txtComentario">Comentario</label>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<textarea class="form-control" id="txtComentario" name="txtComentario"></textarea>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
				<button class="btn btn-primary" id="guardar">Enviar</button>
			</div>
		</div>
	</div>
</div>
<?php }} ?>