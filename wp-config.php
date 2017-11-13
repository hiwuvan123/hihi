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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'ek#YeKOsg2uKPG<%ZkjP* s<u[8mJIN odh6`T-.)HOO#RLh#M1!/5nvL.O[PYV.');
define('SECURE_AUTH_KEY',  '`mPfoGzuN~OA9~G>aKrMRO%{K`23-RaDm+N,mvEnZ*py>a^BO>k8bj<ew-*[R`$d');
define('LOGGED_IN_KEY',    'P7sv8RQcBW~{(h~,.4/90&Q!fg`3&(pr/j{&?yxH4t%xC)M(Zx5G(F[Tf4$2FmqT');
define('NONCE_KEY',        'rAiswEb*1Ty0PgYqfCF|BDaU1F)VK:~gi`vL#(Bj`AA^Zz#WmA`=;zLP}7KGT8]*');
define('AUTH_SALT',        'U MX$oV&UQFrnG6~=%D3ry?1ToVooEfMAxI`-p@x)rZwvemt+kq 7H7+v<KO]H08');
define('SECURE_AUTH_SALT', '|dW`5tW/Tg~Rp+$ (-WM<Euwh1? IV7@g(b-p8sNo3XB#X9]61I<Ak@^Q:(*9MB9');
define('LOGGED_IN_SALT',   'EFY|w]_E|[l_ojr9~xI(`7f9j>q~8wUa3Dg$Bm&A+bGyqCUlt)6orlaFw]PXpiHQ');
define('NONCE_SALT',       '@X><w} NxZqN_bwoj5kWuN_>:mK ikmNG]7{RlMOg_lt9#c2Jt7UE9Mu{C,4JPl,');

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
