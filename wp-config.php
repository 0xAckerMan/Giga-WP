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
define( 'DB_NAME', 'myplugins' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '//$MAr,uA]Q?7]=@ fD`uGL;jNk|<V%t;}ZD7??4Ig2CLjaH ~4>GCGl.*9!=fR9' );
define( 'SECURE_AUTH_KEY',  '&#&YQJvb%?=Rd{Hi(fdBr?CGU#cx9/I~(ZaOxLN+AGCm8n/{;xP_2_bOZ8]z=3}P' );
define( 'LOGGED_IN_KEY',    'G83f@ -2vs|63pszifee~H88$Fe<82=,:*2_Ev-^^miD(e8<;L`y>YTYdBk^JZBN' );
define( 'NONCE_KEY',        'Ck;o~!j3 @H7!yjxJ=f[K~rtCKwC2&7@1F)&LeSsN?DZ9C%6yxck~h:4kHMM)eot' );
define( 'AUTH_SALT',        '<6] a`k%>l;rqw{RQE^,N 1H.^DF,w#%?f`=H0l!Wlh[/l, AT>A7AJblw<r>WQ?' );
define( 'SECURE_AUTH_SALT', '=mMfS?6]QO{idyL##4O:6.k^ZAMiH{m}}Wp~xR[Fg3>#x~YA$$MS [,!T:4I{kLD' );
define( 'LOGGED_IN_SALT',   '>!?XSP#JDL9oKYz3>)x5KqG!xz4H]JT0[6|f9N;#aDLL5LNsNrx<8Zk$y6{knN^)' );
define( 'NONCE_SALT',       'uTs+V*E{H<jO  >*;rZ.-V$4d2aBxDV?4lmlG44^vPpAXpwUHb1h40{sMIE$.MAc' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */
define('JWT_AUTH_SECRET_KEY', 'qwhifuhuiofkjljnasdoijpoiuqwru');



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


