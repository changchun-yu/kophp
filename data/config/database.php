<?php
defined('SYS_PATH') OR die('No direct access allowed.');

/**
 * @package  Core
 *
 * Database configuration is defined in groups which allows you to easily switch
 *
 * Group Options:
 *  type          	- Database driver name, e.g. mysql, mysqlrw, mysqli, pdo.
 *  host         	- Database host.
 *  port            - Database port.
 *  socket      	- Database socket string.
 *  username        - Database auth username.
 *  password  		- Database auth password.
 *  persistent  	- Whether use database persistent connection.
 *  database  		- Database name.
 */
return array (
 
    'default' => array(
        'type' => 'mysqli',
        'slave' => array(
            array(
                'host' => 'localhost',
                'port' => '3306',
                'username' => 'root',
                'password' => '',
                'persistent' => FALSE
            )
        ),
        'master' => array(
            'host' => 'localhost',
            'port' => '3306',
            'username' => 'root',
            'password' => '',
            'persistent' => FALSE
        ),
        'database' => 'egg',
        'table_prefix' => '',
        'charset' => 'utf8'
    ),
    
    'levoo_egg' => array(
        'type' => 'mysqli',
        'slave' => array(
            array(
                'host' => 'localhost',
                'port' => '3306',
                'username' => 'root',
                'password' => '',
                'persistent' => FALSE
            )
        ),
        'master' => array(
            'host' => 'localhost',
            'port' => '3306',
            'username' => 'root',
            'password' => '',
            'persistent' => FALSE
        ),
        'database' => 'egg',
        'table_prefix' => '',
        'charset' => 'utf8'
    ),
);
