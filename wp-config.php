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

define( 'FS_METHOD','direct');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'KAJDQBmVX1Zi' );

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
define( 'AUTH_KEY',         '-q,F&Z=;{Xq&a7KEzmK($-7UUBPT?40y1ab ;ZSR23q|+nJewtKPxU|;^AR!3sM@' );
define( 'SECURE_AUTH_KEY',  's]S%nMzyibWv-(Jz-Sk1kTuFi!?MtGmDpSf>;=_xJ}5IWb#U-^A!ke*{j$tdW+gX' );
define( 'LOGGED_IN_KEY',    'B<lUo-vz48H=LhM,x0T|Wt&gV)[#b8)O5tKAN$y/p4{W0i#O7VMdQ2@kAm,hz/9w' );
define( 'NONCE_KEY',        'w`38FM*0Y=zMht%~b+QJA=mgCm87U5gjQFTj^I<tm9,:=*-s72oSHq)p;@` $?0x' );
define( 'AUTH_SALT',        'LBcy9QAF4f}c Na K/>O7ltd=aP9A:&?Crhz/)bDz|Q]x/D@;0j{NEYuQV%0|%F<' );
define( 'SECURE_AUTH_SALT', 'qF?y^GW`sNC?[`}OflDfSb/^>?{#=70]KMwV$XcZvB{g.k8lH,][H/`WSexM%B.;' );
define( 'LOGGED_IN_SALT',   'lU0EP2?]svwTG.vB=>6/:no(vBap-lkhaJlBx-v!4D9*L9j3(j_G^:C[?qRK<{g<' );
define( 'NONCE_SALT',       'yv+Rz=e;T:r}G2y0$^L2BD*;>SNSomDpFZ([dz;DG}9Q8eX` 4F9i=jZPv*Mr+fu' );

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
