<?php /* Smarty version Smarty-3.1.11, created on 2015-12-03 11:47:58
         compiled from "templates/plantillas/layout/update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:663548895660804e841593-44243103%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72901d00223ef61af04899ba43850d9da70bd5c9' => 
    array (
      0 => 'templates/plantillas/layout/update.tpl',
      1 => 1445360353,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '663548895660804e841593-44243103',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5660804e866ea2_43603760',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5660804e866ea2_43603760')) {function content_5660804e866ea2_43603760($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['PAGE']->value['vista']!=''){?>
	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['PAGE']->value['vista'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?><?php }} ?>