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
define( 'DB_NAME', '33w' );

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
define( 'AUTH_KEY',         '}5MNo!&`ldGL%e&LzTY>~~TN5k^`:{-LTP84V-z_<MWsf@6mxFf%Wgu0Fy*_(w_:' );
define( 'SECURE_AUTH_KEY',  'CrWUz^uvgwMta4v:yqidDfN%Y _y3^U87&)q1PM9hyQ/bC%a2Stf:WZSW,t!aTSq' );
define( 'LOGGED_IN_KEY',    'Wh>Q&dK<7ljAG}q$7.l>tw^CM^9%Mofo[R@dq3&!M47S7%N|gS>3kKQ[ 3mlJbn2' );
define( 'NONCE_KEY',        'nL{Gp&DPBCy=em1(.y6lh9UFB@%pvM3,QT9JX{J^9}a}a9T#zp:@A%):^ILaz)ei' );
define( 'AUTH_SALT',        'wT ~arfVlf&q$2 `z{n /;+eK3NCesVMS%e-fy6*EA5):yVO+UJdO2nl8Ww8y=0e' );
define( 'SECURE_AUTH_SALT', '(8V[+r`G??%rxk&h%^6gG5/7^2|:G,!1k_r/5@g{^;=B`OfP&%PR]dq7&!RzuxDy' );
define( 'LOGGED_IN_SALT',   '$$AxsqBvWG-NEL`YK`z96b#Q s}fO&%4y u(%xH=f[&IRro<2G-%e,slOYPihKnI' );
define( 'NONCE_SALT',       '8Wd6g$(CYO{KU8ZCs%GYH0ItNF2zF@Z$SR[QFuE84MfHyZVq}`W=>D+tbON_S@-1' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
