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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Display-Team' );

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
define( 'AUTH_KEY',         'OSKBnpu9h9wgJmMMYg28afbyoOvK9afVc59xhQxwDXs8oLsSG6gFlpCw0HIAGAhM' );
define( 'SECURE_AUTH_KEY',  'gM76wHauhkrZprTkO5ZhlfrTMWj3wVJih56QJmip9yKNejXzQ4Qxa7tvHMlm6vSd' );
define( 'LOGGED_IN_KEY',    'JHtAEZQQhxmJ6x1RDRXrwfHd058jUHeGl540bR4hDa4t6SrfZ3roZNjugQY9vruD' );
define( 'NONCE_KEY',        'era9cVnplpF4xQm2U4uZQ9ypGkIaLFnMPyeY3i1h08RJlcO45RHJJRRQ4ldIA6tG' );
define( 'AUTH_SALT',        'U0U88JXeJckXBs7WTHkK3fWJepZvkQxfMXCUfn81FeOp77rAMMPVW6wjkra2N6Mw' );
define( 'SECURE_AUTH_SALT', '3ur6DCkZRbucs08Ab2VGiBz38ocWeR4QwaR41CWpel46HIkMCB3KUoQJ3BNoCcu9' );
define( 'LOGGED_IN_SALT',   'bEj9y9zY3P3363nRVL5YHPMcawbXB6dbGQiIaMWWMNOkH777pgU5N5QwZb4y82An' );
define( 'NONCE_SALT',       'KBC6D5KHV2HCJNFewNp61qEvnqjvRX5WcQo6sat4nUl19qgYnYcywsNU9om1ygIN' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
