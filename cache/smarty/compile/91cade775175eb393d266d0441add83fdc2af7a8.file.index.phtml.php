<?php /* Smarty version Smarty-3.1.13, created on 2015-06-17 09:42:19
         compiled from "D:\workhome\test\czd\application\views\index\index.phtml" */ ?>
<?php /*%%SmartyHeaderCode:12066558124db087a44-02750025%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91cade775175eb393d266d0441add83fdc2af7a8' => 
    array (
      0 => 'D:\\workhome\\test\\czd\\application\\views\\index\\index.phtml',
      1 => 1403602660,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12066558124db087a44-02750025',
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
  'unifunc' => 'content_558124db0e17d5_79842357',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558124db0e17d5_79842357')) {function content_558124db0e17d5_79842357($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.phtml', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.phtml', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>