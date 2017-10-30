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
define('DB_NAME', 'web_db');

/** MySQL database username */
define('DB_USER', 'wpuser');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '7hYn+8F|O}7qp&MFKVhN;z~&W{fkiOO/f`BChCk-Ypme]Jqy,j$&Hx>(.`f)HUlc');
define('SECURE_AUTH_KEY',  'j_LaT:GL{nL,qmF2ihKc (`pjj*%kzma+rUrP7+U n*dv_^B*!}Gyu8t08aDw[<h');
define('LOGGED_IN_KEY',    ':$mr+p*O,{f,4aI17arwPf|#kUT#9Nb.~8d{9KscL%0%7KUs-n8FR4OOb30(~rYn');
define('NONCE_KEY',        '7}:uDa)l/U*uPR<AMl$Zsiz<A2gBMPZoSl&>4|>4>%I$0q<)I]]!9(@/5ouK*mmm');
define('AUTH_SALT',        'ED|wBT0v&nb_,a4PtNc*4mFsXD#&sb9-;8Bj{Cc(B WFxYo(Ckz9H#4%>u<t !,C');
define('SECURE_AUTH_SALT', '?Bn>Rt7xMpNOxwmd<.yZp?u{JOgYEAPM!_U`WZ=tSdZYuR _D]tGW|$msi8$XbJJ');
define('LOGGED_IN_SALT',   '~{fw2 1^m8*-{P:w}&b^7fjKA!;|!SH5 N&]k=i.ci$)]2&u8K6cu|L2(Bc;T=hu');
define('NONCE_SALT',       '1~:4cZBSlm|p=|7M] X{R^[%D^?k<mJ 8v)?_vwci>$K}4,(%kXKj,!|}T5I_^H{');

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
