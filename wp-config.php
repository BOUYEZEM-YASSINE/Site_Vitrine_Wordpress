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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'site_vitrine' );

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
define( 'AUTH_KEY',         '/ ((0JvuVs:v}N;}b`}_?pK9a@|T`0zXkMN&>v105u&[8Zcglzl5s$)Zvc.y kr7' );
define( 'SECURE_AUTH_KEY',  'ZP{*LEy/W!U&fL$TO`CsT0g<<kOq#:h0%0g%I7dQOk~Q[|qj3QF{U 3yO_PxaO.o' );
define( 'LOGGED_IN_KEY',    '0if3;J]3JKh%SE[^Yp]E:}_`7XkV&2W$ZkZyR#Qb/%$a=AVLv_bX&s@;]Q)h(2yq' );
define( 'NONCE_KEY',        'h/q`v#d!zps,L6l7@r rf97LZe(RG;mxUYxHJ!6B@5:R&P/1r^N@Q(P>~;vU{Nr/' );
define( 'AUTH_SALT',        '}FcX^1KG,r/Op5;z2Ix3vPIXvfgWL7=qT5 .>c *EOVwLc O+QSN,VShB1k73f(%' );
define( 'SECURE_AUTH_SALT', 'wmp1G >78>DBLf qa$uumpgIu djU] @ow6gf&n7PIaL8/!b.N;bu_0B+&:m/^>h' );
define( 'LOGGED_IN_SALT',   'h(SZ2+7mM@ *<L>U0p4Uc!q00C})k2MV(s?LIRtX@^Dw)x=07_k|Zc)52)V4sXz&' );
define( 'NONCE_SALT',       '1UE(Sl!V&=jA|lLlmVI/DDK^&xz6YEe8+mLcMDFVwG^:2hEV2{!Zz>[K4r5-I!ql' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
