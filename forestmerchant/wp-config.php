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
define( 'DB_NAME', 'forestmerchant' );

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
define( 'AUTH_KEY',         'T.0JYZ+*&aT:)oQ6c_q^m`SrLEb6Mv{-|P[upfN=R2xgh`mw|sQ+eU^vuk&2`:p*' );
define( 'SECURE_AUTH_KEY',  '9r2+/&q$*+>&+osO;D$|DJ`B@b2CyPm_lJrsv/|iSh;UT<4lluuMRmA]6rwPo1R|' );
define( 'LOGGED_IN_KEY',    'fgB3U[>N<-NBOP(dFEubp_:St^i~}/AOtH3QR9b+I17+YMy/vAT^uOvDC03WgjwU' );
define( 'NONCE_KEY',        'ej}Ui)&:IGn~M(+u*.Yk]^w-)  jw.cCMIWc|d>McC4y3n,rcl+1A}3MyQ<xPdaQ' );
define( 'AUTH_SALT',        '$btNfOW[i#Q>T!T*WOF7d2JzE<hTC]Qd]dYw$eM[rI$d;tu4,o6(9dg{~!$S!n0F' );
define( 'SECURE_AUTH_SALT', '-+uy/!f!d:NTsLU*E`@apUh6Sx+;]sG.5CfGj{%LZJ3Zg%[zfe7ybro6UNNgDK.f' );
define( 'LOGGED_IN_SALT',   'kA]n)l6*SESS9V4JXg!aIFxz1S{ 9@.8gN7%UN}*}gn1s ]TP#~akoGNgOemrg!A' );
define( 'NONCE_SALT',       '7%JiNuKT,A;~(?j:RyY|^K2vF<GE5){86SdF^xe>?e[e-v:$.N!hR:`bkoV566mz' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'fm_';

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
