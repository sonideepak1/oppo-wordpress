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
define( 'DB_NAME', 'oppo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '_L|}F?-yx=$}3+f{G{L,V^ljB!d_BJHFHtwWJwWT{kSqm8u  uxq-wL<>U[yT~w*' );
define( 'SECURE_AUTH_KEY',  'V^N#$EzYCU.&ed&,!2Ow+7yly1;5qh=l_j{:G+C&|,4B#+FP/wu&%E,Lf~D=G8ng' );
define( 'LOGGED_IN_KEY',    '+}G1$,_Dc=m)_n_6qt?:!WT5Oj 56ncSF^FKCYhN,)JwfbLc8,Zh5-1n#Ogfz%5!' );
define( 'NONCE_KEY',        '77sjYi&-QarQ3OTJKsc_)@1:k3YMEX1K#s>UhH: l%&!LlLIui{F_k|jHl!/z%_h' );
define( 'AUTH_SALT',        '&P)%5{^>!^rBe0PV#m7/Sj@Z}{6x4J7Z*<cE [rvXbB0z*N|8%J6LVuXH=yVO]E]' );
define( 'SECURE_AUTH_SALT', 'U2!/E$:FBE?IEPrA|G`p_1BC6;jM`43<O$?{Bp^tXXi._PaEQ&+[(}_zcLv#E[3X' );
define( 'LOGGED_IN_SALT',   'A*}g5mgNh?JyXr2W/Dt`1DP<|q*@S{WsH1D:Sj=`]XWqc{Q%2JIMxI3~1t ;z|d ' );
define( 'NONCE_SALT',       '<0dF/9dze?rY9T.q8ZqH}xe4:q~EslR@BYYsF9rklyOY2wCu(E2vM=5S-AlN}(V{' );

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
