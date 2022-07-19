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
define( 'DB_NAME', 'alfian_cms' );

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
define( 'AUTH_KEY',         '{`B! O_Tv[$Y}<m!J:b]}*Wdei9H2T#uBC/7~I&>jgP&Uj]cP5C/wJ!jBuO+$yox' );
define( 'SECURE_AUTH_KEY',  '47r*Ti@Z9p6^4^iZy$[G6JH$T.USI@S,eZ<8CRRU&rU`;J{e!$Ur$QtL(AZ%6x%r' );
define( 'LOGGED_IN_KEY',    'qsa{ILw)t);_A{OiEh.wxH$m-%7iaGLik:CJGX)C4^uBuN@Q xNnGb$_Wq1x!1]8' );
define( 'NONCE_KEY',        ']4@O].z$ei7o3vaP$$rVZQ%MAOd-~QL>mHCw(WB;l]NX^CagB%/7JQw?;]o`d?,(' );
define( 'AUTH_SALT',        '-KdfV<:ZN*,gL`$C,cl):Ct,GiW1~)X.r$]*%vv=/D+c5*hvx|2pWiyUiAr5?gL@' );
define( 'SECURE_AUTH_SALT', '/1B8fY4W:jX;4 fwvVY1t2!(Xv$C$Zj{T3rKR9(ULsEAK=dJh-nM#*1*uO~s_f?Y' );
define( 'LOGGED_IN_SALT',   '=/uDG*104XOvI*[9/Chg7>;Mz/ABY*BcD64?>q71DKRP%G9&-B/|ZS`1&[?+VXVU' );
define( 'NONCE_SALT',       'cxi)hm+Pvt@4ksHWaqr1F#Z427^)Ea<h6i9;u/f31LxatsOwd#UL@>>O69JSl5mu' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tic_';

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
