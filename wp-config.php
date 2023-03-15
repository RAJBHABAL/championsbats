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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'championbats' );

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
define( 'AUTH_KEY',         '0SxK;h8^4KR6#UJn@);CO-zRyU5c8jpMzyawo/%)]zO1^KTl (zQ9_SL>S* 3,$0' );
define( 'SECURE_AUTH_KEY',  'x[^e^PDs[&|x|ygkdE=?]XJokXX,Loi!Zp^z= Y_,+`Jzl-q,8CNN7>(%%b+5-Ne' );
define( 'LOGGED_IN_KEY',    'y?z(@^FZ,b|X{db`:H|9g:$(u4eV*R+_0Ryj~=F_r[vQ7#B=r9Q4oCn:Q;(8bL{7' );
define( 'NONCE_KEY',        '6G=o58HO}L y*.Poq%X<5uCe=oKbS79X ]ZZRGxdYH_8Olct1mtaFt!efp0W$`QC' );
define( 'AUTH_SALT',        '*pws(fG/2bPd3BB/`X,RV39!Db29Vr(9BlE+aWifmAux8:s<l7y>h/;jPnl_w>:L' );
define( 'SECURE_AUTH_SALT', 'tMVzX/ZTQ)dm=WL8J8*=6$5a->-9)R_?BP5]kb5<:,Ho_@=}B3MWoz%RfZM0y.]R' );
define( 'LOGGED_IN_SALT',   'O :<H]gJ[jm>!qNhq.K/zXsTo=-YQS j&Ix]aQoC]YU%y?{vwDP;4PFQk %O^gmH' );
define( 'NONCE_SALT',       'xP j|$&H`ZYy&;zq|-kptp_~<mRBI E)R,!GmPa{E*soL8S,+y8Q}rY@ Ym#!R8n' );

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
