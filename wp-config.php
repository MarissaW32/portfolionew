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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio_db' );

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
define( 'AUTH_KEY',         'd:l}$sR=oq/|b^qBhuv[y4`e](4A.Yeg%lNKnrvl)JsHR&R8t74DN=pg4%48]e$V' );
define( 'SECURE_AUTH_KEY',  'sk5AX8XpXA;eJ1:JAj#?][8Gc<FapzJk{.:9dYA4UY}5Uhpbl-m.v/!a;VNdL#2,' );
define( 'LOGGED_IN_KEY',    '_MKger(PYaV;rCD(ck9$7B<(&SSikIkrw;~$ 6o=8M|WwsuK|YmRZMl/;nkPzP(A' );
define( 'NONCE_KEY',        'm$oX7?JB0vD,mKmsW5?,C+hgKX,YmU4[~J5kJbZ?fWTm[kEl1ri+%lVu nVaw}D]' );
define( 'AUTH_SALT',        'MjX*=OH#WO__EYEc65A6=)U|<;u;dbd{w0Cx.B!*nG-0+DOqJnl&v8UDv,;zM}aF' );
define( 'SECURE_AUTH_SALT', '=5)Ix?*9x*B2|c6d8LkCAdr }mci$3j&@Lq}}6#h3p4/{*edwR*cB]asC2K !Vi.' );
define( 'LOGGED_IN_SALT',   'clqkf)E2-<k,C@=Fh<nq*V*1tSKLm/<kz7Px~oxE~0BDc82z9&?>ZG=AT5bHQRZ$' );
define( 'NONCE_SALT',       '1]?wyLx+?8T6D>LAEj~l*;<_R;:)2Wu,]=xn20a(!XJMX3eONEAdCb`Y]^(#o=aP' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
