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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'docker' );

/** Database username */
define( 'DB_USER', 'docker' );

/** Database password */
define( 'DB_PASSWORD', 'docker' );

/** Database hostname */
define( 'DB_HOST', 'database' );

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
define( 'AUTH_KEY',         'k,(dAn6~X]#*S4A.N+DDm;FQ>=UD;2(22nnLnA1wa&WCPb/2(]~<S <Z.L!}sm0Z' );
define( 'SECURE_AUTH_KEY',  'qa&S~gh}hfB/vt/=]6}7whM_Oj];D<{7lvj8r}yWnWM|JF=]v:e/0R5@*8`.m??d' );
define( 'LOGGED_IN_KEY',    '0i0V&RlrFvpX0!7VHIkD+.Kxs2kucJ`O0DeT]x,MC}93A!{7^Fmu=$M/:o^whR[Q' );
define( 'NONCE_KEY',        't]$mjy;BvEi,/[iyw@0=r-<k/D##m}[d H86U/[XtKsyKu1)UtDiu2nL^D-AGK8R' );
define( 'AUTH_SALT',        '-XN*nP.q7sfD-/2`ZYMeZclzEn^4CJ/=@U5.QD:=C<;5$j?=ci]rj`oQ*d=1xl#F' );
define( 'SECURE_AUTH_SALT', 'f2X>aH[lg;cDO*3?<g!#ZEhIsKg@:8$t sD}tK_xY;OgFDHBHA=~MK]w%/>Mf65(' );
define( 'LOGGED_IN_SALT',   'XE/|NoDKhD)lilaKXVbxP2c^%#uwPd,g}QPD4h06Ks`UoaBAd.cxD;};grc:%Wdp' );
define( 'NONCE_SALT',       'hk6D:h=mE:%:<{;DhlnI4T;4I#|;>tGhi0SOiK:82Y%;$Xp@;yI&b!6`SI8,gQTb' );

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

