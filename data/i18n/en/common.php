<?php
/* $Id: common.php 97 2017-04-05 02:00:08Z yuchangchun $ */
defined('SYS_PATH') OR die('No direct access allowed.');

return array (
     /**
     * 首页
     * index.html
     */
    'index' => 'Home', //首页
    'original' => 'Original', //原创
    'news' => 'News', //新闻
    'amusement' => 'Entertainment', //娱乐
    'movie' => 'Movies & Films', //影视
    'music' => 'Music', //音乐
    'sports' => 'Sports', //体育
    'wealth' => 'Finance', //财富
    'education' => 'Science', //科教
    'car' => 'Car', //汽车
    'life' => 'Life', //生活
    'fashion' => 'Vogue', //时尚
    'mbaby' => 'Kids', //母婴
    'pet' => 'Pets', //宠物
    'animation' => 'Cartoon', //动漫
    'game' => 'Games', //游戏
    'school' => 'School', //校园
	'qingshao' => '青少',//青少	
    'others' => 'Others',  //其他
    'documentary' => 'Documentary',//纪实
	'funny'	=> 'Funny',//幽默
	'outstanding'	=> 'Talent',//达人
	'video_maker'	=> 'DV',//拍客
    'more' => 'More', //更多
    'ishow' => 'ISHOW',
        
    'go_tv' => 'I want a TV Show', //我要上电视
    'album' => 'Albums', //专辑
    'ptv' => 'Space', //电视台    
    'the_client' => 'Clients', //客户端
    'login' => 'Sign in', //登录
    'upvideo' => 'Upload',    //上传视频
            
    'mytv' => 'My Space',   // 我的电视台
    'myvideo' => 'My Video',  //我的视频
    'vlist' => 'Playlist', //播放列表
    'mod_nickname' => 'Account Setting', //修改昵称
    'my_develop' =>'Development', //我的开发
    'quit' => 'Exit', //退出
    'vmanage' => 'Video Manage', //视频管理
    
	'hot_topic' => "What's new", //今日热点
    'activities' => 'Hot Events',//西柚看点
    'hot_spots' => 'Recent Hot News',//热点Top
    'micro_film' => 'Original', //原创
    'mo_making' => 'DV',//拍客
    'wonders' => 'Talent',//达人
    'humors' => 'Funny',//幽默
    'pets' => 'Pets', //宠物
    'won_album' => 'Hot Albums', //精彩专辑
    'link' => 'Link', //友情链接
    'connect_us' => 'Contact us', //联系我们
    'special' => 'Special', //精彩专题
    'co_website' => 'Cooperative websites', //合作官网
    'got_tv' => 'Got Talent TV', //达人电视台
    'cel_tv' => 'Celebrity TV', //名人电视台   
    'age_tv' => 'Organization TV', //机构电视台
    'uni_tv' => 'University TV', //高校电视台
    'co_agency' => 'Partners', //合作机构
    'la_join' => 'New comers', //最新加入
    'search' => 'Search', //搜索
    'making' => 'CNTV Paike', //爱西柚拍客
    'desk_client' => 'CNTV Desktop Client', //爱西柚桌面客户端
    'authent' => 'Certification', //实名认证
    'dev_platform' => 'Development Platform', //开发平台
    'helps' => 'Help Center',   // 帮助中心   
    'on_feedback' => 'Online Feedback', //在线反馈
    'lan_switch'=> 'Language', //切换语言
    'medal'=> 'Medals', //爱西柚勋章
    
    /**
     * 聚合页
     * rank/     
     */      
    'video_class' => 'Categories', //视频分类
    'album_class' => 'Categories', //专辑分类
    'ptv_class' => 'Categories', //电视台分类
    'play_video' => 'Video on Demand', //视频点播    
    'all' => 'All', //全部
    'type' => 'Category', //类型
    'video' => 'Videos', //视频
    'sorry_mes' => 'Sorry, no video found.', //抱歉，暂时没有找到符合条件的视频。
    'sorry_mes_album' => 'Sorry, no album found.',//抱歉，暂时没有找到符合条件的专辑。
    'sorry_mes_channel' => 'Sorry, no TV channel found.',//抱歉，暂时没有找到符合条件的电视台。
    'rec_mes' => 'You are recommended to try a wider range of search or another term to search', //建议您：请尝试放宽或使用其它的检索条件。
    'play_most' => 'Views', //播放最多
    'collect_most' => 'Favorites', //收藏最多
    'comment_most' => 'Comments', //评论最多
    'top_most' => 'Likes', // 顶的最多
    'video_most' => 'Videos', //视频最多 
    'visit_most' => 'Views', //访问最多
    'up_recent' => 'Date Added', //最近更新
    'latest_update' => 'Updated', //最新更新
    'today' => 'Day', //今日
    'week' => 'Week', //本周
    'month' => 'Month', //本月 
          
    //显示方式：include/displaytab.html
    'update' => 'Update', //更新   
    'show_mode' => 'Display mode', //显示方式
    'icons' => 'Grid', //以图标形式显示
    'lists' => 'List', //以列表形式显示
       
    // 分页 pagination.html
    'first' => 'First',     //第一页
    'previous' => 'Prev',  //上一页
    'next' => 'Next',      //下一页
    'last' => 'Last',      //最后一页               
    
    /**
     * 【登录】弹出框
     *  user/loginbox.html
     */
    'now' => 'No account?', //没有帐号，马上
    'register' => 'Sign up now',  //注册  
    'forgetpwd' => 'Forgot Password?', //忘记密码
    'remain' => 'Keep me signed in', //保持登录状态
    'pwd' => 'Password', //密码
    'email' => 'Email', //邮箱 
    'cancel' => 'Cancel', //取消 
    'username' => 'Account', //帐号
    'entermail' => 'Please enter the email', //请输入邮箱
    'enterpwd' => 'Please enter the password', //  请输入密码
         
     /**
     * 视频上传页：http://xiyou.cntv.cn/upload.html
     * videoupload/index.html
     * 
     */ 
    'client_down' => 'Download Clients', //爱西柚客户端下载     
    'upload_help' => 'Help',  //上传帮助
    'video_format' => 'Video Format',  //视频格式      
    'video_size' => 'Size of video',  //视频大小
    'more_help' => 'More', //查看更多帮助信息
    'imp_items' => 'Important',  //重要事项
    'ple_mes' => 'No TV program, concert video or commercial video shall be uploaded without authorization, unless such program or video is developed by yourself. ',  //请勿在未经授权的情况下上传任何电视节目、音乐视频、音乐会视频或商用视频，除非视频完全由您个人制作。
    'up_mes' => 'Single video uploaded to web page is 1G at most; single video uploaded to client side is 10G at most.', //网页上传单个视频最大500M；客户端上传单个视频最大1G
    
    /**
     * 爱西柚显示异常报错页面：
     * http://xiyou.cntv.cn/error.html     
     */ 
    'can' => 'You can：',//您可以
    'mes_error' => "Error occurs to the page you request!", //您请求的页面发生错误！
    'click' => 'Click here ', //请点此
    'enter' => 'enter the Homepage',  //进入主页     
    'mes_error2' => "We're sorry, the page you would like to visit may have disappeared or have not been there!", //非常抱歉，您想访问的页面可能已经消失或尚未出现！     
    'web' => 'Re-enter the URL, or to ',//重新输入网址，或者到    
    'looks' => ' See:',//看看：      
    'go' => 'Visiting the',//前往
    'classify' => 'Video love grapefruit classification:',
    'recommends' => 'We recommend the following videos.',  
         
    /**
     * 搜索【结果页】 
     * search/index.html
     * 
     */ 
    'keyword' => 'Hot keywords', //热门关键字
    'sear' => '',
    'result' => '', 
    'total' => '', //共
    'num' => '',  //个
      
    //【结果页】search/video.html,channel.html,album.html
    'rel_degree' => 'Relevance', //相关程度       
    'num_video' => 'Videos', //视频数量
    'video_time' => 'Duration', //视频时长      
    'vis_count' => 'Views', //访问次数      
    'up_times' => 'Date Added', //上传时间
    'play_counts' => 'Views', //播放次数
    'fav_counts' => 'Favorites', //收藏次数
    'comment_counts' => 'Comments', //评论次数 
    
    //【结果异常页】 search/noresult.html
    'sorry' => 'Sorry, your search ', //抱歉，没有找到与     
    'related' => ' did not match any ', //相关的   涉及变量
    'solution' => 'Suggestions:', //解决方案：   
    'check_mes' => '• Make sure that all words are spelled correctly.', //• 检查您的关键字是否有错别字；
    'redu_mes' => '• Try different keywords.', //• 减少关键字，以放宽搜索条件；
    'try_mes' => '• Try more general keywords.', //• 尽量使用简洁的关键词，或用空格将多个关键词分开。
             
    'hist_video' => 'Videos you recently viewed', //您最近看过的 historyvideo.html         
    'fav_video' => 'You might like',  //您可能喜欢的 favoritevideo.html     

    /**
     * 原创频道 http://xiyou.cntv.cn/dv
     * 【功能区】original.html
     * 
     */ 
    'independent_film' => 'Independent short',  //独立短片
    'series_short' => 'Short film series',  //系列短剧
    'original_cartoon' => 'Original Animation',  //原创动漫    
    'music_story' => 'Musical Story',  //音乐故事
    'block_recom' => 'Key Recommendations',  //重磅推荐
    'join_original' => 'Join', //加入原创先锋计划
    'original_pioneer' => 'Original creation pioneer list',  //原创先锋榜  
    'new_talent' => 'New talent list',  //新锐达人榜
    'join_talent' =>'Join the ranks of new talent',//加入新锐达人行列
    'explore_screens' => 'Explore film hall',  //探索影厅
    'more_film' => 'More independent shorts',  //更多独立短片
    'more_short' => 'More short film series', //更多系列短剧
    'more_cartoon' => 'More original animations',  //更多原创动漫
    'more_story' => 'More musical stories',  //更多音乐故事
    
    /**
     * 【视频专辑列表页】
     */ 
    //左侧【专辑信息】 album/info.html    
    'video_play' => 'Play the album', //视频播放
    'create_asc' => 'Sort by Updated', //按创建时间顺序
    'create_desc' => 'Sort by Updated DESC', //按创建时间倒序
                
	//右侧专辑信息 album/albuminfo.html   
    'album_info' => 'Album Information ', //专辑信息
    'creator' => 'Creator', //创建者    
    'create_time' => 'Created', //创建时间
    'updated_time' => 'Updated', //更新时间    
    'details' => 'Details', //展开详细
    'on_details' => 'Details', //展开详情
    'abstract' => 'Album Information ', //专辑简介
    'collect' => 'Add to Favorite', //收藏
    'report' => 'Report', //举报   
    'tag' => 'Tags', //标签       
    'class' => 'Category', //分类
    'pack_up' => 'Show less', //收起    
            
    //右侧【视频信息】album/slider.html   
    'video_list' => 'Video playlist', //视频列表
    'automatic_series' => 'Continuous', //自动连播   
    'showall' => 'Show All', //显示全部    
    'album_creator' => 'Creator',//专辑创建者
    'collected' => 'Favorited',	//已收藏
               
    //点击举报弹出对话框 report/index.html    
    'reports' => 'Choose a reason', //举报原因   
    'note' => 'Notice', //备注  
    'upload' => 'Upload', //上传于
	'attention' => 'Attention', //关注
	'del_attention' => 'Cancel attention', //取消关注
    //右侧栏目信息 album/infoslider.html
    'other_album' => "Creator's Other Album", //创建者的其他专辑
    'related_album' => 'Relevant albums', //相关专辑
    'hot_album' => 'Hot Entertaining Albums',  //---涉及变量需要判断？
    'original_album' => 'Hot original albums', //---涉及变量需要判断？

    //右侧【视频信息】album/slider.html,video/slider.html         
    'video_info' => 'Video information', //视频信息       
    'video_desc' => 'Video introduction', //视频简介    
        
	//视频【播放列表页】 video/showlist.html       
    'have' => 'Currently there are ', //当前有
    'videos' => ' videos', //个视频
    'empty' => 'Empty', //清空   
    'check' => 'Select All', //全选
    'play' => 'Play', //播放
    'savefavor' => 'Save as Favorite', //保存为收藏    
    'savealbum' => 'Save as Album', //保存为专辑
    'look' => 'Videos you may be interested in', //大家也在看
    'recommendations' => 'Recommended', //精彩推荐
    'video_collected' => 'Video has collections', //视频已经收藏 
    'xyjx' => 'CNTV Selections', //西柚精选 recommendxyjx.html     
    'recommend_video' => 'Recommended Videos', //推荐视频 recommendvideo.html
	'highlights' => 'Video Aspect',//视频看点
    
    
    /**
     * 【通用左侧导航】
     *  include/left.html     
     */ 
    'per_data' => 'Personal Information',  //个人资料        
    'man_album' => 'Album Management', //专辑管理   
    'cre_album' => 'Album Creation', //创建专辑
    'mes_com' => 'Message and Comment', //留言和评论
    'pre_set' => 'Authorization Setting', //权限设置
    'tv_set' => 'TV Setting',  //电视台设置      
    'baseinfo' => 'Basic Information',  //基本信息    
    'player' => 'Player',  //播放器
    'connect_set' => 'External Link Setting', //站外连接设置          
    'notice' => 'Announcement', //公告
    'myalbum' => 'My Album', //我的专辑
    'my_fav' => 'My Favorate', //我的收藏
        
    /**
     * 【视频管理】
     * http://xiyou.cntv.cn/manage/videomanage
     * manage/videomanage.html,manage/videoedit.html
     */         
    'play_num' => 'Broadcasting number', //播放数
    'com_num' => 'Reviewing number', //评论数
    'pub_time' => 'Release Time', //发布时间           
    'edit' => 'Edit', //编辑
    'delete' => 'Delete', //删除
    'del_video' => 'Cancel the video? Yes or No', //确定要删除该视频吗   
    'no_check' => "You haven't selected a video", //您还没有选中视频  
    'edit_video' => 'Edit Video', //编辑视频
    'copyright' => 'Copyright', //版权  
    'privacy' => 'Privacy', //隐私       
        
    /**
     * 我的专辑：
     * http://xiyou.cntv.cn/manage/albummanage
     * http://xiyou.cntv.cn/manage/creatalbum     
     */ 
    'pub' => 'Published', //已发布     
    'review' => 'Approval', //待审核
    'not_audit' => 'Unapproved', //审核未通过           
    'category' => 'Category', //所属分类
    'operat' => 'Operation', //操作
    'modify_info' => 'Modification', //修改信息      
    'manage_video' => 'Video Management', //管理视频         
    'creat_album' => 'Create an Album', //创建新专辑     
    'title' => 'Title', //标题
    'desc' => 'Description', //简介    
    'use_mes' => 'Please separate with a space or comma', //请用空格或逗号分隔
    'used_tag' => 'My tags', //我用过的标签   

    /**
     * 我的收藏：
     * http://xiyou.cntv.cn/manage/favvideo
     * http://xiyou.cntv.cn/manage/favalbum
     */ 
    'col_video' => 'My Favorate Videos', //我收藏的视频      
    'col_time' => 'Collection Date', //收藏时间
    'col_cancel' => 'Favorite Cancelled', //取消收藏成功
    'homepage' => 'Homepage', //主页    
    'video_count' => 'Videos', //视频数
    'visit_count' => 'Visits', //访问数
    
    /**
     * 【我的电视台左侧导航】
     *  channel/user.html     
     */       
    'album_count' => 'Albums', //专辑数
    'myblog' => 'Blog', //我的博客     
    'myweibo' => 'Weibo', //我的微博
    'traffic' => 'Views', //访问量
    'tv_desc' => 'Introduction', //电视台简介  
    'tv_notice' => 'Announcement', //电视台公告
    'visitors' => 'Latest Visitors', //最近访客
    'latest_com' => 'Latest Comments', //最新评论 
    'no_player' => 'No video recommended yet. ',//目前还没有推荐视频。
    'enter_player' => 'Enter to set the player', //进入播放器设置
    'add_upload' => 'Add the videos uploaded here', //将您上传的视频添加到这里
    'the_latest' => 'Latest', //最新
    'hottest' => 'Hottest', //最热
    'more_video' => 'More', //更多视频
    'no_video' => 'No Video', //暂无视频
    'more_albums' => 'More Album', //更多专辑
    'no_albums' => 'No Album', //暂无专辑
    'more_collection' => 'More Favorite', //更多收藏
    'no_collection' => 'No Favorite Video', //暂无视频收藏
    'message_board' => 'Messages', //留言板
    'leave_message' => 'Leave a Message', //我要留言        
    
    /**
     * 【播放页】
     */
    'current_location' => 'Current Position', //当前位置
    'pop' => 'Popup Window', //弹窗
    'turn_off' => 'Night mode', //关灯   
    'up' => 'Like', //顶
    'down' => 'Unlike', //踩
    'download_video' => 'Download Video', // 下载该视频  
    'related_video' => 'Related Videos', //相关视频 
      
    //【评论区】video/comment.html  
    'user_comment' => 'Add comment', //我要评论
    'ident_code' => 'Capture Code', //验证码
    'click_here' => 'Refresh', //点这里换一张    
    'anonymous' => 'Anonymous', //匿名发表    
    'recommend' => "Editor's Choice",   //编辑推荐 video/recommendflow.html  
    'hot_videos' => 'Hot videos',  //精彩视频推荐  video/recommendvideo.html   
    'add_comment' => 'Add Comment', //发表评论 
    'quick_message' => 'Quick message leaving', //快捷留言
    'qm_01' => 'Good video! Touching! Support!', //片子很不错，很感动，赞一个！
    'qm_02' => 'Shocking! Up!', //太雷人了，我顶！
    'qm_03' => 'Sign but no comment…', //打酱油，路过… …
    'netizen_comments' => "Comments", //网友评论
    'input_message' => 'Input your words', //输入您想说的话
    'code_error' => 'Verify code error',//验证码错误
	'no_exist' 	=>'The user does not exist',//用户不存在
    /**
     * 【评论留言】
     * http://xiyou.cntv.cn/manage/commentin
     * http://xiyou.cntv.cn/manage/commentsent
     * http://xiyou.cntv.cn/manage/commentset
     */ 
    'publish' => 'Released', //我发表的                     
    'received' => 'Received', //我收到的          
    'mecom_perm' => 'Message and comment authorization', //留言评论权限      
    'com_perm' => 'Comment authorization setting', //评论权限设置
    'allow_com' => 'All comments allowed', //允许所有人给我的评论            
    'recom' => 'Recommend', //推荐 
    'mes_perm' => 'Message authorization setting', //留言权限设置
    'no_com' => 'No comment allowed', //不允许任何人给我评论 
    'allow_mes' => 'All messages allowed', //允许所有人给我留言    
    'no_mes' => 'No message allowed ', //不允许任何人给我留言 
    'set_saved' => 'Setting saved', //设置已保存      
    
    'need' => 'I want', //我要 
    'share_friends' => 'Share to friends', //分享给好友 
    'copy_code' => 'Copy HTML Embed code', //复制转发代码 
    'copy_title' => 'Copy URL and Title', //复制视频标题和链接 
    'copy_url' => 'Copy SWF Player URL', //复制视频播放地址 
    'quote' => 'To the community', //转贴到社区 
    'no_copy' => 'Sorry, your browser can not automatically help copy to the clipboard, please manually copy', //抱歉，你使用的浏览器里不能自动复制到剪贴板，请手动复制
    'user_mes' => 'Copy URL and Title successfully.', //视频链接和标题已经复制成功，您可以粘贴给聊天好友了
    'copy_suc' => 'Copy HTML Embed code successfully.', //代码已经复制成功
    'video_url' => 'Copy SWF Player URL successfully.', //播放地址已经复制成功

    /**
     * 帮助页面
     * http://xiyou.cntv.cn/help.html
     * 
     */
	'help_title'=> 'help',//帮助
    'client' => 'Clients', //爱西柚客户端    
    //help/index.html     
    'problems' => 'Common problems', //常见问题      
    'a_01' => 'The video fails to play', //视频无法播放
    'a_02' => 'The condition is that', //遇到的状况是            
    'a_03' => 'Black screen', //黑屏 
    'a_04' => 'Prompts to install adobe flashplayer', //提示安装adobe flashplayer 
    'a_05' => 'Video stays buffering', //视频一直在缓冲        
    'a_06' => 'For black screen, you may try to solve it in this way', //黑屏，可以尝试这样解决          
    'a_07' => 'Emptying cookies: menu of the browser - Tool - Internet Options - Delete Cookies - OK', //清空cookies：浏览器上的菜单->i工具->internet选项->删除cookies->确定       
    'a_08' => 'Emptying IE cache files: Tool - Internet Options - Delete File - Delete All Offline Files - OK', //清空ie缓存文件：工具->internet选项->删除文件->删除所有脱机内容->确定 
    'a_09' => 'After completing the foregoing two steps, press F5 to refresh the page', //完成上述两个步骤后，按F5刷新页面。            
    'a_10' => 'If it prompts to install adobe flashplayer, you may try to solve the problem in this way', //提示安装adobe flashplayer，可以尝试这样解决 
    'a_11' => 'Then install it according to the prompts. Before installation, all webpages shall be closed, and therefore, please save any important information. ', // 根据提示直接下载安装即可，安装前需要关闭所有网页，如果有重要内容请先保存。         
    'a_12' => 'If automatic download fails, you may try mannual download for installation; ', //如果自动下载有问题的话可以尝试手动下载安装；      
    'a_13' => 'IE-based browsers include IT, Tencent TT, Maxthon, GreenBrowser, The World and 360 Safe Browser etc. ',//ie内核浏览器包括IE、腾讯TT、Maxthon（傲游）、GreenBrowser（绿色浏览器）、TheWorld（世界之窗）、360安全浏览器等。           
    'a_15' => 'Non IE-based browsers include FireFox, Google Chrome, Opera, Safari etc. ',//非ie内核浏览器包括FireFox、Google Chrome、Opera、Safari等。 
    'a_16' => 'Click here to manually download and install the flashplayer plug-in', //点击此处，手动下载安装flashplayer插件 
    'a_17' => 'Video stays buffering ', //视频一直在缓冲       
    'a_18' => '1) If a video does not play smoothly but stays buffering, it might be due to interrupted access to the Internet. The most common causes are that you are downloading with Xunlei or BT or other tools, or you have installed any accelerating tool of another video website. In such a case, you are recommended to close the tools before opening the video page again. ', //1)  视频一直在缓冲可能是网络连接不顺畅，最常见的情况就是您在看视频同时正在用迅雷，bt等工具进行下载，或者电脑内安装了其他视频网站的加速器工具。建议您先关闭这些工具，然后重新打开视频页面。       
    'a_19' => '2) Trial emptying of the cache: IE Browser Menu: Tool - Internet Options - Delete File - Delete All Offline File - OK, shown as follows.', //2)  尝试清空缓存：IE浏览器菜单：工具-internet选项-删除文件-删除所有脱机内容-确定。如下图所示。 
    'a_20' => 'Watch videos not smooth', //看视频太卡             
    'a_21' => '1) If a video gets stuck tight during playing, it might be due to network congestion. The most common causes are that you are downloading with Xunlei or BT or other tools, or other software is using the Internet when you are watching the video. In such a case, you are recommended to close the tools, and suspend the playing video for buffer; when buffer is completed, the video will play smoothly. ',//1)	视频播放太卡可能是网络拥挤，最常见的情况就是您在看视频同时正在用迅雷，bt等工具进行下载，或者电脑上其他软件正在占用网络。建议您先关闭这些工具，暂定正在播放的视频，等待视频频缓冲完成后，就能流畅播放了。
    'a_22' => '2) Trial emptying of the cache: IE Browser Menu: Tool - Internet Options - Delete File - Delete All Offline File - OK. ', //2)	尝试清空缓存：IE浏览器菜单：工具-internet选项-删除文件-删除所有脱机内容-确定。      
    'a_23' => '3) Additionally, as the videos at CNTV are of high definition, they may get stuck during playing if your bandwidth is 512K; therefore, it is recommended to upgrade the bandwidth to 1M or above. ', //3)	另外由于爱西柚视频的清晰度较高，如果您的网络带宽是512K的话会比较卡，推荐升级到1M及以上。 
    'a_24' => 'Why a video uploaded cannot be seen', //上传的视频怎么看不到    
    'a_25' => 'A video will undergo the following steps from upload to successful release: ', //一个视频从开始上传到成功发布，需要经历以下步骤： 
    'a_26' => 'Code conversion: when upload of a video is completed, it will be converted by the server to a format identifiable by the player. The time of code conversion depends on the video format and size. ', //转码：上传完成后，服务器需要将视频转化成播放器能够识别的格式，转码时间由视频格式和大小决定。     
    'a_27' => 'Approval: after code conversion, a video enters the examination stage, and only when it is examined to have complied with the regulations on release can it be released. ', //审核：转码完成后，进入审核阶段，符合视频发布规定的视频才能审核通过。       
    'a_28' => 'Release: a video will be formally released after approval and appear in your Personal TV. ', //发布：审核通过后视频正式发布，出现在你的个人电视台中。    
    'a_29' => 'Generally, release of a video can be completed within several hours, and you may upload other videos during waiting. ', //一般情况下视频会在数小时内发布成功，您可以在等待过程中上传其他视频。            
    'a_30' => 'How can I download a video to a mobile phone/PSP/MP4', //我想下载视频到手机/PSP/mp4看怎么办 
    'a_31' => 'Please download', //请下载      
    'a_33' => 'To perfectly solve your problem. The CNTV client support download of videos from xiyou.cntv.cn to your computer and conversion of such videos into (special formats for iPhones, android, Nokia and general format) PSP, MP4, MP5 and other formats that are supported by various mobile phones.', //，能完美解决您的问题。爱西柚客户端支持把爱西柚的视频下载到电脑，并支持转换为各种手机（如iPhone/android手机/Nokia手机），PSP，MP4，MP5等可用的格式。 
   
    //help.viewvideo.html
    'b_01' => 'View relevant information of a video', //看视频相关      
    'b_02' => 'Search for video/album', //找视频/专辑 
    'b_03' => 'At CNTV, you may find a desired video or album by multiple means:', //在爱西柚，您可以通过多种方式找到想看的视频或专辑： 
	'b_04' => '1)	', 
    'b_05' => 'Homepage', //爱西柚首页 
    'b_06' => 'Recommendations by CNTV', //的精彩推荐；
    'b_07' => '2) ', //2)	爱西柚各个      
    'b_08' => 'each channel', //频道 
    'b_09' => ' page splendid content by CNTV', //页的精彩内容；            
    'b_10' => "3) Celebrity's TV at CNTV", //3)	爱西柚的名人电视台； 
    'b_11' => '4) Search etc.', //4)	搜索等。 
    'b_12' => 'Tips for viewing videos', //看视频小技巧 
    'b_13' => '1) Click "Light Off" to shade the content beyond the video. This can be used when a video is watched at night. ', //1)	点击“关灯”可以将视频外的内容都遮住，适合晚上观看视频使用。   
    'b_14' => '2) Click the icon in the picture, the player may automatically amplify to the size of your screen. ', //2)	点击图中的图标，播放器能自动放大适应你的屏幕。 
    'b_15' => '3) Click the icon in the picture, and you may regulate the brightness and contract of a video to realize the best view effect. ', //3)	点击图中的图标，可以按你的习惯调整视频的亮度和对比度，达到最佳的观看效果。           
    'b_16' => 'Video sharing', //分享视频       
    'b_17' => 'Recommend a video to your friends. CNTV offers multiple ways for sharing, and by a simple click, you may post a video to your blog at Sina, Baidu i post bar, Renren Net, Kaixin Net, QQ Space, Feixin Space and blog at Souhu. You may also copy the code to add in your blog, forum or a webpage. ', //把好的视频推荐给你的朋友吧。爱西柚视频提供了多种分享方式，一键转帖到新浪微博、百度i贴吧、人人网、开心网、QQ空间、飞信空间、搜狐微博等。还可以复制代码加入博客，论坛和网页中。
    
    //help/uploadvideo.html
    'c_01' => 'Upload relevant information of a video', //传视频相关            
    'c_02' => 'Which way to upload is better ', //哪种方式上传比较好 
    'c_03' => 'Videos less than 1G or by non-Windows users can directly ', //小于500M的或者非Windows系统的用户可以直接通过 
    'c_04' => 'Webpage uploading ', //网页上传        
    'c_05' => 'For videos larger than 1G, it is recommended to use ', //500-1000M的视频推荐使用       
    'c_06' => 'Upload from a CNTV client ', //爱西柚客户端上传
	'c_061' => '',
    'c_07' => 'Why are various data required', //为什么要填写各种信息            
    'c_08' => 'Please fill the title, introduction, classification and label of a video carefully, as they are for more users to find this video.  ', //视频的标题，简介，分类，标签都是为了让更多的用户找到这个视频，所以请认真填写。 
    'c_09' => 'How long will a video been seen after it is uploaded ', //上传视频后多久才能看到
    'c_10' => 'Generally, release of a video can be completed within several hours. You may upload other videos during waiting. ', //一般情况下视频会在数小时内发布完成，您可以在等待过程中上传其他视频。
    'c_11' => 'Why the video uploaded has not been approved', //上传的视频为什么未通过审核  
    'c_12' => 'CNTV follows the regulations and requirements of the Party and the State for the cultural industry, defend the media communication environment in the harmonious society, and assumes the responsibility to discard vulgarity. It forbids playing videos involving the following contents: ', //爱西柚遵循党和国家在文化产业中的各项规定和要求，维护和谐社会的传媒环境，担负摒弃低俗的社会责任。涉及以下内容的视频将被严格禁止播放：
    'c_13' => 'Information against the Party, the society, the constitution and the laws or doing harm to the national safety or the national interests; ', //反党反社会违宪违法,以及危害国家安全损害国家利益的信息；          
    'c_14' => "Information that may destroy national unity, interfere with other's religious belief, destroy the social stability or advocate heresy; ", //破坏民族团结干涉他人宗教信仰，破坏社会稳定宣扬邪教的信息； 
    'c_15' => 'Information guiding to unhealthy contents (bloodiness, violence, pornography and vulgarity);', //不良内容导向（血腥暴力色情低俗）的信息；
    'c_16' => 'Unauthorized programs and other information against relevant national regulations.', //未经授权的节目，以及其他违反国家相关规定的信息。      
    'c_17' => 'What shall be uploaded ', //上传哪些内容比较受欢迎     
    'c_18' => 'CNTV encourages healthy and positive videos, and especially welcomes original videos. It will be the platform of audio blogs. ', //爱西柚鼓励健康，积极向上的视频内容，尤其欢迎原创内容，这里会是播客的舞台。
    
    //help/channel
    'd_01' => 'Personal TV', //个人电视台           
    'd_02' => 'Personal TV is the first personal space product created by CNTV to center on videos. With its abundant personal templates, impressively large player and connection with other products of CNTV, plus the emphasized promotion of CNTV, it serves as an excellent personal exhibition platform. ', //个人电视台产品是中国网络电视台爱西柚打造的一款以视频为核心的个性空间产品。丰富的个性化模板，极具冲击性的大尺寸播放器，和CNTV各种产品相互打通，加上爱西柚的强势推广，这里会是你的个人展示舞台。
    'd_03' => 'How to apply for your own personal TV', //怎么申请自己的个人电视台 
    'd_04' => 'No special application is required, but only by registration as a member of CNTV will you have your own personal TV. Enter xiyou.cntv.cn, and click "My TV" on the right to enter directly, or click "My TV" in My Menu to enter.  ',//无需特别申请，注册成为CNTV会员即可拥有自己的个性电视台。进入爱西柚后在右边可以点击“我的电视台”直接进入，或者从“我的”菜单中点击“我的电视台”进入。
    'd_05' => 'Personalize My Personal TV', //个性化我的个人电视台  
    'd_06' => 'Template: the Personal TV at xiyou.cntv.cn currently offers 6 sets of templates with different style (more to be offered); click "Template", choose your favorite template and then save it.', //模板：爱西柚个人电视台目前提供了6套不同风格的模板（还在不断丰富），点击“模板”，选择喜欢的模板保存即可。
    'd_07' => 'Player: the latest 10 videos are displayed in default; recommended videos can be manually set in the player for display.', //播放器：默认展示最新上传的10个视频，也可以在播放器设置里改为手动推荐视频。        
    'd_08' => 'Other information: personal information, announcement, add a link to promote your popularity. ', //其他信息：个性的简介，公告，添加朋友作为友情链接，可以让你的人气更高。      
    'd_09' => 'Manage My Personal TV', //管理我的个人电视台
    'd_10' => 'Click "Manage My TV" on the homepage of the personal TV to enter the management interface, including: ', //点击个人电视台主页的“管理我的电视台”进入管理界面，包括：           
    'd_11' => 'Video management: for upload of videos and edition of such videos; ', //视频管理：上传的视频进行再编辑等操作；
    'd_12' => 'Album management: for creation of albums or adding any video to an album etc.; ', //专辑管理：创建专辑，给专辑内添加视频等操作；
    'd_13' => 'Favorite management: for collective management of favorite videos and albums; ', //收藏管理：收藏的视频和专辑可以在这里统一管理；      
    'd_14' => 'Messages and comments: for leaving messages and comments. Messages and comments received are collectively managed here. ', //留言和评论：发表的留言和评论，收到的留言和评论可以在这里统一管理；      
    'd_15' => 'TV setting: here you may change relevant introduction to your TV, as well as the player setting and links. ', //电视台设置：在这里可以更改自己电视台的相关说明，播放器的设置以及友情链接等内容。
    
    //help/client.html           
    'e_03' => 'It is a piece of computer client software introduced by CNTV, and it has integrated video uploading, downloading and sharing.', //是爱西柚推出的Windows系统下的集上传视频、下载视频、分享视频为一体的电脑客户端软件。
    'e_04' => 'Upload', //上传
    'e_05' => 'Upload through the client is much faster and more stable than that through the webpage; meanwhile, the client also allows bulk operation, having greatly simplified the uploading procedures. ', //通过客户端上传比网页上传更快速更稳定，而且可以批量操作，极大简化上传流程。  
    'e_06' => 'Download', //下载
    'e_07' => 'Videos at xiyou.cntv.cn have undergone processing by section, and cannot be downloaded by general means. However, the client of xiyou.cntv.cn may realize perfect download of such videos, while supporting simultaneous download of multiple videos and play of such videos after download.', //爱西柚视频是经过分段处理的，一般方式无法下载。爱西柚客户端能完美下载爱西柚视频，并支持多视频同时下载，并可在下载后播放。     
    'e_08' => 'Conversion & Management', //转换和管理
    'e_09' => 'CNTV client is able to convert and manage videos downloaded in various formats, and supports conversion of videos from xiyou.cntv.cn into (special formats for iPhones, android, Nokia and general format) PSP, MP4, MP5 and other formats that are supported by various mobile phones.', //爱西柚客户端能对下载的视频进行各种格式的转换和管理，支持把爱西柚视频转换为各种手机（如iPhone专用格式，android手机格式，Nokia手机格式和通用手机格式等），PSP，MP4，MP5等可用的格式。

    'look_recom' => 'See what we recommend for you:', //看看我们为您推荐的：
    'hot' =>'Hot',
    'hot_recom' =>'Today hot',
    'feedback' => 'Feedback',
    'help' => 'Help',
    'join' => 'Add into Albums',
    'determine' => 'Submit',
    'name' =>'Name',
    'tel' =>'Email/Mobile:',
    'ixiyou' => 'Home',    
	'return_01' => '1 year',
	'return_02' => 'Half a year',
	'return_03' => '3 months',
	'return_04' => '1 month',
	'return_05' => '2 weeks',
	'return_06' => '1 week',
	'return_07' => '3 days',
	'return_08' => 'One day',
	'return_09' => 'Half a day',
	'return_10' => '6 hours',
	'return_11' => '3 hours',
	'return_12' => '1 hour',
	'return_13' => '2 hours',
	'return_14' => '45 minutes',
	'return_15' => '30 minutes',
	'return_16' => '15 minutes',
	'return_17' => '10 minutes',
	'return_18' => '5 minutes',
	'return_19' => '2 minutes',
	'return_20' => '1 minute',
	'return_21' => 'Just now',
    //新增内容
    //manage/albumcreatestep3.html
    'created' => ' has been successfully created!', //已创建成功！  
    'album_manage' => 'My album management', //我的专辑管理   
    'none' => 'Not available', //暂无 
    'pending' => 'Information has been submitted, waiting for review', //信息已经提交，等待审核。 
    'al_mes1' => "Didn't create a new album? ", //还没有创建新专辑，现在就 
    'al_mes2' => 'Create', //创建 
    'al_mes3' => ' now', //吧
    'al_mes4' => "Didn't choose album", //您还没有选择专辑！
    'sel_album' => 'Select album',//选择专辑
    'sure' => 'Are you sure to delete the album?', //确定要删除该专辑吗？
    'added' => 'Added time', //添加时间       
    'remove' => 'Are you sure to delete the videos?', //确定要移除选中的视频吗？ 
    'not_sel' => 'You have not selected any video!', //您还没有选中视频！
    'enter_mes' => 'Please use correct video format!', //请输入正确的视频格式！
    'not_add' => 'The album did not add any videos', //该专辑没有添加任何视频
    'moved' => 'Transfer error.', //移入错误。  
    'del_mes' => 'Are you sure to delete this message?', //确定要删除该留言吗？       
    'del_com' => 'Are you sure to delete this comment?', //确定要删除该评论吗？  
    'enter_com' => 'Please enter the comments', //请输入评论内容
    'fav_albums' => 'My favorite albums', //我收藏的专辑
    'no_fav' => 'No favorite album', //没有收藏任何专辑       
    'links_set' => 'Links setting', //友情链接设置      
    'input_nick' => "Please enter user's nickname", //请输入用户昵称  
    'add_mes' => 'Please add CNTV user links, 10 at most', //请添加CNTV的用户为友情链接，最多10个。   
    'avatar' => 'Photo', //头像   
    'user' => "User's name", //用户名 
    'sequence' => 'Operation', //排序 
    'del_link' => 'Are you sure to delete the link?', //确定要删除该友情链接吗？ 
    'add_suc' => 'Added successfully!', //添加成功！     
    'station' => 'Manage my TV station', //管理我的电视台 
    'tel_mes' => 'Set the TV station available to my friends only', //该电视台设置为仅好友可见。    
    'copied' => 'The content has been copied to the clipboard', //内容已经复制到粘贴板。
    'man_video' => 'My video management', //我的视频管理 
    'reproduced' => 'Reprint', //转载    
    'open' => 'Public',  //公开  
    'set_privacy' => 'Already set as secret by the uploader', //已被上传者设为隐私
    'add_playlist' => 'Add to Playlist', //添加到播放列表
    'set_player' => 'TV station setting-player', //电视台设置 - 播放器
    'tips_01' => 'Tip: already recommended number of videos is ', //小贴士：当前已推荐视频数 
    'tips_02' => ' more can be recommend', //个，还可以推荐
    'sel_empty' => 'Selected video is empty', //选定视频为空！
    'suc_save' => '', //保存成功
    'set_announce' => 'TV station setting-player - announcement', //电视台设置 - 公告   
    'an_set' => 'TV station announcement setting', //电视台公告设置  
    'an_now' => 'Current announcements', //当前公告
    'an_modify' => 'Amended announcements', //修改公告   
    'ins_mes' => 'Introduction cannot exceed 200 Chinese characters, html code unavailable now', //简介不超过200个汉字，暂时不支持html代码。   
    'ins_mes2' => 'Announcement amended has been submitted, please wait for audit in patience', //公告修改已经提交，请耐心等待审核！         
    'set_home' => 'Player setting on Home page', //主页播放器设置
    'defaul' => 'Automatic selection (latest 10 videos uploaded)', //自动选择（最新上传的10个视频）  
    'manually' => 'Manual selection (press the program adding button to add videos, 10 at most)', //手动选择（点添加节目按钮添加视频，最多10个）   
    'del_record' => 'Are you sure to delete this record?', //确定删除该记录吗？  
    'set_access' => 'TV station setting-TV station visiting authority', //电视台设置 - 电视台访问权限
    'tv_access' => 'TV station visiting authority', //电视台访问权限   
    'allow_all' => 'All can visit my TV station', //允许所有人访问我的电视台   
    'only_friends' => 'Only my friends can visit my TV station', //仅允许我的好友访问我的电视台 
    'submitted' => 'Visit authority amended has been submitted', //访问权限修改已经提交！   
    'conect' => 'You have come to ', //您已连接到
    'personal' => 'Personalized setting ', //个性定制 
    'bind_set' => 'Microblog binding setting', //微博绑定设置    
    'sina' => 'Sina Micro-Blog', //新浪微博  
    'tecent' => 'Tencent Micro-Blog ',//腾讯微博    
    'sohu' => 'Sohu Micro-Blog ',//搜狐微博  
    'kaixin' => 'Kaixin Net',//开心网    
    'renren' => 'Renren Net', //人人网   
    'con_01' => 'Build connection for your CNTV-iXiYou account with ', //将您的CNTV-爱西柚帐号与**建立连接
    'con_02' => '',//CNTV-爱西柚帐号   
    'con_03' => '',//与    
    'con_04' => '',//建立连接。  
    'con_bind' => 'Confirm binding',  //确认绑定     
    'bind_mes1' => 'After binding, the following operations can be automatically synchronized to your account ', //绑定后，以下操作即可自动同步到您的**账号
    'bind_mes2' => '',//自动同步 
    'bind_mes3' => '',//到您的   
    'bind_mes4' => '', //账号       
    'favs_videos' => 'Favorite videos',//收藏视频   
    'conne1' => 'Already built connection for your ', //已经与您在**的帐号**建立连接。
    'conne2' => ' account with',//的帐号   
    'operat1' => 'You can continue to set the operation synchronized to ', //您可以进一步设置需要同步到**的操作：       
    'operat2' => ':',//的操作：        
    'like' => 'Agree video',//顶视频
    'dislike' => 'Disagree video',//踩视频
    'modify_sub' => 'Amended settings have been submitted, please wait for the audit in patience!',//设置修改已提交，请耐心等待审核！        
    'nofav' => 'No favorite videos',  //没有收藏任何视频           
    'favs_album' => 'Favorite album',  //收藏专辑   
    'title_mes' => 'The name cannot exceed 50 characters', //名称不能超过50个字符
	'cooperative' => 'Cooperative management', //合作管理
	
	'tabs_mes' => '10 tabs at most, each tag contains 10 characters at most, separate with commas or spaces', //最多10个标签，每个标签最多10个字符，逗号或者空格分割。 	         
    'upload_mes'	=> 'Select from the video I uploaded:', //从我上传的视频中选取:   
    'add_link'		=> 'Add video link:',//添加视频链接:        
    'select'		=> 'Select',//选取 	
 	'list_empty' => 'Video-on-demand list is empty', //视频点播列表为空
 	
 	'mes_01' => 'Up to 10 tags.', //最多10个标签。
 	'mes_02' => 'Labels up to 10 characters each.', //每个标签最多10个字符。
 	'mes_03' => 'Select the video tag is missing.', //选择视频标记丢失。   
 	'mes_04' => 'Please enter a title.', //请输入标题。
 	'mes_05' => 'No more than 50 characters.', //不要超过50个字符。
 	'mes_06' => 'Title contains sensitive words, do not use', //标题含有敏感词汇，请勿使用
 	'mes_07' => 'Please fill out the label.', //请填写标签。
 	'mes_08' => 'Album creation', //专辑创建
 	'mes_09' => 'Album was created successfully, pending review, please!', //专辑创建成功，请等待审核！
 	'album_mes' => 'Total album: no more than 200.', //专辑数不能超过200个。	
 	
 	/**
 	 * 举报页面
 	 * report/index.html
 	 */
 	'con_wrong' =>'Contact information entered is incorrect', //联系方式输入有误
 	'sel_report' =>'Select reporting reasons', //请选择举报原因
 	'inf_note' =>'Please enter a comment information', //请输入备注信息
 	'cor_contact' =>'Please fill the correct contact', //请填写正确的联系方式
 	'add_report' =>'Add report information', //添加举报信息
 	'failed' =>'Data failed to load, please check your network connection', //数据加载失败,请检查网络连接		
    'sexual' => 'Sexually explicit content', //色情内容
    'reactionary' =>'Reactionary remarks', //反动言论
    'violation' => "Invade other people's privacy" , //侵犯他人隐私
    'other' =>'Other unhealthy contents', //其他不健康内容
    'suc' => 'Reporting success', //举报成功
    'faile' => 'Report failed',//举报失败  

    'to_sina' => 'Share to Weibo', //转发至新浪微博
    'baidu' => 'Share to Baidu', //转发至百度贴吧
    'to_renren' => 'Share to Renren', //转发至人人网
    'remove_list' => 'Remove from playlist', //从播放列表删除 
    'empty_album' => 'No video in this album', //专辑内没有视频	
    'his_load' => 'Historical video loads', //历史视频加载
    'play_load' => 'Playlist load', //播放列表加载
    'play_mes' => 'Playlist load failed, please check your network connection', //播放列表加载失败,请检查网络连接
    'suc_album' => 'The video successfully joined the album!', //该视频成功加入专辑！  
    'rem_mes' => 'Video or album you want to reply has been removed!', //您要回复的视频或者专辑已被删除！
    'no_perm' => 'You do not have permission to comment', //您没有发表评论的权限 
	'succ' => 'Success message',//留言成功
    'album_fav' => 'The album has collection!',
    'video_fav' => 'The video has collection!',    
    'mes_tip' => 'Message tip',   
    'update_fail' => 'Update failed',
	
	/**
	 * 影视，动漫，纪实二级页面
 	 * 
 	 */
	'ranks' => 'Top news list',//热门资讯排行榜
	'films_news' => 'Films and TV News',//影视资讯抢先看
	'films_shows' => 'Films and TV Shows',//热剧大片抢先看
	'conferences' => 'Press Conferences',//活动现场抢鲜看
	'special_topics' => 'Special Topics',//影视热门策划推荐
	
	'animations_ranks' => 'Popular anime-demand list',//人气动漫点播榜
	'comic' => 'Comic and Animation News',//动画前沿速递
	'animations' => 'Comics and Animations',//人气动漫大本营
	'cosplay' => 'Cosplay section',//动漫周边-cosplay专区
	'topics' => 'Special Topics',//动漫热门策划专题推荐
	
	'video_ranks' => 'Hot video list',//热门视频排行榜
	'historical' => 'Historical Secrets',//历史秘闻
	'realities' => "Celebrities’realities",//名人真相
	'memory' => 'Extraordinary Memory',//非常记忆
	'real_moments' => 'Real Moments',//真实瞬间
	'hotdoc' => 'Hotdoc special',//纪录片热门策划
	
	'hots_ranks' => '最热视频精选',//最热视频精选
 	/**
 	 * 下载页面
 	 * down/
 	 */
	'pc' => 'PC Client',
	'Paike' => 'Paike Client',
 	'down_01' => 'Version: 2.0',  
 	'down_02' => 'Size: 9.45Mb', 
 	'down_03' => 'System: WinXP/Vista/Win7', 
 	'down_04' => 'Beyond the uploading limit, with a maximum video of 10G and batch upload supported.', 
 	'down_05' => 'Not satisfied with favorites and sharing, you may have download as you like!',  
 	'down_06' => 'Support view of videos via multiple terminals (including Iphone and PSP etc.)', 
 	'pkdown_01' => 'Paike Client', 
 	'pkdown_02' => 'Introduction:CNTV Paikew Client is a video sharing entertainment product customized by CNTV for phones with Android or iOS, featuring pretty and simple interface and easy operation, allowing the user to record something new around by taking videos at any time and share with friends and relatives at the first time.  It also brings the users wonderful experience in  video-taking, uploading and sharing on the CNTV platform.',
 	'pkdown_03' => '★We support iOS5.0 system and above;★',  
 	'pkdown_04' => '★We support as low as iPhone 3GS and above (including iPhone5);★ ', 
 	'pkdown_05' => 'Your suggestions are always welcome and will be a drive of our further progress!', 
 	'pkdown_06' => 'For Android: the latest version, V2.1.9, was released on September 30, 2014',
 	'pkdown_07' => 'For iPhone: the latest version, V2.1.8, was released on September 30, 2014',
	'page_title' => 'PC Client',//爱西柚视频客户端官方下载
	'page_keywords' => '爱西柚视频客户端,爱西柚视频软件,视频上传,视频点播,高清播放,超清播放,UGCclient,iXiYou,视频下载,批量上传视频',
	'page_description' => '爱西柚视频客户端为用户提供视视频上传、视频下载、视频点播功能，视频上传突破网页限制，最大可上传10G视频，同时支持批量上传及断点续传',
	'copyright' =>'央视国际网络有限公司 版权所有',
	'seo_title' => 'iXiyou-CNTV',//爱西柚-CNTV中国网络电视台
	'lit_title' => 'iXiyou',//爱西柚-CNTV中国网络电视台
	'common_title' => 'iXiyou-CNTV Podcast, providing video uploading and sharing services',//iXiyou:CNTV播客频道，提供视频上传和分享服务
//================================= END ========================================       
    'basic_set' => '基本信息设置',
    'tv_name' => '电视台的名称',   
    'tv_tags' => '电视台的标签',    
    'tv_info' => '电视台的简介',  
    'link_mes' => '复制视频链接粘贴到输入框中，用回车分割。',         
    'back_tv' => '返回我的电视台', 
    'copy_mes' => '复制链接如:http://xiyou.cntv.cn/xxxxxxx，多个链接用回车间隔',      
    'abl_mes' => 'Album videos cannot be more than 200',    
    'alb_view' => '查看本专辑',
	//  plug-in baidu   share
	'forwards_to_sinablog' =>'Relay to Sina microblog',//转发至新浪微博
	'sina_blog'	=>'weibo',//新浪微博
	'forwards_to_baidu' =>'Forward to Baidu tieba',//转发至百度贴吧
	'weixin' => 'Wechat',
	'forwards_to_weixin' => 'Broadcast to Wechat',
	'baidu_bar' =>'Baidu',//百度贴吧
	'forwards_to_baidubar' => 'Forward to I Baidu tieba',//转发至百度i贴吧
	'forwards_to_renren' =>'Forwarded to Renren Net',//转发至人人网
	'renren_net' =>'Renren',//人人网
	'kaixin_net' =>'Kaixin001',//开心网
	'forwards_to_kaixin' =>'Forwarded to Kaixin Net',//转发至开心网
	'QQqzone' =>'QQ zone',//QQ空间
	'forwards_to_qzone' =>'Forward to the QQ zone',//转发至QQ空间
	'fetion' =>'Fetion',//飞信
	'forwards_to_fetion' =>'Forward to fetion',//转发至飞信
	'sohu_blog' =>'sohu',//搜狐
	'forwards_to_sohu' =>'Forward to Sohu weibo',//转发至搜狐微博
	'tencent_blog' =>'Tencent',//腾讯微博
	'forwards_to_tencent' =>"Broadcast to Tencent's microblog",//转播到腾讯微博
);
