<?php /* Smarty version Smarty-3.1.13, created on 2015-06-16 13:10:52
         compiled from "D:\workhome\czd\application\views\index\index.phtml" */ ?>
<?php /*%%SmartyHeaderCode:56625580043cd1fd77-18637907%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad5daeb0186481773f231aa44d607b1e0014cd6b' => 
    array (
      0 => 'D:\\workhome\\czd\\application\\views\\index\\index.phtml',
      1 => 1403602660,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56625580043cd1fd77-18637907',
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
  'unifunc' => 'content_5580043cd71e02_75552621',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5580043cd71e02_75552621')) {function content_5580043cd71e02_75552621($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.phtml', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.phtml', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>