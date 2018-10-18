<?php
/* Smarty version 3.1.32, created on 2018-08-15 10:28:36
  from 'F:\wamp\www\ZZH\tpl\index\comment.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b740054723015_23036456',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d3e71075b908d503498789f1c9cec8c05fdab51' => 
    array (
      0 => 'F:\\wamp\\www\\ZZH\\tpl\\index\\comment.html',
      1 => 1534328913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b740054723015_23036456 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post" action="index.php?c=index&a=comment">
    <textarea name="comment"></textarea>
    <input type="hidden" name="id" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['id'])===null||$tmp==='' ? '' : $tmp);?>
">
    <input type="submit" value="发表">
</form><?php }
}
