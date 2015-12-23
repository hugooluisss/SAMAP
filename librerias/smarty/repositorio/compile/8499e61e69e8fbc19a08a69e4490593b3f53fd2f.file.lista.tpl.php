<?php /* Smarty version Smarty-3.1.11, created on 2015-12-23 01:48:12
         compiled from "templates/plantillas/modulos/reporte/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1933788673567051870dc8d0-55459762%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8499e61e69e8fbc19a08a69e4490593b3f53fd2f' => 
    array (
      0 => 'templates/plantillas/modulos/reporte/lista.tpl',
      1 => 1450327718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1933788673567051870dc8d0-55459762',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_567051871056c7_02060807',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567051871056c7_02060807')) {function content_567051871056c7_02060807($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Library/WebServer/Documents/SAMAP/librerias/smarty/plugins/modifier.date_format.php';
?><div class="box">
	<div class="box-header">
	</div><!-- /.box-header -->
	<div class="box-body">
		<table id="tblReportes" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Fecha/Hora</th>
					<th>Lugar</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['fecha'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['direccion'];?>
</td>
						<td style="text-align: right">
							<button type="button" class="btn btn-success" action="ubicar" title="Posicionar en el mapa" reporte="<?php echo $_smarty_tpl->tpl_vars['row']->value['idReporte'];?>
" fecha="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['fecha'],"%Y-%m-%d %H:%M:%S");?>
" latitud="<?php echo $_smarty_tpl->tpl_vars['row']->value['latitud'];?>
" longitud="<?php echo $_smarty_tpl->tpl_vars['row']->value['longitud'];?>
"><i class="fa fa-map-pin"></i></button>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div><?php }} ?>