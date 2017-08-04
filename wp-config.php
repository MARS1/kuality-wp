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
define('DB_NAME', 'kuality-design');

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
define('AUTH_KEY',         '~t}o$T69_^W1);w?sA1{IjeFa7cshD@k/[1:>dQL(tnr nS9n&Ps2z#2u5IQ6oN#');
define('SECURE_AUTH_KEY',  'YP3z8P@|l{y5^cnt{nE=#JW^s*^$,m/S112#TQyCQk--v)iq>_ydIYetjiD<vGq6');
define('LOGGED_IN_KEY',    '`~sKTvAEi5WcduZ3b4Lt|2n1SOaXu8cpk P=Ke*HYOJ~YkS}@TjOaE+@qd=*|=km');
define('NONCE_KEY',        '}r!NPXsCN^{QV/5FOe<M<Pb2*d,1@?j$rZ_LM9M/P_<Rk2T.4UpUUqNNiOWv;fe~');
define('AUTH_SALT',        'Ert|Hu{NZ7EVeH.;Ef.^rx|{@o9ND.9i|)@a,>PWUJ<kQ<@SOXq)<3R,iY$]^MSX');
define('SECURE_AUTH_SALT', 'I{qgf:9U>ws;-,#H;24G%r=28V>25QtGQ:TE1?Y*NW>7i%FF*WCiC:+dw~OsO^8V');
define('LOGGED_IN_SALT',   '-;V2 GSIGZ}~6pn)c^b?|>Aot1A:%]Uuox =@s&cPa B4BFX]:DZ1oI.}z>2(d:t');
define('NONCE_SALT',       'Zpk)RH]6WWE99i*YRMv>kRal}F_6O?vo9cLW=SE?(@:]ku^f.5DHMmk#29 ?mH#(');

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
