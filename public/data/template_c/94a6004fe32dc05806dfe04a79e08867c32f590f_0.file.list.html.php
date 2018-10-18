<?php
/* Smarty version 3.1.32, created on 2018-08-16 12:43:02
  from 'F:\wamp\www\ZZH\tpl\index\list.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b75715670e343_33391445',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94a6004fe32dc05806dfe04a79e08867c32f590f' => 
    array (
      0 => 'F:\\wamp\\www\\ZZH\\tpl\\index\\list.html',
      1 => 1534423330,
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
function content_5b75715670e343_33391445 (Smarty_Internal_Template $_smarty_tpl) {
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
?>
<ul class="nav nav-pills">
	<li role="presentation"><a href="index.php?c=index&a=studyShow">学习笔记</a> </li>
	<li role="presentation"><a href="index.php?c=index&a=lifeShow">生活随笔</a> </li>
</ul>
<!-- start page -->
<div id="page">
	<!-- start content -->
	<div id="content">
	
	<?php if (!empty($_smarty_tpl->tpl_vars['data']->value)) {?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'news');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
?>
		<div class="post">
			<h1 class="title"><a href="index.php?c=index&a=newsshow&id=<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</a><span style="color:#ccc;font-size:14px;">　　作者：<?php echo $_smarty_tpl->tpl_vars['news']->value['author'];?>
</span></h1>
			<div class="entry">
				<?php echo $_smarty_tpl->tpl_vars['news']->value['content'];?>

			</div>
			<br/>
			<?php echo $_smarty_tpl->tpl_vars['news']->value['datetime'];?>

			<div class="meta">
				<p class="links"><a href="index.php?c=index&a=newsshow&id=<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
" class="more">查看详细</a>&nbsp;&nbsp;&raquo;&nbsp;&nbsp;</p>
			</div>
		</div>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php } else { ?>
		<?php echo "还未有新闻，请联系管理员添加...";?>

	<?php }?>
	</div>
	<!-- end content -->
	<?php $_smarty_tpl->_subTemplateRender("file:./sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
<?php $_smarty_tpl->_subTemplateRender("file:./footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html><?php }
}
