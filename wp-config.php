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
define( 'DB_NAME', 'gymfitness' );

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
define( 'AUTH_KEY',         '^fB9L1e=jZu;Z3q{R7ZY{M)7Od[JZ#z9)XOJu~|/?yZWoojs1R-g{-+QjHa,Y@Qq' );
define( 'SECURE_AUTH_KEY',  'nqrzt$L|2:?z>Nhmz(P$_AG3e&I?8K!V68/NSb!zBV2Ff(H|@yBOQWG1Lu)b|osh' );
define( 'LOGGED_IN_KEY',    ' r1FwV(1{rqTrtR]A8|?D*E-c<>GBU/O8>gP.];Bv]6>RcGjq{KHBkN#jzN-RS!z' );
define( 'NONCE_KEY',        ',66#G:G<]]C2gNY9KMn:Bo$O5<c:szI]oe):DT[XIV!gJB{ee+/=R!}$)=IeH^7S' );
define( 'AUTH_SALT',        '``~4wv[=H>Xpi~n(.r/)Go6q(Q2 .dP/<A(2)hcL:&;n%tVdPKa~-X`ND*MF(Ayd' );
define( 'SECURE_AUTH_SALT', '^62YM#U!ce[13IpVR~jD~lyv07&v}%`5J7.p*-40Sc,aIt1FN?9#S{,k)5.sX1+(' );
define( 'LOGGED_IN_SALT',   'E7~+IZhr4nRYmmTc9fk`I.gJGT>CIMM`vRkn~>x >;P@sNFGh{N=NX.Iq8@sPyb9' );
define( 'NONCE_SALT',       'p2PrWyV0;55 t*m~hTLZU/&1ruNl:@oo~I#EOHwHqz;b3+gyd{8E3BkE,!s%,BAe' );

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
