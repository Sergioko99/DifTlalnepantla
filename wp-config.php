<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'w' );

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
define( 'AUTH_KEY',         'Zzj$y~l:>sM[U+d4y8ioT}Zy~;]~vW4UQPZg2P#viQiCr+k0k ]zTO`nQl{zW3/%' );
define( 'SECURE_AUTH_KEY',  '8]:iWQM|qRaDy#G)Pz?NI]20E#B9u9G;RJ |DZ86id$vyQiT+Jh|z-51`ct!R<0/' );
define( 'LOGGED_IN_KEY',    '5G@or6WQ~[{`uf5#:q/JF:M%>=cL|b]lUF~Fk)e?6u^JoNkMFW=TKp`I+@^wcBOl' );
define( 'NONCE_KEY',        '~mS;3$/m6rQ^aO27SykgoY.lg0WV63*&}0^6U[Y=Acdc:$GZV%F5+RKWDm#{utY%' );
define( 'AUTH_SALT',        'dLux)wbV~1@LDmSo7dU$ :+| WK%53Y5wBY3UM;p#(e:ky:!I]53{G>3rB)[nUQC' );
define( 'SECURE_AUTH_SALT', '>[|1:$gefaZx,`;15^FOm,plqjhS]>Dk*9J>%_TU;}BN%>>Dz%vDt,KhJE@lY$dq' );
define( 'LOGGED_IN_SALT',   'O69(>GJKnh}H!?G9MW8^up(Os%-v;h{G;K[k`!+_Pxg-fG+T^KCt~1sKxDpi_{i6' );
define( 'NONCE_SALT',       'En/Q7-s2-x5iPMHw$H9=}H~$-~r|IWiDz-[gGl!+v=46*x7FttqyI|:o;%dfB~<z' );

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

define('WP_MEMORY_LIMIT', '200M');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('FS_METHOD','direct');
