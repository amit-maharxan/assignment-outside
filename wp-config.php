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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'assignment' );

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
define( 'AUTH_KEY',         '(74w7C%bpc7$!?0~;ZQ&>(4,x/|hyB @}0NCfZ,<a0u7:zmj=^aS]6etph(!3Nuf' );
define( 'SECURE_AUTH_KEY',  'u{*2o%#t)x.V uK[$jqYd%*bE9Ero}!@8Gh4jr<&aDS}USE+&JP&{l;;BB~5si)|' );
define( 'LOGGED_IN_KEY',    'om]GGy9+KcD?gyJ`wM7p$@HJd*5dSf$)>|!3JF %.jWaC-&n_$lzcj&I+nvk6t8Y' );
define( 'NONCE_KEY',        'U2bV;a&L9K5n~]%[}7MD!sH8y0.jb;AyQ[L_ze},L0R2(LVK+Nz3Or;4dy|36[:Z' );
define( 'AUTH_SALT',        '&44qf6}`EK8w=NtB{uv8uJ4wAA_iglfwD@]q4iKk2=<u_#U59< 4P]:D{`fPM$qr' );
define( 'SECURE_AUTH_SALT', 'g&%j1l5_|^IGE]@%Wm-I+t7<.InezEGm7!Yp@sU+i+VsQ@st*i(c}uNuKXALOjz4' );
define( 'LOGGED_IN_SALT',   'Dk6;DduYT_@q``.UNH!`Fu0)$^J/|mB.C J%N0BhjA^K!=:I)Eaa{dg=$Ol!::,>' );
define( 'NONCE_SALT',       '}CLP-,FoAw+JSwxZl>9jT)J/q}N.}mbf8}Ge,IvhL[Cwmr<Nn{j)0xk*ydWFJ?hy' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'outside_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
