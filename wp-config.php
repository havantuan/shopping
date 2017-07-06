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
define('DB_NAME', 'shopping');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '7%|(u>3n1q]6`p$v{0exsv}EUnd~8.4blU,P{5dS$8thD%F;A/Q$SFC<mF@f29Ea');
define('SECURE_AUTH_KEY',  'i#;qA mu{s~i4y?Y,+A2hc~71]F_7]pp3bdK&$<jQ6U +[Ou2U+IX*cI E`F!KcC');
define('LOGGED_IN_KEY',    'a!gU(^kj~a]$>Ur_B7lXf,7{SVPlW{X7~fK`tm59]BUs*K%{0el17Pg?H#%M2[-b');
define('NONCE_KEY',        '0V=iO4ar0b2IAwau7@4Gtw_1sra#!,h&s{2jIMhF!!z#Xb@ *A*O/p03A$oycrz*');
define('AUTH_SALT',        'Pc-}8|MGVwL{[=TVYtI5FKM}rG+JzhJ)~Fge;.l<O!Nc?U,VZOBlVb9k^--{V`4f');
define('SECURE_AUTH_SALT', '<!0K22L%U=196H9yJPid(,dCqm+jdJ?tR%@<l>bH@QO75DRW y{MLG .Yeur{$;*');
define('LOGGED_IN_SALT',   '-Jm<4[/)gBba82Dw81)<!e) kCv.}rX__Y2w</RXYn3W,H@M%X&.RLLY&(^Wc!%+');
define('NONCE_SALT',       'eL7+D;pG`0^~J ,oVW_yJa#np!]C&s@[9[,w2s7YL1StLw/rk_6FJn.2%]RjCPqS');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
