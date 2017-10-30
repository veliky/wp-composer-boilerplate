<?php

// Not to depend from site name options in DB
$server_protocol = $_SERVER['SERVER_PORT'] == 443 ? 'https://' : 'http://';
define('WP_HOME', $server_protocol . $_SERVER['HTTP_HOST']);

// Change url to Wordpress subdirectory
define('WP_SITEURL', WP_HOME . '/wp');

// Change /wp_content/ location
define('WP_CONTENT_URL', WP_HOME . '/wp-content');
define('WP_CONTENT_DIR', dirname( __FILE__ ) . '/wp-content');

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
define('DB_NAME', '');

/** MySQL database username */
define('DB_USER', '');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '9^^HuGm&i.y!|=l}A ~N7-F9E=!-[CPd<QTD8vkz12@D:V>]{]DpO~ aV}^1M-hC');
define('SECURE_AUTH_KEY',  'V0>olO|PWr4@DshC[|oF<$NHG6A+7nBO)jsLcg_M/dt[q$aiI92(YbUo<[=iG|82');
define('LOGGED_IN_KEY',    'kl1Q%YFDC5f1$culwPa;lO_Hv)7uQ77u0^Yu&Rm!:NeTj+o`G|$]%6$!Kj^W}4s#');
define('NONCE_KEY',        'm*_9WTp}1SVm.1Dl9D,e-I;{7b|&[<H9,KoxT4E@T545#+~WG{0?T>vQ=EtT?)ok');
define('AUTH_SALT',        'r$CmR9V`e1`OY|tb(OO*XdaJQ8ctd2TN#s6|G}c9|j ^oj2dCXQ4_iRcucLIFW*u');
define('SECURE_AUTH_SALT', 'w5|X}9n_-o!ix0/|,8WrT2;[#8Dpn-|B$CJ cTr*.Q$3pP!M~9y:9S7q=0&ce;6[');
define('LOGGED_IN_SALT',   'T@1|)8&SUZpq7(3>{Ipa-WX<htvZ.;2/wW6->Qh{T0w6VF%t#WY(MqAX fNIR!wY');
define('NONCE_SALT',       '[6ul|+/ mUdX{z, P0AZfa$<KCrsYWoGW$YvuE@ucW<rahL^HH6SkvmGG(_ltag%');

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
//define('WP_DEBUG', true);
//define('WP_DEBUG_LOG', true);
//define('WP_DEBUG_DISPLAY', true);
//define( 'SCRIPT_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
