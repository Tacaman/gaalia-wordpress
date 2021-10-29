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
define('AUTH_KEY',         'c28CCXxkzSuKcrpv/FXuCVCqy1Y1lQGQArlFYJPLaNJWVUz1V1JwxT9+ZoySie4qbEgrJWRgwy0sqN2vUheP2A==');
define('SECURE_AUTH_KEY',  'jSRETwcQ3cNbLgcv5+M3kQtHbsqBGqmdWTZJPXUjR+2jVTkDkjCOC8Ivc6V5xkbpOq3llzxCSn1zdYBRQeoViA==');
define('LOGGED_IN_KEY',    'g+ZoU1wImcYn98kwQ1zXwtnzsZFkLl9EiZYUsxF3JpfCpWLaSVyE7lf5u8yKhSqJMKGBDtDSJ3dYrMWvJ5w0GQ==');
define('NONCE_KEY',        'r6/IBaGkBqZsq5tYI/lH/IW9UNp2NeebW3OUGZAPIfxBGFKxrjEQizKwDVXb33iZGX2WPWjegJdjWPvI9fhd0w==');
define('AUTH_SALT',        '0cvCObGphi4LkFnQsaPLymNNlJ+sHTHQeqs0lY4/Uq3LbnKGTxmbLhDxibj6HnHG3SdcZTSdy3DwWsf6j6QqVg==');
define('SECURE_AUTH_SALT', 'lneb6LvqjYA+IH2RvOkhCkH7jQbTvgNCpLyT75OLFHGnLS6OrY4D8h/PgJyANlYJUh8gzwV7Ix7xba/Hc3Q1Qw==');
define('LOGGED_IN_SALT',   '9YvzQPXWIhmlSFrOuE7jaDA9RHwVbCT+vNRfqN0jvxCwLKiBXikGt4owWxz9mNPJyLjK2sP1fXNcDEhwYAOgpg==');
define('NONCE_SALT',       'DtdiRuIdU99062M6tQGAlt2anXxrbsK9ZW2JOojideIetQ9hFKfsVn0kmN/x+ur0TLuDWMS/Jw3QG8Auwl6vQA==');

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
