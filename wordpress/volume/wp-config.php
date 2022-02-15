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
define( 'AUTH_KEY',         'nj.0!?K3e/Peia)13iAr#KPD9K8JRu62ltwJG]H1.:00F)1}.c-,_1WBjv|NP32U' );
define( 'SECURE_AUTH_KEY',  'm({O>x//r$ww3h#?T&&bK9UoTaHL1br]F:4}Hu^3%!5-Tv-M-hoC4lm?mBZ4fcz;' );
define( 'LOGGED_IN_KEY',    'RH)<x6~uAst`rOBpfsUBGC7R^&|y-:Z&:l//4en:Kab~bLIrLM*:a)sD?8[k&v(0' );
define( 'NONCE_KEY',        'h7uH_o*:!*94rV$n>PXM@zzD8i%k+)U`PRyF_P<rSb8@)>WosM*:Xsz{W!cWLJ|q' );
define( 'AUTH_SALT',        'JZyPvVB)-+Pp).~kr.VGRI3WsC60 9$PFhkeN_>cLypE?XFT_!,4iIo|kV%a8xM{' );
define( 'SECURE_AUTH_SALT', '+xB+=2P|E$TC,~I`4xszw.;:YT2P8 ]h<A,YMb$=oYrU&t*de.?t*4Q$t;.s+3vm' );
define( 'LOGGED_IN_SALT',   '`?)uAGx>5jX)eEU+Wo5%uTUaz2Xef=O+<3_<p_wK)GtBif{H`=;|N8,GQiF_us+8' );
define( 'NONCE_SALT',       'L[4FWg=oL!Wxc5%nvau#Dx ycVr(5X(w]ajtd3etg1PY(#d@xaDtO*Q7s!h=LSu|' );

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
