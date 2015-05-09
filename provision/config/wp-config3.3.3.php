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
define('DB_NAME', 'wordpress3_3_3');

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
define('AUTH_KEY',         '^TgZb/yl%N@1vaiB#j[x*VbZK~W,A*w[&.x-R)Wt<<V,D4k?)[e%D1m1$)#N#B-c');
define('SECURE_AUTH_KEY',  'yYL-*MRrPL5gX5Rs~B+)_^N-6R.%Z!;#JR!vjEEq$;5l4=hsPe[m|2]qiHjE)3=l');
define('LOGGED_IN_KEY',    '+;9`p[4h;rl^_9wxq~mi1oWt;N:vBw_w`=1>NTd(IJ+LV-X[Y@qyU{+;(%n4cMP^');
define('NONCE_KEY',        '=>/i0:$N9n+2j:;Y+c-YQ0xQXnbXS0trrU.^8$K[k`M~=yuZ>ue~|)d*)cN)RB{-');
define('AUTH_SALT',        '_l[GxmLC!_a7KUmwL}5!6hvJ5t|UY%+99*dA:QDlnFSC:[#RiHo$1rUv-6E2:N@V');
define('SECURE_AUTH_SALT', ',|T|Lb^m=N 10>Pj0K{Gv}9-.FLuH[7skdU1u$N~1R<aQ?l@S;rf_(ipi(=H>uE,');
define('LOGGED_IN_SALT',   ' E?D _2%fnysdGVKYsw%E0M_{:E=E<c)Ql`__><+Vu7kS}sQ:[B?aZRE8X-V{vQ ');
define('NONCE_SALT',       'SmL$XJ^1rJ=:iz&exnL8+7Sj}Z0F7U,EC-WZH&olTML$YK@H-Ta/sdrvvvMa`ukc');

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
