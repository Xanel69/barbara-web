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
define( 'DB_NAME', 'brbrhff' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'j6Kd<ODn%Li2C&OcJClUyrb)GC;A!y|+[nPg-,>qrWG.qVUt<(;mrD }LI!c-4*,' );
define( 'SECURE_AUTH_KEY',  ';w(&UoMnsw1urCf&d9Dr3_%DSD[;wU7LpTBU)V_]KryoyOp0%1b`T&qas3yR] >x' );
define( 'LOGGED_IN_KEY',    '`s34p~LZ&4=/?vuRGM[FO=x>?N%j=X0h~XGx~g7q6nJL^;IzpYku!r|,zAA _xiq' );
define( 'NONCE_KEY',        'vK[~<T&E]I&Cbc3X>I14.O]imhm^kv[@wn`yLC5nHIb393}Px`,hx?d)Iqxn;u|*' );
define( 'AUTH_SALT',        '-e+=pjusB_N.3@]pK.8,3hZ1(7?J2B78RBh#E8hrW-WQl2rGkyJrAa{0<e3R}~Bj' );
define( 'SECURE_AUTH_SALT', ' 8nU3(f0MD=E*&JFo4XpV^egXH*x~*r@OTWFUQxV5<@sabo{^3>]IvI;zr lk2|`' );
define( 'LOGGED_IN_SALT',   '-d/Tph^GE#3+6ME7`fw0}O`2<jeoL%b0Pn)h`x:oRF g%h!gE&lF6`*)IYJUxrhc' );
define( 'NONCE_SALT',       'x^Hl9dP:[5TOb<I`vW6[$74VVtsIboN^;&R?g{E_-+2Gg_@5+b XP_<:_:btA54k' );

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
