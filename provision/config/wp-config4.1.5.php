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
define('DB_NAME', 'wordpress4_1_5');

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
define('AUTH_KEY',         'CsL^t`-O-PlqbRDC|`*Wx7P((~oQP!|p#sV1|;@3qQx&OD,{2}tF+6!DWoOVb+-@');
define('SECURE_AUTH_KEY',  '~10.Zb6rW;cO^y@.Cq^f4$g5Vw$d{)W_<JB>V(.%jjj39?C{]Oz6>6#pW|l-NV9V');
define('LOGGED_IN_KEY',    '<h)_Z~~E%Yz-v+[zmt/}AKUR?!T;j N,B_vlZ%+K{[fyiw:9B.poQ1&J00&{pK5)');
define('NONCE_KEY',        '`?GDkF}=B#Zmqn.-DPtr`YJ+U[lr:<LP*6oP<p^E&j[2mw:(-{5dIiLUG tr8<!_');
define('AUTH_SALT',        'I.R+9?|aU4[>^}C j8Z#3e+4Rw?Q<|[TD+i g/+-v:U}Hw]>NhANFIftW5mn?xu?');
define('SECURE_AUTH_SALT', '?5~12*;Ek_}3^G5*JO7ZY!Ry$IK{X/?Ka1$n#-9} s8!vdDj-Iuq+;MbtW~61sXD');
define('LOGGED_IN_SALT',   '@dRn~bKoC6=a8@Pwo[F8;=ovrW=xk!yye+M=A}})E qyA5~GWA8wcaw5;+g09nt!');
define('NONCE_SALT',       '_{Q(%QQkdQ,`c[s%qeID3,DS@DRzl+3G|A!0gYtYIHFBDkjGN`$]oEoCWO*o`x&u');

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
