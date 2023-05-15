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
define( 'DB_NAME', 'skahosti_wp531' );

/** Database username */
define( 'DB_USER', 'skahosti_wp531' );

/** Database password */
define( 'DB_PASSWORD', 'Zq)S]p05B1' );

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
define( 'AUTH_KEY',         'crwiibjjgbn1lf7nyt5adlp1s9zzy1o7eirpdbnuidepvbaerepedkkgsmicpl1f' );
define( 'SECURE_AUTH_KEY',  'hn9ukcluxe5r6gvvk1jcxodqb1ofyzf2x6n0fq4gxrsfvtgi1dy1cztza6sawv1k' );
define( 'LOGGED_IN_KEY',    '4jp0snft2trdiuzlbbml9d0abprkcfykmyv0usyfod9tzjjg1q9z0u6dpl3mdbwv' );
define( 'NONCE_KEY',        'mfw0s08gnxqva3rskdtc4slm7otxdwbt1tafbbc08cg08qkqzpffngoy7owt1gbj' );
define( 'AUTH_SALT',        'g7mvktqjd6tha7s2dsjlusrxlukh7skxacs2pysl48tqs1dnfocviyf1tadrk0g0' );
define( 'SECURE_AUTH_SALT', '0vajtxrhv9wuvvg6oc6hjpsfg1u2ypvyxwhvdcwmwxbi4hj6wy6rnwvhw87wevgu' );
define( 'LOGGED_IN_SALT',   '8gpihlyd7aisxtksgxg11exf0pey1bvf9bsjgofvkvad1cld5emgmqa06iym30bj' );
define( 'NONCE_SALT',       '1tfd5d8asicslyqzwqojjlask7jedku9i6ezvtx4o9hbocwg1aa0mgo8fvmbsr8b' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp0x_';

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
