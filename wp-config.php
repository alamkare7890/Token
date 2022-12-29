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
define( 'DB_NAME', 'tokenData' );

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
define( 'AUTH_KEY',         'XIkICX!MYygqD?S}xW?galD%.?lD-RFv>}O>?ja-[4K7K5Tl(FLgDi8_=zN_vzwQ' );
define( 'SECURE_AUTH_KEY',  'PztAwYO?N&.M/3,65fQ@4|j7&!sxpyM_yH:/>4%(kE8`W>R1-h*WdTKPuBpyh(FM' );
define( 'LOGGED_IN_KEY',    'vbG}<DSc?:S=|2D:y0>c;8r zlv}Sf~R,/3/8(A2c:i9AJ=4^fSSWxIs`u*a`]a<' );
define( 'NONCE_KEY',        '4MP0(DXtIi56=cYqx-8TliDC=~$MJhYTLv]kz&RiokxKqsPbydQ7<wU9bOEvkziz' );
define( 'AUTH_SALT',        'bG#ytMNZMa[qg<)#C;8//bqEpY,#}d25+ZcI>-w+j@do^9;u][($N~B9u:X<{3.L' );
define( 'SECURE_AUTH_SALT', '4HrcG)_u]AH &K!-6lfQ?mrxWp_Qz^gLHD]9o./5/]@#g{0a)`f[E`dIL(FxA[Hg' );
define( 'LOGGED_IN_SALT',   ':[osd;$TP-(~.pcg%>8Zrxa+eij9e0X4LNETZkCls~cp=mcfd!zGn{IwY=_z^`9S' );
define( 'NONCE_SALT',       'FGubB29u;`d/yf/3j@)HM~tAz~iUKR89f-(/g./YS,ttF=3&zoh<x8Q8Y>s*]G }' );

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
