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
define( 'DB_NAME', 'woodpress' );

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
define( 'AUTH_KEY',         '4(dUr!Tum)TZl09NU__gYDgc~R: oQ00}&a$wL=$4giX)-9yQX_g{78bfIejkDWi' );
define( 'SECURE_AUTH_KEY',  's]Q63m28.%P0!J-*LZz:CfL{RP>go8SAR(V4V:,5!8{+N(gBf{2~{/m]M,GfyuBv' );
define( 'LOGGED_IN_KEY',    '?ptqe!66nBS{WNEjQX,nOxZ{Y7TU67o>eD7l#?izU7t3H*h`CBC*<U;=f-iK-jbZ' );
define( 'NONCE_KEY',        ')D[dPXBe,6V@SMc*^s+gf/5V[G(Qrd|]OBNo~;uG^FZP`O#q@pEM(bg68H{l`5:(' );
define( 'AUTH_SALT',        'SjaOjCM_h0;M^qW?Y%ZuXI_U^Z@^w=68H7yLLb[:cHJZqQbcuRP C(Z%72qxTu o' );
define( 'SECURE_AUTH_SALT', 'mDye]GJx-bLuW=U6AGC%RXqXa)7 t0yZhJ!3cc3SLfiJ*,NeIml^Pe!h@N}h`TEX' );
define( 'LOGGED_IN_SALT',   '.`xo>5YF43Gy dNM&k^ @aec1ha[HE.AG![<_9@ &g|M::Z[Nu<UZTsvMJ*!FL8Z' );
define( 'NONCE_SALT',       '0o+*mu^}{rE.={z`C7gKA12n3DrgTU!G0Ry0[c;NYhL^pM{Zz;z1g!gKbIMn1kg-' );

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
