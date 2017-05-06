<?php
defined('SYS_PATH') or die('No direct script access.');

/*
 * 设置对外的url配置
 * 调用方式：$url = (array)KO::config('url'); $url['thumb_url'];
 */
return array(
    "needloginedvisturl"=>array(
        "https://levoo.com/device/scanning",
        "https://levoo.com/device/scanne"
    ),
);
