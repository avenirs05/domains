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
		{include file='header.tpl'}		
		<div class='content'>		
			{foreach $row as $item}
				<table class='table' width='780' border='0' cellspacing='0' cellpadding='0'>
					<tr>
						<td class='td_top'>
							<h5><a href='text.php?id={$item.id}'>{$item.title}</a></h5>
							<p>Автор: <a href='{$item.author}'>{$item.author}</a></p><br>
							 Дата добавления: {$item.date}
						</td>
					</tr>
					<tr>
						<td>
							<img align='left' src='{$item.img_src}'><p>{$item.discription}</p>
						</td>
					</tr>
					<tr>
						<td>
							<p>Просмотров: {$item.view}</p>
						</td>
					</tr>
				</table>
			{/foreach}
			<hr>
		</div>
		{include file='footer.tpl'}
	</div>


</body>
</html>