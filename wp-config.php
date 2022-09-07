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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Qg4,ddM`V2U;`O`5Pcbi2I?ubu7h[N6|=>22>SV0aMmhgL Liujd^s38A$^&@/7Y' );
define( 'SECURE_AUTH_KEY',  'qmHCP9pFt|ALY_4^lW_wh349hH~b*VJH@8Av_)WT-->mP7e5]vuzA]Nz4I1qo>Qs' );
define( 'LOGGED_IN_KEY',    '4i-=NKoUV|=$10o*gTVRYs|%EF7x-X,S5Q6&g{QJJO]P#`3J?jl%`}(IV7dZhLEI' );
define( 'NONCE_KEY',        'qjh9q:k7c,w,N8;YD8`Je5x|V)>5m[lh(THEMcbW+A3zw3L7ssBLX7hX=pDz[Gq(' );
define( 'AUTH_SALT',        '=@VaqL(Go93}*B.vY.J:oFVZr$f^;dVe1 1YOw JTyqo8CebRBrM@gO[fSi;[R-A' );
define( 'SECURE_AUTH_SALT', 'S:N~[Rb-f!NQR|vD|98R#]!.+mMtc+pJe_b`v^;1@3,Y2n|*=9x4e9Tb~R+twqfY' );
define( 'LOGGED_IN_SALT',   'CN86f/&N6&*ajK$vZMc{Q*wvddKB|.`KYHb5ApKuEb);N~|6*`x02F-UC@[ZrEQF' );
define( 'NONCE_SALT',       'mW@f-dod[of+PX!~myu]MJ~!}cWgV~W<*t!,T_Z7Ps&pfZuUg/lWu{Ij&yPC0>)b' );

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
