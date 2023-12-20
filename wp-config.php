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
define( 'DB_NAME', 'u557874962_smartbit' );

/** Database username */
define( 'DB_USER', 'u557874962_root' );

/** Database password */
define( 'DB_PASSWORD', 'kBHcPKRWP8SFUON9' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1:3306');

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
define( 'AUTH_KEY',          '&4mg|4aiVa#|GJB;~C&,J2eRo@SY]=aS)tk!Hj,cSxc|,Pq[s4|wO9xP|l785}Bc' );
define( 'SECURE_AUTH_KEY',   '8-|X>rf,V<hwJ2_3w4#{{l6;`n9mhE9Qwq>d@ak}a,aA4n8u/8yF)zj&+y$sH #i' );
define( 'LOGGED_IN_KEY',     'jlJ3D}R?Vh|sf>b%UkVXp)dNks<HU?LcL_;ULXweI.;-?ziSs|0`4.Z&0iGB. 6(' );
define( 'NONCE_KEY',         '*qWmZaQ!EeNmGDMo#A Qc4R`-?/k,NsP|n;A?=]8+LvkY[NE<wDTy+_A/Yn(| Q|' );
define( 'AUTH_SALT',         '7g=@_-Cc@[Q&{X]Qe!_$b9^&VjyC:5}JiHzy,o}qDTxJU<,X?#*K*)6A 1rT=NFo' );
define( 'SECURE_AUTH_SALT',  'J((x%;@YB1z5md)*q{Dm78_2>Lp{YOxvUsuVz_RZ~.jePBEp/U1`7Tur:%PaD04f' );
define( 'LOGGED_IN_SALT',    '3=^g.JE|c#21.|u*85vM)We9w+Rj.!F&;npL[u9|=2YJSG=7/|rKBLp>tT4rt q/' );
define( 'NONCE_SALT',        'v5m-`JYc##ZIzK-Ha@m!s+YWOd.l<R::E |,!.|gpjsW&>Z<`~&;ql0G1gy7tMKa' );
define( 'WP_CACHE_KEY_SALT', '{Q CBGz[AmP5+B,:?TXPh}~na<AEaVa?kv6>=$9mu!{0=zrzBN$9>A7on}Dn$z<0' );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
