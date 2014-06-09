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
define('DB_NAME', 'camdenc');

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
define('AUTH_KEY',         '^F1&:}#`B M3:7(6}iKDf`w70H_3J0&H#$3#J=q1S}SXGJ]``n%U&Lx+aMth;1.D');
define('SECURE_AUTH_KEY',  'J{vHDjc-]s41kNx4p23&h=`@CZYB&Bhm]sj,MwK|&:5m`u83,](|e%}T]o!E<AJ-');
define('LOGGED_IN_KEY',    '$&8vR(].uc.d%qTh. vP+4qx{yO80fc.0`5u;lw|aG?D}f%qQov-r#3:Pp+:<+|%');
define('NONCE_KEY',        'JT5pv5c:(N[a>Y J_!lCj^~-C_qhyD0R!iK{N=kQ_k+C|,lvV=1VN9B9F:Mlfdz?');
define('AUTH_SALT',        'U_JC.AdYEa_ED`G:nRF8 7}#??XJSCESFL~|U<0q Dr39}9.(mJB}T[g5|`U})H/');
define('SECURE_AUTH_SALT', 'jd$q{G}lusX=ZVAxUTiMUhuhY5RdX ?kcnbdjkb+fP5k+D <!a)o@|9FDRB_@VuM');
define('LOGGED_IN_SALT',   'kM>)}OIh-x)~=9}-6y!{9G|0/LS|}l*5w|S)a}oAS2/M$yUQWH`m-h+?Sf^x.L#|');
define('NONCE_SALT',       '?|5b*V|Xq7^HC-1ZsxO9|N(+SJQ1Z>A~:K`TE?Nv0K260C-cSxe;$+@ukE>}se6d');

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
