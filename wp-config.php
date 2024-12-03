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
define( 'DB_NAME', 'ega15' );

/** Database username */
define( 'DB_USER', 'ega_15' );

/** Database password */
define( 'DB_PASSWORD', 'egawardana' );

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
define( 'AUTH_KEY',         'jj3P5vZ!AGeF}oT+)3 flP/Zfd]RF_wxksg#<_EM]IF;Vp@-+X# t^$Ua_:& [xy' );
define( 'SECURE_AUTH_KEY',  'if]v2nf5DBX)|u(SGk|%B4G<k !qt~KNLE65z-wb=h[,-Jof8$ELkNr[+-rD4h77' );
define( 'LOGGED_IN_KEY',    'Bm}~b5P?Rq;^]@B+lY6]j]Ozab_Czl$@vI#Dwa?_Ag|cTk:YYr!tcC/c`%goz;Ij' );
define( 'NONCE_KEY',        'eZ7Fg?`GH(V5O_QY,1yrqv2W>AbQN:;)(Y^!13iak~GXCaH#&A2=?Co?J%_O~~&(' );
define( 'AUTH_SALT',        '@)CPy.VZK[oFg$+P:/I.wGXSYA2C2hN*E*NEzwG6<i=r#?U>)Ud$^SyaZ8wn/%n`' );
define( 'SECURE_AUTH_SALT', 'HEfwe,(,Q?dV-/.k:2#rp3f!%(d>0S+xwAWn~1]5k3[?E3w9Z<YQK5n[K%J(l;#q' );
define( 'LOGGED_IN_SALT',   'J#hqj<)amh5F}g8j DeCMgH7c~Upv7nHZ>Q}8 dXcmi(I;]C}g^FpG4azvJ_ry!>' );
define( 'NONCE_SALT',       'b#dtfxrW/&MZm;Z Gqh9ThKyvqjl7K`fC_;g3(Rup&Cp |>al+QsSf^{p!QzjC}r' );

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
