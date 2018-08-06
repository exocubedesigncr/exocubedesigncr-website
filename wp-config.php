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
define('DB_NAME', 'exocube');

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
define('AUTH_KEY',         'rz]CFZy?9hy>|Q4-LCO_.{@As8 56&~i]vB][dsSMimkPyuU wf_#]Y*o%1Dd=mz');
define('SECURE_AUTH_KEY',  'yApWRtCb-2OJ.#iuo.$NrYOSK4HO9Y[aI=t@n1Ylr7}%mXcTR:NCSjw$Y`t/Qjk|');
define('LOGGED_IN_KEY',    'K+7089JrHd!D!&Gv40#Bw7rl*o2UZ(`7{(1E(~.Y/p{{jn,+uOdlCbN}gE@s^b9v');
define('NONCE_KEY',        '(bFSzLc@x]=tgzYCazF&xxd-ob5,l~4@d+5F9<;[Q?}gnYn4Dw?z=|;LZ1C+!t4y');
define('AUTH_SALT',        'P+G@`WFC,>b^0|W}u40a][47aql$:Sm-mcH_KNZfnrY*]t%;39fCJ|]uIC]({x`0');
define('SECURE_AUTH_SALT', 'J3&nTl7B@^lWcm?(W5P1`?ZZ|[tagHyh9`dUP%$2ehii5f{rBM_~)a%z18?)a!.O');
define('LOGGED_IN_SALT',   '5Vii$0Q&I3=Y,.>2,u&-;0)uOR9aut*=S2De:(TFGv.fvdQ9$Px_lmMf#V,8u0c9');
define('NONCE_SALT',       '~WGSltUbd5Z),+79QhMly^WOP/f+!ZjPl+1}QU+XFY~kbTXQ;pRj*n>JyA0xb:`[');

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
