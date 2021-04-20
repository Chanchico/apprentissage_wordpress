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
define( 'AUTH_KEY',         '#YdL1Bk#4mqJI.xKr@zNE8@*;=-Eee>Nfv%1cT]l74];A1Ti;Oj}+#?rX(1X.!*D' );
define( 'SECURE_AUTH_KEY',  'k=%=p~]Vy[UQZsa<:c4>PiK|<M*]9Z>c PmaY6%Ex?py+J02L`}pqsaqokk1r>W ' );
define( 'LOGGED_IN_KEY',    'f(%XM|^]+PyTP.^ [M0;wR*j.|$ZD|.Y)=iI_p;::?nwbUliX2C0W!]L/X2VpW}R' );
define( 'NONCE_KEY',        'E*h=/3BDQkQjIT^`Vk|np?;1Km2p$lt|!6G{xkJo=/!Qi72n_5I]}  &@Tr5}xVC' );
define( 'AUTH_SALT',        'yjKmAm_G2qajjY77E<cqDk9nJ6y[e8UU_r47opd*qr_?PV86lG7gl#)VK0Emx~X<' );
define( 'SECURE_AUTH_SALT', '8B|I:*CLRqAD9K##aBVG.r8P+g9nLDC>GQ|hym=p8rl5+,hOP!L8Re},>SfJ2jn!' );
define( 'LOGGED_IN_SALT',   'K-fPt=h-OIUV-213a AD:ry4B)oV<YoIM0?g %}%] &Coa#NWF#Mb!M_e<^uNEs ' );
define( 'NONCE_SALT',       'i TRya@qf#ms77X<{{@PN#OD+`_bG ]?b1ae(b/a&3PG;pvemH%y3]j>C1 73qM$' );

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
