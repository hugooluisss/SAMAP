<?php /* Smarty version Smarty-3.1.11, created on 2015-12-23 01:48:10
         compiled from "templates/plantillas/modulos/reporte/ubicacion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:808952227567052586fb149-96263156%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6051cc061c9fc6b7b874f8673708957dfb8303ca' => 
    array (
      0 => 'templates/plantillas/modulos/reporte/ubicacion.tpl',
      1 => 1450327718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '808952227567052586fb149-96263156',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_567052586fc249_81786466',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567052586fc249_81786466')) {function content_567052586fc249_81786466($_smarty_tpl) {?><div class="modal fade" id="modalPosicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3>Posición</h3>
			</div>
			<div class="modal-body">
				<div class="thumbnail">
					<img src="" id="mapa">
					<div class="caption">
						<div class="row">
							<div class="col-xs-4"><b>Fecha</b></div>
							<div class="col-xs-4" id="lblFecha"></div>
						</div>
						<div class="row">
							<div class="col-xs-4"><b>Latitud</b></div>
							<div class="col-xs-4" id="lblLatitud"></div>
						</div>
						<div class="row">
							<div class="col-xs-4"><b>Longitud</b></div>
							<div class="col-xs-4" id="lblLongitud"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
				<button class="btn btn-primary" id="enviarPorEmail">Enviar correo electrónico</button>
				<input type="hidden" value="" id="idReporte" name="idReporte">
			</div>
		</div>
	</div>
</div>
<?php }} ?>