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
define( 'DB_NAME', 'i3425381_dwfv1' );

/** Database username */
define( 'DB_USER', 'i3425381_dwfv1' );

/** Database password */
define( 'DB_PASSWORD', 'S.v8hjr2115ZDdTw1dd91' );

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
define('AUTH_KEY',         'B38NTbcb02l797wXtgI23wxnGDpK8m8uSbE9m76bQpePue2jjjEJKku7GFDAv1Os');
define('SECURE_AUTH_KEY',  '67mkibNlOyxEtX77I4cb67lmPAWR6R40GPtk57cXumvJeUrhmvWJcAKwGwGstCiF');
define('LOGGED_IN_KEY',    'kqnkKQfdIUjvAIALWzHSDcRDw2p50MYwNcl54AnWY9wRvzWOrlKMPv7wY2cMGVPA');
define('NONCE_KEY',        'jEYGYL8ztnkwpAoZVg6hEuhxLHTRFFxk6RfC7CpU21cBVjbsX5FrwZLcMlX298V8');
define('AUTH_SALT',        'CthKr1NyYiV97tPbRQ1CydYUpxvhz2jupLVUFLJ62CyS3kAwEtuJavcJVtOX3vwF');
define('SECURE_AUTH_SALT', 'ISKa5Ws7VvOuvRojUhLKOguOb4JND0x6v5TcB0lL673ABnlsG9COWtbYNQeCZhfp');
define('LOGGED_IN_SALT',   'oj0PFrTN060JjWvgsOXRR7P7GgbitdfBnSy5GQhnkQHL2SgAQKuIV8Jcomq2RTiI');
define('NONCE_SALT',       '3m2tc5iKoDK3Ji3q4FwOhmRIDRL6NIFVv90NJ6k4pCm9UyD8BuDtfHskSia7RziN');

/**
 * Other customizations.
 */
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'fqhg_';

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
