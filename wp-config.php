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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '5|cC8}jL8?ChN&6xyQw@IV=NAQv0TJN-Eji.L{dL6G{c]pE^Y(9fRJ:/Qc[aOJmX' );
define( 'SECURE_AUTH_KEY',  'YsW4ZKVR;o3H1HLcg>Z1(uToj6m<D;i#5UWL$+#J7oWw~=*B1iz8:LTbHDtPAprZ' );
define( 'LOGGED_IN_KEY',    'D<SxBu &yu>-e{/^[,~iC&J{MNXP.f~B~L]>kDeX>8@~.?x=L6YARK#;6&Phe)T+' );
define( 'NONCE_KEY',        'A8Z/p>J[&nZ@ELgLs-)ZX89*KkZ `jMu=vzEZ+#(L#k2pmGxPV.<,)%y_2C6/~gQ' );
define( 'AUTH_SALT',        'u} :6hT%lsPs,Ufmt2<BVDK[O4zV8aNqIcH%W!7YgJ5_:[.{I[y=Qo0!!KUM>xhN' );
define( 'SECURE_AUTH_SALT', 'gk.zBgYTNpa4m7U/gNi-ZNtEcT.U&I;dVpvp_.0Ys`b-j~7KZ3=k0btET*q7DRf#' );
define( 'LOGGED_IN_SALT',   'yxlcpe&Ts44eYJY#r-:Cdgr.DaeA<D.)[S6HUK`/v{j$tICiQ|.jA e}NOLG*K`}' );
define( 'NONCE_SALT',       '6gD(3[.n?=o 7!V4Gw=+|nQT4m1QByoI?T.Iw2(w8yG!+rk vh<rdb,sjdXyb]eO' );

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
