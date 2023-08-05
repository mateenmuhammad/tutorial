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
define( 'DB_NAME', 'ecome' );

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
define( 'AUTH_KEY',         '{[$-4~$H=x)?/)x=Ez2F!bfe?A03IQ*t{!<=o4#_j3EKWwBU}wGn;/~>DH,V1eYt' );
define( 'SECURE_AUTH_KEY',  'p|$P$&J(H*;N6V;fH:k)UQ9/N q<fIkfcmQbd_O,mq<e}@7G5[5R/:W:g{~E3[S_' );
define( 'LOGGED_IN_KEY',    '@w~vJ,H&8Mqp2+6<I|IY1{BDv*|ZzJ|=YDhB>LKH5xct8c&|p+5itP0~Q B>hFp1' );
define( 'NONCE_KEY',        ' c|Af?i6%<S({3?UZ>-SBu2NF,8WFvALU2SD=N<_7Q^,RpJMh2JBRoIHC|Z&?TkC' );
define( 'AUTH_SALT',        'v4Ou.*:R}Sr_d84dww1.0q3MI:V#sv9N9|A;Uva8~_eIQ$Y4:wt6~t/xHW5kJKYm' );
define( 'SECURE_AUTH_SALT', 'xqazA|FF]Js-Wx8iUo]x@b7#ZQ R$Iq=F~zEL_[LK{t30=KO#; 3IbjJ7Vz={@Pk' );
define( 'LOGGED_IN_SALT',   'AH,!aaw%C*c~S72Un]HXw$i8:LvOd0xAhmLpKWmR!n-PzS;-8R+T ;TP|abr>?S1' );
define( 'NONCE_SALT',       'BQz nCTr#&s9dr@n-b(]{J:sY=5@0,p|Gud-y/M3yow:IXiY$^T+@rBnaE_3G<kV' );

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
