<?php
/* Smarty version 3.1.32, created on 2018-08-15 07:55:56
  from 'F:\wamp\www\ZZH\tpl\index\sidebar.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b73dc8ca63631_96673837',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '384dda6a019349510701b9864f573bdae48a4312' => 
    array (
      0 => 'F:\\wamp\\www\\ZZH\\tpl\\index\\sidebar.html',
      1 => 1534319755,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b73dc8ca63631_96673837 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- start sidebar -->
	<div id="sidebar">
		<ul>
			<li id="search">
				<h2><b class="text1">Search</b></h2>
				<form method="post" action="index.php?c=index&a=search">
					<fieldset>
					<input type="text" id="s" name="key" value=""  style="border:1px solid grey"/>
					<input type="submit" id="x" value="Search" />
					</fieldset>
				</form>
			</li>
		</ul>
	</div>
	<!-- end sidebar -->
<?php }
}
