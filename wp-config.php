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
define( 'DB_NAME', 'wp_arabic_academy_db' );

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
define( 'AUTH_KEY',         '>|L@<5U[Q0ET/o-myRlB!B$@JTeDbw@<ygE@:UH:{}46[EMrv1+_gksAA*?1S.Ps' );
define( 'SECURE_AUTH_KEY',  '*Y@w=$SzP3s6b.mGo5Xf-7)t#y6ltBW^w{_Txjzt5B!!O=N3wI&<Jvk.5I3W/}-~' );
define( 'LOGGED_IN_KEY',    'A+w}DeV<!KoYA;?r])dq1z6hk&Dtd*k%3WZ@U#ZFv p7]w1qLML`_3Zk]UHk|Dp}' );
define( 'NONCE_KEY',        'K+Ps_{oKV:NX4vRFmL]W~-XckU]B^qsIh@vjnWX)mKP2^)DZ[*%XcKU;-sHxZUlg' );
define( 'AUTH_SALT',        '1fF$(g_dpOZ10wb_bd:jA@6j0P.>zcMGz=W7R=$X)sBg~(e`vfdg<eD]=EyNX?r3' );
define( 'SECURE_AUTH_SALT', 'Ps2zF L,_1E}19C:3b@C-:or=5A2Nz8N3M*Vd`{4{wvLuSn8BX5UCm9uOvHP@l!H' );
define( 'LOGGED_IN_SALT',   '!:-DNwfrGf-L~(e%Ye3;I0DJI^t)PY1ZfE*V{WOM%O5v[G_ g4x$13u1Hd>*]e6h' );
define( 'NONCE_SALT',       '{PsS$J$,[i<QPA30<FA/JYJ`55Qg`tZ0|}DD J XApT2|t4Xj5}E%F2k kWaOcSP' );

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
