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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'timcsf_2022' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'WrmNTylcp]&$O+iU_<f`d1 S#[_.okR.^xp1f#]%Kp.q=wanY>2?a[Hm=9}02Ya/' );
define( 'SECURE_AUTH_KEY',  'i(KtXgW}!ccR]D3?l#6s<VHrZ8zq<37%Wc[f#|&;b7@G0PZAvGER,j/Nf||T}*ee' );
define( 'LOGGED_IN_KEY',    'o;]6CZG2Rl O7[@b1WO>sDUf=SL;a<Rja$u0.x_,[kH%uyzQ1O/i;U#,L]?U*L8b' );
define( 'NONCE_KEY',        'Ks|Lfok=IM|f ;lO4.A`(Wv&0DR, w@9YR2tt8yEOD[;E?t &yxFg;qPt|L|X7(9' );
define( 'AUTH_SALT',        '0slKWY44+rn39rJKX=-j<s>h{/i<py@9ibpvBk]1fTWK8$8`/ZFoWL$P2)lie7t0' );
define( 'SECURE_AUTH_SALT', '>xaP&-Y[1XIlhPevK3?)}r_<-%U{>*%fXf4^3r!DV1)bE}5.K(1!~lC2Aiy+V1JT' );
define( 'LOGGED_IN_SALT',   'B9IFd?=/9@ s%];w%7Es_5.#9=3BWr9]X4A9?&:<==!smHPhzKYxl-s=OGP,RP<%' );
define( 'NONCE_SALT',       '5)^I^<6n(`1^@bmOYg|eir6Wa:V:Ne9nh7zF9OV7v=u@3{xg/Gn7X|/r]Yl:BV3N' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tim_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
