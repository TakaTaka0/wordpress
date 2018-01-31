<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_DB');

/** MySQL database username */
define('DB_USER', 'wpUSER');

/** MySQL database password */
define('DB_PASSWORD', 'wp1987techTak');

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
 define('AUTH_KEY',         '$7jRE}n<gU298dKy|VHg1{+_:62}zJ`jq[NU4CL+nQp:@@jY4|ab![[jL6kl0y+X');
 define('SECURE_AUTH_KEY',  'W9Y16|dv#}cH7h!rECie{20^OB.M~7+4=vW@C|xIWxBXR`>}!9@Gm4SNSpLs$f5D');
 define('LOGGED_IN_KEY',    '!$k.i>1o9FSyfq2ZV&1.CU$8@7*}OOaS hkP}ilGc.-NXqv3H+6,X+hM3kdr:;n}');
 define('NONCE_KEY',        '-8OI! xdT&d}KX$K24HU#eQ_k4D0Vq.W/j2BlT-A1YJ^*{X2c,seXR54RLDI+#v;');
 define('AUTH_SALT',        'ta*WjDtv_5E-VGwMB-@n*fjK{f:fTc>(@u%@>hLhsQ9?_NGO8Y7Eb|AbL9|?9]?9');
 define('SECURE_AUTH_SALT', 'ZNn1R^ih[;}Wt-&Ap$xmB&|?S=lDM^E;C,_{LG1a-`c7rlv-x>WZu]_V{6WiLNG~');
 define('LOGGED_IN_SALT',   'T7|t0Yvo<*`[9O2,&tZB+Ll+r&r=&2Jb~Sj^qjBKt@)5BC{e8[hwO}I|!GIIg+2p');
 define('NONCE_SALT',       '*PpP>XaCK:Q~d=!;38o1kJd iMrr.H^B,M_8MDmu:434~a$c&Kry4||#&dlR{,j1');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
