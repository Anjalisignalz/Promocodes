<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Test' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'L86(5}LKc+=~8gN&a6>evt7o#BY0@EmA#sS.%@9Et .m[}N3?,T|)5SMh4X26Q m' );
define( 'SECURE_AUTH_KEY',  '5I3jMzPL5M[5u{/X((/p`##ug#sN9kiH|`}Fr$08<=gU[qqe4M$!iH=s[_zcr0&c' );
define( 'LOGGED_IN_KEY',    ' 7i(Pi{w<[N6&s2N,2-^!L%9>f)-)VN{?igA)Zz4riS8)o!=~O=0&@mlM0R>Vqm%' );
define( 'NONCE_KEY',        'yZG>>s:f=obY#UO(_]5dGOiBb65-eLe`q/=l@]_6^J`J zXvX_l#,c|VbUD!S}ha' );
define( 'AUTH_SALT',        'y$}.2rkyx=b9MY@3z!J.l,Bf B+`F|&B@l^aU23SU/W%8_0u+IP/>2G)AiDGEVfb' );
define( 'SECURE_AUTH_SALT', ']wbe4w,[BiYx,lCbZ5Dy.)i+`R|j3A]jsqxj~S>jA+LJrNdq>HSQxSb:k|&:5:Hx' );
define( 'LOGGED_IN_SALT',   ';_Q64})o1#H5OOtxmZ.I*``!P7.kgXx]]4y6NS75bDg<S(%#GL[),N#l,]L%,F/=' );
define( 'NONCE_SALT',       '-oOLeK?KL7OAaH%g$C88MEyID,`m!H!HtJq.Pn&,lpio<_%My)Lu:X72>c:$Cs1K' );
define( 'WP_SITEURL', 'http://localhost/test/' );
define( 'WP_HOME', 'http://localhost/test/' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
