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

define('DB_NAME', 'mybudva');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', '');



// define('DB_NAME', 'u451495');
// define('DB_USER', 'u451495');
// define('DB_PASSWORD', 'tuM6_eRsTiONW');
// define('DB_HOST', 'u451495.mysql.masterhost.ru');
// define('DB_CHARSET', 'utf8mb4');
// define('DB_COLLATE', '');
// define('WP_HOME', 'http://copy3.mybudva.com');
// define('WP_SITEURL', 'http://copy3.mybudva.com');


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'zZYvVIxEFLcjT;W+=R<dfOiI$[l=M>FVGgL-uC}Iulru)s125g|b_Pk0V>`RhE T');
define('SECURE_AUTH_KEY',  'bxzS0n#l]<8O54+8;8Z0Dc7Cx=J!S%y)SX[6%.u4y*>$WfA=M%5Sxe0EOrmj~6_{');
define('LOGGED_IN_KEY',    'b);DO]3rIYW_HHNc:IO?]~j>|z*Nx!AR!vu,yMN6B<+<k 5McR.-}[lJf)]qo7(,');
define('NONCE_KEY',        'w^6G4bU_z@b[4D} v@^YNB{`;b$onGH@`,i@/$U,NiMOJb#w$vv^?_2uF)|ol-4P');
define('AUTH_SALT',        's_d*atO8k(8GLNG!jo_QHu]w%i@BdO}Tio72Y]E{X@@VUOn1oC^@>n)vZ-Y8$GR,');
define('SECURE_AUTH_SALT', 'b16<y3WbW8,T2ywO ,kk:E.9;P}OgrcNJr.I!MFPl5IhV7a 7[saf0^)k_#ru],#');
define('LOGGED_IN_SALT',   'LoCfY/J;/L5R- (E(-zk [rIA,*m7~_{s*f9/+s`n=Z-Eev4q<hVH.Ssdta]`VY[');
define('NONCE_SALT',       'H/-;-dHf_KiupdV ]eK*~Q3S^+<wH0.4t$yj{aHm5A3=|k}pF+@Db^d v4G/P%%+');

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
