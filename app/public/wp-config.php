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

// ** MySQL settings ** //
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
define('AUTH_KEY',         '65/q6r2PpFC4luDGkwGU6QjwEfAlRGPEVvyg3ySVfOEmpaIuHOhsagGbCZujj+2IBXCxAWCRfgZTWeIecBnDVA==');
define('SECURE_AUTH_KEY',  'NcyTVVjVz4OeqQsRNHWWKFAkyCJyCIz1TRwfif9DHC3rzq53R0ZkCQKZxsz9fYS54LHA80cypbMFWWXdiauaXg==');
define('LOGGED_IN_KEY',    '7ZKogMQRHp6jdng+296WO0/bDyXBEl9OkENY/uprG/ISjdqaIAFOeiJ0sk5tiLhAsITHbxHTRQsun82gKQdROg==');
define('NONCE_KEY',        '8dIzgVzFyKifi9vMOpR8sb4X2nha2+s1eB6H8effSNNHWJHEfPJi0Ic+3d4dj4pZqwEHAqvG7PabVp2ey3OxEg==');
define('AUTH_SALT',        'J7u9qH/604HWWtVPJ+knfBgD7y40c9tNWEZXPH99bK9TBOzU7csKQwv06NNBtNOeW64W19mlPpvja/6q22B+lQ==');
define('SECURE_AUTH_SALT', 'HCZsObWdCC1t02Tr7p+Wjs3HhZyawHvGVANZ+s9ebcTZZT0jEd6dbenMatbJOsxDPtkLazIuK8cA7oven4Kc0A==');
define('LOGGED_IN_SALT',   'khD5TmoCGMgpsOHHr2CVQJ0tEnCG+zw0wcdrVWKH6UMoszwAOfXS8b1cyJeCky/nfIFPwVWwY324f0PosVs70A==');
define('NONCE_SALT',       'vcvzhe95nn2F8rHIHH/+PTfajaZHONh8bYTvsXTt0V6rqHVZYLutJbbuxkvoY66aqbTS6F2Xi8UBmWy8x+2Rdw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
