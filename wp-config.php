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
define( 'DB_NAME', 'githubforwordpress_db' );

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
define( 'AUTH_KEY',         '$6i`W/hAdaX2z-<2gxQI ,OOh/a%l{8^xqa]pJhJDp&/-?$P>8dVC:AUz=Hzvg]8' );
define( 'SECURE_AUTH_KEY',  '|6sg#+*I|GWe/hOTH6Y0RzTYGLy;Y?Tq.RM2ACdloFQHWd5zH.6m*{!;A|g;bGT|' );
define( 'LOGGED_IN_KEY',    'P)&2$Nw8{IVl-6uTj&}]#8q@;/zxL<X{nu<52Gwx6jA7tTTl)+[$tW6f$$E<l(}[' );
define( 'NONCE_KEY',        '^y^.U-VZZZ*M1bQP.<3kcRybssCx&r!U$4c>dFFc~z/7I<xE2HO@7;eUj0N]4,?b' );
define( 'AUTH_SALT',        'E)rX][;)o= =r_954YIy|x<^qt>Mgs_6.>.7$oUhXJ?X1W!zEF#x!{>LftSYv`Gh' );
define( 'SECURE_AUTH_SALT', '$go3t)iNnHA1j1L3hmr;-((42nR,X0Vo)Y0).ku{JFRVO`CR0R!asrv3uEmJ^:RO' );
define( 'LOGGED_IN_SALT',   'p1,u^w2X*CRD?pRatuO@=L g#!5KY )9!{Co/2Mf=y>%.BX8~*XGr&KsRPp4#5Rj' );
define( 'NONCE_SALT',       'HG8$B<lVKQ^3m^p88jIcMUNxpqaM)~z+GZ+^8+<-7z{w&Tj>gU#7-5d[L#wK=moX' );

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
