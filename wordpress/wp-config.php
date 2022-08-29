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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '|j] !!b>d1X!:i@6RL,7Z?Gqu8iwcB^%`1P22F-,HsW+%?y[^$`X3T7DpzB+5:Dj');
define('SECURE_AUTH_KEY',  '{OqbX+w)uS}qqa)nGpd,5Z%DLuH}Oa&=w=,tqAJ2a>=Em>|<{Y5W0RA.GYZKc=8f');
define('LOGGED_IN_KEY',    '%UXfph=h1Q$z0rHJosd|Oki3-pQ&*tR8REjFXr`^R95{>4_#}wK^;$vH7fPZ+n[l');
define('NONCE_KEY',        ',fS,%V#S$40hR[<5Au]`,>YE?}0?1GT:4vri(a0TA|x`+sUhkbW7M332MdJ<9$/G');
define('AUTH_SALT',        'q^kr7fF)OaWq|7G#oY$S]p`bt$ jBzNyYhwjKsf( El<awvj@US0sGWcIN]IsM}9');
define('SECURE_AUTH_SALT', 'vHQ?^W-;`6R1O7s/wt)FMg)2pq{h|||2fa%8Wc*@54L9T5>A)hxI+Wm?kq)3y<zP');
define('LOGGED_IN_SALT',   'bD<T]>6`7=b73^/Tqg?6UK-;7~ue*9[>RFJ?{1Q/r3s6Np};~VBizPH#T_PpaxcP');
define('NONCE_SALT',       'H5eN/gxK,_mP`ty7|Key;0EpD0h0UAk)A=hdM5d&nHAA6,y#a6m,GVpQR`-+e}7c');

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
