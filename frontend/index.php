<?php

//phpinfo();
//exit;
/**
 * Set the default time zone.
 *
 * @see  http://php.net/timezones
 */
date_default_timezone_set('Asia/Shanghai');

/**
 * Set the PHP error reporting level. If you set this in php.ini, you remove this.
 * @see  http://php.net/error_reporting
 *
 * When developing your application, it is highly recommended to enable notices
 * and strict warnings. Enable them by using: E_ALL | E_STRICT
 *
 * In a production environment, it is safe to ignore notices and strict warnings.
 * Disable them by using: E_ALL ^ E_NOTICE
 */
error_reporting(E_ALL ^ E_NOTICE);
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);

/**
 * Developers can modify standard configuration below.
 *
 * @see  http://docs.kophp.com/configuration
 */
// Define entry file name.
$index_file = '';

// Define default method.
$default_controller = 'index';
$default_action = 'index';

// Define wether show debug message.
$show_debug_errors = true;

/**
 * Cascading message threshold.
 *
 * Log Thresholds:
 *  0 - Disables logging completely
 *  1 - Error Messages (including PHP errors)
 *  2 - Alert Messages
 *  3 - Informational Messages
 *  4 - Debug Messages
 */
$log_threshold = 3;

/**
 * End of standard configuration! Changing any of the code below should only be
 * attempted by those with a working knowledge of Ko internals.
 *
 * @see  http://docs.kophp.com/bootstrap
 */
// Set the full path to the docroot
define('DOC_ROOT', dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR);

// Define the application path to the docroot
define('APP_PATH', DOC_ROOT . 'application' . DIRECTORY_SEPARATOR);

// Define the system path to the docroot
define('SYS_PATH', DOC_ROOT . 'libraries' . DIRECTORY_SEPARATOR);

// Define the modules path to the docroot
define('MOD_PATH', DOC_ROOT . 'modules' . DIRECTORY_SEPARATOR);

// Define the system path to the docroot
define('DATA_PATH', DOC_ROOT . 'data' . DIRECTORY_SEPARATOR);

if (!defined('KO_START_TIME')) {
    define('KO_START_TIME', microtime(TRUE));
}

/**
 * Define the memory usage at the start of the application, used for profiling.
 */
if (!defined('KO_START_MEMORY')) {
    define('KO_START_MEMORY', memory_get_usage());
}

require_once DOC_ROOT . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
// Bootstrap the application
require_once DOC_ROOT . 'bootstrap' . DIRECTORY_SEPARATOR . 'frontend.php';
