<?php

# Меню в виде массивов. Добавляйте сколько угодно менюшек. Не забудьте вставить переменную в design.inc.php
# Добавлять следует в таком виде: адрес страницы, анкор ссылки (текстовая часть ссылки) и заголовок (всплывающая подсказка)
# И следите за запятой в конце элемента массива. Каждый элемент должен заканчиваться запятой, в отличие от последнего

$footmenu = array (
			array ('reason', 'для чего', 'Для чего нужен движок microText'),
			array ('features', 'что умеет', 'Возможности движка microText'),
			array ('download', 'скачать', 'Скачать последнюю версию'),
			array ('about', 'о движке', 'О движке microText'),
			array ('contact', 'контакты', 'Отправить сообщение')
);

$mainmenu = array (
			array ('reason', 'Для чего', 'Для чего нужен движок microText'),
			array ('features', 'Что умеет', 'Возможности движка microText'),
			array ('download', 'Скачать', 'Скачать последнюю версию'),
			array ('about', 'О движке', 'О движке microText'),
			array ('contact', 'Контакты', 'Отправить сообщение')
);

$sidemenu = array (
			array ('develop', 'РАЗРАБОТКА', 'РАЗРАБОТКА САЙТА', array (
			array ('install', 'Установка', 'Установка движка microText на хостинг'),
			array ('config', 'Настройка', 'Настройка движка microText'),
			array ('content', 'Наполнение', 'Наполнение сайта контентом'),
			array ('secret', 'Ограничение доступа', 'Меню сайта на microText'))
),
			array ('structure', 'СТРУКТУРА', 'СТРУКТУРА САЙТА', array (
			array ('files', 'Файлы', 'Файлы движка microText'),
			array ('design', 'Шаблон', 'Шаблон дизайна сайта на microText'),
			array ('menu', 'Меню', 'Меню сайта на microText'),
			array ('blocks', 'Блоки', 'Блоки контента microText'))
)
);

