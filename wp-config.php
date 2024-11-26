<?php

define( 'ITSEC_ENCRYPTION_KEY', 'WXtlcF1QYTZ1LTY4L3c5M1dKQ2h+MG9kVGR5cV9BWTV8YD5xPGxWPn4lSnN1PGR8ZmpNVEI5KXB8PUJxK0pISA==' );

define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u756016664_T3mQW' );

/** Database username */
define( 'DB_USER', 'u756016664_9TgK9' );

/** Database password */
define( 'DB_PASSWORD', 's39uTiW1yu' );

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
define( 'AUTH_KEY',          'e5<BmsnZGRGed#^V=Y#9@yMU{xu*vu%B4ssO#?HJY[zlu;.sM|sMR6ldhCdoS=_,' );
define( 'SECURE_AUTH_KEY',   'zLD`H=xfI,8A]Yj|wW9mS2d)19t@&8skaG?h^l2Gj2f8G4Wi:2P~C=vlL Rp|2bJ' );
define( 'LOGGED_IN_KEY',     'qf3a!^H-~&U~rLe&A[R?w f{C5.`E(mv}):lA/YG).0$;#AT;^wWWVN#{61>cSU0' );
define( 'NONCE_KEY',         '+a:5iQ<~.^+$,7%!aJF~IqEbxip2x~7l],L)4kCt?LDb8;BXd0wjKBsDMYH!@,5t' );
define( 'AUTH_SALT',         ',xa#ht`Zi`NPHq{MWSsg&DvvReGmDv;_n+($+YG7YLj7ING_TSe>ar3-g1qRe#J{' );
define( 'SECURE_AUTH_SALT',  'kC=12]vSp6_<^r=j=3.*X#*3bb78b+o8>Gj^LIWJh/o~2o:@|qb%|y)N+GZQoLj9' );
define( 'LOGGED_IN_SALT',    '7f.6!+k656=lG+nRE21p9+4JjW3i=<1O<5/7G5c|LC_ej^MYIl2g&(!UP)>a8]}?' );
define( 'NONCE_SALT',        '_<!JGK7KQ-N/Ke&B6)I3+7-NQ/B9lvC~sJA z)/T<j-~}D[i)W+ S]$ZVPRNeD*o' );
define( 'WP_CACHE_KEY_SALT', '82[9G8)g!?ASUHnKN/%BhH|4w{wrwzJBVzh2=AjT- <TB[#HkH!zGG2/b2I>K5yi' );


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

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', 'd7f06f3e8a0f6fcb1435c71464c9c909' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
