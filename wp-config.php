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
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'SWd1U.Uk=/^{<S_K1yvC{%*uLQxw+^zxH-E[9-!FIup[0WxPfyDhK#Z:a1#$gRMm' );
define( 'SECURE_AUTH_KEY',  'z=1W*myc~Rnl//0yB+B1%H34C<oBp#4 r:IGFXa1NEy~<2*E0?A)6N[n!t#s!|zi' );
define( 'LOGGED_IN_KEY',    'A8pP5_px)0`G8~Z~<@!wMhP]7qiN[2]EaYUUjyUU3>?>B3<powb]r JrqO[K%Pjt' );
define( 'NONCE_KEY',        'S&Tww0*P,Z(!c//lU:~AQ7Lm{K4K)?VgyPc,]hJ(eVN}+L)o1-%Pk*mwM>@70b@)' );
define( 'AUTH_SALT',        '1Zks7#`B)b_k0V{B9H#H9Zl4(OW G]p:M]Urb|0%+~,;]1o+?@enS#h}ziLws6`Z' );
define( 'SECURE_AUTH_SALT', '?Q~TSaeg%?j0Pz;DDeVn_Tmwl8SrGvy)PT7rC8C4jJy639[zK|WnB%xy[Z0rH$s/' );
define( 'LOGGED_IN_SALT',   '=.&@tnn~9Q2CB/fI&qat->!Z@Wr4?m%F*>iEZmYW{gaEqltfe=`f[:%Am6$F#N35' );
define( 'NONCE_SALT',       'c FPdmGlE&Sls.Wq}f2z%:oW%q?4EMceu[Rh/kSaX5#Wz;}N9O)>8yUV(4rP=Vah' );

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
