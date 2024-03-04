<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', '1379-22_74536' );

/** Имя пользователя базы данных */
define( 'DB_USER', '1379-22_74536' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '04d985b40f8b14ec2fb1' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'o=)x{elJ(eLrCXp`2U+VZ$MlQociz;w#(fZA6{eaFL_I@k2b6TlmA,Y4J<(aDmQm' );
define( 'SECURE_AUTH_KEY',  '&HqjLgVxEhNhDLfYbf1Lj,|!*Wd1}-:9$_^b0*[`MpB&{n7?:YpU.N8*5q.1Z$7F' );
define( 'LOGGED_IN_KEY',    'bsWa*{Quab.7~*=Mb;F.7#K9EC:XNDJ51*/0%VDG?q,3S3#&n%zP{j1./L~dK<#_' );
define( 'NONCE_KEY',        '`/N(!6>61=u#ByrENm3=2D r0T)8)%3[d+R;qN@=/WonJ#z;&+q]f>NK=x7B}!M ' );
define( 'AUTH_SALT',        'u#@XdBZC-OUG<}_7uZeU|fH;AE.,nsL;[^p~@%mrq1lW%(inB65E@mrkb).hpWg ' );
define( 'SECURE_AUTH_SALT', 'U^aX4aW[}ZCKA{#!5r{ib4H%2@|yNd_Sb;#p:s1NwYJYF1F2e-gz-yEyw>i}ap9+' );
define( 'LOGGED_IN_SALT',   '1bvtgzH[3FLv_AuxAmH(1le?w5oY0[F+c6cjd;8-fW~?j=T4lAd ,:5!OqByS4e~' );
define( 'NONCE_SALT',       'dO}iQ|:-mZtEPw7xoBfkdvofiA>u`e~&L=&kFkqzk}PctUn:O@<W@$2 fH:NB9ZW' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'XgU5d_';


/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';