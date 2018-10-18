<?php
/* Smarty version 3.1.32, created on 2018-08-19 09:07:45
  from 'F:\wamp\www\ZZH\tpl\index\show.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b793361a5a0e8_75994491',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d3bd5fc2fd0679040331fa17b61043d99717e6a' => 
    array (
      0 => 'F:\\wamp\\www\\ZZH\\tpl\\index\\show.html',
      1 => 1534668987,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.html' => 1,
    'file:./sidebar.html' => 1,
    'file:./footer.html' => 1,
  ),
),false)) {
function content_5b793361a5a0e8_75994491 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>文章发布系统</title>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <link href="public/data/img/css/default.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<?php $_smarty_tpl->_subTemplateRender("file:./header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- start page -->
<div id="page">
    <!-- start content -->
    <div id="content">
        <div class="post">
            <h1 class="title"><!--文章标题放置到这里--><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
<span style="color:#ccc;font-size:14px;">　　作者：<!--作者放置到这里--><?php echo $_smarty_tpl->tpl_vars['data']->value['author'];?>
</span>
            </h1>
            <div class="entry">
                <!--文章内容放置到这里-->
                <?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>

            </div>
        </div>
    </div>
    <!-- end content -->
    <?php $_smarty_tpl->_subTemplateRender("file:./sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div style="clear: both;">&nbsp;</div>
</div>
<div id="showcomment">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comment']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
    <p>
        用户:<?php echo (($tmp = @$_smarty_tpl->tpl_vars['value']->value['username'])===null||$tmp==='' ? '匿名' : $tmp);?>
<br/>
        <?php echo $_smarty_tpl->tpl_vars['value']->value['comment'];?>
<br/>
        from <?php echo $_smarty_tpl->tpl_vars['value']->value['datetime'];?>

    </p>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<div style="margin-left: 40%">
   <?php echo $_smarty_tpl->tpl_vars['page']->value;?>

</div>

<div id="comment">
    <br/>
    <a>請發表你的評論...</a>
    <form method="post" action="index.php?c=index&a=comment">
        <textarea name="comment" cols=60% rows=10<?php echo '%>';?></textarea>
        <input type="hidden" name="id" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['id'])===null||$tmp==='' ? '' : $tmp);?>
">

        <div id='submit'><input type="submit" value="发表"></div>
    </form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:./footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>

</html>
<?php }
}
