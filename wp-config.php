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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_smidbackdev_db' );

/** Database username */
define( 'DB_USER', 'wp_smidbackdev_user' );

/** Database password */
define( 'DB_PASSWORD', 'wp_smidbackdev_pw' );

/** Database hostname */
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
define( 'AUTH_KEY',          'IgXptCs>(E^4pA4.~)(S1+:ymAv9jX-OL6I17s0$:Q>/eFN1#0<T1W9MxUOUl7r@' );
define( 'SECURE_AUTH_KEY',   '7q`*o0*Y:7U2+#,jM(>j>`@Qx+#iM%$77~NkW@#7ub4ZYlMImovUTEuuPCLe|Pg;' );
define( 'LOGGED_IN_KEY',     'f,3xm=z!I/K*0R+pW{()JbL+cPt~&Dd_,Ek/G{/Qux@1]t8KfW+n|86W2:!M[9e6' );
define( 'NONCE_KEY',         'yM/Vt>c7<tEg(*QYm:?K[f+-=N8*QhQ^yBIL<p]bQ_Nfj(0Zc=*d!CeH{}[Ur2/]' );
define( 'AUTH_SALT',         '5vddIQ9l82ZV~}6C$Ojl*r6vcg(vSXQm7dA(Zj R_qm*A%xDEDO@hxOPU.:uW2J&' );
define( 'SECURE_AUTH_SALT',  'g5SgS]Jw9&D24km?)dUE;H6v2e_,w0b a*_`#713,$V]lhR9u&{x&=$GHO2r/y7x' );
define( 'LOGGED_IN_SALT',    ',,,Ns;y7u]`|F7_,+fc#]U1}p=2B#_<ok~uldlG*L5Jk){Rv^T| .)$i=X^f|0h3' );
define( 'NONCE_SALT',        'XW&IY,nZ5<+zW)]YE9^1nq,/?4%5wuKGS`Oz>=G+[J0kT`sYSCb4Rf6<ERr0!gpm' );
define( 'WP_CACHE_KEY_SALT', 's|TNKhx iSTwiM)ibfP|okuC9d$D@||[U&1O3CKwQ!)Z=orDpqjKq6LOpzMH`jka' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
