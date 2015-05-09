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
define('DB_NAME', 'wordpress3_6_1');

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
define('AUTH_KEY',         'S/@H-bj1yb<15mi xd4<p}KLlm<2 ue>C#|{]$sw<p|(c/35,Gn%;b;Q:2l;z+jS');
define('SECURE_AUTH_KEY',  'ei**(C^5#JqI^ORLP0~sJ-=*slt.yi|K-hsLHT$nSxv>`SDfE;Orgtr`E-*GanwU');
define('LOGGED_IN_KEY',    'Cs}A,U,05o8z.v|!Aj|kPrAFlsiXC$XYK)F3>1o|9`4APf@$}y-/wV,aRx2O{?RD');
define('NONCE_KEY',        'RJl;:EI>0j`X(o(O`4SLKRQ58.F44quO$R#`b$Nxwzr8~K{t?[2,ryVqpNo}^,EN');
define('AUTH_SALT',        'S-A6|4-$C,mv>T`|gwoeer*bdqq$10ETf~c<C#[/1e93A*FZtJR4gML9vMw_>1$E');
define('SECURE_AUTH_SALT', '?4?8!%UWB+j@(9vg53H{rM+d|W|>7a-+^dm1<lmfIq}lfW|~{_N(  Co~b2oKUlk');
define('LOGGED_IN_SALT',   'riw?`.J/}D5}MPbPZ8|JL`e#EgbyN0>iTtZi=?eM^AP_4e9z!f5NgWDmC`wQM;FH');
define('NONCE_SALT',       'GW69v2ponL}D[La+u+P]5 i//5#cu#zY>U:G_Q~HB7o22S3#+zOb@W;|r8+?zTje');

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
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
