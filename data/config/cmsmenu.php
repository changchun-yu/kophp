<?php

defined('SYS_PATH') or die('No direct script access.');

#字段转义
#规则：表名为key,value为具体的字段结构
/*
 * level  0 无子菜单  1 一级子菜单  2 二级级子菜单
 */
return [
    [
        'text' => '系统面板',
        'code' => '',
        'url' => '#',
        'icon' => '',
        'level' => 0,
        'parent' => '',
        'display_order' => 0,
    ],
    [
        'text' => '系统管理',
        'code' => 'system',
        'url' => '',
        'icon' => 'fa fa-tv',
        'level' => 0,
        'parent' => '',
        'display_order' => 0,
    ],
    [   'text' => '用户管理',
        'code' => 'system.admin',
        'url' => '/user/index',
        'icon' => 'fa fa-circle-o',
        'level' => 1,
        'parent' => 'system',
        'display_order' => 0,
    ],
    [
        'text' => '产品管理',
        'code' => 'product',
        'url' => '',
        'icon' => 'fa fa-laptop',
        'level' => 0,
        'parent' => '',
        'display_order' => 0,
    ],
    [
        'text' => '测试',
        'code' => 'test',
        'url' => '#',
        'icon' => 'fa fa-wrench',
        'level' => 0,
        'parent' => '',
        'display_order' => 0,
    ],
];

