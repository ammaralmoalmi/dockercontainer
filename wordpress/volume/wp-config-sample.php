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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         'HLX76 gPKX{;=C??>x-YV ;?Wx[mZg*7T/-it^FO@*m(50>q@~DEl8J9z0c;N8PH' );
define( 'SECURE_AUTH_KEY',  'P^FC5 &gPNqLfkbrIZ^jYer]TG,{A<]Fq,]|85`@OGJXf)7cMfT{j-(+UJBov3mw' );
define( 'LOGGED_IN_KEY',    'oC9ePxSd;d6&P0gv[2e^@R_-]B<(V`lIr[!%y5lr> ).GdsM`7O6mwO!{?<H*H5^' );
define( 'NONCE_KEY',        'U;WKKU5o2.J0a2H-u%kB&je2+-(c/Sc(,70xdNvd2@!.nE!cDTY7fO{+5,&+=z4&' );
define( 'AUTH_SALT',        'wt0k*q+d*gB*<>Zh9U+Uo21<0~N6iukpY;0[@MXaBj^GGhO+wX`_*U/iuuVK1M^K' );
define( 'SECURE_AUTH_SALT', 'TT|RV@I/EyZUVdyVP!Q 0YZNqxme~#~lUYECX`O8}AxYl=:$2{MXr5%,$E16tLy#' );
define( 'LOGGED_IN_SALT',   'XrRx:ER,56 N*F&R}L<Ob4]Onl@)cn2,VUuiap`)#-%qP92_V}[Rp[8t>Oub0^gv' );
define( 'NONCE_SALT',       'NYDkJ/4djh[$7Dwx>5Z](uE7HI;uYsWe[M&Qm>w.`RJrdC^~3I.CS-l!tyEWROST' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
