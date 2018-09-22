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
define('DB_NAME', 'wp_goldurpg');

/** MySQL database username */
define('DB_USER', 'root');

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
define('AUTH_KEY',         '-@)gV XKnx&8!5j@ N{5xyCm!73YYNw%W>:RCs>@a/AsN0$^kmm_r]kgBgi6;P]g');
define('SECURE_AUTH_KEY',  '5A(LIo0d7 <,Iuo3mZB7p$w^w{E5-mc4VPzN:M#TL6q&*#9_Rt@0%oAWE.Pk~GCl');
define('LOGGED_IN_KEY',    '3d>`P7V[Z$U7MmXioJVY#^oS9nsGj,ipZ[19.d4SxhkkY6v-=@rtc<+$2YiMg~lT');
define('NONCE_KEY',        '+*JD3}XDzh&58bT-[DR^rEk&vi?$![29K_/7GfXOV%{s7nmdy^P2KL@P_a<%1z2t');
define('AUTH_SALT',        '.45KsrK^vsg]9m+1<<z15v=(6T/&iW &&WoZYEX`?.y@ JJJ@;qiq#u:)bgt&pTK');
define('SECURE_AUTH_SALT', 'zsYT]H&P<T41hJ]`TYt DKQu#,}TQ}YuVj.,$wGaOk%fuC]V2TAK&EXbX1Xj?O8x');
define('LOGGED_IN_SALT',   '6LDwQ&~o3c7EGfwLS&O{fHlp[3B1NIeT$/k<.hKvSu63.{egpL,q:DUVpi?eSDpH');
define('NONCE_SALT',       'U/Dp%RO#0XNN*rEnfq<v`DFvaVybpT(FU|BAP3nHshR/R[{|)ON2,EOC45O>zosz');

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
