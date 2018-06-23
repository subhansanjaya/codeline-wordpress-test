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
define('DB_NAME', 'codeline-wordpress-test-db');

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
define('AUTH_KEY',         '(oPo$zoJSLNotD@-_xJ&=u|,{y$/inzTH HE6*>=Uj!k/`:BAO/{bd?^,7>h=GVo');
define('SECURE_AUTH_KEY',  '@zASqbj}nJ7N!?2l:,K81Js7U}T0qY[MGLNn>hmJQ$0zEH,(Pj+#2|Ue^m0%5a*5');
define('LOGGED_IN_KEY',    'g&a?7RSn/64|JADRATK9)*B1vjapdqRh]h{YEB^s0t7c)[JlVE2GhyO2Tt3A|,/$');
define('NONCE_KEY',        '0F&y[L&i]ox_;x(%GTE3=VP#fIr0C7hSwF$S5RYFZ|O{V$;h-yqB13Kzh`2TG][/');
define('AUTH_SALT',        'q/A^QPlv-UzL_!!Ko[&=Lo+=AR[sxV~-S>e)$wT4$4WGH1fa%U%,N^^W/Na82j_)');
define('SECURE_AUTH_SALT', 'xJAJEr2SHI@a>w AlSqRL5Wn?`KS=,N^n-v OuHJP}6NvM$x(kRwP@_SJyWC+yhb');
define('LOGGED_IN_SALT',   '{rjoU,^<h?Y%C~, VT7Pu|-RcqviCN-9dowu(q?@,$cLr-r!JBU~yXR,f,l<-&3[');
define('NONCE_SALT',       't<)~B1N0u-mMwH;.<M6:2SQ95F&t?m#(v7H w5.L!N0-U3rG&wg@XTjDT~: sIiA');

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
