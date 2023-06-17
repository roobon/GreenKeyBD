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
define( 'DB_NAME', 'greenkey_bd_site' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'mysql' );

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
define( 'AUTH_KEY',         '>B~*2NKyaWg{,0~^drK8B#Dp~%ae`|YLx#Vf$tA}L0B/zct{,;%#bzTiMr)<zI{ ' );
define( 'SECURE_AUTH_KEY',  '~YxK~qLAQ{BzlEU1%t.sShVWb4zj=J;db~pU2=/9a_`#vY3_}s5Y1GyL-B/shY2a' );
define( 'LOGGED_IN_KEY',    ']]gR`j]D8U$#DxZfy&%:R]T2V`s3{x+|66rUv+b2(M^E&:}<H/VRy/toJD,Gjc5=' );
define( 'NONCE_KEY',        'b,QFw!f.j@WN|W14BC&ZmDoztMh.0OI1AL-c^.Mo*iN$KtOdoh/*.J-UY4ELXvIA' );
define( 'AUTH_SALT',        'LIy?*kasxiVu-Zdp;pmPR|aBqAkwm:jSP$oP+&>3X7vxSL|uc;ab|o^59#u42dea' );
define( 'SECURE_AUTH_SALT', 'y<((h `P1opx<.SV!3|<J/3<fJq&R{tE|;Lri[R5)%wI~he>z<<,H41Ac_ W1Fql' );
define( 'LOGGED_IN_SALT',   '3ebQwo::NRR+}`vnqTjL5}k!D NCX|k{yNtO/SuF 9p5q|+V]Z{Xm%?+Q2;@9 /*' );
define( 'NONCE_SALT',       'b8Dj$WB4[s%fv~H`5jbPE&!./1Y!FY ;h4KSkm&N3#aOp#l_omr%*?/^a>uO`t+C' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'gk_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
