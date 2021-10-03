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
define( 'DB_NAME', 'school' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'FaMB5D5E/.]+monkrQI|2|3!!N>@.u`HF!*k`Nz9&I+T^Vv60axSE9|nlr1+s1n2');
define('SECURE_AUTH_KEY',  'EH1fxu~ycB( ^.(s}o<T[0!7|}7d?UI6woyJhpmcX)$h/x?WBIEh|S>$Y#ntH2i>');
define('LOGGED_IN_KEY',    '!S+WBcOPnGHO/O->$Bq^A$7[wJ]WuWvp18srnvM7DQJlJMg=vBe9PChUV`wJHFO9');
define('NONCE_KEY',        '{}m718|VY]-bEAK~QIAx+mL5V+W+JuYi;ISr/O<UP!*M`>f;7T!QMS.=F2*QZK+m');
define('AUTH_SALT',        '2U|-.7gG^cN8A^|F3is^~]0(c`|^`x&as#E5*Ks%y<a?([8qX9Fo]*}S|(9-CZ&|');
define('SECURE_AUTH_SALT', '(OdO$cZ:pvW%M)}g;b<]}ZT<bfxU9hfRb/-znQ(p>I#ubc- HxmGKGur<,k+tA=x');
define('LOGGED_IN_SALT',   '~+ycr3r7`-*6wxm#zu}0mDa+W7GKl:|!D{Yo4SW<-g1Jc,3HsT/ExoF5MIwB?`7F');
define('NONCE_SALT',       'yeY:hE:fxf(dA56N*A[g ~UFa>)8kvI>tncR4Roe/RI_AE1y-KQloi>rXh/u(;}Q');
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
