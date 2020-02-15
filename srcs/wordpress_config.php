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
define( 'DB_NAME', 'data_ft_server' );
/** MySQL database username */
define( 'DB_USER', 'admin' );
/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );
/** MySQL hostname */
define( 'DB_HOST', 'localhost' );
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );
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
define('AUTH_KEY',         'ip|?{O|pd&% A $-O|W|(D[S|y~N8?+0Z T0T@7O>e&|-20pIU,=U2cTgGe-v!8O');
define('SECURE_AUTH_KEY',  '4?h}cQMlS-2y@?VTElQu<1h~wJ7.`+KaG9cqP;;|2`x5M~cQm(y,4DtjUg}q;g_B');
define('LOGGED_IN_KEY',    'Xw C`J*gpQ$zd;&_T>VSho3h&-Y(3<:4^XP8{?>d!-x3p.riq0TBX~@_m?Xv,2T|');
define('NONCE_KEY',        ':-J;EfKY++JcdyVbu$S^;rw(<~,2M/{|~^*P/:5`MID=w++J`Rq3Nb;V,8|w%OO2');
define('AUTH_SALT',        ':}L<9TA`y?q29R|6MXk-xGW[33Osb|NHgDDRaz !<x)(PJ440nm*xGh+%E&u8LE#');
define('SECURE_AUTH_SALT', 'xI~/pg6Nb!9[ .F0^W+3n,e+es(B+F,KaGey?XZl%:MpGee<-tLCa.NJ>J6aQHxR');
define('LOGGED_IN_SALT',   '(ze=ZXq2Lp.SI%2)$=c8iMK{LK>xbzEt4,ZNBnJMfUoS&+SWS2McHm|w1W!MA~|Y');
define('NONCE_SALT',       'bI_3%:vmPo@0ib:bzFI i^MP5W7}BOl@]2XT8~n3.ifS:TxS5PkE%W[~B* Hl+{M');
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
