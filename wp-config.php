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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'iman-site-data' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'Y[,ptmVg3GeFlf~,y!:{u9^tYKm7(k/Dp@1N|elm%]n[dw$6w?0#l]aoJ;vbd.PK' );
define( 'SECURE_AUTH_KEY',  'C`4,uofm[UJTQA {e3?+oJdOs?(r$9s#*AUdj6&] Z EM0ms$YcNR) #]]<E[!`r' );
define( 'LOGGED_IN_KEY',    'ZYX^#xxOmF7u!2}pp3ermq@I5A;2ls~L,Zf0^v#`5lzPFC]LLEh3?C)3am?ym46a' );
define( 'NONCE_KEY',        '6.fJ.i,jXxw&M!_W^t;IUY5U,@pRH>1.KU>J~}-?C-qD9SkX&^t{Sdz~y%4lvy:x' );
define( 'AUTH_SALT',        'oFh$2}hLSjAN~A=/2.8G/3K]mvQVb78/`MCXTPx*<^gPZsQ/E]M;)pP#W7[Z6+af' );
define( 'SECURE_AUTH_SALT', 'f-HFKj0Q><3{!CZv}]x[7emwaw=CgHLxz13:4q~P=ASAjcF=,iq<W/ ]45JT7JE1' );
define( 'LOGGED_IN_SALT',   '(AQ^PTZZKmr;mp!v~ Z^_1(myPi=,H[[H$!#69,UUR)bN2Yo/B=5l)A-KL=<GTG+' );
define( 'NONCE_SALT',       'B;aa*kF/X+&$RA/{e+jm9- w-l%O*|UwMY1BczJ,kc5ok>cJ*{_:vHiCK2-9RaMJ' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
