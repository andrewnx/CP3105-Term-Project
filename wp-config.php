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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'CP3105-Term-Project' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'CSuvJ7TxJfUaGniGnjg7ikXDU3vfaJ3JST32tO9Uc639NS9DeVehVRfAHcS0k4vH' );
define( 'SECURE_AUTH_KEY',  'HnFoQkq6OAGOMQ6HdeiFoOZ6CTW8CySCcB5EP7LcKQKfYJ0I9TNEZOSEaUSJsrQG' );
define( 'LOGGED_IN_KEY',    'DJ0WYkKBCDtu1dHBN9znMV6gu4s6OmnStT7HdHqSiORu5KMclB8DuW4XotNmadex' );
define( 'NONCE_KEY',        'o8z5Hr2Q8KVzChVLGAwShNEinpizhWRMfgTEeEVQOCRjFcaXWeyLwU79aq1gKEjC' );
define( 'AUTH_SALT',        'eZ3pCuOJLPysxZQNUf9tdiYTKbtN89mRh7iaqrZalwpQvVa6loVkhXdnFH4wogyA' );
define( 'SECURE_AUTH_SALT', 'eZc6xMPEGb0jjNVWpXvVS0fMXCyVdlcznmJfBU37TcyertyOqOygBOMoo8dJstIG' );
define( 'LOGGED_IN_SALT',   'rPKgfBK4Y0ult9Es4wLYz8DFl276uYHml1AWyXrSsnmDho6m6bIxjd0TPzHtlLAc' );
define( 'NONCE_SALT',       'HtDwm5vFjLdXpHBB9tyopYCoTyqQdOSRK0D0TW2L2UGAx5t4FowgVYdJwrO2ULQk' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
