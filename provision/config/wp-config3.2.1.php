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
define('DB_NAME', 'wordpress3_2_1');

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
define('AUTH_KEY',         'qU33hP+DI^+FqeFMidfZ??Z?90QRhW;Dlqypl%^U1e{G^(6T!|N7s.I4])x|vtR4');
define('SECURE_AUTH_KEY',  '.5omYP]o_5+uHg}R%8+#iHb</u57/R5kT_JV5p%x#|**4TqBCDa*+Urh~9s.Fc-V');
define('LOGGED_IN_KEY',    '-U00M8kyNwmqPi*t<,AtQgfz:{ILKWH|RDXI?oD`D mEgJ=A45pLQG)gr7YE4)Vw');
define('NONCE_KEY',        'COg6w$[gdE*D+yc--3-`DXgd*g+K;bh$oR-qop;9`P`{>lW.:IG._3S:8%kY7Qb<');
define('AUTH_SALT',        'LZ|-P8L@t+zzS**G#xhrHr|Lc[PNo:M[+M<tZS C|.x/7/N|^TK-kA,@z!v5rv+j');
define('SECURE_AUTH_SALT', 'Y-7 I9D!y>2LVE%|t>5!RS?ZWd)S-Pk.lElo8^FX>v)=$-b}{ iE#-WX[_oFj?5~');
define('LOGGED_IN_SALT',   '_h:|*g_x|+{y(H.4|:UIV&^s^z2$]$<$UI=g1<<$;kfENNm|WG-Ko7t27XvneetD');
define('NONCE_SALT',       'hvt+Fz)2 B18iV(/ oBO(t>slp7ck#SUu^hve-Z%ohMsI<tdVAZdI~G]SFtACTR,');

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
