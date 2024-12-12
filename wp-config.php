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
define( 'AUTH_KEY',         '4a2pCwHA;IOr,t;:WP-uNOj]q|ie^qHdHrPR,[J1tYO4Q@;ylsc1%f/z9^|(JuhQ' );
define( 'SECURE_AUTH_KEY',  '@z;M[0n&H4l*JeY!;z`6`otk)+.,sQ~ao&)OT#GO4o!DX*MxT4iCj;iVhHRzGE2/' );
define( 'LOGGED_IN_KEY',    'O E}>;Wl[F!phRO%)`1axP^(8dXP-:<UQu1qU=.7yjempqM#;_L~%{$U~XMG0yc7' );
define( 'NONCE_KEY',        '7Ro)}PR5n*AFq.<.-vjSA2><vDJK+$9d`A&5h2/=+Hvxb(%r8O:K ?drRTaG6}H?' );
define( 'AUTH_SALT',        'sMu1QMZ$rZh*]Q.<1oVmi?Umtg5xumAEh7ny1;!>.C(:B78IJRvDg/0m{In$xsc|' );
define( 'SECURE_AUTH_SALT', 'Lh|RoVs<M+3AQqz-4iV-xzs)FK;|vI7[b0f{yu1^{^R%I$)V/K^7?9s)mq&_UN.M' );
define( 'LOGGED_IN_SALT',   '*3`SVOVgoXqx`l&NWBH%Gw+CdMlR+2}ZT6zNB(<8{5i@@#RjJc`MR(3}An48N$UD' );
define( 'NONCE_SALT',       'v9F%,Gw1G-/p4.RrV+H<*{~(Uz-<o<w5w7hO:L@d 4aL<{Y1j~wOGxdLQ^PfC1*D' );

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
