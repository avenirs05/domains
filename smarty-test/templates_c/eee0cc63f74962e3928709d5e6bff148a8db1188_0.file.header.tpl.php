<?php
/* Smarty version 3.1.30, created on 2016-12-25 03:47:56
  from "C:\OpenServer\domains\smarty-test\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_585f173ce7c4b6_37648339',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eee0cc63f74962e3928709d5e6bff148a8db1188' => 
    array (
      0 => 'C:\\OpenServer\\domains\\smarty-test\\templates\\header.tpl',
      1 => 1482626623,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_585f173ce7c4b6_37648339 (Smarty_Internal_Template $_smarty_tpl) {
?>
	<div class='header'>
		<?php if (isset($_smarty_tpl->tpl_vars['site_name']->value)) {?>
				<h2><?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
</h2>
		<?php } else { ?>
				проверка оператора else
		<?php }?>
		<hr>
	</div><?php }
}
