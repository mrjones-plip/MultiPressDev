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
define('DB_NAME', 'wordpress4_0_5');

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
define('AUTH_KEY',         '3>DpUiO4$Jp*6+m6yPem28r-4.AJ%sx0-?,eFX6BwR^kOa;|SxVPE%HsGNX7^B<.');
define('SECURE_AUTH_KEY',  '*@ZklL9cQ4r|XR!-|qS`QG]-K,bDI$>*;S;vO|Y>MFU{^)ml!|=Q<(&-!@}BzqUv');
define('LOGGED_IN_KEY',    'D-7b(N,L$4w6/w!;ckuz~D[&n%8~H`05l-jN*UQ?Y3yj=]|me5fu/lRsme9-!PmU');
define('NONCE_KEY',        '4.@mT^QJzrZL+H-)Es:?2<9P(HBxB>pXi^?54Lr!-=Q)Me(*r<K#o#OF,;FDDI0t');
define('AUTH_SALT',        ';mY;wudv*kHgH)qZ]e%L*JTW[coi)^lRbfB@:EYf<C>-_TKbO~5~K-b>-F!McBA|');
define('SECURE_AUTH_SALT', 'c|MRF%5aXJ2jGn0Lq2S7C%GGqY36~F%,Ka!%<Z8olMmYN4UAYp5rAAd=:=!7].8n');
define('LOGGED_IN_SALT',   'm]z5bY+^m%vE9!U0Vg+A& ,O#fC_,~FGV R=rD_jjamRIA/V1IH|oHxi5kv(mo+2');
define('NONCE_SALT',       ' w@Pb9?}c]En^GR+60!&B<|c#0dcpS (xG+|4PC- 5$/`TjlW+btU8l.tsb6*t`W');

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
