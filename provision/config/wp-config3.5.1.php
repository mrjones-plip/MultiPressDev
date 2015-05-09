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
define('DB_NAME', 'wordpress3_5_1');

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
define('AUTH_KEY',         'B=9hOy4No&s(1@jXil7+&~/fm+>oVgct&[|_+MQ*rP?z*=XP}*lZ-_?(#4|WN8}U');
define('SECURE_AUTH_KEY',  '@O0R%]s~eE;`)Ho]n=j/QG++D^wA#L Q&8/?*4Ee@cn~@@_$r,Y*?T4>U644shaD');
define('LOGGED_IN_KEY',    'o+^Q(EZ-+`^.2 >4`+-5/cE0@ cZZd)V~l/!WoG_nQC^N*g?>{Aib)zSJv*f`wYo');
define('NONCE_KEY',        'lj/xMstyIh0gohkj61rb5to*q%+b/x`GL[jnp?EwXRUVC^ t|JubJ!+7}[7].cST');
define('AUTH_SALT',        '+)+yZ$|0IQBp[_^!m$nAv=*8;|2p~VXg)<lI16M<Ss|=Y-h/T^l+uatC3;7@UX,a');
define('SECURE_AUTH_SALT', 'cJuJqD+lg!Nb[u#oyn>fyRa>pMl9:;l+[f)J>yGYn)3@*F60>T /o<>$FRQRcrZ:');
define('LOGGED_IN_SALT',   '$.{?+AqhJIqg94 ^hY#z+i-MuYPGVoL>CjEJM5HwEH}cuf(MN}sjrBw`>x=$t7h3');
define('NONCE_SALT',       ':T<66;dJoWMS|zdKht0r.J~r]dz<gK`)l1CPfi[ZLwQ.` Mv{/1V1i!$@c=s:n>~');

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
