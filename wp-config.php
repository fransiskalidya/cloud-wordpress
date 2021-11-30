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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'LidyaKartika14*' );

/** MySQL hostname */
define( 'DB_HOST', '10.0.0.73' );

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
define( 'AUTH_KEY',         'k|o}4{D2yUMHB{1$s}@hHG)Qo$xvkE,/P2MRabbl2Znjc)Z2eB/YkhX/|YS;B@qJ' );
define( 'SECURE_AUTH_KEY',  'V=$R[1=(F`X{C<;EYn<duOkbQn8%|SZV?&ku*fNcOv%_=>2jV1LP{*$J5y OTmrf' );
define( 'LOGGED_IN_KEY',    '4M[Ggwm-cS@D>Qt47Q; eh#3S40`qZEISCmm`b5yzCUug:JX0+dm}<1Tt:$fJ! =' );
define( 'NONCE_KEY',        'H-ttX:*5Q^=(&H6;b77Y},4h3 Oem#P$NJQxV4Bi7pHPim&][WR*6Hq+puzXojM1' );
define( 'AUTH_SALT',        'N!`v}u>8P@h]Lbd4rs9Y}nr;9=-lab&ydndg$0-&I<VQaeX!qN*^uFKHw]/WS+Bz' );
define( 'SECURE_AUTH_SALT', '@6OSqs|%.VS5?KC1U6IDI#Zd$-a>XB=].0;fI.;fUVkuLYq)AAFW!<SU%m`(!Od{' );
define( 'LOGGED_IN_SALT',   'Yj*A8-{*t !Y$/v(xD4Sl!Q~3*8l,Vz$tt<sCEl%]&^31F-K:}jRD#XE ve  ?=t' );
define( 'NONCE_SALT',       'G*FG{>s|5m;jD7-*v)6oa)vr7B$, a~Hpf.RhFttE6U1-^%qtu0nb{s*&m&i{S#~' );

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
