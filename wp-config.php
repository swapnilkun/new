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
define('DB_NAME', 'enfold');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'm+GTNAde<{b]hlSLfkbS4*=g{/j2<V,8dpx%1^l]#wsJx# aIPVb7.DTUp*M=otA');
define('SECURE_AUTH_KEY',  '2|RXao:.ZwsTo?XeK#+F$DEc*s7biHL+HP^r0EenNysO3h6Fo+}*%&|%&o2ZK yc');
define('LOGGED_IN_KEY',    'QqVs/Gv)b6^q8)^Jk9D]10Y9fvY,3-/z^>n;`SBvij@`E2}t2ljNoOEIx/48Y0ve');
define('NONCE_KEY',        '5abts*/3nlu3<2 H@}LOo?U9FJ)1u4osA{5Tu2T0WdCV*=C]^!y&1@4{O}.]Pgox');
define('AUTH_SALT',        '5I?Hr/m,*tXY: ecLYnaUQ$^sXp2B{l./(Nz6mI/M]xjjN{Hn(ei+ahUalh7*ML/');
define('SECURE_AUTH_SALT', 'GzB.,/wK9cLjeb!Ei}bIRnHPckc468.aVj1h}K{X12pl@78#Lg_</f3}N/ZApBR#');
define('LOGGED_IN_SALT',   'Y(A,.r |P(6E&{tHU:EkQRL4 QQc^~E&dv8t3U};lO5P?&HkufZ*.)[j1+~a.N,f');
define('NONCE_SALT',       'c]Lbjwz@dBfQ1Xg$n~`WFf> vwhoX/khmDPKTMel@&,Dj)uA6OO:id ~(,_$yHZ[');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
