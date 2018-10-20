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
define('DB_NAME', 'daivu_painter');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'xalLAP-t@{{#Q#@FCJ9je;{`=V2~p`RA4zI~59YSm8O2&]IO2Y@(h}7[6;bt,3/4');
define('SECURE_AUTH_KEY',  'k ]hc9urIL6P;[(XK)Y2#o4eUHsldYDpD!,bs.UFp(5A 8.0y0a*B:], Z@#LXx]');
define('LOGGED_IN_KEY',    '//tN7] Up^D]cd2QOKV>W@ x=y(IZ3,Arra4V:|8Go^y)e2] `)u=o/0@rW_2*1h');
define('NONCE_KEY',        '#_i]%7t!h[uSrGB*2j=l+-o5d#F H[b88#.x{uE3+^yh_XY<|a;G{}U>gM+2_M6n');
define('AUTH_SALT',        'lP:Yd9R^.Bs0XShwR,}Y-LZ|)N)[%%*|S|i,.6W*8KB%wu6qmWQN!ubq0sGcc.Jk');
define('SECURE_AUTH_SALT', 'sGsakGlD8=^}G:%Q_PI P=]] G(QA2?dHOHWDtSjU 1eG_C@2GC4|GCZANoWujo$');
define('LOGGED_IN_SALT',   '[jNPDJ=;Z7@@vm/d6DN_fvk%OE&wTs5&eU3YOMLJx>eN;am-75S+k$N&# j,1i?H');
define('NONCE_SALT',       'xE^h}4WTEM|fSI/2e*W}ftWy>{s<2q1IPh^YqX+ahhmj3l.JKc@x0#Z>#g?{i:hy');

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
