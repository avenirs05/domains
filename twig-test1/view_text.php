<?php

header("Content-Type:text/html;charset=UTF8");
//подключаем файл конфигурации
include 'config.php';
include 'functions.php';


if($_GET['id']) {
	$id = (int)$_GET['id'];
	$result = get_text($id);
}
if($_POST['search']) {
	$str = $_POST['search'];
}

$cat = get_cat();

$templ = $twig->loadTemplate('page.html');

echo $templ->render(array('text'=>$result,'site_name'=>$site_name));
?>
