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
define('DB_NAME', 'acti_24');

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
define('AUTH_KEY',         'q5K>1@R)N?poB>o0i&`70vmequC)mF5M/cf)^JRh.lcHvsT*5V0kC0H*i-e$5=Db');
define('SECURE_AUTH_KEY',  'sNRD;{LO=Q[6TJ<tUMr{8y&J]@K/u~jxQuCqhF+COFG:Y$dQ>f^li8_D2j)%dfu?');
define('LOGGED_IN_KEY',    'IA+Ap0r5ro)bz&7MVsHK0j/sBH0K$DA}](.%DlN-R9+ `u,7%}Ur(~fgKJ]GyCQ~');
define('NONCE_KEY',        '{B8a|OrcJ*9k>4/;n2bt:x8v~O]@_[|sHl)=[Db(L6+<%X0q/KfH/I#Hw:/xy&gC');
define('AUTH_SALT',        '9ktnz[s[,114IPI2;w7LHOWb0DP%vd:y3 ILb#s/%[d$z9o_8X2Z`0?W*O]aWu4c');
define('SECURE_AUTH_SALT', '/HfG|U2{dNM8>8Nwa%>).LaYx?lz1h*Xq gVe=dJ:3qy*1mub6[*H|Q[!/5xFFwE');
define('LOGGED_IN_SALT',   'HB~f3irsGK9w<2wyBJ&oY2q+O#G3L|mk=Uw9dKj|Fj(-1@-@rU}l)+3z|pONxQfK');
define('NONCE_SALT',       'DUfXZYI?u4pj*>(S]-s}tQqM1{a;0io??*-9zDK]fI?)n:O|_l=vvAC6Q[wzCpeA');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ac_';

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
