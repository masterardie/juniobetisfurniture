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
define( 'DB_NAME', 'juniobetisfurniture_db' );

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
define( 'AUTH_KEY',         'dL0]OfYmFb i/|MhNW_E0ZU<CO:cSsB?c_]1S)EV6<>/_CZwEpzWmT6P@vW_&)i+' );
define( 'SECURE_AUTH_KEY',  'a#iJwE`Ygmwu+qC]#c`0QvN=Yr)APkI$LkIFP3re6di)n,(*G5<</Y<2 U`4Yx1B' );
define( 'LOGGED_IN_KEY',    'mEP6oo>/vepiW2,:K0D;?5:8J2.GHT)T |:U*z.)iXURV5{)W%EKz,48&,b9<zos' );
define( 'NONCE_KEY',        'GAqqA+WkUygi72Gr,Ca/bh]v7-d_l~|:OZR/uwLLqZo8{Qa$Ia${pV}7-q3Iq1qR' );
define( 'AUTH_SALT',        'z^i+!m_7k-m_*d}0/:#~$]hJbEivAFM)1CB`]Zn}87uf6w3nauea5}0 qcaTtm9p' );
define( 'SECURE_AUTH_SALT', 'W.Or)Pv*{ jS`XLEBYvmqssF)QyN~qmz!T1V|2/;3T@%;61gts8=3;58}.Y3IVzt' );
define( 'LOGGED_IN_SALT',   '[bL!{T@[AyX-|p#R)9jTbg<XA0wQ#{lh@~)Si/)(rigEMxA86HDNX|oaX%Fd6|C4' );
define( 'NONCE_SALT',       '6^!Q2q{e;UL}>m< M?O)6ec3-7PMwKr#(/DHQlgq}xAy2dh6|}uEFQwYsWSTP=uK' );

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
