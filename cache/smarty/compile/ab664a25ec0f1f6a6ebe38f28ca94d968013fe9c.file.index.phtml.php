<?php /* Smarty version Smarty-3.1.13, created on 2015-10-08 03:11:35
         compiled from "D:\workhome\test\yafcms\application\views\index\index.phtml" */ ?>
<?php /*%%SmartyHeaderCode:315765615c2c7a984c1-45350517%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab664a25ec0f1f6a6ebe38f28ca94d968013fe9c' => 
    array (
      0 => 'D:\\workhome\\test\\yafcms\\application\\views\\index\\index.phtml',
      1 => 1403602660,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '315765615c2c7a984c1-45350517',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5615c2c7aee3d6_42695748',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5615c2c7aee3d6_42695748')) {function content_5615c2c7aee3d6_42695748($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.phtml', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.phtml', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>