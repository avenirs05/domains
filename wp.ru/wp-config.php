<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'wp-test');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'I6,| -^-!.2XnVcS~~1p.M+Gl~3+OXlYNoSK[14^0HL2,?Yr5]Q3cx|:YSU)RU3>');
define('SECURE_AUTH_KEY',  'ReUOLxE1%bipRD2X;X&~%d6% Re6[/pu|<eTinWO+YJEteZDt7Eu9k8}&}9Wr^zG');
define('LOGGED_IN_KEY',    ':DE5Q[(Z7oLks~7}. Hi`rzBK~fb`H=zrH`f7-&d.8cmAqv+LXo1V4LEKKW_(-Uk');
define('NONCE_KEY',        'q+kPofUN@F:CP/Qd[Rvg@|oSa~aLBs=-vu>HYs^#{oY*Ys%|(c8Qzc0;_o80zXw_');
define('AUTH_SALT',        '-+Cx]4_q0[54XuN Cx}0n}~|[9FLAwW)3@%^>pVod!*o7( Jp3JwvgSHa7]TO.10');
define('SECURE_AUTH_SALT', 'R>M-$q 9:+w=DnbIJ%-S5ZhM}(m5j|9ve2LAfEw`K4*tmH4$lv}W,>A|RuW]AreQ');
define('LOGGED_IN_SALT',   '`R`HL;~k+~]/MX+621LdI~|8AjfZk -N(NYEkM^i>#c96si^GKM^FKHI7]C+O(:V');
define('NONCE_SALT',       'iGx0^~OTgY3C#z3|H^AAd7I+WM^E~U+VH*/OBT^?n>09%;CTc?]C{e-n0UT+>8s0');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Язык локализации WordPress, по умолчанию английский.
 *
 * Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
 * для выбранного языка должен быть установлен в wp-content/languages. Например,
 * чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
 * и присвойте WPLANG значение 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
