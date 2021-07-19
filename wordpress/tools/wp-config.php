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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wp_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'slx4[6YQ{JQD+Q}H$f8hV+C%+Sv++(nRn{BORkstatQ|YH`.lw#>FAie%T}u[.)H');
define('SECURE_AUTH_KEY',  'JJ(g3i_X-58^4Z#^p2~$@<0g4EsF4/Jjd>%{cth+`v8UC s9)}bf,R& z:+>;z-J');
define('LOGGED_IN_KEY',    'JwZr]UHO=qJL4Yzp]B>t/{)v3 O{%^f/di.3g{h{3U&mX@-94RfIj.4.~p34q)bX');
define('NONCE_KEY',        'Y8X~5|Z|zU0aXQHYAM&n-^q,knlGGno!g|wvQ}p%??(jM-+P(s|-[W2n&+? /*>m');
define('AUTH_SALT',        '#z%}iBPs</-i4I0<@m>Y!Powq6jO,3!Uw$x-I/MU><@Uu=*}pHNmE}<Wqc >1M{%');
define('SECURE_AUTH_SALT', '-0>sBZj!<KQG97$?Lb|X*f-p++&{&,7|,+{Vel*qJC[9_6:3_am[Bm|ks4&Qyx8P');
define('LOGGED_IN_SALT',   'P^f2h3@&=^.3Nop|++a>-,8cRZxJ||N-N4=*mF0gp!)[ZULS:(-Bb3T2OTb+=g82');
define('NONCE_SALT',       '8Hf%RlB3)3Jxb~_9t9+w]5ui[|8a(+L3,Yc-k4}+CoE!X|?h/@-B>:t>eh+AOc1e');

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
