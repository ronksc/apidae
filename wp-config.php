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
switch ($_SERVER['SERVER_NAME']) {

  case "local.apidae.com":
    define( 'DB_NAME',     'apidae' );
    define( 'WP_SITEURL',  'http://local.apidae.com' );
    define( 'WP_HOME', 'http://local.apidae.com' );
    define( 'DB_USER',     'root' );
    define( 'DB_PASSWORD', 'root' );
    define( 'DB_HOST',     'localhost' );

  case "apidae.catus.tech":
    define( 'DB_NAME',     'apidae' );
    define( 'WP_SITEURL',  'http://apidae.catus.tech' );
    define( 'WP_HOME', 'http://apidae.catus.tech' );
    define( 'DB_USER',     'root' );
    define( 'DB_PASSWORD', 'catus' );
    define( 'DB_HOST',     'localhost' );
}

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
define('AUTH_KEY',         'w,]~<hj}&vN,q{6nL)mvF[Hfe|)g)8CPdj.^(O/E$|GHc891K }%>s9 Oqh?7NP?');
define('SECURE_AUTH_KEY',  '-/,P=aNLx C_9d )sX`j-f|kf-RJN5Wd-.O@iy[+#/+on.Ex0U-W-Q`Yfu!R}O?R');
define('LOGGED_IN_KEY',    't^}m:9#Uj<UM[_9d*wldVCS|%JBa$XgsxV;SC=x1]f8Q[ijB?r![NIhCYW|bm|TL');
define('NONCE_KEY',        's(sOGJTd{)IR=H,e}XL_m~SdF-]HU+V{R<FGz6he] r (9X<RM^ YTa]xR+E1~lD');
define('AUTH_SALT',        'TMO9JI+Y05ehL3V+j@uYQSnM/0+Y3,+8>[Mb #*hLJ8/xZ_h-@p87t,=Q>N_9*cp');
define('SECURE_AUTH_SALT', 'xdHU+`oli[(f^uUDKG%0222zp9e8W21|mA|?B7W+F{7?c;+rU])u{j+R;9#`lp>)');
define('LOGGED_IN_SALT',   '&=o]E+Bu]D)+DwO2SN[<gLV43$W2hm+ f$& /p<+c6Q?|1-DMQg|*{(*a5Wq)I|K');
define('NONCE_SALT',       'J!d=LSn~+*0sA~ay4$6F+?%$/#CSBVUJwyOd}=Xg@L$LK)+!SON7`18QyGUy|_QQ');

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
