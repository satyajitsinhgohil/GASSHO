<?php
define( 'WP_CACHE', true ); // By SiteGround Optimizer

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
define( 'DB_NAME', 'dbgbscgxu9nwsp' );

/** Database username */
define( 'DB_USER', 'udtfcc2as832q' );

/** Database password */
define( 'DB_PASSWORD', '8jglgqvxe4o3' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'V>`k4K~-mG8*V,cJ!GD09@R:@r4H~SG*<*E^^gx.agML)g{YtcV-,-|lkM_P6SIx' );
define( 'SECURE_AUTH_KEY',   'H$kIte]#a`hDsGDwl|gtIpdvGAV/NwWu8N0tUf<Mq~8g3$e@6 exm:$b4(vzCrff' );
define( 'LOGGED_IN_KEY',     'm?z$R<5Iox%cp/?v|?dJjj9.iMfhn[9JE}M>)/I8GJh+gJ C*8Rdu*1GwBbKr}D&' );
define( 'NONCE_KEY',         'kS||Ckb&Ly/N=-)Wr1+0m!GedbAh%diK?Q$/A1MwmB2}i]|3> etkR}Slu?L2VAW' );
define( 'AUTH_SALT',         '/Z4B8QOv-s*Gs--7)XFlS38mL|C&xJYXCjVW<eES/-ZeNcl|8A !6~2|yhwk[e~x' );
define( 'SECURE_AUTH_SALT',  ':,%QIrug>KC.0KS&%<@[&1vlk+sfbBmxc/)bCvgjv[,.v!GKmVo3zeHr?4?V`iFK' );
define( 'LOGGED_IN_SALT',    'F:7]4Q.J9M}R6-&iP%U}dGe?$uhBfa:54`8FF<]DCqjO7cx}G7@7r!zeG]I~YI4}' );
define( 'NONCE_SALT',        '}!h-dS^j.:UzuX?kP7Q7@?FYRBx^Lyu=G@iI4xv&T78$B::zuh+z 6N8C~gRK-bL' );
define( 'WP_CACHE_KEY_SALT', 'G[pKryre#z^FjoPHc@zJOD HZ@8.kX/Q_Fb+Q(~`k9X5I-=I`dc{&.63,N.RA~6{' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wqo_';

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
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
