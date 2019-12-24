<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'dimtepla' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'admin1111' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'k)pr?HNk@az9AI_^ O[rfc;$hP7-MBvaBw(kaiYmige3`vHjOUT)I6y@8r Jrz85' );
define( 'SECURE_AUTH_KEY',  ' }+e YSK#7uiW4W~gW/| ef}^zrkLNAun ]vR#cX~J<f<&ka_BP5YgV=H8zBEE9o' );
define( 'LOGGED_IN_KEY',    '_Og6hC:8W?p[~Hq><|=G!oN>:m[VJL3RqEn5q@Z6TD:Hf*~uGgsTiCsy2$R-F0#c' );
define( 'NONCE_KEY',        '}]Y= [G{@.jSP7s8zKhMFs*uK][@U LAKSZyrK948}M-OnM)r,rqGo 8GeG!DDNu' );
define( 'AUTH_SALT',        'v|],pAnK }w3qY<h4=AK`BD/x;AmB}|zs=c`Ey6xqc[t)wfz-D*VnrLV1aO>Q8gR' );
define( 'SECURE_AUTH_SALT', 'O2F|b>,^#vWD>B{]u],O$V@#Kd}DC!eK<)13qWX=#J#xT`~?)7?<oU ETf0Luq[r' );
define( 'LOGGED_IN_SALT',   'R ]u|gJHZ@weH>FJhrfHgjQl~kUYR_<vQj>(dq$Yj{iokQ1lD+gOu#%ge 5Xc}r-' );
define( 'NONCE_SALT',       'Gi:. +7vfpc[U/zn/SkqJs4~-cz1S+lF6:-f7*cVWT9=(es6xXgYJnD&aVl=O:`~' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
