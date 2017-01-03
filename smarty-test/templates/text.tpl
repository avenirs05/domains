{config_load file='myconf.conf'}

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
		{include file='header.tpl'}		
			<div class='content'>
			<h2>{#title#}</h2>
				<h3 style='color:{#textcolor#}'>{$row.title}</h3>
				<p class='view_cat_author'>Автор: <a href='{$row.author}'>{$row.author}</a><br>
					Дата добавления: {$row.date}
					<p>{$row.text}</p>
						<br>
					<div class='view_text_views_rait'></div>
					<p class='view_text_views'>Просмотров: {$row.view}</p>
				</p>
				<hr>
			</div>
		{include file='footer.tpl'}
	</div>
</body>
</html>		