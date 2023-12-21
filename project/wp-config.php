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
define( 'DB_NAME', 'xeqp' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'xeqp' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '123123' );

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
define( 'AUTH_KEY',         'IuFv]ECW9.)@(}]pg&T5 daAKT9df7v!yy[^mBqk^KRUzC_c7e.% Lq&}{(rA^SA' );
define( 'SECURE_AUTH_KEY',  'J{*5vEF:Qs=8P>!;V]zYjfGXYtK/cJ?`jZxJy|$f20,Gy.=*gG^VX?e/I.kOsIyS' );
define( 'LOGGED_IN_KEY',    'RB_{d(V2+g4kyGL*5`T:Qtb:Mk6Wa/[VlG$4TZ[,x[d?EX.3qPul<S;fQV&4,ApS' );
define( 'NONCE_KEY',        '*,-m`SwHg55f6dB<sZl5 jO1#^|wL9aL- yZ97h]^Avf+A&88{{JL_&{Ne&X,V*f' );
define( 'AUTH_SALT',        'g0[fQDK?PE!aR%0_SO?rykZTGF+Xl^<!m?xFrJgYjQ6~)C(XcG;T^uQe; kQ>Cr(' );
define( 'SECURE_AUTH_SALT', 'P}#M.=gd,F)L3o;;{^(2KA8wEno`Q=OAr#*/7It3jN*=OyB^Hg37qhQA(J5&9=AF' );
define( 'LOGGED_IN_SALT',   'EucC3xq9`&yL;oFb|y2:Bqj=xgd:PUv{}T/QHOr!s]f!_Xo>rh4W8;ke#O-K&QSG' );
define( 'NONCE_SALT',       '4(j<[sdZMw^u 4$V`NUK}u&8h63(]$eu,WPFepU/%~EzAImK?_y)_1TF5k;s%~(]' );

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
