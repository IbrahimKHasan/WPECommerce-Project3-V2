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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'e-commerce' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'phAXPM`.<,ZuY9dt: |A:5yeW/PoceJ1SR_o3Y< rHA;o<H|nMC^2e>PeNA?4UJT' );
define( 'SECURE_AUTH_KEY',  'MN0b;*4]C!>.--3f/z5dwC^fX({Srx`gyw$s[yui$df?&Bm.h}lId}E=uV%!5r;l' );
define( 'LOGGED_IN_KEY',    'jsHOK,M^(yWikF5 Wuq9%LUNeToa;r}HO=,K>=.o~Q]zK4DH78k<a|~+}zUyAb(A' );
define( 'NONCE_KEY',        '}Af-uppss9&4qBYpFYUll7N1LPlS$T<e m`)fl1Oc]:}&Er..iw(NtH{M *Y02_&' );
define( 'AUTH_SALT',        '!zT<{cCUeSNW=aIbug3BuHjAD//5{3/T6.POnhj^kS1WvDVduC.Qsu)#v}P* lHO' );
define( 'SECURE_AUTH_SALT', 'BH>Lg&N*iLPIOv=y-1r@Kz[4x4Ngbu$:(}5x,<j8c.Td(f>rJVZ@Jf_&sfMH<*{;' );
define( 'LOGGED_IN_SALT',   'j4Ua%WP8B+3fwJ~e1QY;6_V~]h*G9VWY*zzAzllok6HK>Xrvejq-zT}@2n67[SIq' );
define( 'NONCE_SALT',       'w 9Tq&8>-@MK|r7pL=Xdn}iQ.RkI4!=A?V0a[#z?|cKkllCs#RLnjlO7ahpEJ!IA' );

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
