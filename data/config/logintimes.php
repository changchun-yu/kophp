<?php defined('SYS_PATH') or die('No direct script access.');
/**
 * @package  Core
 *
 * Captcha configuration is defined in groups which allows you to easily switch
 * between different Captcha settings for different forms on your website.
 * Note: all groups inherit and overwrite the default group.
 *
 * Group Options:
 *  CAPTCHA_ID- Captcha access_token
 *  PRIVATE_KEY - access_secret
 */
return array (
        'loginTimesLimit' => '6',//登录次数
        'loginCacheTimes' => '3600' //缓存时间
);

