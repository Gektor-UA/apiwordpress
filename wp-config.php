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
define( 'DB_NAME', 'client' );

/** Database username */
define( 'DB_USER', 'root' ); // Тестовий коментар

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
define( 'AUTH_KEY',         'Q=}o!5kCJKg#r8(65|He>}gi<u;,dsjF/G>okOfE37O<rw~Kl>P!k4$FGshaGP?/' );
define( 'SECURE_AUTH_KEY',  '~Zr3g5oga9s3pu-i)r1zP}*/j1g33(z~r7S]ejwsRNWmn*+gZvPt%H0M.au}<Y=h' );
define( 'LOGGED_IN_KEY',    'WN35GwD|#4.e_I`HM0zG=)sF[iJ7(yb+]0Mw.>B4y}i}%]NuA%.Wmo|FZSN}KDK$' );
define( 'NONCE_KEY',        '&DJ3jiT!13HP.Tie{a7+:4y}+74{5o(E]$XlotGk)IN&-9ZBl`2O$VgjR CCaQ25' );
define( 'AUTH_SALT',        '`^n9;~U(t)Hv{@8Za0K[6F4m&x<D[Kh}SSulmH7Ai*r_PJ7gML[HFf)j~4U`sM:g' );
define( 'SECURE_AUTH_SALT', 'EWZ6@PcZEw3y)L5<x:q_<#q@qt3LRvwSa%W[drmaMn|V1}w(5nWFse6nx#&Q=*u)' );
define( 'LOGGED_IN_SALT',   'UM)x( &gzlZE/P=IF_ `xCw)p0uVm=r`j3q[b8+0|a=SUhoKrhb]%?86nz9T&*{_' );
define( 'NONCE_SALT',       'CjHc&j*wlc.*|!nag>]#c)n.YW=766N7XlN!KWlu>H+Ar:$3_-*5e9iGT-!cLe7?' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
