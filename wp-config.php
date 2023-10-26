<?php
// Begin AIOWPSEC Firewall
if (file_exists('C:/wamp64/www/wordpress/aios-bootstrap.php')) {
	include_once('C:/wamp64/www/wordpress/aios-bootstrap.php');
}
// End AIOWPSEC Firewall
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
define( 'DB_NAME', 'precious' );

/** Database username */
define( 'DB_USER', 'Precious' );

/** Database password */
define( 'DB_PASSWORD', 'chiamaka2014' );

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
define( 'AUTH_KEY',         ']]&!]6/*p(UDfvvwtTO3A!4ZQRt d`dl-kEsH,]u3&qg7MlWPZ%kMYTd@ P^2t!H' );
define( 'SECURE_AUTH_KEY',  '<&4#^00Lm;^?o:b(HMs*OsxHKbm(]]+7tGY8/4JUd][eQrWBaKXlJT[@zo{B)|Ra' );
define( 'LOGGED_IN_KEY',    'D{N- LlwWcho#3z8pZYi)+dLn&t0ZOm;8mfy%Rh!z/_v?lwD= ~w^Mii&Bt3dqqv' );
define( 'NONCE_KEY',        'Y&;5Ew=8brAId*xwjnsd{4YLY~s0:,0sFtlTH#+o$j)+;e`TD Zu8c0Me_8[6=Rm' );
define( 'AUTH_SALT',        'v3[-hkf~3pH0]aoXQ>-h]68?.e*J5kq-!Pz{*2J1gUm)s0=kqqc/bu*Kv%7oGK%H' );
define( 'SECURE_AUTH_SALT', 'pk/bf/~_XWwhohRih*A_K.DJY`XEm{&{uCdo*q$J]{s3gs&PK@vIL?ORpL& p{Si' );
define( 'LOGGED_IN_SALT',   'F}RVE[5mGVnXBWEm=+ZH/`Af`.NA}I,4`b)Xl8Fc,.1tnA#Vk@GS*HO`U;2ezibH' );
define( 'NONCE_SALT',       'qoYhpLj4r-l/;N~`~oPE7=$/HE`Yf(L;:t7u:i3m*hAtZ%I!]t,cbc}>zVo!pn~:' );

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