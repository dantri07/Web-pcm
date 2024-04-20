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
define( 'DB_NAME', 'webpcm' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin123' );

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
define( 'AUTH_KEY',         ' mgzX0$WX&,rI}oL_?Ghh|hXs12gFzk!eq:><}-?u<<j8:q#4%`Cc#8U#<Y2MN{L' );
define( 'SECURE_AUTH_KEY',  '0?ok|aQ&N&Lo79o1p/#A5`%=5B0bihNWJS?U~M1nUf,Kx A%RVuP,P}pHG9!X9ZJ' );
define( 'LOGGED_IN_KEY',    '#J{P>q ,UOoC)jhoX:kW:qtL4.f}Wz%mzeQ*:(y<.4-X{O`gsu;0gs#4o)OdN?Z2' );
define( 'NONCE_KEY',        '#=v{ExxjvI)wPobKpq(ly;0sAyJaV$3w!D@ai<o?;8xY UJ:9`ph+p.<(e#UwEOf' );
define( 'AUTH_SALT',        'CcVKq9&rcv6X}uxnkaa:J,s#&A@g|P@yF0^kXEa>`)^8k5@EU7*=!NQ46/{HDS+%' );
define( 'SECURE_AUTH_SALT', '5TE&F*Mw  *lD|N?1DMT?o`SUI_|$w`<mFY2Y!VxLaqkzlMp@AF2}NF=@RUb4@L~' );
define( 'LOGGED_IN_SALT',   '>Nr^ue`lt6L4N[ %_ng9U%C(ZS>Z~Rzsc$Gl& n4I#E4.?piePf%BAT6<>6~]Hx8' );
define( 'NONCE_SALT',       'JoP!<&kErrM0q?^D=eu|&pT JisWHqctG8igQ;?xy&yIs_ul]BwV#<`)r-.)f1i$' );

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
