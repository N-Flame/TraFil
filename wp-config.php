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
define( 'DB_NAME', 'TraFil' );

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
define( 'AUTH_KEY',         '00sL1ja 3Ztd)#!Qv54LQTxJ%oBF-:p Bu4o|,xOTO}V1D)NV`yd(pc.Z_x2!GSC' );
define( 'SECURE_AUTH_KEY',  'q,HbMYQ5~8@24ff3@g_oWk;uA]o2#;5u@K.<!j9W/;n}S07CXxvM&_Fj{xxdgd&)' );
define( 'LOGGED_IN_KEY',    'n:+<7e#Wm@4;M:Q/xVMHAsKf`ek)$xl+OV?}nmy{pU0G-(N|ASsx9^oe?B.L4ZLW' );
define( 'NONCE_KEY',        'TjJ~@f&e+WjK/Jcy%fE|^6H?exDMYDqE?Q7rW;U.gY<|Ie.a)sJs_R@(<9,{}`}|' );
define( 'AUTH_SALT',        '5{{L#3ztt~3dr4I7LsS3x,9YKc!^(IO7](6jvwT<y&.LhPVS8joFTj($$qu%%bb(' );
define( 'SECURE_AUTH_SALT', 'DC`^#LQw*<*v;Yee4JN]8:*E`B?Ojaq@`0yO5(AnN]q&[ao5CmOY&f[{UKH5{%G]' );
define( 'LOGGED_IN_SALT',   ']/-rc+Tl;ME$5.^!^nW@< ,2[>^@ |&$:sZtstXd_suWO5GYD/m`<8cy9JbFBJOT' );
define( 'NONCE_SALT',       'vX&&uZgU]mKk_%ou)#*/4gG2[WHx&etBo-Lff{:};Qhb7G5R/QBvSm&!P8p8CGcH' );

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
