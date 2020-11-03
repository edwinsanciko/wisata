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
define( 'DB_NAME', 'wisata' );

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
define( 'AUTH_KEY',         'y/Y5V=R5gHG64[?|ki/9?s}:@jB,+U8)n9;LTmL3F.|3mjE]_[[FC)w`Uc8a?rt1' );
define( 'SECURE_AUTH_KEY',  '(ke0quB<u0#nm(ypMm|!OOP8~HW%j=L2YS`V3hUk0:cE&-HOsHrXHek0^~Ay|vlC' );
define( 'LOGGED_IN_KEY',    '4I65<t*lP6w%2ad^umn;^cm1F,<5/4Zz-Vmr k>@p5n4OO7BkQ((=nk5[J3`|D+G' );
define( 'NONCE_KEY',        '}T{as{5Y)LkerVXKYFKxIS7(@K%o}eIr|++a~^dnw9*P[(kOG.:[5_ScWbs.fq@.' );
define( 'AUTH_SALT',        'AR3_?mT{j2]A~KGwP0 :_z!W?bG,%qLA`kzUGp!kF]%Jyv8e4iMA.RLy`=!{&{8]' );
define( 'SECURE_AUTH_SALT', '.bki!T]@/G3+A:mp $q<anTYyPe;AzubI{mR3W9aY*{`a44j1HE^(47-4-Mv.T,k' );
define( 'LOGGED_IN_SALT',   '8O2Tnen+=<<-P}g>}Z?KDYCw,+F-cXBjet9wN^JpketU#lyAjFIll;Y[T2VvJX W' );
define( 'NONCE_SALT',       '&B<PmEB(OC*h-(bc3oE_Fzw# lqSwW/X.h3E~H b<ecqjTiY4&QlZR9ZkD^TwCQQ' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
