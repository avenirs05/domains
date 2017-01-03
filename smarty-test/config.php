<?php
///////////////config//////////////////

//Определяем настройки подключения к базе данных
//Хост
define('DB_HOST','localhost');
//Пользователь
define('DB_USER','root');
//Пароль
define('DB_PASSWORD','');
//Название базы данных
define('DB_NAME','my_bd');

//Задаем переменную для отображения в шапке
$site_name = 'Изучаем шаблонизатор';

//Отправляем заголовок с кодировкой
header("Content-Type:text/html;charset='cp1251'");

///////////////config//////////////////

//Подключаемся к базе данных
$db = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
if(!$db) {
	exit('No connection with database');
}

//Выбираем базу данных
if(!mysql_select_db(DB_NAME,$db)) {
	exit('Wrong database');
}

mysql_query("SET NAMES cp1251");
?>