<?php
/* Smarty version 3.1.30, created on 2016-12-25 04:21:55
  from "C:\OpenServer\domains\smarty-test\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_585f1f33352cf1_91284237',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b13223b342e1a1512b38a7a6719898eb55028c4' => 
    array (
      0 => 'C:\\OpenServer\\domains\\smarty-test\\templates\\index.tpl',
      1 => 1482628621,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_585f1f33352cf1_91284237 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta name='yandex-verification' content='50f0e6eadc0b2332' />
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="robots" content="all" /> 
<link  rel="stylesheet" href="style.css"/>
</head>

<body>
	<div class="wrap">
		<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		
		<div class='content'>		
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
				<table class='table' width='780' border='0' cellspacing='0' cellpadding='0'>
					<tr>
						<td class='td_top'>
							<h5><a href='text.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
'><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></h5>
							<p>Автор: <a href='<?php echo $_smarty_tpl->tpl_vars['item']->value['author'];?>
'><?php echo $_smarty_tpl->tpl_vars['item']->value['author'];?>
</a></p><br>
							 Дата добавления: <?php echo $_smarty_tpl->tpl_vars['item']->value['date'];?>

						</td>
					</tr>
					<tr>
						<td>
							<img align='left' src='<?php echo $_smarty_tpl->tpl_vars['item']->value['img_src'];?>
'><p><?php echo $_smarty_tpl->tpl_vars['item']->value['discription'];?>
</p>
						</td>
					</tr>
					<tr>
						<td>
							<p>Просмотров: <?php echo $_smarty_tpl->tpl_vars['item']->value['view'];?>
</p>
						</td>
					</tr>
				</table>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			<hr>
		</div>
		<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	</div>


</body>
</html><?php }
}
