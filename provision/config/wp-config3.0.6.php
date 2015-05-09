<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress3_0_6');

/** MySQL database username */
define('DB_USER', 'root');

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
define('AUTH_KEY',         'ry3z@cMUT|d2 AA+>1^vdh;xd-YRPp@VuCQl3QxRc%];y{jhiAkf0]><-|18bjNA');
define('SECURE_AUTH_KEY',  ':|yb|LCQYt}_:.AhR%dt>Y+5Hqs1R|5A-Z iY4FpaLsRR){2men#fqG-6#D?7uy>');
define('LOGGED_IN_KEY',    'yF_avd1wW?LjvE9dP-;=VA5E)tI4}$nfCa]4o>tPWNwYS:@#Bp2Y?73z3c|(`5vp');
define('NONCE_KEY',        '8KHE&]wk|8:B[&Eq}4YFh+YI)H7JINA,(]G#7;xxh(a7M-x|X4Y0A#Lr$Ui~>nOf');
define('AUTH_SALT',        '.zE]6p}_XG.95V+Fb*M8`S@4|jp%d#MdMUv|K+)OJ;zC !}aIqF+7H7uSBhn^-/d');
define('SECURE_AUTH_SALT', 'j1,b=4qxmH1qYW`t@,u_9*L]W B&h=fX*XAlpz;(pu5-}{{Z-,j_J)u89:l9P KN');
define('LOGGED_IN_SALT',   'G%,-51[zb8ri4d6w0$nULfMH8i=z#;AZLR:a@r;.NY3OeG*x`P;!`kvBfyPZ|:Mo');
define('NONCE_SALT',       'H!MJq*b70:_5,7~ZyYw*syf}d+)X[;+s(4< p-12 jZ%-25RG`|_EwH[7ae}bw@P');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
