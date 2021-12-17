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
define( 'DB_NAME', 'wp_cv' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'B8`}*vD e(d@8@BpGjR`ywE`CIY%Y;g]@!.?1U,~?L7G)5wO`l}63ZJ8<I*,& f-' );
define( 'SECURE_AUTH_KEY',  'J&keLw-g)9/?Jm&d/> *J&<^/hkZ99(q9`rkT+?+]a9^EFW0zE3rDz@=SFwlB(E5' );
define( 'LOGGED_IN_KEY',    ':oE fhNIPwRxzPd@GYJ`YW~h{2F@wrOu1oj:2|:ms;vP%6|1GSy{~1hT^(c{~ u4' );
define( 'NONCE_KEY',        'V1La|>>}fX6,>d^.vk/Z tSZC&<g3oDJMS)GwSW:jB]+85/b?O~oEl+9snWrE[zp' );
define( 'AUTH_SALT',        'GwEbAj(Z9ilOr.|GFhe;J({Z{k6E-,G;>N{G06e,?j?hpY8uzGxJ:B=QMRg!3cMZ' );
define( 'SECURE_AUTH_SALT', '=oTZ^4H$*N$6eg2`T7VW{%h2dtm@VMRf5FMfORD44CR^Fk4Gy{=6%n?2)/>z7Amj' );
define( 'LOGGED_IN_SALT',   'rp6pJ6X+iRGmhV-.0HkX}(nqH-Ppnh+=>1AIbQT1`R<6H-LMI.ho:(.Q{(lE=IRm' );
define( 'NONCE_SALT',       ',W9.^k>ur.~n})ODcac++HOc3Aj{ X63PU{~p&alKDts)5MfaoXQII2IQSJyzn_k' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_wordpress';

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
