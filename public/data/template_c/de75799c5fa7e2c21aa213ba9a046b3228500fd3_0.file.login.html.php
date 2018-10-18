<?php
/* Smarty version 3.1.32, created on 2018-08-13 07:32:59
  from 'F:\wamp\www\ZZH\tpl\admin\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b71342bb0c9f5_28786477',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de75799c5fa7e2c21aa213ba9a046b3228500fd3' => 
    array (
      0 => 'F:\\wamp\\www\\ZZH\\tpl\\admin\\login.html',
      1 => 1534145578,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b71342bb0c9f5_28786477 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>后台登录</title>
	
	<link rel="stylesheet" href="public/data/img/css/layout.css" type="text/css" media="screen" />
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="public/data/img/css/ie.css" type="text/css" media="screen" />
	<?php echo '<script'; ?>
 src="public/data/img/js/html5.js"><?php echo '</script'; ?>
>
	<![endif]-->
	<?php echo '<script'; ?>
 src="public/data/img/js/jquery-1.5.2.min.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="public/data/img/js/hideshow.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="public/data/img/js/jquery.tablesorter.min.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="public/data/img/js/jquery.equalHeight.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function() 
    	{ 
      	  $(".tablesorter").tablesorter(); 
   	 } 
	);
	$(document).ready(function() {

	//When page loads...
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});

});
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });
<?php echo '</script'; ?>
>

</head>


<body>

	<header id="header">
		<hgroup>
			<h1 class="site_title"><a href="index.html">后台管理面板</a></h1>
			<h2 class="section_title"></h2><div class="btn_view_site"><a href="index.php">查看网站</a></div>
		</hgroup>
	</header> <!-- end of header bar -->
	
	<section id="secondary_bar">
		<div class="user">
			<p>请在右侧登录</p>
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="admin.php?c=admin">后台管理中心</a> <div class="breadcrumb_divider"></div> <a class="current">登录</a></article>
		</div>
	</section><!-- end of secondary bar -->
	
	<aside id="sidebar" class="column">
		<h3>登录后台</h3>
		<ul class="toggle">
			<li class="icn_security"><a href="#">登录后台</a></li>
		</ul>
	</aside><!-- end of sidebar -->
	
	<section id="main" class="column">
		
		<h4 class="alert_info" style="width:46%">请使用您的用户名和密码在下面登录.</h4>
		<form id="form1" name="form1" method="post" action="admin.php?c=admin&a=login">
		<article class="module width_half">
			<header><h3>管理员登录</h3></header>
				<div class="module_content">
						<fieldset>
							<label>用户名</label>
							<input type="text" name="username" style="width:92%;">
						</fieldset>
						<fieldset>
							<label>密码</label>
							<input type="password" name="password" style="width:92%;">
						</fieldset>
						<div class="clear"></div>
				</div>
			<footer>
				<div class="submit_link">
					<input type="submit" name="submit" value="开始登录" class="alt_btn">
				</div>
			</footer>
		</article>
		</form>
		
		<div class="spacer"></div>
	</section>


</body>

</html><?php }
}