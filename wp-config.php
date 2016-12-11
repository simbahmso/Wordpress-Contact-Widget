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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wpplugin');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'S>kOgpeG1O;PvWk-)1CID-w}+UA1:I&|)wiW=imJ>V.!31;|?iscA]G?R+02_Kn;');
define('SECURE_AUTH_KEY',  'Q{Zk2OK#|]2c[PNED@|+TS2xk[>glf-H c5Z}I&M2V<vEX/R%]fNx`H#`5GLo|,H');
define('LOGGED_IN_KEY',    'fuMbp90;o>>dxR^hbc+TlV+^|B+YG4Xdz{@>xA <GR]+d+;:.MS25^-?^hB41(^q');
define('NONCE_KEY',        '1~H=q]-D}z__&S]5e&78ZEMbS6eR.P$hALB0uT[uWso+NvDWv~0IJ>y~%=S3ZEL<');
define('AUTH_SALT',        'HPx_XI.1l~e_dO8u>y=<$_5I`a5NCWtS*} AKX!5eNRPL+Yn2]LM9*>v!#@VS}Pi');
define('SECURE_AUTH_SALT', '[vBN{.W%*JYm==eFu+x[94gyl|aRUoxp7nVt,{|>qp^agj]rK%cIeu&[o3p;)HIR');
define('LOGGED_IN_SALT',   'Ro5!EBZ<U-0^<KUot`)<FH)WEsSwhV14.]+1&&(!o{{7/9+cr5;O|Go28tiG7hUI');
define('NONCE_SALT',       'm2$,kowNyC:&vnf$}C$hw8MNZQ1pZ1-4uU_|W7n+En-9:{r)KVm3t_@gN?[su?J=');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
