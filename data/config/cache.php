<?php
defined('SYS_PATH') or die('No direct script access.');

return array(
    'default' => array(
        'driver' => 'file',
        'path' => DATA_PATH . 'cache',
        'lifetime' => 1800,
        'requests' => 1000
    ),
    
    'xcache' => array(
        'driver' => 'xcache',
        'auth_uset' => 'ko',
        'auth_pass' => 'ko'
    ),
    
    'memcache' => array(
        'driver' => 'memcache',
        'servers' => array(
            array(
                'host' => '127.0.0.1',
                'port' => 11211,
                'persistent' => false
            )
        ),
        'compression' => false
    ),
    
    'redis' => array(
        'driver' => 'redis',
        'master' => array(
            'host' => '127.0.0.1',
            'port' => 11211,
            'persistent' => false
        ),
        'slave' => array(
            array(
                'host' => '127.0.0.1',
                'port' => 11211,
                'persistent' => false
            ),
            array(
                'host' => '127.0.0.1',
                'port' => 11213,
                'persistent' => false
            ),
        ),
        'compression' => false
    ),
    
    /* 文件缓存 */
    'file' => array(
        'driver' => 'file',
        'path' => DATA_PATH . 'cache',
        'lifetime' => 1800,
        'requests' => 1000
    ),
);
