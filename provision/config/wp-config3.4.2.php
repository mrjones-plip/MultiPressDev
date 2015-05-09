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
define('DB_NAME', 'wordpress3_4_2');

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
define('AUTH_KEY',         'g-xU$c_&5HyLN|Cj~Z>C!nyiG-J7r(_N0d=Tgqyn0],O#X>@S%`G_QVqXEQ jEaj');
define('SECURE_AUTH_KEY',  ')+mPk<_T!n?$DeV2&[?Bzde+AG#{r/G;giP)-LW@r(Kj;pnLr#XY+OIJ:i7+fgnP');
define('LOGGED_IN_KEY',    '4[GG_l4g)2<PZpLpZZW=}$ GCE~D@RF-2B!zXWg i!!qN{$0X@fec+S=E#+.B0s2');
define('NONCE_KEY',        't<S):wVb1Nr<CIa|:sC6pXq`=Gf9=EWRs+gY?POXYPZy3s]faeq=%/l::PMdQLW[');
define('AUTH_SALT',        ' y@)2Tv#!s*GoLWie~QWrbQ.jTMd<E+PWQ0-<xiKMg? Ot7/&L}Uu; @>5?>#l_-');
define('SECURE_AUTH_SALT', '+VA@-4Q][)~I0 1K-L)5Vyl,0ZT-OKug)_5p^0e*,M&z]Qa4rB6D|||U?{UbX&8+');
define('LOGGED_IN_SALT',   'g=jf;v63>Y-vrJ63xYA?f#:6-cSVs_dv8s|? -~FZq&9F@567+beOCAO3aIO jOr');
define('NONCE_SALT',       '+QwCK}=I]C4PwGAxz`^x~J@gh~;O3azaGH [c=~.S+v 0>iXw^- t^yW%kxam;-D');

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
