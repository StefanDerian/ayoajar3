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
define('DB_NAME', 'ayoajar3');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '`MWsO~E46hgNLdA@+>pa_;E5t-h|CJye]iYj8EaNcg-;,)p<u;ACUtd)JRD#vixj');
define('SECURE_AUTH_KEY',  'YjVgxa[kcyzf+v05V[1<y/&W 3+Z?+(NVhm`+vtyOW6tkTHv29$l(R=TV8Od@U{Z');
define('LOGGED_IN_KEY',    '#(j)MR|A13fj!Jg_CmOpL3Oq%nit0t{sin_-HY`vr;zga-sNBLPdzcb4 of$?A-y');
define('NONCE_KEY',        '3&u?.m3ERHu7w!ezSx^yWaJK |q`v<4G[[IW%(v#|s -jh<T%+Qgad-W%cQ?%h~X');
define('AUTH_SALT',        '(M`Tt|xR)<VIA{|uG*cQ!tp<7#GzNr$zUM;S[UyUFzgbPD.{2d2UggokKAJr(j b');
define('SECURE_AUTH_SALT', 'dwrUvvd[?2?cQ~)|;8kWzk?Wl`@0;JS-)$Y-U`gz:uR/o qhqhR+<aL0FqSM)=xU');
define('LOGGED_IN_SALT',   '8}cf(D*mW^<SW@8;Gc<sMq;)u)GpUa`bUwzty,VOq5-PcX/&.+;|JP1p3R7hHZV4');
define('NONCE_SALT',       'd%g^YY(zKCJ)?JNy`otU:q5#NVE,iVHwDBiBJUw+#owCR^i4*g6J{%gfM?>XE.je');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
