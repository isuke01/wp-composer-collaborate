<?php
require_once(__DIR__ . '/vendor/autoload.php');
(new \Dotenv\Dotenv(__DIR__.'/'))->load();
/**
 * @link https://codex.wordpress.org/Editing_wp-config.php
 * @package WordPress
 */

 /** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
// System is the directory where WP will be installed.
define('ABSPATH', dirname(__FILE__) . '/system');

define('DB_NAME', getenv('DB_NAME'));
define('DB_USER', getenv('DB_USER'));
define('DB_PASSWORD', getenv('DB_PASSWORD'));
define('DB_HOST', getenv('DB_HOST'));
define('DB_CHARSET', getenv('DB_CHARSET'));
define('DB_COLLATE', '');

/**
 * Authentication Unique Keys and Salts.
 * @link https://api.wordpress.org/secret-key/1.1/salt/ 
 * @since 2.6.0
 */
define('AUTH_KEY',         getenv('AUTH_KEY'));
define('SECURE_AUTH_KEY',  getenv('SECURE_AUTH_KEY'));
define('LOGGED_IN_KEY',    getenv('LOGGED_IN_KEY'));
define('NONCE_KEY',        getenv('NONCE_KEY'));
define('AUTH_SALT',        getenv('AUTH_SALT'));
define('SECURE_AUTH_SALT', getenv('SECURE_AUTH_SALT'));
define('LOGGED_IN_SALT',   getenv('LOGGED_IN_SALT'));
define('NONCE_SALT',       getenv('NONCE_SALT'));

/**
 * WordPress Database Table prefix.
 */
$table_prefix  = getenv('DB_PREFIX');

/**
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', getenv('WP_DEBUG') );
define( 'WP_DEBUG_LOG', getenv('WP_DEBUG_LOG') );
define( 'WP_DEBUG_DISPLAY', getenv('WP_DEBUG_DISPLAY') );
define( 'SCRIPT_DEBUG', getenv('SCRIPT_DEBUG') );
define( 'SAVEQUERIES', getenv('SAVEQUERIES') );

/* You many want set this manually if this wont work in your case */
define( 'WP_SHEME', ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443)? 'https' : 'http' );
/* Custom Wp folders setup */
define('WP_SERVER_ROOT', $_SERVER['DOCUMENT_ROOT'] );

define('WP_HOME', WP_SHEME.'://' . $_SERVER['HTTP_HOST'] );
define('WP_SITEURL', WP_SHEME.'://' . $_SERVER['HTTP_HOST'] . '/system');

/* We store all medias inside main folder */
define( 'UPLOADS', '../media' );
//MUST be set, otherwise theme directory MUST be inside of plugin Directory!
/* @DOCS You cannot move the themes folder because its path is hardcoded relative to the wp-content folder:*/
define( 'WP_CONTENT_DIR', WP_SERVER_ROOT . '/modules' );
define( 'WP_CONTENT_URL', WP_HOME 		 . '/modules' );

define( 'WP_THEME_DIR', WP_CONTENT_DIR . '/themes' );
define( 'WP_THEME_URL', WP_CONTENT_URL . '/themes' );

define( 'WP_PLUGIN_DIR', WP_CONTENT_DIR .'/plugins');
define( 'WP_PLUGIN_URL', WP_CONTENT_URL .'/plugins');

define( 'WPMU_PLUGIN_DIR', WP_CONTENT_DIR .'/mu-plugins' );
define( 'WPMU_PLUGIN_URL', WP_CONTENT_URL .'/mu-plugins' );

define( 'WP_DEFAULT_THEME', 'vutheme' );
/* That's all, stop editing! Happy blogging. */



/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/** SET WORDPRESS THEMES FOLDER  */
register_theme_directory( WP_THEME_DIR );
