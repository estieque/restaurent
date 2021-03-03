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
define( 'DB_NAME', 'restaurant2' );

/** MySQL database username */
define( 'DB_USER', 'restaurant' );

/** MySQL database password */
define( 'DB_PASSWORD', 'restaurant6474' );

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
define( 'AUTH_KEY',         '=Xp.-+a>;|K79P=DdWc1b6,slN14E>U&z&NND-5T@]%<-vbr!wQ/SVR|-CDhg@l(' );
define( 'SECURE_AUTH_KEY',  ' }VbQ:+<pAn5T$:RK_q@FDP@ccviY0e-aXUvj]xg++:*6YU%@2.T|9L1.46DXIi<' );
define( 'LOGGED_IN_KEY',    '^wbu41%7~`+ R;BP9pBfIZoRJAI*t;q[^0i4Cpwj|FpscVAzD(aUZ;6-6C&rTVlm' );
define( 'NONCE_KEY',        'UZVm$p ?_Gl<k0XAcjen$H<iV!0perV[U#<<F+F]47rV!*T]448*Qk_yaG%s 3^:' );
define( 'AUTH_SALT',        ')59tx-ah,h;zy-)T3%#`ksA@dW4I`K)AL[r6BG`1OP<B<6H=+ ?-Yjj.0p7}Q0#X' );
define( 'SECURE_AUTH_SALT', 'S+RYW&p5#Zip{ 8?[XK(NXe;D?.0l^c`iFluVeVc_+)dQI)5l8EIJ8h1d5YM4)[a' );
define( 'LOGGED_IN_SALT',   'DD0m:ke?G}NyGkEDGD-2P6L;)uD`()kI6{xOG6HPek< >_uJA]fDgXYfn5q g!Kr' );
define( 'NONCE_SALT',       ')iV(~k-i(ZR;|/w(7iH_Ii<+:0s:ZG%+[Nz,C#K;<i@})n1-SJ0:`xcLW@:eSjw>' );

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
