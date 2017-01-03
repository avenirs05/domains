<?php

header("Content-Type:text/html;charset=UTF8");
//подключаем файл конфигурации
include 'config.php';
include 'functions.php';


$result = get_statti();
$cat = get_cat();


//echo render('index',array('cat'=>$cat,'result'=>$result));

// $menu = render('menu',array('cat'=>$cat));
// $content = render('content',array('result'=>$result));


$menu = render('menu',array('cat'=>get_cat()));
$content = render('content',array('result'=>get_statti()));




echo render('main', array('menu'=>$menu,'content'=>$content));


?>
