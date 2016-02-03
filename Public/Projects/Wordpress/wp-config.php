<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'a2456026_admin');

/** MySQL database username */
define('DB_USER', 'a2456026_admin');

/** MySQL database password */
define('DB_PASSWORD', 'chirackal1');

/** MySQL hostname */
define('DB_HOST', 'mysql14.000webhost.com');

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
define('AUTH_KEY',         'D|Ta,zq{V +yrZJhTpO@Vz2p(cw96 ]RI0:E)c,=&-S{I;m!8tF9y,7XZ9bJYH_j');
define('SECURE_AUTH_KEY',  'vU+p6$Sx|5kCe,I}uZ-2(pOjedV}w]8T{Ed?0Ux@KJM -*:@]`aAk*x^nLx.Q:`5');
define('LOGGED_IN_KEY',    'LrN/u_[%RTGeq@4nH~NqJdv_lkm{KB)pzi~+IspzS*F#d6VhEH]spO4C#EdSe`&X');
define('NONCE_KEY',        'v%0uS[W:gZ;Z}cY]gUXx!y|%-ECh*Ts!7:MT+q0u-r;|7aoN*4WPh4tyj%W:%q+;');
define('AUTH_SALT',        '-[hl=,Yh>20wp!1e]-^k~xl0iFM{Llv}@-dwC=4A_?ky}RZ%(=drg9N|Y(ie|b |');
define('SECURE_AUTH_SALT', '?%3_SL=|]>l_&9jzug<EE@]J$.`[dTB#6#|:;RZB+8F Ct8(uY?I92`d!#=zT/u}');
define('LOGGED_IN_SALT',   'X?X+6{48WEQ:F3g:T*P~!4<.T)|E-DA8)MI)?V@09rn# (2/lg54-lT)]A5y- ;Y');
define('NONCE_SALT',       'p3oy5F9-4g0CfS&s2#XoC3cjz%./4mu*hT[XeNj&qXwA)j-X&QOJ()!t_>rs|_!<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
