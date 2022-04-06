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

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'usuario' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         ',lS=8?};FRh_PHSMVa|uGGnQH1u<<NuGZ%r=$R.,XCr8!kbrbJDRUtqjwQ55hoIx' );
define( 'SECURE_AUTH_KEY',  ';;g!=1D]4LlTL=Uh_Df?2:s~,I8<K_W+0ELv]y,?5s7V?2%(}GpvB&`np>+P+7#G' );
define( 'LOGGED_IN_KEY',    'c4K!: `gWb5)PcKgLI{d*{TqHdTJ0qZrMv1JRqnrwO&fImsW;:)2[Cp}N7qZa/=C' );
define( 'NONCE_KEY',        '+7Jybv}5NlG;H?H2-jTaF_1O|A#S]J.sMy!D0fp2NUc>!hXV4Qr~>VBq$$YSro30' );
define( 'AUTH_SALT',        'l+`G<rKT/dc(utLEfa+WZqF5}>}%ftl9wsJ{eUiU^hOXw_K})^thh@nqHdWUq{j#' );
define( 'SECURE_AUTH_SALT', 'CRESCzOcYX-BO>H4z&A`eX^GQ<v$]yvz;oUXJ;0)pHrKh}A^QuMs[HQ FVt=}[+j' );
define( 'LOGGED_IN_SALT',   'd]7iHGq${Fsa]6rwNclIJS$pR(*~*v/yPVo@4#u+{/f7duzmD(^/}9`tM~%qWp^l' );
define( 'NONCE_SALT',       '&Q[F%T;#$=-b7qy)6PKtys#<:O4u~LA}}&aHw1|-.75-%:0*nF48|/7w0~Jp^NLO' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ag_';

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
