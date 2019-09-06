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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'classcoder' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '~Y%lh56/D<Rbu$byuK^rU#(8VBZ<uH@;&]@19W-uQRh vX{nUUHzXkmBl,`)RaQE' );
define( 'SECURE_AUTH_KEY',  '={}6N aAM^S@/4}hu1C]F!~3<#ZlkQ0JIb_/Gc?du:fLraM 7x{V$9dDxy7v3~s,' );
define( 'LOGGED_IN_KEY',    '^l|2=`$YrD*V`zB>jG#[7OS9tUf@xub$INY<5%UJ@ImycI7U0ur=Kx=M2!OhzYo_' );
define( 'NONCE_KEY',        '%0k`eucb~N3k#5YFda,vZv*ZHp)KXFR(m0z3,=`R-#HffH_mj?msP/lSxmdn?Ys=' );
define( 'AUTH_SALT',        '1;0BVH &]jpAl}%|~C]Us}Sp;NpMerHK_&+9GEsOhJQ7;ch^cU[y#8t*qCKTEudh' );
define( 'SECURE_AUTH_SALT', 'LN:1x@IkBU~.t+t3qF-9o*c87^M7uWRDl8gI66,4rux }qorp@];0P!-I7@E6<0&' );
define( 'LOGGED_IN_SALT',   'C8=0_HMx1aHm$D<hpoM|v6m(2G%O{BawrxloBA:Vbp%G9XSo_/!VT28XFH;)7hn|' );
define( 'NONCE_SALT',       '!W{#U,QfMg7r1[,x?<}).894KcP2)I??R+WvEE+8Oj3l4<iGQL-$1XqI,B)>*x3-' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
