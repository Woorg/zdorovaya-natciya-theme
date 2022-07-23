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

require_once dirname(__FILE__) . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__FILE__));
$dotenv->load();

define( 'WP_REDIS_HOST', $_ENV['WP_REDIS_HOST'] );
define( 'WP_REDIS_PASSWORD', $_ENV['WP_REDIS_PASSWORD'] );

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', $_ENV['DB_NAME'] );

/** Database username */
define( 'DB_USER', $_ENV['DB_USER'] );

/** Database password */
define( 'DB_PASSWORD', $_ENV['DB_PASSWORD'] );

/** Database hostname */
define( 'DB_HOST', $_ENV['DB_HOST'] );

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
define( 'AUTH_KEY',         'ZvsPMaPMs#4%02.lxfoIWNJ.qZ}OgCd~hb6.o+0v }tM<6k{;_<%O: Mp&&5{pbF' );
define( 'SECURE_AUTH_KEY',  'o~#1BlBQ9G1=>^:Ls(JM nrsnr2C:,I<[9#u,JH(!.Po-zWW%|WEn4D+UycluL8i' );
define( 'LOGGED_IN_KEY',    'uL3=}0jSXw^M+$9Ccb$Q}I8&Z_<ee!vj&KO1@}E]2W{UQcVyU0*!2<k[nHxrV$PP' );
define( 'NONCE_KEY',        ';sNY|Ge2bQUUk|%^`j 9?2N9SA)!cFoF{4g%i8P-D;@DH*14]IdjIuu?N],O{HQ>' );
define( 'AUTH_SALT',        'h;E$7!w$bpJ6b6 U&C1XUBsK<l-:W9mr^]ufMH/:R~dajknmKIJ*-$GFb{F8]8wr' );
define( 'SECURE_AUTH_SALT', 'H9 PLADn#%:3O8O;;GV@%{Fqpz5z$.H[4Ck~8O>7=PJugYN13{nl>RCM1aq)ZY-D' );
define( 'LOGGED_IN_SALT',   'n*z+Ua~ov$c7*`Ts*2!Q9ZAc&4,h_pE28Cn*zI1p<@-c&qQO[cEGYv}8|u5%j7{E' );
define( 'NONCE_SALT',       '^gHkFa{>`YVm^/~VfyRTxr)$PR+n$;UXT<7$R[<WgF)@wL[(77-wM[{?qziFY$$>' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', true );
define('WP_DEBUG_LOG', true );
define('WP_AUTO_UPDATE_CORE', true );
define('WP_CACHE_KEY_SALT', $_ENV['WP_CACHE_KEY_SALT'] );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
