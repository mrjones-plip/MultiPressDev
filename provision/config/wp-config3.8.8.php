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
define('DB_NAME', 'wordpress3_8_8');

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
define('AUTH_KEY',         'wWR&m&LUr`KAPBcXDX]2{i?<vFk- E UZ]|o.zInwKxI50ycQ-w4N|!b$=5j&Jd8');
define('SECURE_AUTH_KEY',  ')*dRnDD#5 ]}zB@l1M9lwvH-(B%|k(+mpN=bwN4:p19*l$y.(F:lb~04W~|7Cmez');
define('LOGGED_IN_KEY',    'CK<pX?=1>+I+I9#zPFPzN@)yOI}X#Gl-s2k-Arz5j5-+K 1T75rjae6RrlQ53coQ');
define('NONCE_KEY',        'l.CQk+?8K+t_d|C~|O 3u#LKN&-(y;2-P;a,^,?@IX-O9la3-htdmLF0+?3/Sa.r');
define('AUTH_SALT',        'Mh|p{1WrPO_Kk#gSI9oTKbef|%XEx,VA}VWppeT+/?^A7!I6xJr7YDd4PW<CM;*k');
define('SECURE_AUTH_SALT', 'U_{+PgrWyo,S7[^t-.)m%-;{hd-&[AI$|R!m8bc_.Dw!LBfE9T)+^G46OJ59Un-X');
define('LOGGED_IN_SALT',   '-K-2$a#hdu!dt,c2Q.9(bR|FdxPnIH-&)YN~MTJner+=f}7D]C`[Eo(dCg@!9:VO');
define('NONCE_SALT',       'G]|,Ik_&KR63P,B?Ujatx+^>zEG=z!`d<SE%]ekqB6KCr~^<iD+#S-jnhED.J+nM');

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
