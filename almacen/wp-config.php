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
define( 'DB_NAME', 'almacendb' );

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
define( 'AUTH_KEY',         'GeLEpfk``X</OlWZ`ZKG_RZb@=N#%(bI22WCw[UXu4-]E^k%&??5fT~A2D2$1$E1' );
define( 'SECURE_AUTH_KEY',  ')v+n@zaF>!O9Z^%Q/.P)2A4m+|01zlWD@nUpeBVu(b>p8MW**Quu+:=P7TG;!N#)' );
define( 'LOGGED_IN_KEY',    'S.vh :Dh?NAUNu9wJ>EC1,4^7/chueiCf%fK%VJ8+1J&HmJHS^Ml:0zWlW~cRn|`' );
define( 'NONCE_KEY',        'S`:<FKhUD36Xlc>EG.%k|XDr+dI<=93~@EI-?e-[PxAxXae_[q?(nyqt{aH51Y,^' );
define( 'AUTH_SALT',        'W#K-U2i$QJi(gU5vL_()Tf-_XU:ZjW{59OF=ME%Wf3Cd2tt5?81SbFR?$n@xU8pv' );
define( 'SECURE_AUTH_SALT', 'nE}K(ay5V_xn:JnLU*pq+qIyMu?QEnpFs-ZLF|wb0uuMg#<A$!g>!OszIuDC3_Z6' );
define( 'LOGGED_IN_SALT',   'UT3zDy;Sfi5PM[s=9WAL.@/2OlFr1;Gf{OfyI9N+t(&#]-K(fusv6Jjg*#~IX_FO' );
define( 'NONCE_SALT',       '%vG1U06Ru}FEz>^M71Cp#}8a02K[2j:-} 1rtQtz~w:ssnmn83?h|lr:n^xPjyy@' );

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
