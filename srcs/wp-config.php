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
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'BzxZ,ZAI=$eg&(;~..(%AU|A^#E-#56GX|Z=2eTy+PA-OOPvbo$:27qG~cCTW*Gs');
define('SECURE_AUTH_KEY',  '<$s`SIs{cbl8HZTpu}O(OAjBu6$g.bhR)GeD)lzn.Y <iJ^N|YbnXiME)#<Ywt$v');
define('LOGGED_IN_KEY',    '4-SfF8ScRTc:`lC%73ZGO=|:e$`K_ikk{k=Z$MgE::_.6m?rCQ+6,Jcn;WRDp]Dq');
define('NONCE_KEY',        'x SRO`Bc!;VqE4u[n_Zh:7p+-9-.ebWVM|k:5-o>9qa~O^l/:+&jF-j|0zka>O+R');
define('AUTH_SALT',        '&dQ.-IMDNo)(`tz84|]_ZP0$(oAa)mc4h<eC^Wv]}YGE=eH#AXo__ X.q0.LiI9)');
define('SECURE_AUTH_SALT', '%3NTyp1GID+mfiTD!ZY=6Wq&+;=<#7t3Cx3*,EnZ=&l70MfypO#LDj|sy=jiZ-lu');
define('LOGGED_IN_SALT',   '2S}6jn rCQ^U+P&D2tE1UyHv3Ch3bEERXsuRpLd8t5$X~a0;!O Z`M%&v=-OfJi+');
define('NONCE_SALT',       'u*9.y[9O7[K;|J~}+8C7!zG[SS V~EIojN4GQg-5I|fwP,6s;BE7eX$jc2Wp+j&]');

/**#@-*/

/** Update WordPress Directly Without Using FTP. */
define('FS_METHOD', 'direct');

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