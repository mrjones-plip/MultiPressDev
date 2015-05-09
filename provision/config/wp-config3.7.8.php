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
define('DB_NAME', 'wordpress3_7_8');

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
define('AUTH_KEY',         'gQBd?i } /&?3d3OJfg~P;aYr<GmSbN#[Lk;PvE]ny5i+pu{:):}j9kP_fK=z9=+');
define('SECURE_AUTH_KEY',  'cf#aAYg,9tY=gcdH_3iq`[s;6u/HfZ_P5x&vh{|To)6k|*3 )y&NM4#-<HkxUzV:');
define('LOGGED_IN_KEY',    '|NRXG{jAasJFS$r9}sE]jQls&|k43/7|6Gg>?rKRct(UgZ(5_xW/hfn@+d=a`.&o');
define('NONCE_KEY',        '+M-4z%5sP/:_DlfhiI|N??kMI.k:$+`r5WYAd7Q0bq2)Sx$]3zGl:mr_+<&)oU(q');
define('AUTH_SALT',        'vT-#+dlQ`VK^`+}vN,?t8GGGG(H0}tYa(N+vfJA8.yTW46c}9p|mZ(7|jC)? l8(');
define('SECURE_AUTH_SALT', 'vs7wu5||Qft1hPW?uo)J`e@Am/UpUvn-9{ff$-S=v04:&@yP|b8I$/TNfOkV/1a*');
define('LOGGED_IN_SALT',   '6eWKgzn(t|2]rEHk|:TZhB<I}Zf -N@-p(<&rEb<v*UNY9{HxAq>wG)yF&q)u]4I');
define('NONCE_SALT',       '*%fpO+K[-J#{i32AY/0nqf |k]h{_lVuwLlR_k|/3pu]NG&uQ<J_Upk>?Wj,X^r*');

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
