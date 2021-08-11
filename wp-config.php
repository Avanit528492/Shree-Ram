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
define( 'AUTH_KEY',         'f|hAE:[U(KB6j,>QS/(q!OUOqa:q$,u4`9QG+D*LZH@7!o8R Pi?ntb|M8QeCXn.' );
define( 'SECURE_AUTH_KEY',  'ug2R7K.8RXQ1<^7tjp%BOxmw=ut#Qf<E9)ZW$Mk(G<^%ra}.Ce<vUlcPq>&X&g7 ' );
define( 'LOGGED_IN_KEY',    '$uXVs?e%i?tDO{,mO?5UE{Cv!_>WrD+|YZzm5+L c6v|9-T~|i*Vh:>OBJ#@x1p&' );
define( 'NONCE_KEY',        'x@J&pS9?FeBxR]1E2;g+/}$^5d-eet2~*F[PFqW?B3KIimw^$o8$F>*-:i8a;hV?' );
define( 'AUTH_SALT',        'Xho+H9t0`Ow1v4{2ybckT6BrbO#JtXow#]`-<QXDYo6Ei2I}d(6w*DY;WtRR@}NU' );
define( 'SECURE_AUTH_SALT', 'Hf.Yz/Bk4*=UQ%.e+Ywmy-Q02:V7lC$K,D)N7f|@uQP_*s!r3i3V;|;$D>yTi1k.' );
define( 'LOGGED_IN_SALT',   'cj-`fzx.DL$E}4CySQDT54!9&oGa;P8{sG&}GX]3! oz-v--}-EsjrfV&6!5+V0O' );
define( 'NONCE_SALT',       'iH~nIF/RVVfoH*2`9 $HR#P%QPXVUJ#hm6k!GQsl}y}HXc<ym/h^AzFP,z74S.US' );

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
