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
define( 'DB_NAME', 'wordpress-dev' );

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
define( 'AUTH_KEY',         'Z$DCkxw$j`i}Yv0v86xR,PM4+I11Xr>-}Us9~y$=bl _?Dy/pyBq:K]@y#o].iqh' );
define( 'SECURE_AUTH_KEY',  ' zAuQmjL/^JQAbag(cTE>H0.8$f;E$l`,nc,wnwc{7cR*O+sGK#v`5u9^pV/DYtv' );
define( 'LOGGED_IN_KEY',    'A@x[J`AV9Fm@CHxlbWWYpu6K7]mSVxdLcv6uhAvz]0l0>==?@R:iCi?FS|^?[{kO' );
define( 'NONCE_KEY',        '=#X!4_LZtK;r#7d^UN!2/?urV&TvX3:]EwTDvdXP+}Jg.,_;1gGw[izDjstBM&H2' );
define( 'AUTH_SALT',        ';a#OS]< -zgp_^KT|(uFy2-V_pdn);2yo8V-jw;^KNo :^v*Zb#?kV7t6`5T_K/9' );
define( 'SECURE_AUTH_SALT', 'q@!brA+3bJ>J3{Rm.7X>/VjgC4+*T@,oPdt;/,6$0%U^X7A24U26hbomrbV/z?!f' );
define( 'LOGGED_IN_SALT',   'B>$@?JPBkVMfk@cVQ,f%27VH7>{[LEhckNim+1ZEa.`[(MnM&ef!!nptY*tTC)X`' );
define( 'NONCE_SALT',       'c@ -QQ O<sr+jZmHUrB,siiga?w) mLCRM$]l5!HJ0B}9--r)4nX.8$MR{k;fjzb' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dw_';

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
