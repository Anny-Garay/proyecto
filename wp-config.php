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
define( 'AUTH_KEY',         '(TByZf@wL`3).2dW)DWTy=wbEXXup;t( sXAMz[F}#p0/}-,m]9}G?bj *8u$v(,' );
define( 'SECURE_AUTH_KEY',  'W !.)5Z0S={;az5gNoxE 5H,}*skZa@fdW58k1(vX-4|m183@(dwuDi1h)7z=O.P' );
define( 'LOGGED_IN_KEY',    'ib?J.ogp*daYmZI34`g6x-IWd:!HViGceWrg7,CO+=C~VSR<2~.djh(Xc=%oEQ<O' );
define( 'NONCE_KEY',        '{*;YJbovV/?.aOG05YY=`]s4H&bL}sygy`,jo;Y Wgq>Db6PUfuJU|W4Bpy|N_#T' );
define( 'AUTH_SALT',        ' (GG3QMD0X?E1GQk!Xr$fHWp&.D@.M4ljT#}Uk^sq+eWx-Hx%,][m,31edjo$$P5' );
define( 'SECURE_AUTH_SALT', '?r@U? !]L_G]F[?(5mHmzP;s9p9mjAiG`;-w%0#=_h}1L-PR=y|MULuRkumkf(dR' );
define( 'LOGGED_IN_SALT',   '(nl;?IG)}8P+vOhWs45j@)Z3cCh~9DTN4l4HsOpIqUi8N9`RcD,v)0)-D|rPlsW/' );
define( 'NONCE_SALT',       'f[wKWN5NK[eRoVz(~Tw^X`-.!_X8fppH-p?JU% 0p.6/RFPcw|)ZwK$$F^Zxq}D2' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp1_';

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
