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
define( 'DB_NAME', 'yflatticeshop' );

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
define( 'AUTH_KEY',         'o0NY7=.L>R[wY~T+6PR+QF$o+S$S:b{XU8G||_`Z>QlHp3NEu9sc}-xu3*WA8J>^' );
define( 'SECURE_AUTH_KEY',  '6&$C=P27S&zV~K(hLQ?Q]){;V{BM8Q2~fgzguJIlz)NVF}>r=3^0{=iOH.vZbLSK' );
define( 'LOGGED_IN_KEY',    '{k%gOlsdHSt1B=Hmtx6i|TY]0%x+EvervEdPNn_<XG+fFTS&s?M)]CGi#GKSU L ' );
define( 'NONCE_KEY',        'B?q^z rzM*i+T3X@9,N%6+;[|:hGjJf!%vYM%DB>8sC8N*7Eu;@$2_T*Q#cu=X81' );
define( 'AUTH_SALT',        '8X{VBFAG_i?iZL R0S3^,xkcCvh^k2E1TJXYdqMXJVdUFT|[#uzC&;LMC6^]w&@*' );
define( 'SECURE_AUTH_SALT', '^QkrF<])]s|>p`!?iCnis9l!vdN7&dXW3h$O2]38)$DxSNgU=h!a]`a@YgyCNX#:' );
define( 'LOGGED_IN_SALT',   'b/P|WskrDM3&z?3LF-yDS2AO4DB|MY>x9b1[Ba8344?*[I0=KB|~57psTE;@8o#E' );
define( 'NONCE_SALT',       '5x7vR3i|C+!&?mymyBp9vvK;sMGoRZRiDrAvk2%=UBHXUkGic8&;IqbpN*J1%AkS' );

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
