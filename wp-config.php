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
define('DB_NAME', 'travel');

/** MySQL database username */
define('DB_USER', 'travel');

/** MySQL database password */
define('DB_PASSWORD', 'qqq');

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
define('AUTH_KEY',         'TW(_Qsj@NJr|iv+>U9EW-kxy+.CKYe|#]vtd^QkUF1(S0o`+~Vj=B:M.+U7~[TN~');
define('SECURE_AUTH_KEY',  'C 5q#P=DIzt GS{5+}s@,/#`by)`cK6!;fMQm_p(MU<TEngU$CkHF8%18p,rC:CX');
define('LOGGED_IN_KEY',    '0,nW{40z]z?+Kc|1[fz+n#hG+Eo}hjH^q1P8j}>#z7PLE2{G11`GCx;?B<#lj%wi');
define('NONCE_KEY',        '`(EC%?yL+gey)9Su9Qz`u8=C(!^4+e`5) wr: 6r:@)!M95Rh3X9jo0]DV->;-_;');
define('AUTH_SALT',        'g_lX1JPu&|K %1;LSdP.Q6v5@,Kp3q)nxds$PAf.1:N2SH{<}LY1b *+|.u}QKJX');
define('SECURE_AUTH_SALT', '1l#!|FiLvdc{c4TFy@$*EPvHp87MR1-O5J1.r[`/~}YSIY+e_UfaK8{%.z8MJHjb');
define('LOGGED_IN_SALT',   'Ph=l56~t!)_/EfmO:/a>N:~3ZqI I4q G{p9>HnGpB/x[2L=xE+]oyu4;3m0|L.@');
define('NONCE_SALT',       '}1Fi;?NnQ}* 3=91$*>z{K |DlD495hX{+Y(</h})Ex-YhWEu?~JL,hmFN VE]B#');

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
