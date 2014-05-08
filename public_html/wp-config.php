<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'myralora');

/** MySQL database username */
define('DB_USER', 'adminjCt54kv');

/** MySQL database password */
define('DB_PASSWORD', '2gm6Tzg1Ysgl');

/** MySQL hostname */
define('DB_HOST', 'https://myralora-umairahmymy.rhcloud.com/');

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
define('AUTH_KEY',         ':hzL=Rk`DgjTAp|$:AGV?@K]dvf;x1:n`xUDD2zgR98H`xDoR6sgE`ZaXxpv#6lJ');
define('SECURE_AUTH_KEY',  '-Oq=K>9~1bx6?Gv&DyMKnK(Y Hjl]8#[,B+4+7o1|oI-[p-hQ$:0{HZ|Kx.HPfF6');
define('LOGGED_IN_KEY',    'loxZKmJATbBO)F,xW[J{A+u~6wR+.Jw?x-6Uf-1D&h/nPcF5`m|y~z6v7+1|a]A.');
define('NONCE_KEY',        '9sTTLhw+|Z>.{x7hfperTw4;>]`{jJRU*K1h|;e-dM-6pdSw&O[1us3DXKwWy]Dz');
define('AUTH_SALT',        'Oc$Cf&Ghw_?V4Wn]C2{W3L@7$)2_uxEYj&:[Y-RjV**MKrCDHk$mdtQ;Xxk+totE');
define('SECURE_AUTH_SALT', '+!Z2Tb4z/>g,^Wi/xf1/CF&bD;EzgD[8yCinsli8>-]I3b#+D [-%HtxrX?=0OnG');
define('LOGGED_IN_SALT',   ';&J@Of}hbrU.b=Mwwe2|~/w|X2;T+-vW:u-fb0mEes%F~fa.1^<[[X0bh-Sc[+(S');
define('NONCE_SALT',       '6/u*-I|:&|Fa.b6&*mNmzIk= W4WWEn(|79m<E)x.F&j#-k~$+bz$4}DC<5P+;kN');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'myralora_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
