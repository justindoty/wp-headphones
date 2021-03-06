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
define('DB_NAME', 'pro-headphones');

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
define('AUTH_KEY',         '.uD*~RnXgAHHI2TkMDMZ@%-ncs-V;(kP[$xV%}:Gnj3Gay>k7,i{Y]O#@C<j0?[,');
define('SECURE_AUTH_KEY',  'R!{91U8BqUMTo<0~,3<qPOJJUNBVw`d@gx 3w},7E8(N,^*0knHo]:QOMEHvgvOp');
define('LOGGED_IN_KEY',    ']~n_GK) IM+aoDr-)1X7m81>kV_(Brv|Pdlt_;|Vm<%@x1*Qsnrh X;`U6|?0/)T');
define('NONCE_KEY',        'm(n/ &L NX?RRZQvj6fi[e2L<i4=BA,WzXZlmJ&flwnV}QKm(L^w5m}~C2{%V!%l');
define('AUTH_SALT',        'KUABaRPC_*-}[4w1cT.-!$.36I}PBGz.]wGp]nKb}uh!;w)d#Ma[%7u6d?! (lpR');
define('SECURE_AUTH_SALT', 'p%M_e_%<xP1yr#+CblkX6xad<@?i[c4ug1y1v9[3fx0$FdQw W5j2=XO$.ys#Pqt');
define('LOGGED_IN_SALT',   'Q!UZXR%$^/_.UBLv|5>}Q,qU>*c|MQFn7yg&Vt~V`df<KVBQ!;aw$Q/w|dQ*S1!|');
define('NONCE_SALT',       'B#6Xz}U_s_kpxPBaZnEl5pX!neQ1uC(p5UN=t;{Qkr>1<%bm;b1c]1D<gDBXoN<b');

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
