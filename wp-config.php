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
define('DB_NAME', 'jfviajes');

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
define('AUTH_KEY',         'uyy>jCv+JMLL]d`7J]Ar>=mAV:NAt5<RMtP#5Wrv>i1^:=:wPOKL!)^|^+PxGH46');
define('SECURE_AUTH_KEY',  '7d={I9$<TUs^kKHsNm~`$#?Pl.S{U8LFBR3U[Q/Di=ilnz]#.& OPM9bt ^HZ*dA');
define('LOGGED_IN_KEY',    'WeoRd7OaEN`;izG.cU{mC8Ry0DY~t`?.)f4xPHTUO2 ^}y{l%U&I3:=NGveX3x}<');
define('NONCE_KEY',        '=ux}Lac,x|@Acif~V6m=x9})2`9r2<m|@<}9[}U49xuqeUi2]VY;hBfV`.#gA)O)');
define('AUTH_SALT',        ',P*]>4LbMIoUY4}.$:~#=be*r_!JJo(?Db;]}pH{q9g:sA/%ocJ5nE4IcN>^RCr7');
define('SECURE_AUTH_SALT', ')IH*Q,O`%QmWgW.{)TORuZLg,%CQfE9QKxjZi-? h;]IBo/xM^cS`c|dySZ@1tu.');
define('LOGGED_IN_SALT',   'wocc|D,@!PPIT1rMONBsUaWL_,YM}vBTV{U&:X_[>R&]a]jn0zs|yQSdxNv|,{JE');
define('NONCE_SALT',       'Kk@uRqod6p9IN2,_&&uic9[UhD:(^apJ@(=X1bhb`ol6uonh8d}%y_Hz/DG}tFTz');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_local';

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
