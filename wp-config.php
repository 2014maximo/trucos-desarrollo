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
define( 'DB_NAME', 'trucosdesarrollo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ' Eb1l2iVt`G[U(3R*%+<q><qw|~#[<!TKXB)hoDY6S%Io+U /<I!=tUoo$9~Di7>' );
define( 'SECURE_AUTH_KEY',  's%PB[ikkJbfJ0CU%N<}o!-u&fEVQC+&E6!VkP2th D(1nBhcW,!vSG@)jB_Y)cKz' );
define( 'LOGGED_IN_KEY',    'ypn;}~LZJe~qa0_}4U*rgZOypg%8kN.b3>o7l5JmQWm6*&#[a76;)5tj uWHktuB' );
define( 'NONCE_KEY',        '4MDh+S3N:ypb1H0Zq=qJbegi2^evS]z#coJl^4nfnZUMJqagmjn#3zoi]D7__o=^' );
define( 'AUTH_SALT',        '&1kodBB#J<4[y&{r)95MPK3(fasNlS(W4bxJx[sG|W4i5rF1x{hdbM`SE8-rdLc ' );
define( 'SECURE_AUTH_SALT', '|yP]Wo?+N8p:v=HvMcYO,Z]QPN2)d-NZR+y$:SD`~HW$C@2gtg)I/kbftf~g6R`m' );
define( 'LOGGED_IN_SALT',   'V9dZg*97FC]c bn-QN/|1nV<oNE25&6)4^[0&IP>Cj /Zdah7$pq8m.+@^p<aCu}' );
define( 'NONCE_SALT',       'd>7>0M1=^5Og !#P8jI{st*w.|aXuGWf?=M9JF18y6i$*0MU/s9Yg^R3+D4ZFKHU' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
