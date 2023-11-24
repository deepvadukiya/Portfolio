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
define( 'DB_NAME', 'wordpressdb' );

/** Database username */
define( 'DB_USER', 'deep' );

/** Database password */
define( 'DB_PASSWORD', 'deep' );

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
define( 'AUTH_KEY',         '2E$i-Hf]ON6d/pD@u>RITvV.C-A#P_%Z~?KFRkU.UTJs!VbjGMczeTGWenNulmqD' );
define( 'SECURE_AUTH_KEY',  'Z#C0:<l?$S%mr=6d{jbiBDi|>G0B{8e:3CPr@6T..6+nS&;F1X-6|btq2X&SR&;B' );
define( 'LOGGED_IN_KEY',    'A0VJBYB7HYU.nZE$$M{fAr02OXk!wTwT-@*6(=@O%~8xEIjviTkJ,BzxT?7:}ulf' );
define( 'NONCE_KEY',        '&fb)|*^K$V!Jkr ,.9@_joYu56sR^EIMX+xWwEE0bxek&WU=oOM[GDDux-@8[>re' );
define( 'AUTH_SALT',        'R(%^8>%/A!@?_:=N=[L0tS/te6S+sXH6-%U~fTpOGwwqcycjpb4^@t/T5<b;yt|&' );
define( 'SECURE_AUTH_SALT', 'LhrQkZFP?vde/7=!AoRXyY<dgL#r/yk:1?`UXp!H1a+Np1cq_MnmSS!@7~Q!;(kQ' );
define( 'LOGGED_IN_SALT',   '&O6;rx#tRU-}lf3bxYC^fjVQWr~Hrl7j<a:Wc,EE1Zf`v,Y^AJ)PfuW8|v~Z-@d^' );
define( 'NONCE_SALT',       '#I+,`_Q#72ePte_v`3=YVbLDGZzI( t`)<0j8SGF]UkRRr:k%<SUG;ylt8S14+;3' );

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
