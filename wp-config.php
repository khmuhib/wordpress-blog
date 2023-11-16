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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'Z_3,s,LsS<[MQlt-kNz*`fOP*<xj=SI0GM38#{!L;kYS@fPZDf2ke(d~FK/A5PP6' );
define( 'SECURE_AUTH_KEY',  '+%1o Toa%-eu.ga`o) e;iVln)}9Hhz}ldv:,j6P7TK@*@o~qx*w-JvAsrirxFjW' );
define( 'LOGGED_IN_KEY',    'Sq1yt[tY~kxh0qu=m[2apOIz>UZ{vLpcPm/Zq_]@-T=8K-Z}jz?uCPU UW;px<hq' );
define( 'NONCE_KEY',        'T0P6yNY}`SJ4_NU!tnI2dJo@V]L6^O|XDfTJ4VG{M#iR-w]Vw)sHy/M!J#r9*?l*' );
define( 'AUTH_SALT',        '~oh7xf<$FM5_a3JQ.3$p?TFt%W+O?xm7F&ieMo%)?Bk;AW!]q::qc]S=0$ @v]:2' );
define( 'SECURE_AUTH_SALT', 'h+LqEq?#Dkr14/DO1{8k$,OF~Dlz+Old,~mK^kR15c|hGgm.(%^#IqJ4fbQEvx^H' );
define( 'LOGGED_IN_SALT',   '3cq|B%;ry b2Pkm7ph=L*w];0m0k/X4%y/?pGqkntg]Mih$A(VWX]VtYTvEu)Zq5' );
define( 'NONCE_SALT',       'R! >E`1`N(;!~)R-4ojsi>B5qp_]q# /MWaoJGIBi2$!d@vsk!0MerNShH$7H1;6' );

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
