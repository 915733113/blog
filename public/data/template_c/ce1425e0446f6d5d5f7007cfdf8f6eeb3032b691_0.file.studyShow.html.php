<?php
/* Smarty version 3.1.32, created on 2018-08-17 12:30:04
  from 'F:\wamp\www\ZZH\tpl\index\studyShow.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b76bfcc7a4ee4_41431784',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce1425e0446f6d5d5f7007cfdf8f6eeb3032b691' => 
    array (
      0 => 'F:\\wamp\\www\\ZZH\\tpl\\index\\studyShow.html',
      1 => 1534509003,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.html' => 1,
  ),
),false)) {
function content_5b76bfcc7a4ee4_41431784 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <link href="public/data/img/css/default.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php $_smarty_tpl->_subTemplateRender("file:./header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <!-- Example row of columns -->

    <div class="row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
            <h2><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</h2>
            <p><?php echo $_smarty_tpl->tpl_vars['value']->value['content'];?>
</p>
            <p><a class="btn btn-default" href="#" role="button">查看详情 &raquo;</a></p>

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


</body>
</html><?php }
}
