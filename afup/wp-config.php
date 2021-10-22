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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'E.5_@T90R EMHNugC;$~^^>YC~T0yeraR^G2n@|K6A{g~+IZ#`c{i>%Ft.mFQa&F' );
define( 'SECURE_AUTH_KEY',  ';|=!;jpA97M;->*oh*c4RbSjkF&i3XBe!=IrJT`g[j8#.reP<irbtNR&hkT-^+JH' );
define( 'LOGGED_IN_KEY',    'oMDBLHKr54)h-_}B,Fc#>ac6;T+Q5rYjR5`E!JBe[rd%^FW=8./L!i5Q;M]!8VCG' );
define( 'NONCE_KEY',        '?_rr,[|?gQHX@Eg4`,1~_0`X)FidhHRc{rHjn4kUxYJL`iwOZ}2M32|Rqb1,&KL4' );
define( 'AUTH_SALT',        '~@WIy99F$6d(,96 A4:ZSbb0DM0zBGz]b NK~4_w<}rjP4^h8&J3;^0g73Cx24/w' );
define( 'SECURE_AUTH_SALT', 'f3w3J]h!brAq~~YN.XQBNzMSa[^{BT7ky,4BSK>F9,488#u?@+bwf_./ayGhYIO&' );
define( 'LOGGED_IN_SALT',   '5Ui,zx%kI-0E JA7w{FmiddaOArk/cmq&!AD}ssD-N3)`qld|>S763&=*|Y2{]:%' );
define( 'NONCE_SALT',       '$q q[G][d>MND{0$APDYJ?X]N?W[(hM[1?,6Ws,D>zh%qC3R9lOxI%FF? ~lHl@8' );

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
