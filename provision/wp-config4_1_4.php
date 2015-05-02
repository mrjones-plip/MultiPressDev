<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress4_1_4');

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
define('AUTH_KEY',         'AN$q+b1A{9sT%2].E--l`IpWZpp3E_kB4XEM}~uZiUFK@c]$%^3SK7DD2X(-;!lg');
define('SECURE_AUTH_KEY',  '!f|!c_K,~ug*2}Ze;R9f.WgXzXVk9UtV.xT&d-CIKAxbk=:aC*SNkRnwWQgkLPy_');
define('LOGGED_IN_KEY',    ';po0H2rs+3^1PT~Rt3[BGdgXc7:SC_zcb-c,Umr&xUkEP![D*U_+xTT6!*5(QE}B');
define('NONCE_KEY',        'hxGZ)bQe_L Wma. %D,t1lTBnsCWg^~I|}!nq%glxhx$p FKV&SHrxz|`u)-%Ae[');
define('AUTH_SALT',        'xJ+&~>mMd[.3)H~4c<y3n{:Wh:xo224~]!dQyN#LXOtT|X7P!{,zAl2=|.J55;U/');
define('SECURE_AUTH_SALT', '7cHS>usbKQ5*sBREuZ la.VkZ3pIFr+,t{d+jr:]rw^#R7FXkfVp|RbG2cVpIiLq');
define('LOGGED_IN_SALT',   '3>+5jJbOhL52Gkgiy89cL+eC+F(eYVMRx:T%{DfT1r3t463P1-*RBC{W[u2< $A%');
define('NONCE_SALT',       'JlCF PARO91O=E=|hlkC{lb-Wz7q5)Tic7FZVBA[7s,hLxQFT` UYw:5&e_.!zoA');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

