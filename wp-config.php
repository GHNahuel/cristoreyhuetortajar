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
define( 'DB_NAME', 'cristoreyhuetortajar' );

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
define( 'AUTH_KEY',         '9g]{y0->c Yo,BG&cF`1joqU19!MLsH`dlK`!2m&NYdW3>Q/DGCtbW3ro[Ak5|w3' );
define( 'SECURE_AUTH_KEY',  'uX+vb_tJo9uwonPJ1/w`@Vk2HKHYz-JAn:?Jal|Zs]QYk-S~*mR erPys{:Uo6@9' );
define( 'LOGGED_IN_KEY',    '`}UMg0fr&%<!]tv0o<-oVBz,GpA7!V~UmL1J@e!W|^pfu(%$D/+p]1P$va^LFQ/.' );
define( 'NONCE_KEY',        'CUXz@P:nyy1?*(`~NH-9wwkm?p_`T=l:?eva@[s0^yg`OO~|tifAi8H.6Vj/W???' );
define( 'AUTH_SALT',        'V+Lk/-en)Gu+#(P?th{{EvL%v*/;@UfFqnBMXnNHsG<SxWS$VVeJd<ey!>l~/~@l' );
define( 'SECURE_AUTH_SALT', 'F:R/MtpBck0V#mtR10FQl;?,:K1/fT3P3wf02EiX`GEM(#K`2sWL`)e1A[^`czJ|' );
define( 'LOGGED_IN_SALT',   '?#RtNDKKhW=~.JIYf=6={xV5gf+9V]ndCx<MfZw/5^!o*g/,-hMGfB{yejU5WuP1' );
define( 'NONCE_SALT',       'Ob0(T*Y`L`, WBtZ 12W3ZPaDkP]E#Q!os=`3-S~xg?azZk8%w8l?p$K$:L[HRGv' );

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
