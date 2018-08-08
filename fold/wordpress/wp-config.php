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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'vT*&v:XG#1>9j@}OCC-*o{pbT(m(pj<:)wm~iul(+W-WXqmx~cseuZ=BqfATT>f$');
define('SECURE_AUTH_KEY',  'wvdbs]=b9Bj#A`qo,j7e0l0b!+xm%9_@k]D<&?T|AU{DxZAWI@S1}[Y9NI8&jNLP');
define('LOGGED_IN_KEY',    'VUCMR_q|^N6Py]z;hN+WmuVc[H~)([TllES&EtKh$~i|U$lY3*YL|?b.~E6&BWql');
define('NONCE_KEY',        'Wja dc{l}tuQ@iDU*5g24vU%am9A~*?dl!~rPf*h_MZnaKM+*3*OIl:Eu.PGzH`c');
define('AUTH_SALT',        'dy:>!/stBN_r;7C{M7SQB`c+K4=#-C5a0.R;RxZ)qW~/6!%kc{<&l,}DA{)@%F32');
define('SECURE_AUTH_SALT', 'u{p?,2Ij.d[+Y3r)plv5>Y!+haq3aWI(^^jC;s/ot8@nT1}G;l$SIfL+ga>%+7gh');
define('LOGGED_IN_SALT',   '.FV&8J[2(vm>L( ?mxY71V1N T~8>6qDMb+a!l^BP Fc+oYc6VRG<^DA<PBYH$*N');
define('NONCE_SALT',       '5Q&ZrMfHA[l@1~9!@m3&~gS.27apZQ=rAO?3pIKBGV|L A^,u:dK=ctfw_B&OrzP');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
