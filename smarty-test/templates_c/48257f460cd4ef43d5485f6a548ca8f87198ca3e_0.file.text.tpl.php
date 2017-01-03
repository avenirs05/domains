<?php
/* Smarty version 3.1.30, created on 2016-12-25 04:27:25
  from "C:\OpenServer\domains\smarty-test\templates\text.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_585f207d621262_67202755',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48257f460cd4ef43d5485f6a548ca8f87198ca3e' => 
    array (
      0 => 'C:\\OpenServer\\domains\\smarty-test\\templates\\text.tpl',
      1 => 1482629243,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_585f207d621262_67202755 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, 'myconf.conf', null, 0);
?>


<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
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
			<h2><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'title');?>
</h2>
				<h3 style='color:<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'textcolor');?>
'><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</h3>
				<p class='view_cat_author'>Автор: <a href='<?php echo $_smarty_tpl->tpl_vars['row']->value['author'];?>
'><?php echo $_smarty_tpl->tpl_vars['row']->value['author'];?>
</a><br>
					Дата добавления: <?php echo $_smarty_tpl->tpl_vars['row']->value['date'];?>

					<p><?php echo $_smarty_tpl->tpl_vars['row']->value['text'];?>
</p>
						<br>
					<div class='view_text_views_rait'></div>
					<p class='view_text_views'>Просмотров: <?php echo $_smarty_tpl->tpl_vars['row']->value['view'];?>
</p>
				</p>
				<hr>
			</div>
		<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	</div>
</body>
</html>		<?php }
}
