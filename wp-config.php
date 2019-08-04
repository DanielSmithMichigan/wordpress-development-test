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
define( 'DB_NAME', 'wordpressdev' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'C9WUB42DMID9VQYM' );

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
define( 'AUTH_KEY',         '2dWO.-P/0aI-!JMTegW%FWJzz W0a*oeIsl{ia^m$%:f&r972}oA>963s:WF5L6g' );
define( 'SECURE_AUTH_KEY',  ']0>/%^p{vFueEjq^_d3v6;vu~>r1H.j4FfnYJG^u8`tR+L9yc;(qIYV?-aZw/tPV' );
define( 'LOGGED_IN_KEY',    ';`^%z!Ru+{s,.=(VJn|v`}iskWJVopu{>>@6sSrK71u4Kuy{@CY3Sa/xw064)y-m' );
define( 'NONCE_KEY',        'mZC{d6]>ZR&n%HjF/V)~6Yt)rCk_1uE`,DdcTZ4mDQP$$N~QU>a-w+emYB6?hNc)' );
define( 'AUTH_SALT',        'Q~}11:FLg=A):l<lFru#DzijwpvPHp?lKjg;FY6}Hs-f-[#~,;8h8tf@+:(osEXP' );
define( 'SECURE_AUTH_SALT', 'W4:7$bLV-SRWI6By39Th4{pccVq![74O]7JZ}C&QKYz4,%gZ=Z_VIV]$i zQzEo`' );
define( 'LOGGED_IN_SALT',   'YLAmx^zZT#x<u2h_k[n652 E0U&KsKNwfomzGu|$`3F>4bi7P+~JO_o5Mb&hXr[+' );
define( 'NONCE_SALT',       'A{FQTp4/3fU/U#^cZ-v,Y`0+p2rgQJ$YY8O]A_U JW^WS&S;n{:4>/93w!^l*@dU' );

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
