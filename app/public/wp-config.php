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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '!0Ol_;n^BH@e0|08BunKX{T5#?/:t|Up0fP!sq*[YAXbO{*#~!}2:&)N.xM(jOmk' );
define( 'SECURE_AUTH_KEY',   'V[Mtv9E=qa|X0;OhiNMQiMkA2@T9toL`Kyks2Ch}sJNt&j>xoPaV~^Q74FV,Mbrk' );
define( 'LOGGED_IN_KEY',     'LRLUr|7P$ },ft2Fx?%J=N?1dtf([Qm`;9c|D|0m}pP9M5P^Uo_ K~=MsnbhJ^?,' );
define( 'NONCE_KEY',         'p6;t/Cf0H?<$z#fOzhm$,l^0RN/06dvSS:0qUSNo8SBSvrAzs=@ Fc2/,PAXKnNL' );
define( 'AUTH_SALT',         'lI1TNceINDcr5qb#<o&-dOvsM;.aL%Z`_;RK~#Fs1_)t%>(Gh0<7/|-~Dxe?zMyB' );
define( 'SECURE_AUTH_SALT',  'Cb^<!`p-Q;k[sl*x>T);PDGHZ|3Fp//_ol2Meic%IkyX:;3wN0UN^PXzq!,+3d+8' );
define( 'LOGGED_IN_SALT',    '6mDt3B@.$!b PBl/4B$q}OVig[m9i|*4r#8m!4q!_aA3>E5~3!BUC;SS^,$Ta/J`' );
define( 'NONCE_SALT',        'LUfvAGA6lo/9gLi$l=xVqXsV=%g4n&&zZK#e;%4@@0dH<fmv-MHnH0_noj.tvJ[H' );
define( 'WP_CACHE_KEY_SALT', '9<dFU%FTJy?=6kigFR1vb?SNt>2PR}7v$U34uEBW7AXgk5NiD=M0e7r)/GI! {Pu' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );

if ($_SERVER['HTTP_HOST'] == 'localhost') {
    define('WP_HOME', 'http://localhost/curatortrial/app/public');
    define('WP_SITEURL', 'http://localhost/curatortrial/app/public');
} else {
    define('WP_HOME', 'http://curator.com');
    define('WP_SITEURL', 'http://curator.com');
}
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
