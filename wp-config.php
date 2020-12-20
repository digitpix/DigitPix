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
define( 'DB_NAME', 'digitshop_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '`<fk;fIO8Xjg@-s=IG(dXG$+)[(1Uegf}YZ{;sAB50)2[;KMRtSVp]AFaD1 be~)' );
define( 'SECURE_AUTH_KEY',  'e}4x<ZE<R,a{ulVRNad JwC`D=b-}@f 5d07q-0RmhJXG[-%PCC$9ixsQo0CXp)W' );
define( 'LOGGED_IN_KEY',    'oRj+ak/ n@Q AGk7HK<P@<ZKm,g[YZ9$Onmb,ZO:E/!U)X]}FVWa<^{X@#GGJ-h1' );
define( 'NONCE_KEY',        '5k+H2X4LV-&gz3Cz29KQO:f{<:!3p&qU3G}>;/N&Y](OL#;1z#R>u6lvm]FJ)Q+4' );
define( 'AUTH_SALT',        'wE@K$OG!Mh7MAVKbJ J_j8Dt0ql}>UJt-><h2/z,JV*-hK~HTF;JbG{am%LYEJq.' );
define( 'SECURE_AUTH_SALT', '?#?lGQJ=`tFM5@0AM$2C!n)GoI#8JiR5d|R%9>Rf@?e-qDcmr3sKivHO&yx7q0*w' );
define( 'LOGGED_IN_SALT',   'b3v1f|PN- Hk4n+Uez)!K!Eo7_8t*do/.RRNrp:=ys>FM[|g*[DP@c5 G(/FI,E|' );
define( 'NONCE_SALT',       'qPWP@v1d,mwaf(T3E=/PL3PdT[Z2re`kx|[QvI1%zO-3!ofwA-T3ak;t}~p`*As~' );

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
