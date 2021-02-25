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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'dba' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pass' );

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
define( 'AUTH_KEY',         'x),ONVV&4u9KflN?Zq77{~qMtH1xb*<c3<&1/][*fM.,[-B27jrZ2dG#)yFF`ua>' );
define( 'SECURE_AUTH_KEY',  'tn6$5]/8eYvIvjfUD?Q_36T}ze$d7byZ5J){^B{y>9&9YN@8B8OgA.U+UsymH$<R' );
define( 'LOGGED_IN_KEY',    '8-*k01wbj,SGNKTOQ#//atx04|/W2j10*o}Gg6sz7bGPa6 n*T~2Fq6R]50>TT7s' );
define( 'NONCE_KEY',        'Zb<=~K%i3~)pu_;/$GcTDVS|/(<RFn/x*5?4OBN=1Eyb{_]X>B`R[T(z-wBge}Ey' );
define( 'AUTH_SALT',        'SQU(|-[+4u.bzMRmjuh{2pPol*BDu?YezSv-X*,.OZ+x$858{Ka_fdWY{Ku.k3Ry' );
define( 'SECURE_AUTH_SALT', 'z@DcNE3]?zuNapVQ>FPxn|oBU&n};.K4baV_W.&V`bV~-~#ed_et[L=?jC;p2k`a' );
define( 'LOGGED_IN_SALT',   'JzNRM0~DFwyIx~~V#M[hg-XAD9!n<&+s:^,_^_9gn|qS>1W0UP1l=S;RNb7}|*o]' );
define( 'NONCE_SALT',       ':c[Dq @K7p27uYH=Q!4MV_ZD-TmlzjisO|/Ye96cF]|X@h=(I0aZR<]Ih-`F[&qp' );

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
