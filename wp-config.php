<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

/** MySQL settings - You can get this info from your web host **/
/** The name of the database for WordPress */
define('DB_NAME', 'projet10');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** Disable WordPress file editor */
define( 'DISALLOW_FILE_EDIT', true );

// define( 'COOKIEHASH', md5($_SERVER['WORDPRESS_DB_PASSWORD'] . 'secure cookies' .$_SERVER['WORDPRESS_DB_PASSWORD'] ) );	// Cookies hardening

define( 'WP_MEMORY_LIMIT', '256M' );

// Disable OP Cache mu-plugin feature
define('HIDE_CACHE_CLEAR',false);

// Disable SSO mu-plugin feature
define('HIDE_SSO_LINK',false);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'mQg+>)s@S-B70beEo~,2S0Qb@h2vu>;.{d B7iaBTZ&[Z0-slLclF^o)vF`JcISt');
define('SECURE_AUTH_KEY',  'r;e)FGphhK).D}:BM(*>ZYBbU`ay.$zqy!cAw|rA^N5*YS*p5[Zc,22_9]b8U?Ju');
define('LOGGED_IN_KEY',    '?=w@f?VtB #Tf+70upgU,N{zq6^sMhNb=#.Mc9mJ!~e!{KFfN&vyGc{*;3wO${>p');
define('NONCE_KEY',        'A)-?Hh]5s1MFq;t6_e[LMuLm1 l]j?o003;S{Gu:*qC<.rQIL/%/#fwtU7f0)z46');
define('AUTH_SALT',        ':x~G=1tA$N)Kxxh$T,je,M|ypLK >qfjJN$JcINLFqTIn~VasG`8Lx|mg,Jk@Twf');
define('SECURE_AUTH_SALT', 'kNSg7%:>R/4BAm$eX|?y6sM&Y^9s/w6]yz/<TTlccAx|_~As45sREr3W!=9hFEra');
define('LOGGED_IN_SALT',   '/h4:m%?7/`smqEuWV`8:{%wX:u:eC7yc]kKk3+hHYL2/gD+bT+Of1v*&-8c+-x-e');
define('NONCE_SALT',       'azFQ}i4qD:?XQapl-ps`$!%bxzh,?RA}iZVVPy*ALDPae7p:W>JJs|FG$MYF`[H~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);
define('WP_DEBUG_DISPLAY', false);
define('WP_DEBUG_LOG', true);
$sapi_type = php_sapi_name();
if ( $sapi_type == 'cli' ) {
    define( 'WP_DEBUG', true );
    error_reporting(0);
    @ini_set('display_errors', 0);
}
// @ini_set('log_errors', 'On');

define( 'WPMU_PLUGIN_DIR', '/mu-plugin' );
define( 'DOCKET_CACHE_CONTENT_PATH', '/tmp/docket_cache' );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/** change permisssions for plugin installation */
define("FS_METHOD","direct");
