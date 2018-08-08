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
define('WP_MEMORY_LIMIT', '64M');

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'wordpresskpk');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'root');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'J<=6[NA|Sr#A{elx`E}9TG4L`?/|okEBW5vl$(3>A>ZNR~w{CjQnWOt.}nv*QI6$');
define('SECURE_AUTH_KEY',  'rxHO[usx$V2HBD0#wVTt*bxIkT36t>}$/B791if<6TStOdO$E J@QMEiP:f&`HAP');
define('LOGGED_IN_KEY',    'L=#/O/I<SLijWr1VFiUz@4UI%K_B+v!ya_Ql}t*nxB4};J~;]o/?rQaPf]{vA]-y');
define('NONCE_KEY',        '&66w]t;c-h-Lsgh3Cz`Dj6+0gz]DQ{v[sH$KG6uDo~rJL~}w$0U9{!T.},kaoAjY');
define('AUTH_SALT',        'I0-kk0s1yZ|,M:SM/@!GXn*YL7UTF:5@2({t0K27%DHx6IovweeR3hG1Z{z)Pvz^');
define('SECURE_AUTH_SALT', '>(%A1x;!1o^W5##?L_41uiFaKaz(z8<r/6D}%Ao?twZh1-bms4R,jE3IEtc%w SV');
define('LOGGED_IN_SALT',   'ps7m)<0GyEgOs:bHD4:L~dd/w5XjPVBGYz=jHj:C-wl0f!`u#*DS.FKyjpc[c-z<');
define('NONCE_SALT',       'M@A7p.Ig5c|D09MayPfb; AcDsQzoB0vX80f]9fq[F,=C%_ 5<3U1aadAxPrr^.+');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_kpk';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
