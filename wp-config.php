<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings Haldun  - You can get this info from your web host ** //
/** The name of the database for WordPress */




if (strstr($_SERVER['SERVER_NAME'],'technosoft.local')) {
	define( 'DB_NAME', 'local' );
/** Database username */
define( 'DB_USER', 'root' );
/** Database password */
define( 'DB_PASSWORD', 'root' );
/** Database hostname */
define( 'DB_HOST', 'localhost' );
/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );
/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
}else{
  
	define( 'DB_NAME', 'technosoft' );
 
	define( 'DB_USER', 'technosoft' );
	 
	define( 'DB_PASSWORD', 'Asdf@13579' );
	/** Database hostname */
	define( 'DB_HOST', 'abdlwahhab39126.ipagemysql.com' );
	 
	/** Database charset to use in creating database tables. */
	define( 'DB_CHARSET', 'utf8mb4' );
	 
	/** The database collate type. Don't change this if in doubt. */
	define( 'DB_COLLATE', '' );



}

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'G;NR9K()?Zp#7pX#OfEahKd3<+QV??vODIVl;YPtwqZ/%HH:1y*4aPAnK_1BK]n]' );
define( 'SECURE_AUTH_KEY',  '*6U/EwKb>x*aP&=MOxlp?ODE3i|$2J0[x }!x<z5vH[s<i)Oe5Xc`%ek.P5o01-o' );
define( 'LOGGED_IN_KEY',    'jY,X40#-NA5[=|5Hxzjmb|kjIPNI0(=~C61^M N:JqrtnVdER A]oAeod+[U8f,s' );
define( 'NONCE_KEY',        '-$?tIuwfGaWWj2~6E/HM`rz<GD.2Q-h8VSqQDc<^YQOwd 2)[`KWhZ]k=FLCsuwe' );
define( 'AUTH_SALT',        '4*OLpau{I20V+1).V^GyVb*8X(.tL?e813ERf@.;x>|cH,s0?9* ff}2aI(g(B0u' );
define( 'SECURE_AUTH_SALT', 'Uf[CPHT*r)d|$ Pjj}&!`_8Nh]7x u:Evb#,3cLn9rC&q|H5:&^nY%gs}|9FSxH-' );
define( 'LOGGED_IN_SALT',   'kHW-uidl9v> !X6O6;yc%*Mml.bUX70LB(1o1PTTCl ?:JEm>2jG/.x6D],}pN%}' );
define( 'NONCE_SALT',       '~xvG^y~6<iF~7$qIIZ/DCWmX*8WS^~qJ^d;&bJ ySYz.h92|w<P*4#nD&v]LAeuU' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
