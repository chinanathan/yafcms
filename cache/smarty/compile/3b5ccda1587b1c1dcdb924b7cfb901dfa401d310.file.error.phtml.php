<?php /* Smarty version Smarty-3.1.13, created on 2015-08-12 08:15:09
         compiled from "D:\workhome\test\czd\application\views\error\error.phtml" */ ?>
<?php /*%%SmartyHeaderCode:2805055cae46d4739f5-68558286%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b5ccda1587b1c1dcdb924b7cfb901dfa401d310' => 
    array (
      0 => 'D:\\workhome\\test\\czd\\application\\views\\error\\error.phtml',
      1 => 1403602660,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2805055cae46d4739f5-68558286',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55cae46d4d1603_43094430',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55cae46d4d1603_43094430')) {function content_55cae46d4d1603_43094430($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.phtml', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.phtml', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>