<?php
defined('SYS_PATH') or die('No direct script access.');

/**
 * @package  Core
 *
 * Upload configuration is defined in groups which allows you to easily switch
 * between different Session settings for different forms on your website.
 *
 * Group Options:
 *  domainroot		- 图片服务器根目录
 *  directory       - This path is relative to your index file. Absolute paths are also supported.
 *  create_dir      - Enable or disable directory creation.
 *  remove_spaces   - Remove spaces from uploaded filenames.
 */
return array(
    'domainroot'		   => DOC_ROOT . 'public',
    'directory'            => '/upfiles/',
    'tmpdirectory'         => '/tmpupload/',  //本地缩图临时文件夹
    'create_dir'           => TRUE,
    'remove_spaces'        => TRUE,
);
