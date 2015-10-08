<?php /* Smarty version Smarty-3.1.13, created on 2015-10-08 03:11:36
         compiled from "D:\workhome\test\yafcms\application\views\error\error.phtml" */ ?>
<?php /*%%SmartyHeaderCode:150855615c2c81f5750-63933515%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54f06a8d4edc02bc6db976680b5b41ebac56c32f' => 
    array (
      0 => 'D:\\workhome\\test\\yafcms\\application\\views\\error\\error.phtml',
      1 => 1403602660,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150855615c2c81f5750-63933515',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5615c2c8208fd3_42198540',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5615c2c8208fd3_42198540')) {function content_5615c2c8208fd3_42198540($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.phtml', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.phtml', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>