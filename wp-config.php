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
define( 'DB_NAME', 'siteoffbox' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '8+2)bPefC1X?d4ylmEelM#_w-gg#$l.pqc C:gP?s!;H%=$=DE*bK5Ca-FzHS<6g' );
define( 'SECURE_AUTH_KEY',  '_ wooflJX|-; SC@GZp[O$[ nRTw%w[e&.~)Q9rX%SOX1qgI*D=tc|6X$SWkNXd*' );
define( 'LOGGED_IN_KEY',    'bs,##bN%4x}EoN,5&z)~j_4v;5x]SsIucut#1>-F#bm3B|({6$#O1&.f>ug!V!vw' );
define( 'NONCE_KEY',        'x$HXqg(Ng/3`.SiIbPqHqB3F#X|q/8s}R*p:H}m@ 1shHaEe%H5{DWlqD6U)j_d_' );
define( 'AUTH_SALT',        '*fWmp% h:!@),G{an[Rok J@56F8j;-X>ocS(+RQ<A1LW-ptUqL|=sy1Koy}^^J~' );
define( 'SECURE_AUTH_SALT', '*[?[3ze@UUFSJ{EFhzV=XXJ+-:@~h2FqW@Y0/Xv/IQ#t_]ft<i^`WX`kkn];H]2p' );
define( 'LOGGED_IN_SALT',   '/1*xx|S}1gUo2d.[)PneT[fU+/0}`4I~)o,v&$LcD+EE&V`BNOHQy=11},,m6X6&' );
define( 'NONCE_SALT',       'i,JSCai%!:x]GFn-+AvGqidAKs4aL[O)@I9q1vso.rpcQ~%;Lfc$otG-7SJVdd@N' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
