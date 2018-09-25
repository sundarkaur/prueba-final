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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress-prueba-2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'QV`4rvkqeJwt4RN~LY~gb(b9B@Du$@k-;k0y(4+%FJ:/zB-cPMb0G zOLDr v%Ew');
define('SECURE_AUTH_KEY',  'R3&4.:CJrexYGShC^|QcT~O-07=bgdJ:i$a%BxtR6V`2qJI3P!i9C!{&z_XCEH4B');
define('LOGGED_IN_KEY',    'r04OR79ki8@3^SNu]K4GWY2U4hN?TPy`1nswF7z_7ciH(8e(f5:esLEYuj,EF;W#');
define('NONCE_KEY',        '%OI((h=B6#lHB^KjR($?TPs~S3A~GjtocC!5[l/(K4] ai87i&Uu)G<AS$Zh$J2!');
define('AUTH_SALT',        '/)^N?1Bv?}#ctu%>)-|8l(k|@HbF|fj4:`C{A8_v@Qt,v+2L4P&m5.Z|`{aRl[u-');
define('SECURE_AUTH_SALT', 'l.fe2,SUW8l2d-*~JFC66>;?$0G6_8peK>Uswq.aWc(?nv?Cyf&Rm-<;6m}zaBfW');
define('LOGGED_IN_SALT',   'v;l%P;Dl]DMsgmr<MSkF?Jk-bA{XqF(?DRb (xcM+qY:d~9o~:+mn+sL^@046zyM');
define('NONCE_SALT',       'y/0E%|uhO~?3o-qTh6,!PR3$_:SoK`i`1|O/g.h)QqQ,j7u,LASaO8enF@axcLn6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dl_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);
define('WP_DEBUG_DISPLAY', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

