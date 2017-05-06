<?php defined('SYS_PATH') or die('No direct script access.');

return array (
    'fields' => array(
        //专题ID
         'eid'   => array(
            'name'   => 'eid',
            'type'   => 'text',
            'prompt' => '专题ID',
            'value'  => '',
         ),
         //分类ID
         'cid'   => array(
            'name'   => 'cid',
            'type'   => 'text',
            'prompt'   => '分类CID',
            'value'  => '',
         ),
         //用户ID
         'userid'   => array(
            'name'   => 'userid',
            'type'   => 'text',
            'prompt'   => '用户ID',
            'value'  => '',
         ),
         //邮件
         'email'     => array(
            'name'   => 'email',
            'type'   => 'text',
            'prompt' => '邮件',
            'value'  => '',
         ),
         //视频UUID
         'videoid'   => array(
            'name'   => 'videoid',
            'type'   => 'text',
            'prompt' => '视频ID',
            'value'  => '',
         ),
         //域名
         'domain'   => array(
            'name'   => 'domain',
            'type'   => 'text',
            'prompt' => '网站域名',
            'value'  => '',
         ),
         //变量
         'varname'   => array(
            'name'   => 'varname',
            'type'   => 'text',
            'prompt' => '变量',
            'value'  => '',
         ),
         //视频播放页地址 
         'playlink'  => array(
            'name'   => 'playlink',
            'type'   => 'text',
            'prompt' => '视频播放页地址',
            'value'  => '',
         ),
         //分享页面地址
         'shareurl'  => array(
            'name'   => 'shareurl',
            'type'   => 'text',
            'prompt' => '分享页面地址',
            'value'  => '',
         ),
         //扩展用户信息
         'extend'    => array(
            'name'   => 'extend',
            'type'   => 'select',
            'prompt' => '扩展用户信息',
            'value'  => array(
            	array('0', '不扩展', 'selected'), array('1', '扩展', '')
            ),
         ),
         //语言
         'lang'    => array(
            'name'   => 'lang',
            'type'   => 'select',
            'prompt' => '语言',
            'value'  => array(
            	array('zh_cn', '中文', 'selected'), array('en', '英文', '')
            ),
         ),
         //当前页面数
         'pagenum'   => array(
            'name'   => 'pagenum',
            'type'   => 'select',
            'prompt'   => '页面数',
            'value'  => array(
            	array('1', '1', 'selected'), array('2', '2', ''), array('3', '3', ''), array('4', '4', ''), array('5', '5', '')
            ),
         ),
         'pagesize'  => array(
            'name'   => 'pagesize',
            'type'   => 'select',
            'prompt'   => '每页数据条数',
            'value'  => array(
            	array('5', '5', ''), array('10', '10', ''), array('15', '15', ''), array('20', '20', 'selected')
            ),
         ),
         //格式化数据
         'format'    => array(
            'name'   => 'format',
            'type'   => 'select',
            'prompt' => '返回数据格式',
            'value'  => array(
            	array('xml', 'xml', ''), array('json', 'json', 'selected')
            ),
         ),
         //排序依据
         'sortby'    => array(
            'name'   => 'sortby',
            'type'   => 'select',
            'prompt' => '排序依据',
            'value'  => array(
            	array('new', '上传时间', 'selected'), array('hot', '播放次数', '')
            ),
         ),
         //排序依据
         'partnersortby'    => array(
            'name'          => 'partnersortby',
            'type'          => 'select',
            'prompt'        => '排序依据',
            'value'         => array(
            	array('new', '上传时间', 'selected'), array('hot', '播放次数', ''), array('comment', '评论最多', ''),array('fav_count', '收藏最多', '')
            ),
         ),
         //视频排序依据
         'videosortby'  => array(
            'name'      => 'videosortby',
            'type'      => 'select',
            'prompt'    => '排序依据',
            'value'     => array(
            	array('hot', '播放最多', 'selected'), array('fav', '收藏最多', ''), array('comment', '评论最多', ''), array('dig', '顶的最多', ''), array('new', '最近更新', '')
            ),
         ),
         //专辑排序依据
         'albumsortby'  => array(
            'name'      => 'albumsortby',
            'type'      => 'select',
            'prompt'    => '排序依据',
            'value'     => array(
            	array('hot', '播放最多', 'selected'), array('fav', '收藏最多', ''), array('new', '最近更新', '')
            ),
         ),
         //电视台排序依据
         'channelsortby'  => array(
            'name'        => 'channelsortby',
            'type'        => 'select',
            'prompt'      => '排序依据',
            'value'       => array(
            	array('hot', '播放最多', 'selected'), array('video', '视频最多', ''), array('fav', '收藏最多', ''), array('new', '最近更新', '')
            ),
         ),
         //专辑列表排序依据
         'albumlistsortby'   => array(
            'name'           => 'albumlistsortby',
            'type'           => 'select',
            'prompt'         => '排序依据',
            'value'          => array(
            	array('hot', '最热专辑', 'selected'), array('video', '视频最多', ''), array('fav', '收藏最多', ''), array('new', '最近更新', '')
            ),
         ),
         //专辑列表排序依据
         'searchsortby'   => array(
            'name'        => 'searchsortby',
            'type'        => 'select',
            'prompt'      => '排序依据',
            'value'       => array(
            	array('play_count', '播放次数', ''), array('upload_datetime', '上传时间', ''), array('time_span', '播放时长', ''), array('fav_count', '收藏次数', ''), array('video_count', '视频数量', ''), array('view_count', '访问次数', '')
            ),
         ),
         'duration'  => array(
            'name'   => 'duration',
            'type'   => 'select',
            'prompt' => '时间段',
            'value'  => array(
            	array('day', '今日', ''), array('week', '本周', ''), array('month', '本月', ''), array('year', '全部', 'selected'),
            ),
         ),
         'sort'      => array(
            'name'   => 'sort',
            'type'   => 'select',
            'prompt' => '排序',
            'value'  => array(
            	array('asc', '升序', ''), array('desc', '降序', 'selected'),
            ),
         ),
         'albumid'    => array(
            'name'   => 'albumid',
            'type'   => 'text',
            'prompt' => '专辑ID',
            'value'  => '',
         ),
         'keyword'    => array(
            'name'   => 'keyword',
            'type'   => 'text',
            'prompt' => '关键字',
            'value'  => '',
         ),
         'range'     => array(
            'name'   => 'range',
            'type'   => 'select',
            'prompt' => '类型',
            'value'  => array(
            	array('video', '视频', 'selected'), array('album', '专辑', ''), array('channel', '电视台', ''),
            ),
         ),
         'style'     => array(
            'name'   => 'style',
            'type'   => 'select',
            'prompt' => '显示方式',
            'value'  => array(
            	array('block', '以图标形式显示', 'selected'), array('list', '以列表形式显示', ''),
            ),
         ),
    )
);
