<?php /* Smarty version Smarty-3.1.13, created on 2015-10-08 03:11:35
         compiled from "D:\workhome\test\yafcms\application\views\header.phtml" */ ?>
<?php /*%%SmartyHeaderCode:12015615c2c7b19368-25171217%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca67d7381ba0844283d3c480529b5092c833efda' => 
    array (
      0 => 'D:\\workhome\\test\\yafcms\\application\\views\\header.phtml',
      1 => 1434453137,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12015615c2c7b19368-25171217',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'meta_title' => 0,
    'meta_description' => 0,
    'meta_keywords' => 0,
    'css_files' => 0,
    'css_uri' => 0,
    'js_files' => 0,
    'js_uri' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5615c2c7bec292_07947811',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5615c2c7bec292_07947811')) {function content_5615c2c7bec292_07947811($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'D:\\workhome\\test\\yafcms\\library\\Smarty\\plugins\\modifier.escape.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<?php if (isset($_smarty_tpl->tpl_vars['meta_title']->value)&&$_smarty_tpl->tpl_vars['meta_title']->value){?>
	<title><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_title']->value, 'htmlall', 'UTF-8');?>
</title>
	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['meta_description']->value)&&$_smarty_tpl->tpl_vars['meta_description']->value){?>
	<meta name="description" content="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_description']->value, 'html', 'UTF-8');?>
"/>
	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['meta_keywords']->value)&&$_smarty_tpl->tpl_vars['meta_keywords']->value){?>
	<meta name="keywords" content="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_keywords']->value, 'html', 'UTF-8');?>
"/>
	<?php }?>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<?php if (isset($_smarty_tpl->tpl_vars['css_files']->value)){?>
	<?php  $_smarty_tpl->tpl_vars['css_uri'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['css_uri']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['css_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['css_uri']->key => $_smarty_tpl->tpl_vars['css_uri']->value){
$_smarty_tpl->tpl_vars['css_uri']->_loop = true;
?>
	<link href="<?php echo $_smarty_tpl->tpl_vars['css_uri']->value;?>
" rel="stylesheet" type="text/css" media="all"/>
	<?php } ?>
	<?php }?>
	<script src="http://libs.useso.com/js/jquery/1.9.1/jquery.min.js"></script>
	<?php if (isset($_smarty_tpl->tpl_vars['js_files']->value)){?>
	<?php  $_smarty_tpl->tpl_vars['js_uri'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js_uri']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['js_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js_uri']->key => $_smarty_tpl->tpl_vars['js_uri']->value){
$_smarty_tpl->tpl_vars['js_uri']->_loop = true;
?>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js_uri']->value;?>
"></script>
	<?php } ?>
	<?php }?>
</head>
<body>
<?php }} ?>