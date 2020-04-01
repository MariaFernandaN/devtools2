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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'devtools2db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '|dJf>A*#U:/daW0=7vW}M%0%oFEOT8A= 4sUxkC3! s>WB;|$co.1NQe6)J|*0V.' );
define( 'SECURE_AUTH_KEY',  'G|.7ZcoKw]#&Ta|e*%+EMN*Uwc<rkn I9pkKewAxtj0H0w(#fq=:7LBLo6P/M1G~' );
define( 'LOGGED_IN_KEY',    'kndIp(cw%I/9nDr[!y/6R`z.GxePa]wA(l$`gx4h}js)_@]tb s!cznTfE*J~c!M' );
define( 'NONCE_KEY',        'Zd!-8Vv2)Voj,|T,X:HZ4^,@DP%GMDknwKa{U]Reil-! ?.H~]I(lEV;Ib$-.Jl~' );
define( 'AUTH_SALT',        'zt)^wV44g@%(quXAU>Gdg%q,:d9Q&tnKZi|bK%^+?Kav0?>mRgMhEiz2 ,;~mg6:' );
define( 'SECURE_AUTH_SALT', 'W4k}vCVSu71/d mS}g.R(EB_%I6%G;pCy~XgT#IaD{=E)+N?k@ywV@=Q3 d#|qV=' );
define( 'LOGGED_IN_SALT',   '%W3zc0$Hda/#[2h]<Mq:#i4_/@$gxk~0(C^&o4[RbHi%>,Y20TuI8V[X{7RwgZ]]' );
define( 'NONCE_SALT',       '9sne%R+mKC$)[Ih2&#~?v/yp2P+ubQ*3B2kiC3YOxQ2,H?3V}ihxo4pu&!G :Y0F' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
