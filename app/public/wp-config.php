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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'uUYvjpUNQE0RlIiYcreMuFrEY6LHTyqEv6CY1LVLJvAsGf5/SgDiKClgCK2YW1lbcduGQd3cgOera1R3OV/BoA==');
define('SECURE_AUTH_KEY',  'TG97uCweZiswHNv2tHsv85+fjxM1Y5/DM68PSE/hACSl9BO3b8ifjPtii89L1hJBPQfrvOpa5xdSHKxo46hqnQ==');
define('LOGGED_IN_KEY',    'On4xt3FlwqwXuzphpjZ+xXHc+z0esSNi1IHYooBHfWRZyiYhusHYqTJeInVNDJYS9mO+sfEqG2YyStuio0waJg==');
define('NONCE_KEY',        'Cmovlgs+GakO5p1J7vw0Y8D7EBPZYBH1X0QTp7Jzwpr2kGa1+A2dphFE2QpuyVszKZo2vv0ANKeKpfCB97ZvQA==');
define('AUTH_SALT',        'BmQt3InJF9Vncc9sqyvI9hQL7NkbWI+xnKwqJ05c7kxlx8LpOWVRACdRLb1dr3HslDX07a+h6fh6SYv/t9Enog==');
define('SECURE_AUTH_SALT', 'Huot6zB5qHczG+zqAiPR25ifq6K8CiNPQujcrwuU/XSTi6jd5D0WOpEYuHb48Qjkym1kPxKHOuah8Sip+MtNVw==');
define('LOGGED_IN_SALT',   'qqk2Ajo+ui/kF3rRFXdg0Gn8v1u4IvFLW5XekOHjNyb57ZjlVcmn+xc9ds2i2oJqbJDF9K0K3XsbWSXzTp1urA==');
define('NONCE_SALT',       'sSAg5XvwS/HbLhRP8IA1ETuZoU4JWoJADs5ScLl4m9k04V2SDUMlJ5W/5fQjVCen5BBAPUwgS+HlxpOd2ZKY4g==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
