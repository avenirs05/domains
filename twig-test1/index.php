<?php

header("Content-Type:text/html;charset=UTF8");
//подключаем файл конфигурации
include 'config.php';
include 'functions.php';

if($_POST['cat_id']) {
	$cat_id = json_decode($_POST['cat_id']);
	//$param->id = 2
	$row = get_statti($cat_id);
	echo json_encode($row);
	exit();
}

$result = get_statti();
$cat = get_cat();

$templ = $twig->loadTemplate('main.html');
echo $templ->render(array('cat'=>$cat,'statti'=>$result,'site_name'=>$site_name));
?>
