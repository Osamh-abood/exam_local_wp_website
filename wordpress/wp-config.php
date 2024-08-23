<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         ';0:K7MPZmTshKbLG|UEu}qB=g6:BZ#%2O=|LiI5_[]c;<<g_s+uwGObw>.m}@;1=' );
define( 'SECURE_AUTH_KEY',  'G=iun<&XT%eaT lC&EDLZIz*5n%!H>5r)}.Ft$shg&$v)g~bUd@VBb`RteiV.0ta' );
define( 'LOGGED_IN_KEY',    'le>(@0`c[_{NV{@O#8.yN0O,<=z#9TPKCE^Il/u=^(uG2 a|iQbpLzrmH$>EUCps' );
define( 'NONCE_KEY',        'E0[Db2hP:1w4}k2(0)`5tpgX5[p(%Ui0kfmlW_fkc*b1u+!B&TK&z@;tfrc_46-`' );
define( 'AUTH_SALT',        'UTkJ*@M!ih T(iA}:#.;f^x*!T2ML]x0S%`mx+x4EJ}&v>s|2Ar73E_62 De[4=N' );
define( 'SECURE_AUTH_SALT', ')sJ}gk!p}V|C;#}krM#bV]N]cN*~v(z8BUEz-#kCP<60k,cdIt&jFJ+o+W5n!3=`' );
define( 'LOGGED_IN_SALT',   'J}Ddpdujb4FWp^lKO1ZhCbYwZU{DCw9g27^Uc~wl]L0XIZbOkdBSDs.qe#>]M(_s' );
define( 'NONCE_SALT',       'NZ^U=I30r,!LOnohR64{_epj,_q#:?$C.(V(JpYyia23UCn8+0La!!)>Q7{kMmvw' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
