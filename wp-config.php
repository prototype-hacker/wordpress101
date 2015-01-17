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
define('DB_NAME', 'wordpress101');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'pO/*}R)U6c^-3Cx$M5Z}$KxF+<D0.t=i/-aF*YD|)9K<.+-mIdpA6U/lG$|?>P[S');
define('SECURE_AUTH_KEY',  'V1-j!:[gIrA7F3>HP-Krh+|Iw4ATI`O%=,_-1p<*i-4,bYLHw2oXRR~gD(2^;]V:');
define('LOGGED_IN_KEY',    '>7tM,}y^z&gVA~u_{/80EXIn|.^j:bkv6M#L7.GO*Na%q (9$$Xfe_muSuva/_`-');
define('NONCE_KEY',        'G2E6t|`h/n6jiwT9$pKCAs{q-CNM!YKA1x}FM=0|<N?Gu6!]SCjWKH{=Yv7m@ZX`');
define('AUTH_SALT',        '~Jwaj+O&EOFyPIV4{Ea~5qd+TJtTX[}[68f0.#ym;y!,{|=+B/R<)[~tDbd+r5>.');
define('SECURE_AUTH_SALT', '-1z^[g+Eko{.]-PsbAA$q<6z?K(.u{h+hWN:DV|L:l.8Xl99`ys8Q,`Vwkn_+_;O');
define('LOGGED_IN_SALT',   'FE%N>+P76:/6#^EkM) N{VQ:9&|>}37cb;pQdXU-_4.6kvY#/8+e;X~r$p6pjRwy');
define('NONCE_SALT',       'Z:[u-_#<7>V;#(w-Y*t4_k^!}%SFRoNyd_ >`DJVh*jGKQyicGNA7j_|GSO}R~^P');

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
