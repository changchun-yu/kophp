<?php defined('SYS_PATH') or die('No direct script access.');
/**
 * @package  Core
 *
 * Captcha configuration is defined in groups which allows you to easily switch
 * between different Captcha settings for different forms on your website.
 * Note: all groups inherit and overwrite the default group.
 *
 * Group Options:
 *  style      - Captcha type, e.g. basic, alpha, black
 *  width      - Width of the Captcha image
 *  height     - Height of the Captcha image
 *  complexity - Difficulty level (0-10), usage depends on chosen style
 *  background - Path to background image file
 *  fontpath   - Path to font folder
 *  fonts      - Font files
 */
return array (
    'default' => array(
    	'style'      => 'basic',
    	'width'      => 100,
    	'height'     => 40,
    	'complexity' => 4,
    	'background' => '',
    	'fontpath'   => DATA_PATH . 'fonts/',
    	'fonts'      => array('DejaVuSerif.ttf', 'arial.ttf'),
    ),
    'alpha' => array(
    	'style'      => 'alpha',
    	'width'      => 90,
    	'height'     => 22,
    	'complexity' => 4,
    	'background' => '',
    	'fontpath'   => DATA_PATH . 'fonts/',
    	'fonts'      => array('DejaVuSerif.ttf', 'arial.ttf'),
    ),
    'black' => array(
    	'style'      => 'black',
    	'width'      => 100,
    	'height'     => 40,
    	'complexity' => 4,
    	'background' => '',
    	'fontpath'   => DATA_PATH . 'fonts/',
    	'fonts'      => array('DejaVuSerif.ttf', 'arial.ttf'),
    )
);