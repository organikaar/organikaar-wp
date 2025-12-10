<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'M[p$b4_4lCUm?HNd&TLajRVGAVWxU5y,R%s%K$?1.r0L$Af{`,zyu6y&Zvp+#^Dp' );
define( 'SECURE_AUTH_KEY',  'pa0?q$#9]B#QF&Pd,YiZP;H;,cjI+3nF!a!yRO6x/neum>aXHMmevHr#`9Zta@#E' );
define( 'LOGGED_IN_KEY',    'cSxus&B1fx=m46LAf9zw2)F.CrhMP%GS{d=iW{Gx?US084+Qzy?z~@!{4-6??t7o' );
define( 'NONCE_KEY',        'Q_bM5i1o*hT#M5Ny}I;O+7Q+}}Aak}@P_A%a--<CKY8jG6$uVYfK0mdG;:`LjX]#' );
define( 'AUTH_SALT',        'GeRZ9bNbNsi$=E&aai0*NDqbm[CFDJ*Y=w&%&n.wq&Dnj!fNmLG [/7Ic3s9lM~u' );
define( 'SECURE_AUTH_SALT', '6[G|YoW/c0Pg. _Y%<ud>8}.s5eRMTBP&~-W.R~P7o?Bj(Tk5Jk/58G^7m88-3I<' );
define( 'LOGGED_IN_SALT',   'YuQ}5iHrtIHJJ 67fw$R7<xP|?YNtZkHd?/>_>O8i/Ik{$DuWLE$^b_yw+yGfzr.' );
define( 'NONCE_SALT',       'xW[0FS*7&#1K#N|R3)^]?Tw}E*f egMF$06f)Y%K/W>5jb0uLQl2yU:e.x>:?}$@' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
