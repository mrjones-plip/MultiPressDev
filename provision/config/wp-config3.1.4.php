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
define('DB_NAME', 'wordpress3_1_4');

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
define('AUTH_KEY',         '6S!;oV8(9h*8!+Y]DHe2Wu-6^oE%3|f+d;.ZfLZep71/x8v1v%pf+(4fy9:E21}:');
define('SECURE_AUTH_KEY',  'q7ht9Bi=ap?IBT|-9vQ{]3d=i5y>pqrZh1)m!>5yJ{>,C+-@|f;ft&u!buJ,r4,{');
define('LOGGED_IN_KEY',    'B|Q0s]KtR`(ab~ H/Yh)>4${=n+=nuJq=C:cmqLS/;X?~_3HnJny3_C&$jG/c0bb');
define('NONCE_KEY',        'cV~16>A eyWE[ZrJ@v7&ISNU1lD>mgw{?FPOVD-wlLhB=p}*=-YN}MNe1-|C,,^n');
define('AUTH_SALT',        'G((3H+1%taYgQV6ma`?N e~*5vv^7:BlLdYdD{:PTb63aay4;kK:nxvlon0SFn}K');
define('SECURE_AUTH_SALT', '.C>0zLa)>,(73X,1|r|2|A@#iv:C{lH5JDFH-KO9N:;E+Jp+j2O_@LBCO{?C[FvJ');
define('LOGGED_IN_SALT',   '.20Y(xDp`N+*:D*IZ7^(|jK~Fi!/[[w6I,q{nwFsKH. (I 02wyA>SS_(y,A4Kp]');
define('NONCE_SALT',       'KSuD jZ=*W:yj39l1k?c7f^`pn-_|fVR/u]neI?vL*Pt&WU&OM2$hMdC3WsMG,R/');

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
