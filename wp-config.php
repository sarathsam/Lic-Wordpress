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
define( 'DB_NAME', 'Lic_agent' );

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
define( 'AUTH_KEY',         '~Lw3{IRRLj;0AGg q<k6v;sc=dz]6c4YFj-H[?$!a-8zS(I=eteRvww6/Qx#].~,' );
define( 'SECURE_AUTH_KEY',  '(2;r_2l.ecs[Pfjz0lx4$-S0&:(?J|QC!#Qd<av5WW;>Na+b>moeEPk?kY;i}q]4' );
define( 'LOGGED_IN_KEY',    'jJY{to,,|b~UvgT,FgW#MS._`5x,T$FEkNC76k*T*:}(8gCGRD6$p~L}Eh$LtgqR' );
define( 'NONCE_KEY',        '@%/eF;p}Z]g^w0n:T[p,6}H?HA4y H#tYv7;wr7-tvVJ_$Lz^`KLG&B0C$}_r`5<' );
define( 'AUTH_SALT',        '9QByb?gD4NZzzl;WNhA7r?d;baY@e,q7t*hFeh}CpwTN~>%HnCt+wpy6Q8[z?aTR' );
define( 'SECURE_AUTH_SALT', '@DxuaG)TbA=0L93G,RCfKa +y8.f!*=8mnTu|48NNSe~aDNxn:i1}.+~:{o2iyJL' );
define( 'LOGGED_IN_SALT',   '+<!PY$S>g$V8Mj_f/V9^2Ao2SFFTbO00d~`H~ mkELb<)K&Rp1q0U4%%d6JA&A%4' );
define( 'NONCE_SALT',       '{I^`ge^4Lg:Z~(.FPJ,35;3;H{TPJl-pL$^~&Rsg<.r8dF@iS#G^=NEt(dEr7dmY' );

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
