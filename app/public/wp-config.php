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
define( 'AUTH_KEY',          'Bha^uiC`Z0:?EV}QOukEVmbby#]W1Rp@l<QA/d3ktW+QgZ+G0sGOA[cACO 1G5=W' );
define( 'SECURE_AUTH_KEY',   '(^+#Sh2`%E8{JGaj|gSB/TY-B{0:)`r6KA^FxvC:+<|3z]Z|6GaPy0xFdVE[b&kW' );
define( 'LOGGED_IN_KEY',     'ACy-%=0w?WjSc9%~0cFc_4S rSl=0*I|D=aegW`@uCyC3<XXiKr@*<o5i3+;iGJ>' );
define( 'NONCE_KEY',         'Q7*6O8cXO~F:Y?Lj4#R!va.iQJ{65F`vHq~w>@>/aWtThfuIMNU+!i,^W],&Mz^_' );
define( 'AUTH_SALT',         'axD ra,WEqYR03sSs9|e5^d-mgZ8[p9tsF1$%SMcfeIqg$7>mDo.HF39_}3@<jf(' );
define( 'SECURE_AUTH_SALT',  'ujnTr>z[p]@vrkZvhUG(H75$g%H#PigsU|=gY(Ku`66T6dU[25@pe;,*/f>JFU(}' );
define( 'LOGGED_IN_SALT',    ' iL--<=O55eyDYl:T;W%.f<;14LAR<O20u4#Lb[X]v^t|:/isd-:Hz>q9Q%}rg-V' );
define( 'NONCE_SALT',        '&!X 2W( Jm:jeS+nU MV0yK:bhO%/[~ey1v>IxO.uGXBf6Z%Eft+tD2vbRRc)9^x' );
define( 'WP_CACHE_KEY_SALT', 's s1qJ(]#q. a,tC7%piFf:wng}kb-f]F_hT>+YXP&)/NI|(FuP;Po4@P(=89=B0' );


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
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
