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
define('AUTH_KEY',         'GK3xSpB`>!7bY^CyqrPK3`L};MRL$;.>K Hd)EHXm:PvOQk|&s7{7x9+q:Uzop/N');
define('SECURE_AUTH_KEY',  'q=#xd}NVB/Y|tJf{&$3(u=x4O4@!YSkA1?~&@5!k`*gIfChqRIs-?J4hryQ~v}{:');
define('LOGGED_IN_KEY',    ')ZW7u(&DT,zli]A%d8|:%x]E?PN qi`/@WjX}|?2Kvy[!(K^ v9Q2q `>IN~ I8o');
define('NONCE_KEY',        '9FS|p]32XI,]rW/]6ffhNZT!P^KP@N9El$(=xZ*Q_UoX}9HL*7$VzRwL,e`>W_{I');
define('AUTH_SALT',        '::ueMza#!?@y]DH$S[/.)*v>EZjm<R364x3R-[j)n~cHzz?ON5MPEmeJf!f@L5#R');
define('SECURE_AUTH_SALT', '|5HwDMw:ikW]*jGEwzMSyxhSr,::*30uX<8l)`x_FH~3SahgO={_oT,34}^..B09');
define('LOGGED_IN_SALT',   'i#+s]BR=:h0F-PnTle/u>U>LO_;Yp}aQ&Z{/T9SB<_KBJ;f*f36h@)7m$^Zhy|+n');
define('NONCE_SALT',       '[DI]iXUbLb3ZerE3}/25p3KmoU#t5M)N{&D D!vO{4;9!^D-nV]m@qzHdc&cQu.0');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
