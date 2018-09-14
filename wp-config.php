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
define('AUTH_KEY',         '%;xi6<tA|{8j%<5Nm9([n_=W3WbFR{&~:OAEU_E(Huy,u^<F;N#V=5?Z^,cJ[YRk');
define('SECURE_AUTH_KEY',  'CE|PZ}!x]?J?Aui.fz;[r#W(g1z(sT$-9:]r]*7}J:_?0$mI9FyaT1Lic0h)d,YM');
define('LOGGED_IN_KEY',    'mUOkQ]Toun3e#+4mK: OdU>w?OhTJ!M#cb{uNS>lNfOWUtW4?k_tAVasAZ0tFl&1');
define('NONCE_KEY',        'T/kn<=3($sBu|,9(F{,C9/g}<e%e$)jCP&!q@j={LV`KHCOA8`X@E O-.+!VBT7Q');
define('AUTH_SALT',        '-oWLmqt%ZNFFN$01%/3g<)|yg4&cJ^v?lsu-tmUg1D>_Fh!GbT9mig|4CmJ1i8&?');
define('SECURE_AUTH_SALT', 'G$I%DAYJpIv },:%Q=}-W/ gTy1_WgAyl1*6D:%s5hLjZBcQECt>N:ugew>8P<TZ');
define('LOGGED_IN_SALT',   '.Lmqh--ErgV5&!]D-Lz+[sA]`a<Mw_[s{4$_ESmyEZ*{Dro#q)`1>;d&`8s6w_K{');
define('NONCE_SALT',       '/=t;an,p}@$2}MqeI^-wL1u6g A)qv`ip?#&I[ 7>0o+7)i1dW<BxA6;?MvcxnHI');

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

