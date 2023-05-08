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
define('DB_NAME', 'u202319_woo');

/** MySQL database username */
define('DB_USER', 'u202319_woo');

/** MySQL database password */
define('DB_PASSWORD', 'eS1zU4xK4f');

/** MySQL hostname */
define('DB_HOST', 'sql-003.webh.cloud');

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
define('AUTH_KEY',         'uXtfeG1KfA9I0#2%l6BBymChN@uSVqkYipf9vjSBjyFNHja*MIP30KVY2Zcinhps');
define('SECURE_AUTH_KEY',  'iQmPC8acatz4ypBPq#3!hTHo2zGtaDzKV^0h4H*f%P#esnzBZPMqbIQHSbd1Vq6f');
define('LOGGED_IN_KEY',    'IrXF(YAuYq85N5GaxKRIy!bU66MOEWe8iKp^S^&mL9eli9UnYjER^htl4ral8X09');
define('NONCE_KEY',        'xaFf)TceHN*m!Xm0FTmx61(N9DHaMVvfTiqFUlUx94X3uzut9aH&ycM&R#KSWW3X');
define('AUTH_SALT',        'z&tkgN2#aM%^2S8UoY)zWRGncgf*9mj&*p)9URxFgo8q)usippH2q2n0%VRfW#&r');
define('SECURE_AUTH_SALT', 'g)BwFvAeZGdnHr7AxqhR81vRr%jlRndLGfy1uocLPBXoo5P5BcUhxia9C)ncFRiI');
define('LOGGED_IN_SALT',   'TwohrrE7y!#(GUEOc^XR5(PJr%C&(4EnT!XXjH76o3M1R7O&Z5o%@z)7qPL(A4oZ');
define('NONCE_SALT',       '!tU0*g(7hPU6x6ZM5ki3551s2EOV7Rd8K76^Tz#nLJv9wpv8GS6TRPSn45z0l!kn');
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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
