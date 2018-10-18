<?php
/* Smarty version 3.1.32, created on 2018-08-17 00:57:34
  from 'F:\wamp\www\ZZH\tpl\index\lifeShow.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b761d7e0b8418_05331164',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bdc87f1401e6278d4d3ca14fc10455c6ba091c5e' => 
    array (
      0 => 'F:\\wamp\\www\\ZZH\\tpl\\index\\lifeShow.html',
      1 => 1534467452,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.html' => 1,
  ),
),false)) {
function content_5b761d7e0b8418_05331164 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="public/bootstrap/css/bootstrap.css" rel="stylesheet"/>
    <link href="public/data/img/css/default.css" rel="stylesheet" type="text/css" />

</head>
<body>
<?php $_smarty_tpl->_subTemplateRender("file:./header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
<div>
<tr>
    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['author'];?>
</td>
</tr>
    </div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</body>
</html><?php }
}
