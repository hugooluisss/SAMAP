<?php /* Smarty version Smarty-3.1.11, created on 2015-12-08 13:54:24
         compiled from "templates/plantillas/modulos/localizacion/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:139892819556672a2097c6e5-29552620%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7124f464e3ec0a7539117a18bdf806b6ffb05cba' => 
    array (
      0 => 'templates/plantillas/modulos/localizacion/lista.tpl',
      1 => 1449604379,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139892819556672a2097c6e5-29552620',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56672a209af908_91955183',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56672a209af908_91955183')) {function content_56672a209af908_91955183($_smarty_tpl) {?><div class="box">
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
" latitud="<?php echo $_smarty_tpl->tpl_vars['row']->value['latitud'];?>
" longitud="<?php echo $_smarty_tpl->tpl_vars['row']->value['longitud'];?>
"><i class="fa fa-map-pin"></i></button>
							<button type="button" class="btn btn-danger" action="eliminar" title="Eliminar" reporte="<?php echo $_smarty_tpl->tpl_vars['row']->value['idReporte'];?>
"><i class="fa fa-times"></i></button>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div><?php }} ?>