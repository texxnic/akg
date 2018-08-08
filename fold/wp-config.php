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
define('DB_NAME', 'u0365749_wp52');

/** MySQL database username */
define('DB_USER', 'u0365749_wp52');

/** MySQL database password */
define('DB_PASSWORD', '0[GGS7p.l4');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', 'rpk22ipsqxmg1e6ixtar353paog3feikygix6di26fs4gmtngqvx4saaad9d3uqa');
define('SECURE_AUTH_KEY', 'ufi2flszarv34vt2b86zktofzlq3v3bxmz8yyyiex1jwx8yjtey1neibrrclkorn');
define('LOGGED_IN_KEY', 'jgj0rnehd3wdyszzf7fkg1s2bb9lyficviztdgqkvo9qc1s991fpvaoljrkzwiqh');
define('NONCE_KEY', 'dnzta3sxfvzn45vxpo1ojuux629zzgj60h1eaprms4mmd7h2pktnizy5ukkonbwj');
define('AUTH_SALT', 'x8ocwoxjnfpa0a5m8bhytrnehp3gtvxph6i9r3hqre3j6gqawzsxy0taqcldd0ho');
define('SECURE_AUTH_SALT', 'outn6gainnabfcpui7n1eavqyas3tkpr5uucs1fbciwrrssiujrqvpaza76ktper');
define('LOGGED_IN_SALT', 'hm89mwdpyn7autgdxmrmplgqvq8q6vsqp3bwzp9t5viqwaqegyxf3fcpjjgbd0nk');
define('NONCE_SALT', 'tx9glylexy55jcz4jjisvbfcqwjvarjeuoclqidr4uzuona5ziroiodqqxppjh6d');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpuu_';

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
if (!defined('ABSPATH')) {
	define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
