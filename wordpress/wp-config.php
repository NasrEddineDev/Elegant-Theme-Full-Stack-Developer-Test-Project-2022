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

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'nasreddine' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'X^_ul,c/%!}czIj]$p2g{5KehRRUr~t)$#~PV/?lL,j{2=a-;DxybFMJ7p^I<SM4' );
define( 'SECURE_AUTH_KEY',  '!&Ionx,dDU@b a<#LbD$GTug4b0W`|yNq MB4FuAeBXzFPod=LWI_`J)@50:d!v:' );
define( 'LOGGED_IN_KEY',    '1)R_v7oC~VW}50BpuUD1qQiFksyZkp.J`BfpcCJs)0@QXh-9O+lg(_X*_O32^7,(' );
define( 'NONCE_KEY',        'Og@`z&0]2P;Zs65yRB7KBp/`@ZIf*P~|gM]t[zWe4UO09$[%IF0a,Qo`V`%3}~V-' );
define( 'AUTH_SALT',        'Y9mXs>yv-0Qk4S-;;d}]~+-F|y6{o,}W5KzV-fJ!yCEAQb)3r=[4[NapN[Er7GE>' );
define( 'SECURE_AUTH_SALT', ' 1o3%A5F@gL}:p^VK48Pg,Ms<!t2OXnlIQa:oW:5ls,lp=vz1+CiOb`/H|;,k$Ln' );
define( 'LOGGED_IN_SALT',   'hiu@(Dy~QXfB ~o4!C<x!b=sYoGI.7jE2@SJ(rl#xitKMU*5$ k[47yTbe8n)J$N' );
define( 'NONCE_SALT',       ' v3|NJ HU:<a6N%sM{G V.j-!#b#x;GGsU;LpG3pIX*u(qvqYzL4m(seh2D).K?c' );

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
define( 'WP_DEBUG', true );
// define( 'WP_DEBUG_LOG', true);

/* Add any custom values between this line and the "stop editing" line. */


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

/**With this ‘direct’ method implemented, you will be able to update or upgrade your WordPress 
    and plugins installations to newer versions without having to provide any FTP details.     */
define('FS_METHOD','direct');