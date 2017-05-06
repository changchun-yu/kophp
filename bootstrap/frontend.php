<?php

/**
 * Bootstrap.
 *
 * @package    Cache
 * @author     Ko Team, Eric
 * @version    $Id: bootstrap.php 3609 2016-05-06 07:54:00Z yuchangchun $
 * @copyright  (c) 2007-2009 Ko Team
 * @license    MIT
 */
/**
 * Initialize Ko, setting the default options.
 *
 * The following options are available:
 *
 * - string   base_url    path, and optionally domain, of your application   NULL
 * - string   index_file  name of your index file, usually "index.php"       index.php
 * - string   charset     internal character set used for input and output   utf-8
 * - boolean  errors      enable or disable error handling                   TRUE
 * - boolean  caching     enable or disable internal caching                 FALSE
 * - boolean  enable_query_strings     enable or disable query strings       FALSE
 */
define('EXT', '.php');

ko\Ko::init(array(
    'base_url' => '/',
    'errors' => isset($show_debug_errors) && $show_debug_errors,
    'index_file' => isset($index_file) ? $index_file : 'index.php',
    'caching' => TRUE,
    'enable_query_strings' => TRUE,
    'threshold' => isset($log_threshold) ? $log_threshold : 0,
    'profile' => true
));

/**
 * Attach a file reader to config. Multiple readers are supported.
 */
\ko\Ko::$config->attach(new \ko\config\File);
\ko\Ko::$log->attach(new \ko\log\File(DATA_PATH . 'logs'));
\ko\Route::set('default_route', '(<controller>(/<action>(/<__KO_VARS__>)))', array('__KO_VARS__' => '.+'))
        ->defaults(array(
            'directory' => '',
            'controller' => isset($default_controller) ? $default_controller : 'index',
            'action' => isset($default_action) ? $default_action : 'index',
        ));
/**
 * Execute the main request. A source of the URI can be passed, eg: $_SERVER['PATH_INFO'].
 * If no source is specified, the URI will be automatically detected.
 */
//\ko\Request::instance()->dispatch();
echo \ko\Request::factory(TRUE, array(), FALSE)
        ->execute()
        ->send_headers(TRUE)
        ->body();
