<?php
/* Smarty version 3.1.32, created on 2018-08-17 05:05:37
  from 'F:\wamp\www\ZZH\tpl\admin\leftmenu.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7657a12e5da6_44412949',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd55d4a9ba7c376245d8bb431f7df8e43b0ca0d69' => 
    array (
      0 => 'F:\\wamp\\www\\ZZH\\tpl\\admin\\leftmenu.html',
      1 => 1534482336,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7657a12e5da6_44412949 (Smarty_Internal_Template $_smarty_tpl) {
?><aside id="sidebar" class="column">
	<h3>新闻管理</h3>
	<ul class="toggle">
		<li class="icn_new_article"><a href="admin.php?c=admin&a=newsadd">添加新闻</a></li>
		<li class="icn_categories"><a href="admin.php?c=admin&a=newslist&page=1">管理新闻</a></li>
	</ul>
	<h3>管理员管理</h3>
	<ul class="toggle">
		<li class="icn_jump_back"><a href="admin.php?c=admin&a=logout">退出登录</a></li>
	</ul>
	
	<footer>
		
	</footer>
</aside><!-- end of sidebar --><?php }
}
