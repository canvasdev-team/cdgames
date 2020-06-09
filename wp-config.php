<?php
define('WP_CACHE', false); // Added by WP Rocket
 // Added by WP Rocket
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
define( 'DB_NAME', 'countdowngames_oui2cdg' );

/** MySQL database username */
define( 'DB_USER', 'countdowngames_master' );

/** MySQL database password */
define( 'DB_PASSWORD', 'y7F4}^n]?pm3' );

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
define( 'AUTH_KEY',         'd$RL23%ijl,&6<=og1lkmOE/eU*:,jJ/s#]Yg?sa=iJ_C!Bl<XUI_XewON7G Vm}' );
define( 'SECURE_AUTH_KEY',  '?~66d?R8&y)>eXS:f*=Ia~IShI(2JejX]m@E>S!fsPs{>#(D-FgTw`C^X*_`7Y6o' );
define( 'LOGGED_IN_KEY',    '.kPXt>/okvh^yLbSkE8)`v 5hB499QU;6gHMRe59UJS8izgm^2KBBNc-p0 Rw7n)' );
define( 'NONCE_KEY',        'n2~8q-P@KKDgQu{>lpJ8/9m/yTXz@Z9/HV/=vKy0`F$zt`IKQBS$Q:,JxQU@>?%J' );
define( 'AUTH_SALT',        'SSL1><I186|cIGhh^*{LDHU)`S;r#,4J(Q<CZyoslZZ1VPoW60@908,ob| >C/M@' );
define( 'SECURE_AUTH_SALT', ']Vd4sK;GXVr{DA6<X<c<<,`1QnYb5 (9sk]A9YN)?EGq9K`K9({z1$. qQ[, 4:4' );
define( 'LOGGED_IN_SALT',   'n@QQB?QK5!Y]E|u+8Un}/wqC:juWb.zKr;v&kjaZ`[Z<k?aWfg|G3dT9ngb{Rb8h' );
define( 'NONCE_SALT',       'icG1=^4a/Vus#09lRE^0@&AZh, 1gH=bT+l(nW(}4Uz.- OVPh&jU./mHu]A[+^w' );

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
