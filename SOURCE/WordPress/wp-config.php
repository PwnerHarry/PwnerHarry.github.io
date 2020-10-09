<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'homepage' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ';RjI!:HxRVAva]<?AbC<8(svRNT(|b40^-O:JlX`uqF}hMu|u5k&QK`,Fjn=>XUM' );
define( 'SECURE_AUTH_KEY',  'X3.j8zdV=:sa8[ML>l{[{U0YT]Br.G.CcK&hH]m`rX{d}6[dz+_sOgo01bA@<Gx@' );
define( 'LOGGED_IN_KEY',    'JIp>;).s6(!b*#g}`LyO@hv/eKM;Q]cgtb~fe~xAaZA/aX`Jw36|Uno#/68l[OT)' );
define( 'NONCE_KEY',        'j3O+Z4cYmXvmyS&LTzh=dACBC6Je^q^F.R^EfUz)/PogbhcxpEQG]LG84$G#2`5q' );
define( 'AUTH_SALT',        '?J>Dy@{#:fcjjSA;{kh7CTUhwisNcw8m0Bp(sO 19B}y] 8xEVKEkV)sLn[ZT5~t' );
define( 'SECURE_AUTH_SALT', '3P,ck&.Y/+VF52;a7={| b3vd:9GCkvS?=Q1YPb}S EE[KmPXCzAnQ}tiBTZ};rj' );
define( 'LOGGED_IN_SALT',   '-AmS9`8gkhFL`LeFifi)+sQ1B^ja,G}n~MF|XQSC5s!eq+F<gf<ZE:}rBbo|V,^r' );
define( 'NONCE_SALT',       '>6%V7M_|`dz$h4XedO?>YF]=B}Z79!VelohSQJ20l*uIgkk?MMr+N?YoQ1`3xt$n' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
define( 'WP_DEBUG', true);
define( 'WP_DEBUG_LOG', true);
define( 'WP_DEBUG_DISPLAY', true);
define('WP_ALLOW_REPAIR', true);





/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
