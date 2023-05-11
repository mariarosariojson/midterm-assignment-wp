<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'final-assignment-db');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', 'root');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ';[s&7/0CV%:jxpzzPB_#&.g!SffmQ&F|{y z~j2;E&M,`J1ZU{03|`Cu,2at6N8Y');
define('SECURE_AUTH_KEY',  'm0GXD67,N;-#4*h&Af~|f3/hi$L$&lq4Qak+!lT/(Ian.f]8vg?hoyX9=|T*1qoS');
define('LOGGED_IN_KEY',    ';Y4#m-N-c>iN%-NMlxQHX-tir3 -y #Nkd[8mY9vsl3omY ?E@7-=~*76s78/lQU');
define('NONCE_KEY',        'e;?/<(:SS,tu%&B2=F<lm.yg79),%xGGKHgth,Jdv[/hkhvnaBkCCLRj1Bl4JY;A');
define('AUTH_SALT',        'TXn+memn:28n9ILf*(+6-.}{.c)i#^{:>su%ZEeUQ 4pSSUKz!K+h)eD}Xyo;G++');
define('SECURE_AUTH_SALT', 'ft=vC,-]2c5,)!CA4Zv4sD.r0B<wNg4&Mu gL7Xj,=fE10,(_-Y3~!^J{Z?2~ 59');
define('LOGGED_IN_SALT',   '`DTf;} KH Z07XC(1d@+g8n7mN%Wh]u<f?A}#$=3|rL+>0omv71=2b{!P]HgA)!)');
define('NONCE_SALT',       'q[b xP#=VhX(TXerSFjbyG#u,Mjr37%BuBN>UrR%U!,of)Mv+DXGZFxeYIzP7.xQ');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define('WP_DEBUG', true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
