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
 * * Настройки MySQL
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
define( 'DB_NAME', 'inf_po' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'informat.loc' );

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
define( 'AUTH_KEY',         'uRs5#hT%mn<Q96$LF}{ zQ}l?6FJo,5gg:mr8Rv~QX<w.sH?kz,^2EE_=3Gui}k[' );
define( 'SECURE_AUTH_KEY',  '/uGg9=%uW8Xd|eJ:na/f$c/mLZ:CthC{LAPtWm_zN0ME<xDf+OXae!hM/J;8=`DQ' );
define( 'LOGGED_IN_KEY',    ':rE`Jy^ISV=vfD.S;Hjz;mn(PY].$OK)wFUB[f[@Eh2REMS%Ry}&hmM[;i%]h+>f' );
define( 'NONCE_KEY',        'k<RdD;ciZ^Rxjq$jQ:^z</(4&+v2SJJFzeOXxD)I.PJz)f77hAP5`l;7&@3j0U5x' );
define( 'AUTH_SALT',        '4C:bK)`G4t&Ieof=&+2@OBX.;HOW90u}ot5Kp53SZ/{I86U0$bvSDZMSZ%72BygB' );
define( 'SECURE_AUTH_SALT', 'k$2/^|<5vbOb@H:E;*J_9,C-QFz]Ad]1R{As|$^dO[O4K@)b$XHt6!x}}slYhWv+' );
define( 'LOGGED_IN_SALT',   'Ww^v*3UXl:GkG5{Ro`cf^5wz%/^R``&mJB*HCE_NdnnhqU@?s(sWdH!VoTk&;H?~' );
define( 'NONCE_SALT',       '}+aK=$]7VocxsHgs4B2m*%pkcf=tZJM$}LqJe,LN4Hm)6(/x*xnmEBI~0r2MmEi_' );

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
