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
define( 'DB_NAME', 'trucos_desarrollo' );

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
define( 'AUTH_KEY',         'V<9$J>@E.-RSn&dYh/gm|8!75q?(f/u=U7$sSY!Wv@K|a0jkqP06iM9|a]3K>y 7' );
define( 'SECURE_AUTH_KEY',  'UW+ M0]ALPG=Nh?=/hO 5P~)i}6J%>p:{;B]QY;4:fEYjgj!7n>q+-{dH`2i<Uw.' );
define( 'LOGGED_IN_KEY',    'lUmR=;=g G%|LCTBnU W`z:qriZ.4kAuNy1*93GoSB8^Xfg,k/8^Vmoe@vh^3 `(' );
define( 'NONCE_KEY',        'T*(O*8m+2I~lp$eswTQZ)<FFybuN{Q$fR||gZn].6s=L._x|<f5><B}!w`QPs@-D' );
define( 'AUTH_SALT',        'DsFhb]PuHW7GR&]FZ={}eO*m{AImtaJop;kwn73^iS%fa&panvH?9RQKfat9j6Q2' );
define( 'SECURE_AUTH_SALT', ':CG<:gY0@vTo#/Y<kK/PG%5>W-KmHB>P8>&(T2}=.bqSK$n+>q?Q+LA+WtM4M44X' );
define( 'LOGGED_IN_SALT',   'a#jD9VljG?I%)0Ee2u9q2$Yk>ad8v-F&h4?qR(ksXg?~Vd2+_xzHS[30q),=bydO' );
define( 'NONCE_SALT',       'aa;;)c2uB(2.ll)99$PMG#/u06W{tEIET^/H}&5(_`7Yt]#D9c`8oqV2TBH=MJZ,' );

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
