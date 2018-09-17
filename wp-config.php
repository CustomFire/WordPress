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
define('DB_PASSWORD', '12345678!');

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
define('AUTH_KEY',         '9sVQf^cywf_o)UEFk9K9/oAIH9N_Z0mvB<.V:=X ;a*_f`G$h> Mh^7,e[oAe91_');
define('SECURE_AUTH_KEY',  'V|7JJmu*{m^whQl,|u)JH#qc}e9^E%=x@vYNHvSn)S+R:[<Zbr(df_$Mcywa0(,%');
define('LOGGED_IN_KEY',    'aONE4?c(i_$P?cCs16a%+[L/l0KND?Q?EX-U,Yz[JN0loSe%nOH6^}!3Lmv38GGo');
define('NONCE_KEY',        '24V_.`KY_E2A3;/1Y7`;4 7130)WoO.#<=-<%] j@`x3g$oX(73Z@TH~JxYh!k24');
define('AUTH_SALT',        'U/U.OvuouWl#5:p  !d{/&Zt(S}x@R7Y~g7 iLgLYoqYYR+n>!s61-iP4*Bd}*3]');
define('SECURE_AUTH_SALT', '$vL 4$}]8>dPD#j.B~OE!4CPp%p6GZijjxj,/=bmBZI&#Lw+EbJ:kY_Kwz=)*KFg');
define('LOGGED_IN_SALT',   '<0Nlm5vZQXOiZ]Gz7;W%gBF{/>4KTLgIqoM:0}Ke,cT#Kk%0CPH4K<|Uy3>]5;,z');
define('NONCE_SALT',       'XpZp(y:9p6x`>F_ a3ae&8/(&Y%Ai= K1$=.M7JDZLo BIA#Pa#+9K[MJfpxDf6X');

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
