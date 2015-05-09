<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'wordpress4_2_2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'wERoD@wG2OrI;2d/5+/${UOvHz,dF4z`xPfdwE@fNrSxmY}Ej[=<gI*| Q`DRK:9');
define('SECURE_AUTH_KEY',  'hMZz+v~Z0dOXB+*%Gj`H|J8]mFBL M1wz2Z:,WE>lrv0]sqE/@|[+U.<K]fYm^h9');
define('LOGGED_IN_KEY',    'eVJca-GT]7O4Dby3{GPcDn}4^-8Y7K2R9o3hE=pT0kuuScAM:)kP-)[!_!TvhYDY');
define('NONCE_KEY',        '/4/o<|w2`@C>Bj,wDk/RD8F+KOUASLNJ`3uRLXiM-lu~_-m<6bGfx0?r1`Kq5Q*8');
define('AUTH_SALT',        'CT}*qM/mMzj$9c`(I1}L_.|2iE1HU(---:wmEM)J2^ciKUBKClH(9[-iwB=E* cU');
define('SECURE_AUTH_SALT', '@w`RK3j)2V@5Gb8%p`W1-6Rr%c]-|Pe7FL8z+-+N+W,$d #]eTY-v)!zls*8f&zt');
define('LOGGED_IN_SALT',   ';nPo4jH2hx E%YuSPoj/2ds1=^n*`e<XbRqA]yXb~J/,9!#_HB<kyH?L2ZoCIvgA');
define('NONCE_SALT',       'U2.d4}>G-PF6AqlYR}^n2H8uF5g|dsf7kKq/e~mXBv#;bV=NO].m@O-)E61Oq+Rt');

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
