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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mywordpress' );

/** MySQL database username */
define( 'DB_USER', 'mywordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'tian2020' );

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
define( 'AUTH_KEY',         'W|.b:tD% p(/Q}n)d.jYboOt0E>`/M)VZ`PQteD0v1l.0Iy3gUQ^+T<K^x ;A4,v' );
define( 'SECURE_AUTH_KEY',  '7/>H;@p>nqXvQ2{ZGJHyxv6+~-ZaBq5m&+sm*JK(89))96;gCE25uELmT0@[Z%rK' );
define( 'LOGGED_IN_KEY',    't>!sgD]6p+hr]{:MmeeAHX{c!>,d9cw%tQ?mOZGpJ8TwN-_a}AT/gMU%!SdeQaf)' );
define( 'NONCE_KEY',        's3</F}Bi2W3W~V]`]>Vy[)QH#C<URS5d&vFn99T:Hyz@XVBHBn!.KGMe}dUa[e@d' );
define( 'AUTH_SALT',        '3R?lK-2/,?*KtIi1x)zYl& zd}PZ*f qQD+t#wmSmN]X@hQ?w;Q&u.K9K-R-;N63' );
define( 'SECURE_AUTH_SALT', '2QR7H-Oe%`4vo/iGk$OUjY/)y}YIcTdD !s:G)IWX:u+VQ?oT4=_2c.Aga&{=X/m' );
define( 'LOGGED_IN_SALT',   '4jb$&0q7jxip;BL+Ew+PAK|Tm`Ly9EQ<sao*tW&c>TQC1!=9g}#mgWt}CM|:Y(bO' );
define( 'NONCE_SALT',       'uMaX-: CFS>z^-s4M|/jHAuv(CV_Fe5F~B4B{,uENt6EsU$}IPvPYWG(W.]7w/$/' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mwp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
