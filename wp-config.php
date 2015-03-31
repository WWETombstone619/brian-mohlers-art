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
define('DB_NAME', 'brianm_brianmohlersart');

/** MySQL database username */
define('DB_USER', 'gotosleepmrsocko');

/** MySQL database password */
define('DB_PASSWORD', 'v8aMaMKrdRpq7DL3');

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
define('AUTH_KEY',         'UFq90rP*hZ~W7r!_LB+^@H<5rs#Bgm-5G]hDM!1I6X`bM,A%( 8;3a]g|pVQo_<~');
define('SECURE_AUTH_KEY',  'n&rEg%]YJ.Y-T8#+]#dm{+XT;*R#Bt|O?+XPF_)+7c5pzA)~}: ZYx2mMrB;C;6y');
define('LOGGED_IN_KEY',    'Znool>`>`-adRRp&gv-f7,+8e]0K-qc2fZC!M)^o5UG_*ts|>@;HT}u@:aCS0Sub');
define('NONCE_KEY',        'JB:56O,I$DP4U~;08sFmZW8AE|+g,-}KQEJ:R/7[-re:}-lJ,_(~n>%y5k-xgDTF');
define('AUTH_SALT',        '*|vjvY[`-~#o]Wm+7kJg`+mSUBx|fTq#+fNENv#ZV]Mql4dujq9:&{3Je]jS096;');
define('SECURE_AUTH_SALT', 'cnimz>^cPpd+$r6In8`WwFkq:}u7+HqGlj{Yg4tQ,N14?+H/QUS^BM,H8wuQJf+j');
define('LOGGED_IN_SALT',   '>f(bLpfTU=|FRp!j6&/ia@E#9GQlBSH[ y^[~8Xd|#+u}e0t %%/ygahB.TEbDSc');
define('NONCE_SALT',       '8=}z~_IeoI^:8-)<}&f&AXC.Gt+&+UM6Y^:Bfk~OZ}P0-K)+v_S4Jj7.u/4pG^n-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'snowdrop_';

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
