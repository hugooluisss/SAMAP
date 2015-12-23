<?php /* Smarty version Smarty-3.1.11, created on 2015-12-23 11:02:11
         compiled from "templates/plantillas/modulos/localizacion/getUbicacionUsuario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:756152161567ac943bb1e26-19655007%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3cdbdff2987c3c08162fa373dacb61869abb1ed7' => 
    array (
      0 => 'templates/plantillas/modulos/localizacion/getUbicacionUsuario.tpl',
      1 => 1450889797,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '756152161567ac943bb1e26-19655007',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_567ac943c0cbe0_18135457',
  'variables' => 
  array (
    'origen' => 0,
    'destino' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567ac943c0cbe0_18135457')) {function content_567ac943c0cbe0_18135457($_smarty_tpl) {?><div id="dvMapa" class="col-xs-12 col-sm-12" style="height: 300px; width: 100%;"></div>
<input id="consultado" value="<?php echo $_smarty_tpl->tpl_vars['origen']->value;?>
" />
<input id="consultador" value="<?php echo $_smarty_tpl->tpl_vars['destino']->value;?>
" /><?php }} ?>