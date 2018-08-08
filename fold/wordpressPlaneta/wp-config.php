<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpressPlaneta');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '`e`j@^xhL;_^uG-#@?(PLA,Fr+q3Poz3}>Gpr&x0_b+mRitMVTTba5l5X@CceT{7');
define('SECURE_AUTH_KEY',  '=p)thCw<[SpFxQqq7Ng+xi0:V-(NPkb}#nIX4`+xwA;>8u!J0;@+zyUDLb-)g0B;');
define('LOGGED_IN_KEY',    '$4N<p~U:l25@#W?s%v3^skq#kU!;MeAr,xv4e3.|35kf;1WhC7t/k eh7e=BTv)j');
define('NONCE_KEY',        '=j&e2&dFbtQI>%10gPTRSA9%AXu[A8%gQ9>W7A1+m^iuSDpn+jPMhd)mrQx6o`sP');
define('AUTH_SALT',        'uf.7<0`9+:hhU:g4^CLvaz3lZgvo-M$SW>KDHoaFf/PhWH^-8ltPtkTNm>-jH>dk');
define('SECURE_AUTH_SALT', 'w|Y}-yED)Q*OiBf?GUpKvj39x9~vk|I47IqvKDlR9n|2f}0?bToIJIB|4er1|/t%');
define('LOGGED_IN_SALT',   'G,?$lrX4zA`nKy2@.+#F>ULY7!+!{Z~ID8XZu-+J<Kpet9S/.%,22@c~;HrLUn$|');
define('NONCE_SALT',       'zu&<U{$-HZ{>VXMvM@1(]&.A^ V|R9#a3e1EB3ezMeFL|B{}I&jb#,XkUjbw6Z9o');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
