<?php
/* $Id: common.php 97 2017-04-05 02:00:08Z yuchangchun $ */
defined('SYS_PATH') OR die('No direct access allowed.');

return array (
     /**
     * 首页
     * index.html
     */
    'index' => '首页',
    'original' => '原创',
    'news' => '新闻',
    'amusement' => '娱乐',
    'movie' => '影视',
    'music' => '音乐',
    'sports' => '体育',
    'wealth' => '财富',
    'education' => '科教',
    'car' => '汽车',
    'life' => '生活',
    'fashion' => '时尚',
    'mbaby' => '母婴',
    'pet' => '宠物',
    'animation' => '动漫',
    'game' => '游戏',
    'school' => '校园',
	'qingshao' => '青少',
    'others' => '其它',
	'documentary'	=> '纪实',//纪实
	'funny'	=> '幽默',//幽默
	'outstanding'	=> '达人',//达人
	'video_maker'	=> '拍客',//拍客
    'more' => '更多',
    'ishow' => '爱秀',
        
    'go_tv' => '我要上电视',
    'album' => '专辑',
    'ptv' => '电视台',
    'the_client' => '客户端',
    'login' => '登录',
    'upvideo' => '上传视频',
        
    'mytv' => '我的电视台',
    'myvideo' => '我的视频',
    'vlist' => '播放列表',
    'mod_nickname' => '修改昵称',
    'my_develop' =>'我的开发',
    'quit' => '退出',
    'vmanage' => '视频管理',
       
    'hot_topic' => '今日热点',
    'activities' => '西柚看点',
    'hot_spots' => '热点Top',
    'micro_film' => '原创',
    'mo_making' => '拍客',
    'wonders' => '达人',
    'humors' => '幽默',
    'pets' => '宠物',
    'won_album' => '精彩专辑',
    'link' => '友情链接',
    'connect_us' => '联系我们',
    'special' => '精彩活动',
    'co_website' => '合作官网',
    'got_tv' => '达人电视台',
    'cel_tv' => '名人电视台',
    'age_tv' => '机构电视台',
    'uni_tv' => '高校电视台',
    'co_agency' => '合作机构',
    'la_join' => '最新加入',
    'search' => '搜索',
    'making' => '爱西柚手机拍客',
    'desk_client' => '爱西柚桌面客户端',
    'authent' => '实名认证',
    'dev_platform' => '开发平台',
    'helps' => '帮助中心',
    'on_feedback' => '在线反馈',
    'lan_switch'=> '切换语言',
    'medal'=> '爱西柚勋章',
        
    /**
     * 聚合页
     * rank/
     */
    'video_class' => '视频分类',
    'album_class' => '专辑分类',
    'ptv_class' => '电视台分类',
    'play_video' => '视频点播',
    'all' => '全部',
    'type' => '类型',
    'video' => '视频',
    'sorry_mes' => '抱歉，暂时没有找到符合条件的视频。',
	'sorry_mes_album' => '抱歉，暂时没有找到符合条件的专辑。',
	'sorry_mes_channel' => '抱歉，暂时没有找到符合条件的电视台。',
    'rec_mes' => '建议您：请尝试放宽或使用其它的检索条件。',
    'play_most' => '播放最多',
    'collect_most' => '收藏最多',
    'comment_most' => '评论最多',
    'top_most' => '顶的最多',
    'video_most' => '视频最多',
    'visit_most' => '访问最多',
    'up_recent' => '最近更新',
    'latest_update' => '最新更新',
    'today' => '今日',
    'week' => '本周',
    'month' => '本月',
          
    //显示方式：include/displaytab.html
    'update' => '更新',
    'show_mode' => '显示方式',
    'icons' => '以图标形式显示',
    'lists' => '以列表形式显示',
   
    // 分页 pagination.html
    'first' => '第一页',
    'previous' => '上一页',
    'next' => '下一页',
    'last' => '最后一页',
    
    /**
     * 【登录】弹出框
     *  user/loginbox.html
     */
    'now' => '没有帐号，马上',
    'register' => '注册',
    'forgetpwd' => '忘记密码',
    'remain' => '记住我',
    'pwd' => '密码',
    'email' => '邮箱',
    'cancel' => '取消',
    'username' => '帐号',
    'entermail' => '邮箱\手机\用户名',
    'enterpwd' => '请输入密码',
         
     /**
     * 视频上传页：http://xiyou.cntv.cn/upload.html
     * videoupload/index.html
     *
     */
    'client_down' => '爱西柚客户端下载',
    'upload_help' => '上传帮助',
    'video_format' => '视频格式',
    'video_size' => '视频大小',
    'more_help' => '查看更多帮助信息',
    'imp_items' => '重要事项',
    'ple_mes' => '请勿在未经授权的情况下上传任何电视节目、音乐视频、音乐会视频或商用视频，除非视频完全由您个人制作。',
    'up_mes' => '网页上传单个视频最大1G；客户端上传单个视频最大10G',
    
    /**
     * 爱西柚显示异常报错页面：
     * http://xiyou.cntv.cn/error.html
     */
	'can' => '您可以：',
    'mes_error' => '您请求的页面发生错误！',
    'click' => '请点此',
    'enter' => '进入主页',
    'mes_error2' => '非常抱歉，您想访问的页面可能已经消失或尚未出现！',
    'web' => '重新输入网址，或者到',
    'looks' => '看看：',
    'go' => '前往',
    'classify' => '看看爱西柚分类视频：',
    'recommends' => '看看我们精心为您推荐的以下精彩视频。',
             
    /**
     * 搜索【结果页】
     * search/index.html
     *
     */
    'keyword' => '热门关键字',
    'sear' => '搜索“',
    'result' => '”的结果',
    'total' => '共',
    'num' => '个',
       
    //【结果页】search/video.html,channel.html,album.html
    'rel_degree' => '相关程度',
    'num_video' => '视频数量',
    'video_time' => '视频时长',
    'vis_count' => '访问次数',
    'up_times' => '上传时间',
    'play_counts' => '播放次数',
    'fav_counts' => '收藏次数',
    'comment_counts' => '评论次数',
    
    //【结果异常页】 search/noresult.html
    'sorry' => '抱歉，没有找到与',
    'related' => '相关的', //涉及变量
    'solution' => '解决方案：',
    'check_mes' => '• 检查您的关键字是否有错别字；',
    'redu_mes' => '• 减少关键字，以放宽搜索条件；',
    'try_mes' => '• 尽量使用简洁的关键词，或用空格将多个关键词分开。',
             
    'hist_video' => '您最近看过的', //你看过的视频 historyvideo.html
    'fav_video' => '您可能喜欢的',  //您可能喜欢的 favoritevideo.html

    /**
     * 原创频道 http://xiyou.cntv.cn/dv
     * 【功能区】original.html
     *
     */
    'independent_film' => '独立短片',
    'series_short' => '系列短剧',
    'original_cartoon' => '原创动漫',
    'music_story' => '音乐故事',
    'block_recom' => '重磅推荐',
    'join_original' => '加入原创先锋计划',
    'original_pioneer' => '原创先锋榜',
    'new_talent' => '新锐达人榜',
    'join_talent' =>'加入新锐达人行列',
    'explore_screens' => '探索影厅',
    'more_film' => '更多独立短片',
    'more_short' => '更多系列短剧',
    'more_cartoon' => '更多原创动漫',
    'more_story' => '更多音乐故事',
    
    /**
     * 【视频专辑列表页】
     */
    //左侧【专辑信息】 album/info.html
    'video_play' => '视频播放',
    'create_asc' => '按添加顺序',
    'create_desc' => '按添加倒序',
                
	//右侧专辑信息 album/albuminfo.html
    'album_info' => '专辑信息',
    'creator' => '创建者',
    'create_time' => '创建时间',
    'updated_time' => '更新时间',
    'details' => '展开详细',
    'on_details' => '展开详情',
    'abstract' => '专辑简介',
    'collect' => '收藏',
    'report' => '举报',
    'tag' => '标签',
    'class' => '分类',
    'pack_up' => '收起',
            
    //右侧【视频信息】album/slider.html
    'video_list' => '视频列表',
    'automatic_series' => '自动连播',
    'showall' => '显示全部',
    'album_creator' => '专辑创建者',
    'collected' => '已收藏',
           
    //点击举报弹出对话框 report/index.html
    'reports' => '举报原因',
    'note' => '备注',
    'upload' => '上传于',
	'attention' => '关注',
	'del_attention' => '取消关注',
    //右侧栏目信息 album/infoslider.html
    'other_album' => '创建者的其他专辑',
    'related_album' => '相关专辑',
    'hot_album' => '热门娱乐专辑',  //---涉及变量需要判断？
    'original_album' => '热门原创专辑', //---涉及变量需要判断？

    //右侧【视频信息】album/slider.html,video/slider.html
    'video_info' => '视频信息',
    'video_desc' => '视频简介',
        
	//视频【播放列表页】 video/showlist.html
    'have' => '当前有',
    'videos' => '个视频',
    'empty' => '清空',
    'check' => '全选',
    'play' => '播放',
    'savefavor' => '保存为收藏',
    'savealbum' => '保存为专辑',
    'look' => '大家都在看',
	'recommendations' 	=> '精彩推荐',
	'highlights' => '视频看点',
    'video_collected' => '视频已经收藏',
        
    'xyjx' => '西柚精选', //西柚精选 recommendxyjx.html
    'recommend_video' => '推荐视频', //推荐视频 recommendvideo.html
    
    
    /**
     * 【通用左侧导航】
     *  include/left.html
     */
    'per_data' => '个人资料',
    'man_album' => '专辑管理',
    'cre_album' => '创建专辑',
    'mes_com' => '留言和评论',
    'pre_set' => '权限设置',
    'tv_set' => '电视台设置',
    'baseinfo' => '基本信息',
    'player' => '播放器',
    'connect_set' => '站外连接设置',
    'notice' => '公告',
    'myalbum' => '我的专辑',
    'my_fav' => '我的收藏',


    /**
     * 【视频管理】
     * http://xiyou.cntv.cn/manage/videomanage
     * manage/videomanage.html,manage/videoedit.html
     */
    'play_num' => '播放数',
    'com_num' => '评论数',
    'pub_time' => '发布时间',
    'edit' => '编辑',
    'delete' => '删除',
    'del_video' => '确定要删除该视频吗',
    'no_check' => '您还没有选中视频',
    'edit_video' => '编辑视频',
    'copyright' => '版权',
    'privacy' => '隐私',
        
    /**
     * 我的专辑：
     * http://xiyou.cntv.cn/manage/albummanage
     * http://xiyou.cntv.cn/manage/creatalbum
     */
    'pub' => '已发布',
    'review' => '待审核',
    'not_audit' => '审核未通过',
    'category' => '所属分类',
    'operat' => '操作',
    'modify_info' => '修改信息',
    'manage_video' => '管理视频',
    'creat_album' => '创建新专辑',
    'title' => '标题',
    'desc' => '简介',
    'use_mes' => '请用空格或逗号分隔',
    'used_tag' => '我用过的标签',

    /**
     * 我的收藏：
     * http://xiyou.cntv.cn/manage/favvideo
     * http://xiyou.cntv.cn/manage/favalbum
     */
    'col_video' => '我收藏的视频',
    'col_time' => '收藏时间',
    'col_cancel' => '取消收藏成功',
    'homepage' => '主页',
    'video_count' => '视频数',
    'visit_count' => '访问数',
    
    /**
     * 【我的电视台左侧导航】
     *  channel/user.html
     */
    'album_count' => '专辑数',
    'myblog' => '我的博客',
    'myweibo' => '我的微博',
    'traffic' => '访问量',
    'tv_desc' => '电视台简介',
    'tv_notice' => '电视台公告',
    'visitors' => '最近访客',
    'latest_com' => '最新评论',
    'no_player' => '目前还没有推荐视频。',
    'enter_player' => '进入播放器设置',
    'add_upload' => '将您上传的视频添加到这里',
    'the_latest' => '最新',
    'hottest' => '最热',
    'more_video' => '更多视频',
    'no_video' => '暂无视频',
    'more_albums' => '更多专辑',
    'no_albums' => '暂无专辑',
    'more_collection' => '更多收藏',
    'no_collection' => '暂无视频收藏',
    'message_board' => '留言板',
    'leave_message' => '我要留言',
    
    /**
     * 【播放页】
     */
    'current_location' => '当前位置',
    'pop' => '弹窗',
    'turn_off' => '关灯',
    'up' => '顶',
    'down' => '踩',
    'download_video' => '下载该视频',
    'related_video' => '相关视频',
      
    //【评论区】video/comment.html
    'user_comment' => '我要评论',
    'ident_code' => '验证码',
    'click_here' => '点这里换一张',
    'anonymous' => '匿名发表',
    'recommend' => '编辑推荐',   //编辑推荐 video/recommendflow.html
    'hot_videos' => '精彩视频推荐',  //精彩视频推荐  video/recommendvideo.html
    'add_comment' => '发表评论',
    'quick_message' => '快捷留言',
    'qm_01' => '片子很不错，很感动，赞一个！',
    'qm_02' => '太雷人了，我顶！',
    'qm_03' => '打酱油，路过… …',
    'netizen_comments' => '网友评论',
    'input_message' => '输入您想说的话',
    'code_error' => '验证码错误',
	'no_exist' 	=>'用户不存在',
    /**
     * 【评论留言】
     * http://xiyou.cntv.cn/manage/commentin
     * http://xiyou.cntv.cn/manage/commentsent
     * http://xiyou.cntv.cn/manage/commentset
     */
    'publish' => '我发表的',
    'received' => '我收到的',
    'mecom_perm' => '留言评论权限',
    'com_perm' => '评论权限设置',
    'allow_com' => '允许所有人给我的评论',
    'recom' => '推荐',
    'mes_perm' => '留言权限设置',
    'no_com' => '不允许任何人给我评论',
    'allow_mes' => '允许所有人给我留言',
    'no_mes' => '不允许任何人给我留言',
    'set_saved' => '设置已保存',
    
    'need' => '我要',
    'share_friends' => '分享给好友',
    'copy_code' => '复制转发代码',
    'copy_title' => '复制视频标题和链接',
    'copy_url' => '复制视频播放地址',
    'quote' => '转贴到社区',
    'no_copy' => '抱歉，你使用的浏览器里不能自动复制到剪贴板，请手动复制',
    'user_mes' => '视频链接和标题已经复制成功，您可以粘贴给聊天好友了',
    'copy_suc' => '代码已经复制成功',
    'video_url' => '播放地址已经复制成功',
    

    /**
     * 帮助页面
     * http://xiyou.cntv.cn/help.html
     *
     */
	'help_title'=> '帮助',
    'client' => '爱西柚客户端',
    //help/index.html
    'problems' => '常见问题',
    'a_01' => '视频无法播放',
    'a_02' => '遇到的状况是',
    'a_03' => '黑屏',
    'a_04' => '提示安装adobe flashplayer',
    'a_05' => '视频一直在缓冲',
    'a_06' => '黑屏，可以尝试这样解决',
    'a_07' => '清空cookies：浏览器上的菜单->i工具->internet选项->删除cookies->确定',
    'a_08' => '清空ie缓存文件：工具->internet选项->删除文件->删除所有脱机内容->确定',
    'a_09' => '完成上述两个步骤后，按F5刷新页面。',
    'a_10' => '提示安装adobe flashplayer，可以尝试这样解决',
    'a_11' => '根据提示直接下载安装即可，安装前需要关闭所有网页，如果有重要内容请先保存。',
    'a_12' => '如果自动下载有问题的话可以尝试手动下载安装；',
    'a_13' => 'ie内核浏览器包括IE、腾讯TT、Maxthon（傲游）、GreenBrowser（绿色浏览器）、TheWorld（世界之窗）、360安全浏览器等。',
    'a_15' => '非ie内核浏览器包括FireFox、Google Chrome、Opera、Safari等。',
    'a_16' => '点击此处，手动下载安装flashplayer插件',
    'a_17' => '视频一直在缓冲',
    'a_18' => '1)  视频一直在缓冲可能是网络连接不顺畅，最常见的情况就是您在看视频同时正在用迅雷，bt等工具进行下载，或者电脑内安装了其他视频网站的加速器工具。建议您先关闭这些工具，然后重新打开视频页面。',
    'a_19' => '2)  尝试清空缓存：IE浏览器菜单：工具-internet选项-删除文件-删除所有脱机内容-确定。如下图所示。',
    'a_20' => '看视频太卡',
    'a_21' => '1)	视频播放太卡可能是网络拥挤，最常见的情况就是您在看视频同时正在用迅雷，bt等工具进行下载，或者电脑上其他软件正在占用网络。建议您先关闭这些工具，暂停正在播放的视频，等待视频缓冲完成后，就能流畅播放了。',
    'a_22' => '2)	尝试清空缓存：IE浏览器菜单：工具-internet选项-删除文件-删除所有脱机内容-确定。',
    'a_23' => '3)	另外由于爱西柚视频的清晰度较高，如果您的网络带宽是512K的话会比较卡，推荐升级到1M及以上。',
    'a_24' => '上传的视频怎么看不到',
    'a_25' => '一个视频从开始上传到成功发布，需要经历以下步骤：',
    'a_26' => '转码：上传完成后，服务器需要将视频转化成播放器能够识别的格式，转码时间由视频格式和大小决定。',
    'a_27' => '审核：转码完成后，进入审核阶段，符合视频发布规定的视频才能审核通过。',
    'a_28' => '发布：审核通过后视频正式发布，出现在你的个人电视台中。',
    'a_29' => '一般情况下视频会在数小时内发布成功，您可以在等待过程中上传其他视频。',
    'a_30' => '我想下载视频到手机/PSP/mp4看怎么办',
    'a_31' => '请下载',
    'a_33' => '，能完美解决您的问题。爱西柚客户端支持把爱西柚的视频下载到电脑，并支持转换为各种手机（如iPhone/android手机/Nokia手机），PSP，MP4，MP5等可用的格式。',
   
    //help.viewvideo.html
    'b_01' => '看视频相关',
    'b_02' => '找视频/专辑',
    'b_03' => '在爱西柚，您可以通过多种方式找到想看的视频或专辑：',
    'b_04' => '1)	',
    'b_05' => '爱西柚首页',
    'b_06' => '的精彩推荐；',
    'b_07' => '2)	爱西柚各个',
    'b_08' => '频道',
    'b_09' => '页的精彩内容；',
    'b_10' => '3)	爱西柚的名人电视台；',
    'b_11' => '4)	搜索等。',
    'b_12' => '看视频小技巧',
    'b_13' => '1)	点击“关灯”可以将视频外的内容都遮住，适合晚上观看视频使用。',
    'b_14' => '2)	点击图中的图标，播放器能自动放大适应你的屏幕。',
    'b_15' => '3)	点击图中的图标，可以按你的习惯调整视频的亮度和对比度，达到最佳的观看效果。',
    'b_16' => '分享视频',
    'b_17' => '把好的视频推荐给你的朋友吧。爱西柚视频提供了多种分享方式，一键转帖到新浪微博、百度i贴吧、人人网、开心网、QQ空间、飞信空间、搜狐微博等。还可以复制代码加入博客，论坛和网页中。',
    
    //help/uploadvideo.html
    'c_01' => '传视频相关',
    'c_02' => '哪种方式上传比较好',
    'c_03' => '小于1G的或者非Windows系统的用户可以直接通过',
    'c_04' => '网页上传',
    'c_05' => '超过1G的视频推荐使用',
    'c_06' => '爱西柚客户端上传',
	'c_061' => '',
    'c_07' => '为什么要填写各种信息',
    'c_08' => '视频的标题，简介，分类，标签都是为了让更多的用户找到这个视频，所以请认真填写。',
    'c_09' => '上传视频后多久才能看到',
    'c_10' => '一般情况下视频会在数小时内发布完成，您可以在等待过程中上传其他视频。',
    'c_11' => '上传的视频为什么未通过审核',
    'c_12' => '爱西柚遵循党和国家在文化产业中的各项规定和要求，维护和谐社会的传媒环境，担负摒弃低俗的社会责任。涉及以下内容的视频将被严格禁止播放：',
    'c_13' => '反党反社会违宪违法,以及危害国家安全损害国家利益的信息；',
    'c_14' => '破坏民族团结干涉他人宗教信仰，破坏社会稳定宣扬邪教的信息；',
    'c_15' => '不良内容导向（血腥暴力色情低俗）的信息；',
    'c_16' => '未经授权的节目，以及其他违反国家相关规定的信息。',
    'c_17' => '上传哪些内容比较受欢迎',
    'c_18' => '爱西柚鼓励健康，积极向上的视频内容，尤其欢迎原创内容，这里会是播客的舞台。',
    
    //help/channel
    'd_01' => '个人电视台',
    'd_02' => '个人电视台产品是中国网络电视台爱西柚打造的一款以视频为核心的个性空间产品。丰富的个性化模板，极具冲击性的大尺寸播放器，和CNTV各种产品相互打通，加上爱西柚的强势推广，这里会是你的个人展示舞台。',
    'd_03' => '怎么申请自己的个人电视台',
    'd_04' => '无需特别申请，注册成为CNTV会员即可拥有自己的个性电视台。进入爱西柚后在右边可以点击“我的电视台”直接进入，或者从“我的”菜单中点击“我的电视台”进入。',
    'd_05' => '个性化我的个人电视台',
    'd_06' => '模板：爱西柚个人电视台目前提供了6套不同风格的模板（还在不断丰富），点击“模板”，选择喜欢的模板保存即可。',
    'd_07' => '播放器：默认展示最新上传的10个视频，也可以在播放器设置里改为手动推荐视频。',
    'd_08' => '其他信息：个性的简介，公告，添加朋友作为友情链接，可以让你的人气更高。',
    'd_09' => '管理我的个人电视台',
    'd_10' => '点击个人电视台主页的“管理我的电视台”进入管理界面，包括：',
    'd_11' => '视频管理：上传的视频进行再编辑等操作；',
    'd_12' => '专辑管理：创建专辑，给专辑内添加视频等操作；',
    'd_13' => '收藏管理：收藏的视频和专辑可以在这里统一管理；',
    'd_14' => '留言和评论：发表的留言和评论，收到的留言和评论可以在这里统一管理；',
    'd_15' => '电视台设置：在这里可以更改自己电视台的相关说明，播放器的设置以及友情链接等内容。',
    
    //help/client.html
    'e_03' => '是爱西柚推出的Windows系统下的集上传视频、下载视频、分享视频为一体的电脑客户端软件。',
    'e_04' => '上传',
    'e_05' => '通过客户端上传比网页上传更快速更稳定，而且可以批量操作，极大简化上传流程。',
    'e_06' => '下载',
    'e_07' => '爱西柚视频是经过分段处理的，一般方式无法下载。爱西柚客户端能完美下载爱西柚视频，并支持多视频同时下载，并可在下载后播放。',
    'e_08' => '转换和管理',
    'e_09' => '爱西柚客户端能对下载的视频进行各种格式的转换和管理，支持把爱西柚视频转换为各种手机（如iPhone专用格式，android手机格式，Nokia手机格式和通用手机格式等），PSP，MP4，MP5等可用的格式。',

    'look_recom' => '看看我们为您推荐的：',
    'hot' =>'热点推荐',
    'hot_recom' => '今日热点推荐',
    'feedback' => '反馈',
    'help' => '爱西柚帮助',
    'join' => '加入专辑',
    'determine' => '确定',
    'name' =>'名称',
    'tel' =>'E-mail/手机: ',
    'ixiyou' => '爱西柚',
	'return_01' => '1年前',
	'return_02' => '半年前',
	'return_03' => '3月前',
	'return_04' => '1月前',
	'return_05' => '2周前',
	'return_06' => '1周前',
	'return_07' => '3天前',
	'return_08' => '1天前',
	'return_09' => '半天前',
	'return_10' => '6小时前',
	'return_11' => '3小时前',
	'return_12' => '1小时前',
	'return_13' => '2小时前',
	'return_14' => '45分钟前',
	'return_15' => '30分钟前',
	'return_16' => '15分钟前',
	'return_17' => '10分钟前',
	'return_18' => '5分钟前',
	'return_19' => '2分钟前',
	'return_20' => '1分钟前',
	'return_21' => '刚刚',

    //新增内容
    //manage/albumcreatestep3.html
    'created' => '已创建成功！',
    'album_manage' => '我的专辑管理',
    'none' => '暂无',
    'pending' => '信息已经提交，等待审核。',
    'al_mes1' => '还没有创建新专辑，现在就 ',
    'al_mes2' => '创建',
    'al_mes3' => ' 吧',
    'al_mes4' => '您还没有选择专辑！',
    'sel_album' => '选择专辑',//???
    'sure' => '确定要删除该专辑吗？',
    'added' => '添加时间',
    'remove' => '确定要移除选中的视频吗？',
    'not_sel' => '您还没有选中视频！',
    'enter_mes' => '请输入正确的视频格式！',
    'not_add' => '该专辑没有添加任何视频',
    'moved' => '移入错误。',
    'del_mes' => '确定要删除该留言吗？',
    'del_com' => '确定要删除该评论吗？',
    'enter_com' => '请输入评论内容',
    'fav_albums' => '我收藏的专辑',
    'no_fav' => '没有收藏任何专辑',
    'links_set' => '友情链接设置',
    'input_nick' => '请输入用户昵称',
    'add_mes' => '请添加CNTV的用户为友情链接，最多10个。',
    'avatar' => '头像',
    'user' => '用户名',
    'sequence' => '排序',
    'del_link' => '确定要删除该友情链接吗？',
    'add_suc' => '添加成功！',
    'station' => '管理我的电视台',
    'tel_mes' => '该电视台设置为仅好友可见。',
    'copied' => '内容已经复制到粘贴板。',
    'man_video' => '我的视频管理',
    'reproduced' => '转载',
    'open' => '公开',
    'set_privacy' => '已被上传者设为隐私',
    'add_playlist' => '添加到播放列表',
    'set_player' => '电视台设置 - 播放器',
    'tips_01' => '小贴士：当前已推荐视频数',
    'tips_02' => '个，还可以推荐',
    'sel_empty' => '选定视频为空！',
    'suc_save' => '保存成功',
    'set_announce' => '电视台设置 - 公告',
    'an_set' => '电视台公告设置',
    'an_now' => '当前公告',
    'an_modify' => '修改公告',
    'ins_mes' => '简介不超过200个汉字，暂时不支持html代码。',
    'ins_mes2' => '公告修改已经提交，请耐心等待审核！',
    'set_home' => '主页播放器设置',
    'defaul' => '自动选择（最新上传的10个视频）',
    'manually' => '手动选择（点添加节目按钮添加视频，最多10个）',
    'del_record' => '确定删除该记录吗？',
    'set_access' => '电视台设置 - 电视台访问权限',
    'tv_access' => '电视台访问权限',
    'allow_all' => '允许所有人访问我的电视台',
    'only_friends' => '仅允许我的好友访问我的电视台',
    'submitted' => '访问权限修改已经提交！',
    'conect' => '您已连接到',
    'personal' => '个性定制',
    'bind_set' => '微博绑定设置',
    'sina' => '新浪微博',
    'tecent' => '腾讯微博',
    'sohu' => '搜狐微博',
    'kaixin' => '开心网',
    'renren' => '人人网',
    'con_01' => '将您的', //将您的CNTV-爱西柚帐号与**建立连接
    'con_02' => 'CNTV-爱西柚帐号',
    'con_03' => '与',
    'con_04' => '建立连接。',
    'con_bind' => '确认绑定',
    'bind_mes1' => '绑定后，以下操作即可', //绑定后，以下操作即可自动同步到您的**账号
    'bind_mes2' => '自动同步',
    'bind_mes3' => '到您的',
    'bind_mes4' => '账号',
    'favs_videos' => '收藏视频',
    'conne1' => '已经与您在', //已经与您在**的帐号**建立连接。
    'conne2' => '的帐号',
    'operat1' => '您可以进一步设置需要同步到', //您可以进一步设置需要同步到**的操作：
    'operat2' => '的操作：',
    'like' => '顶视频',
    'dislike' => '踩视频',
    'modify_sub' => '设置修改已提交，请耐心等待审核！',
    'nofav' => '没有收藏任何视频',
    'favs_album' => '收藏专辑',
    'title_mes' => '名称不能超过50个字符',
	'cooperative' => '合作管理',
	
    'tabs_mes' => '最多10个标签，每个标签最多10个字符，逗号或者空格分割。',
    'add_link' => '添加视频链接: ',
    'upload_mes' => '从我上传的视频中选取:',
    'select' => '选取',
 	'list_empty' => '视频点播列表为空',
 	 	
 	'mes_01' => '最多10个标签。',
 	'mes_02' => '每个标签最多10个字符。',
 	'mes_03' => '选择视频标记丢失。',
 	'mes_04' => '请输入标题。',
 	'mes_05' => '不要超过50个字符。',
 	'mes_06' => '标题含有敏感词汇，请勿使用',
 	'mes_07' => '请填写标签。',
 	'mes_08' => '专辑创建',
 	'mes_09' => '专辑创建成功，请等待审核！',
 	'album_mes' => '专辑数不能超过200个。',
 	
 	/**
 	 * 举报页面
 	 * report/index.html
 	 */
 	'con_wrong' =>'联系方式输入有误',
 	'sel_report' =>'请选择举报原因',
 	'inf_note' =>'请输入备注信息',
 	'cor_contact' =>'请填写正确的联系方式',
 	'add_report' =>'添加举报信息',
 	'failed' =>'数据加载失败,请检查网络连接',
    'sexual' => '色情内容',
    'reactionary' =>'反动言论',
    'violation' => '侵犯他人隐私' ,
    'other' =>'其他不健康内容',
    'suc' => '举报成功',
    'faile' => '举报失败',
    
    'to_sina' => '转发至新浪微博',
    'baidu' => '转发至百度贴吧',
    'to_renren' => '转发至人人网',
    'remove_list' => '从播放列表删除',
    'empty_album' => '专辑内没有视频',
    'his_load' => '历史视频加载',
    'play_load' => '播放列表加载',
    'play_mes' => '播放列表加载失败,请检查网络连接',
    'suc_album' => '该视频成功加入专辑！',
    'rem_mes' => '您要回复的视频或者专辑已被删除！',
    'no_perm' => '您没有发表评论的权限',
    'succ' => '留言成功',
    'album_fav' => '该专辑已经收藏！',
    'video_fav' => '该视频已经收藏！',
    'mes_tip' => '消息提示',
    'update_fail' => '更新失败',
	
    /**
	 * 影视，动漫，纪实，青少二级页面
 	 *
 	 */
	'ranks' => '热门资讯排行榜',
	'films_news' => '影视资讯抢先看',
	'films_shows' => '热剧大片抢先看',
	'conferences' => '活动现场抢鲜看',
	'special_topics' => '影视热门策划推荐',
	
	'animations_ranks' => '人气动漫点播榜',
	'comic' => '动画前沿速递',
	'animations' => '人气动漫大本营',
	'cosplay' => '动漫周边-cosplay专区',
	'topics' => '动漫热门策划专题推荐',
	
	'video_ranks' => '热门视频排行榜',
	'historical' => '历史秘闻',
	'realities' => '名人真相',
	'memory' => '非常记忆',
	'real_moments' => '真实瞬间',
	'hotdoc' => '纪录片热门策划',
	
	'hots_ranks' => '最热视频精选',
	 
 	/**
 	 * 下载页面
 	 * down/
 	 */
	'pc' => 'PC客户端',
	'Paike' => '拍客客户端',
 	'down_01' => '版本：2.3.5',
 	'down_02' => '大小：8.50Mb',
 	'down_03' => '系统：WinXP/Vista/Win7',
 	'down_04' => '突破网页上传限制，最大可上传10G视频，支持批量上传。',
 	'down_05' => '收藏和分享不能满足您？尽情下载吧！',
 	'down_06' => '支持多种终端（包括iphone、PSP等）观看视频。',
 	'pkdown_01' => '拍客客户端',
 	'pkdown_02' => 'CNTV拍客手机客户端，是CNTV中国网络电视台专为Android和iOS订制的一款手机视频分享娱乐产品。界面美观简洁，简单操作，用户可随时用手机拍摄视频，记录身边新鲜事，然后快速上传，第一时间与亲朋好友分享。为用户在爱西柚平台拍摄、上传、分享视频提供了愉悦的体验。',
 	'pkdown_03' => '★我们支持IOS 5.1及以上系统；★',
 	'pkdown_04' => '★我们最低支持iPhone 3GS及以上机型(包括iPhone5)；★ ',
 	'pkdown_05' => '欢迎您提出宝贵意见,您的意见是我们不断努力进步的动力!',
 	'pkdown_06' => 'Android版：最新版 V2.1.9 发布日期:2014.09.30',
 	'pkdown_07' => 'iPhone版：最新版 V2.1.8 发布日期: 2014.09.30',
	'page_title' => '爱西柚视频客户端官方下载',
	'page_keywords' => '爱西柚视频客户端,爱西柚视频软件,视频上传,视频点播,高清播放,超清播放,UGCclient,iXiYou,视频下载,批量上传视频',
	'page_description' => '爱西柚视频客户端为用户提供视视频上传、视频下载、视频点播功能，视频上传突破网页限制，最大可上传10G视频，同时支持批量上传及断点续传',
	'copyright' =>'央视国际网络有限公司 版权所有',
	'seo_title' => '爱西柚-CNTV中国网络电视台',
	'lit_title' => '爱西柚',//爱西柚-CNTV中国网络电视台
	'common_title' => '爱西柚-CNTV中国网络电视台播客台,提供视频分享,视频搜索,高清视频',
	
//================================= END ========================================
    'basic_set' => '基本信息设置',
    'tv_name' => '电视台的名称',
    'tv_tags' => '电视台的标签',
    'tv_info' => '电视台的简介',
    'link_mes' => '复制视频链接粘贴到输入框中，用回车分割。',
    'back_tv' => '返回我的电视台',
    'copy_mes' => '复制链接如:http://xiyou.cntv.cn/xxxxxxx，多个链接用回车间隔',
    'abl_mes' => '专辑中视频数不能超过200个',
    'alb_view' => '查看本专辑',
		//  plug-in baidu   share
	'forwards_to_sinablog' =>'分享到新浪微博',
	'sina_blog'	=>'新浪微博',
	'forwards_to_baidu' =>'分享到百度贴吧',
	'weixin' => '微信',
	'forwards_to_weixin' => '分享到微信',
    'baidu_bar' =>'百度贴吧',
	'forwards_to_baidubar' =>'分享到百度贴吧',
	'forwards_to_renren' =>'分享到人人网',
	'renren_net' =>'人人网',
	'kaixin_net' =>'开心网',
	'forwards_to_kaixin' =>'分享到开心网',
	'QQqzone' =>'QQ空间',
	'forwards_to_qzone' =>'分享到QQ空间',
	'fetion' =>'飞信',
	'forwards_to_fetion' =>'分享到飞信',
	'sohu_blog' =>'搜狐',
	'forwards_to_sohu' =>'分享到搜狐微博',
	'tencent_blog' =>'腾讯微博',
	'forwards_to_tencent' =>'分享到腾讯微博',	
);
