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
define( 'DB_NAME', 'gutenbergTest' );

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
define( 'AUTH_KEY',         'R8vdlpj`%{G[|IL_n-gn;=VaCsZ;G_>+1w%p{xaL0gj5?hslVEQ/MVb:6iDn1|RT' );
define( 'SECURE_AUTH_KEY',  '(Uso4fX5EHd{6_*3*~n3k}B9R9>Z<0Ps4_STOxa}M=>E_(*iS$eN=[SA}$g>xa%{' );
define( 'LOGGED_IN_KEY',    '2PW4.>@Q:)* OI7_1yxH[b 9n1&8PT6M%X}8rI.)Ni^&:_,ATA+?ue7*y+r0WA}}' );
define( 'NONCE_KEY',        ':/%H}:Nt;/)Hu_xYOoSw{@>R+bgB$a}ob4z5+SDgDaviHs+d~>0z/-<w51xN,-^k' );
define( 'AUTH_SALT',        '+vCd]sUwihpi-?{ VfYH*}Vj Ie!)||HpQTG$8R.+bEMDuu)Jxa?~F3]-ph=H({O' );
define( 'SECURE_AUTH_SALT', 'k-H^@?|G90z!%f(Fe&Gqs`:wX_h`~Ss_{+F U}ja1FA6t|GLcbR3 M~<qE7@*/nF' );
define( 'LOGGED_IN_SALT',   't [JL.*EDL>QY7n-u#~ii+FG|Y:HG4j1Mb%wK,=8(p>;?WGLbpj04x[8Kt%(q2W|' );
define( 'NONCE_SALT',       'Nv~32]Y.Pu`g?#so9S2?ts!.cNC5ip*.lF8n:&vO_B%IPw13R3sxEaH)jQsw@[q9' );

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
