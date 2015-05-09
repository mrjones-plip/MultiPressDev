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
define('DB_NAME', 'wordpress3_9_6');

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
define('AUTH_KEY',         '#Xel4r+D<N+G2Y[~jsk.e1j>}e^.UO_S[}dvV/;>Pg[8swL|uj={w2_dN@@hrbMY');
define('SECURE_AUTH_KEY',  '%K$8>-#C+-CnZ|Deob2}$XMT-Z?SH|h[X`w[A-L./n*:H_Rq.91+Pz|H&#uNN]yi');
define('LOGGED_IN_KEY',    'Lx*~D*{-->h[{$)Czc^^G]1VeJ;.J`PSMI{O{s()FCzZ32||/$Mm2[c (X58v;TQ');
define('NONCE_KEY',        '~Tf?j_+&{M|`*WFS3L+c1Xi?NB-92~^#vZ{-K1}!H2R-|]kR$$(:[*OJ[J[lzS`d');
define('AUTH_SALT',        'FY]aRo~(W$L0UU?FE(|w&L}u-_hreM`rbuZ}lTH1-8FV]JH<YUN|&kst7+au1;cx');
define('SECURE_AUTH_SALT', 'wS4d:wFdDF!~A)yAw&^Z+vnA+V}r.291{<~83zTYY@A|nG<fOr`#q3-!`|9tOx2#');
define('LOGGED_IN_SALT',   ',Sxa 29@LQQGAiM:f#aF|ZSDqMG  D;+e>nYVPIgRUp$X(+xG-j-8D5TE?|nFLF?');
define('NONCE_SALT',       '$;I&vgK=ZE*.VsYLh?vff0H+tl=5~st$sU-6m`ftYj&Et$!imwn-A<19xpHAc;SX');

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
