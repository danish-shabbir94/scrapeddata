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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         '9IoJp+TYbKP+NNjXCgLuDqzVfYkhj/+ciXc2FRlfF3h3EKEmpoQCR+MaZKFGUpAc6N4ucEc9hbTNoC9b6h+nzQ==');
define('SECURE_AUTH_KEY',  '4SCSiszl38ABtpvM2zQ4GQJpiQTSSNcQs4BIoOyUciHEditeWa5wFzMucNnQy1NVYbUbqv2znsnLvKAzoaYueQ==');
define('LOGGED_IN_KEY',    '7i6FZbCob/bWPwdviqCZXLrcrdMZLhz+C4AKCjJ8GnQhphqn/9RHMehChBXR4nsQ/CzXLpohkIQ2gkAT4aQf8A==');
define('NONCE_KEY',        'XyUmoBK78fJY6+hW8xOE/JoltfDrqcdIcQMh3xuWrKLUrxsvH8I49zoax8weoPt25T3QNXOFfGQBaO0emkpqjQ==');
define('AUTH_SALT',        '/kb+GHwkKykCSiYz5bJGF5nWnaIch3M4GmXvI7hINfT44u6kQhNLnXhf5CoHL92zswZ0TtM/YnvveFBtNtneCg==');
define('SECURE_AUTH_SALT', 'q8JyQ7pb8uCaY65J6GvxrsiM9IuyUfpSMIx9w2WfHTMfmN8RcyqZXOrrPXf2jZpu6sTuPdChjlzWghMprUvkcA==');
define('LOGGED_IN_SALT',   'g/MI7KKQWzlSWsz6J6yOk2Bu1B8A64cmKvTGi278duZkGzg3eiZKaWjZm39kWPVRIAiV9a0JFMf4xzmL3MuDHw==');
define('NONCE_SALT',       'LstHVrg89Qj/HzZNP25PdmNmt8nA0WsWWfsl7sOLILR/nHA8YrYWQCus5alYNbzGVIbuPy8JU+TTXyRrL0PM8Q==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
