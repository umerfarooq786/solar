<?php
define( 'WP_CACHE', true );






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
define( 'DB_NAME', 'wpelubzs_wp580' );

/** Database username */
define( 'DB_USER', 'wpelubzs_wp580' );

/** Database password */
define( 'DB_PASSWORD', 'AWBpo2.S3)@G0(K@' );

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
define( 'AUTH_KEY',         'v95h8abwsbwayqhcp3ownsrcapsjr4xiiojtbzsgnul929pzvuz4vkyvqxteiurd' );
define( 'SECURE_AUTH_KEY',  '9zow27z1ptc2bqyri9ngfwkc7q1dnc3n1kla2pczwj7ca1tfyysbudhdvfwecdzc' );
define( 'LOGGED_IN_KEY',    'xdsq4uhbwxiiavb64chtzgxetrhwgkgq6id8gxdbgybvibqdqhfvupq76fmrzb24' );
define( 'NONCE_KEY',        '7qhcquqskmmerohmt8bq6kg6h2pfqnqrttnc6hkrx5yvwfu6lpxq5mkzekpi8kwp' );
define( 'AUTH_SALT',        'z8tjkt9gzakxm3wfrznsxcczppsgcv3qm0aa7dc82xwuw7yazcldnilpd9vz9133' );
define( 'SECURE_AUTH_SALT', 'wtqexcg5h4py37fiw24visqh8kejxupczjy3ymqne3em63rwiffmnttfn2177cpb' );
define( 'LOGGED_IN_SALT',   'mobjlcxktstw6icfbjw8mghq4puco6udzj1qxnxspgnu4mdszt28zpjkkvi3nwhf' );
define( 'NONCE_SALT',       'zga8mtme41oeeq2yz82r5wn5ifybxrecmuabfzborchrfqmfbg9vwcq0o82g1jli' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpmg_';

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
