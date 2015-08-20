<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home2/jps26/public_html/staging-stars.jps26.com/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
/** The name of the database for WordPress */
define('DB_NAME', 'jps26_wrdp2');

/** MySQL database username */
define('DB_USER', 'jps26_wrdp2');

/** MySQL database password */
define('DB_PASSWORD', 'l5JQDUDM6CAjdQQ');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'Mpxi*GE/;#S85cWFQO)RF:/4U#7@OYjO~U_Ws<=8L!g0ytdwabAvzPi*Rrt<fmT');
define('SECURE_AUTH_KEY',  'U2dfun9K:v6tr?FqG0H9*7Qjbu2vH/NsrRln?kZvf)<!fawQ\`K1Ua5X)BJBZA8h>:oUgma:^');
define('LOGGED_IN_KEY',    'LN_)33dLD2j>e<5#K=LunT0|NgTmlBl2OYcX;FeQ!Hg3gD;wW~)L:L<S;*_sTFeMu5u^vR|XVI~');
define('NONCE_KEY',        'o3r^vqG>w$9-(W5DZeiwM/$=;Mn1xZ5r0pun?roKSi5i-wS2J*U2>y9/Yx:4*nYkL@2nX4F-');
define('AUTH_SALT',        'u|VaF(4I(>S!)H2*k6;dfv~s^e4wf*Ia_~^JNtLFgg8xbZCj3bu#~yx#j)P@EU*f*NG)k\`w7I@qUS');
define('SECURE_AUTH_SALT', 'nLt1Ims#F-xn_-0f-w$/F64-?b3OmbmQqlh8^)Bs|G(4W7k2?Q?^>LY8wEvvnaqC)FRk|js');
define('LOGGED_IN_SALT',   '1P_PndbDG/jC)6i?PboXDk!cwT9vIMUXF;Y1JuTAY896(8UPla66XR^hH@$Mi;GT#3>5:26tk);u$VOruX');
define('NONCE_SALT',       ')<e4_r|^eZ|$;5j4;ss|fU9K>aCFSKN^kXqcN-jSdM3l\`(|Lz*g8cm;KaY#');


/**#@-*/
define('AUTOSAVE_INTERVAL', 600 );
define('WP_POST_REVISIONS', 1);
define( 'WP_CRON_LOCK_TIMEOUT', 120 );
define( 'WP_AUTO_UPDATE_CORE', true );
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
add_filter( 'auto_update_plugin', '__return_true' );
add_filter( 'auto_update_theme', '__return_true' );
