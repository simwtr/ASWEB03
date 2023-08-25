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
define( 'DB_NAME', 'sample' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'sampleuser' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'samplepassword' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',         'k_R5q$pbTCr:MN7Gf6Lo]rs$}AHQT]x{?LFe:Q-5Y(b3F6/_lJHe{{-G$JY%9,l>' );
define( 'SECURE_AUTH_KEY',  'Z%x=xB x&)wP7r6lqs{F3polb)FR)F5(-&lQ%rM{y];^fIm;x@v0uOu8j~u6y{Hx' );
define( 'LOGGED_IN_KEY',    ']LX 8F)cW2Hr@]!3&a@68TMSMA0v$<QV=~D#zwk/vIs_Scy$4{>>XM0~PoD~*ai=' );
define( 'NONCE_KEY',        'gg5ku2t%A-l>W8+3k2iMEmtcnmP[@iflgu]Sk^h8cwgze`w[?FdiB5>kUMrC~(c[' );
define( 'AUTH_SALT',        'jqpckhd|?FECPY57~o&h2xJzeIly|~{7|sdXJB08)GoUOpIOH=3L}QQOa[<FR8?S' );
define( 'SECURE_AUTH_SALT', 'xP|8@D,BxZ~B<(DwsY=4.w0o~WlE{F68Bq^52]p)QRmf4w2ynbtGB9&u~8O}q[iJ' );
define( 'LOGGED_IN_SALT',   'jKe6&ld(.[:Tq.zj&Jw/b`^d8@:U]jn[T~H>Hz<y5T|ML,+|/Qpz4L,7!f_3y<a=' );
define( 'NONCE_SALT',       ':Jb)=pJ?<#90XV.[M%ae#~}b%=K)`LKoh2z;y}|KL`?}KS=ms8V#d>_VVZh<A`g^' );

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
