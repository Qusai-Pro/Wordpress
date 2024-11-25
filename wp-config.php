<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress-git' );

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
define( 'AUTH_KEY',         '2)cuB5_ j-XR9(IjrCe%`t4t(MOQ!whnsG.YrJj (Nfgr+U8bAb5NTA&9,xb>rAt' );
define( 'SECURE_AUTH_KEY',  'PaFC,.f}Z$q9o}$XuNtl24BWcPp-d$Zhs/pkkrl_W0.SV`GeABVNnK4DOFgfi)b}' );
define( 'LOGGED_IN_KEY',    'j4Ls3A(l_Tp7(aw[k9b!l MdVn ;t#>dmr(ZT+EsCD6Yn+qbO.uBEGBA:4%%>!tK' );
define( 'NONCE_KEY',        'rC]ctmNCjy1G>P0 KEQZPWPysKZiijUr2ZvD(3P7KVDpe)llmsWiygwSV.t+k{k8' );
define( 'AUTH_SALT',        '92vOZUH19(Njnh{>J~n4bQ98?{1S9Dy96tb=hO^D:b2wGxl[Ux}NBAepQ566/c,A' );
define( 'SECURE_AUTH_SALT', 'yd_r]rS-MooVDXHVHHyHm9!?`_X*plRVQ[ZvDk6R()q$3&UC:RRvMQ-qqI|`M+h@' );
define( 'LOGGED_IN_SALT',   'Jyf,]Qo#ad[-OzI}shyYf4K]Rxu%#_a7D!3E}feH=,gB23Y!GUgJ4CRe$fwV=_2g' );
define( 'NONCE_SALT',       ':xqE_>gW&tWCa65!,&@b>J0[fvCpCU4Xm;>IM0n*X>O:HX?BjXn:`=&Jv)W|~Ugm' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
