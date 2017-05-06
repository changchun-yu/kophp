<?php
defined('SYS_PATH') or die('No direct script access.');

// 定义一个users
// 即当访问 http://www.example.com/users 触发这个路由
// 然后转发到 view 控制器中相应的方法
// regex 这个应该是正则表达式匹配，可以看出来是匹配 id 数字
// 完整的路径应该是 http://www.example.com/users/id
$config['users'] = array(
    'users/:method/:id',
    'controller' => 'users',
    'method' => 'view',
    'regex' => array('id' => '\d+'),
);

// 定义 contact 且只有控制器和方法，不存在参数
$config['contact'] = array(
    'contact/:method',
    'controller' => 'contact',
    'method' => 'index',
);

// 定义 archive
// 中间请参见第一解释
// 完整的路径应该是 http://www.example.com/archive/year/month/day
$config['archive'] = array(
    'archive/:year/:month/:day',
    'controller' => 'blog',
    'method' => 'archive',
    'year' => date('Y'),
    'regex' => array('year' => '\d{4}', 'month' => '\d{1,2}', 'day' => '\d{1,2}')
);
?>