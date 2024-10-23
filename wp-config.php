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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'diana_net' );

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
define( 'AUTH_KEY',         '0CIZauw;%;*{9Wz*>[su,llP qbGY3m.)EX/bu/0AqWi/ &Q7L=XtRd3]*,PlA#S' );
define( 'SECURE_AUTH_KEY',  'dv T (A#Sl[S>rfD%q]=H(W1_U$1P|Up_IjY(V)5Eyaukg~@V K^UhYI(r@>]F-k' );
define( 'LOGGED_IN_KEY',    'ycVpwL^l#+6%w(xnkm,&Bk`!p8TUsiHU/YF*^(5KO)L=9Ap2g0cu9:Q.0#Vn?F6c' );
define( 'NONCE_KEY',        '`AldpNVao[9C=,OP;rh/>A8:hHs@u=3[SY1L=N*6ylU9HUt(0-,YZGBjT~KTA8]h' );
define( 'AUTH_SALT',        '-AdQ/<BjE?u?DBq$G-UDqc>_Z=m6jX)`lf>7u$RMGS>GTfm%#A8l!^<Uo>qvo#0*' );
define( 'SECURE_AUTH_SALT', '.B>f[&?_C:/4{HQEj(8=91{yDcW`-9B0&}]5ASb{/&kG>UKVQ]=Nyni&0RhuPN!l' );
define( 'LOGGED_IN_SALT',   'Kg:=N?|?53aL2hrPX[GhWY,7+y<#@|;0<z>41q`I<jmn#2;l:%wGOimc{/,iOe7f' );
define( 'NONCE_SALT',       'qcWY3n=9b2xb>j7Zr0>qi]cE0LGH/^LcgJ9N!.]N.Slc@CvGz^_/q>Cz0{UFVU]f' );

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
