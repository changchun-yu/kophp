<?php
/* $Id: common.php 97 2017-04-05 02:00:08Z yuchangchun $ */
defined('SYS_PATH') OR die('No direct access allowed.');

return array (
     /**
     * 首页
     * index.html
     */
    'index'		=> "Page d'accueil",//首页
    'original'  => "Original", //原创
    'news'		=> 'Infos',  //新闻
    'amusement' => 'Loisir', //娱乐
    'movie'		=> 'Film & télé',//影视
    'music'		=> 'Musique', //音乐
    'sports'	=> 'Sport', //体育
    'wealth'	=> 'Finance',  //财富
    'education' => 'Science', //科教
    'car'		=> 'Véhicule', //汽车
    'life'		=> 'Vie', //生活
    'fashion'	=> 'Mode',//时尚
    'mbaby'		=> 'Mère-Enfant', //母婴
    'pet'		=> 'Animaux', //宠物
    'animation' => 'Animation', //动漫
    'game'		=> 'Jeu', //游戏
    'school'	=> 'Ecole',   //校园
	'qingshao' => '青少',//青少
    'others'		=> 'Divers',   //其他
	'documentary'	=> 'Documentaire',//纪实
	'funny'	=> 'Humour',//幽默
	'outstanding'	=> 'Talent',//达人
	'video_maker'	=> 'Photographe',//拍客	
    'more'		=> 'Plus', //更多
        'ishow' => 'ISHOW',
        
    'go_tv'			=> 'Je veux monter sur la TV', //我要上电视
    'album'			=> 'Album',//专辑
    'ptv'			=> 'Station TV',//电视台
    'the_client'	=> 'Terminal clientèle',//客户端
    'login'			=> 'Enregistrement',//登录
    'upvideo'		=> 'Soumettez un ', //上传视频
        
    'mytv'			=> 'Mon poste de TV', //我的电视台
    'myvideo'		=> 'Mes vidéos', //我的视频 
    'vlist'			=> 'Liste', //播放列表
    'mod_nickname'	=> 'Changez de nom',//修改昵称
    'my_develop'	=>'Mes inventions',//我的开发
    'quit'			=> 'Retrait',//退出
    'vmanage'		=> 'Gérez les vidéos',//视频管理
       
    'hot_topic'		=> 'Evènements du jour', //今日热点
    'activities'	=> 'Activités',//西柚看点
    'hot_spots'		=> 'Infos récentes',  //热点Top
    'micro_film'	=> "Original", //原创
    'mo_making'		=> 'Photographe',//拍客	
    'wonders'		=> 'Divertissement',//达人
	'humors'		=> 'Humour',//幽默
	'pets' 			=> 'Animaux', //宠物
    'won_album'		=> "Morceau d'anthologie",//精彩专辑 
    'link'			=> 'Liens amicaux',//友情链接
    'connect_us'	=> 'Contactez-nous',//联系我们
    'special'		=> 'Sujet spectaculaire',//精彩专题
    'co_website'	=> 'Site officiel collaboratif',//合作官网
    'got_tv'		=> 'Station du talent',//达人电视台
    'cel_tv'		=> 'Station du célébrité',//名人电视台   
    'age_tv'		=> "Station de l'organisme",//机构电视台
    'uni_tv'		=> "Station de télévision d'université",//高校电视台
    'co_agency'		=> 'Organismes coopératifs',//合作机构
    'la_join'		=> 'Objets récents',//最新加入
    'search'		=> 'Recherche',//搜索
    'making'		=> 'Photographe de Xiyou',//爱西柚拍客
    'desk_client'	=> 'Terminal clientèle de Xiyou sur table',//爱西柚桌面客户端
    'authent'		=> 'Authentification de nom réel',//实名认证
    'dev_platform'	=> 'Plateforme de développement',//开发平台
    'helps'			=> 'Centre des solutions', //帮助中心      
    'on_feedback'	=> 'Commantaire en ligne',//在线反馈
    'lan_switch'	=> 'Language',//切换语言
    'medal'			=> 'Décoration de Xiyou',//爱西柚勋章
        
    /**
     * 聚合页
     * rank/     
     */      
    'video_class'	=> 'Classement des vidéos',//视频分类
    'album_class'	=> 'Classement des albums',//专辑分类
    'ptv_class'		=> 'Classement des stations', //电视台分类
    'play_video'	=> 'Demande de vidéo', //视频点播   
    'all'			=> 'Tout',//全部
    'type'			=> 'Catégorie',//类型
    'video'			=> 'Vidéo',//视频
    'sorry_mes'		=> "Désolé, il n'y a pas de vidéo en conforme avec les termes, veuillez modifier les termes predre les autres termes de recherche ou ",//抱歉，暂时没有找到符合条件的视频。
	'sorry_mes_album' => "Désolé, il n'y a pas de album en conforme avec les termes, veuillez modifier les termes predre les autres termes de recherche ou",//抱歉，暂时没有找到符合条件的专辑。
	'sorry_mes_channel' => "Désolé, il n'y a pas de station en conforme avec les termes, veuillez modifier les termes predre les autres termes de recherche ou",//抱歉，暂时没有找到符合条件的电视台。
    'rec_mes'		=> '',//建议您：请尝试放宽或使用其它的检索条件。
    'play_most'		=> 'Le plus diffusé',//播放最多
    'collect_most'	=> 'Le plus collecté',//收藏最多
    'comment_most'	=> 'Le plus commenté',//评论最多
    'top_most'		=> 'Le plus répondu',//顶的最多
    'video_most'	=> 'Le plus de vidéo',//视频最多
    'visit_most'	=> 'Les plus visités',//访问最多
    'up_recent'		=> 'Renouvellement récent', //最近更新
    'latest_update' => 'Renouvellement récent',//最新更新
    'today'			=> "Aujourd'hui",//今日
    'week'			=> 'Cette semaine',//本周
    'month'			=> 'Ce mois',//本月
          
    //显示方式：include/displaytab.html
    'update'		=> 'Renouvellement', //更新   
    'show_mode'		=> "Mode d'affichage",  //显示方式   
    'icons'			=> 'Affichez par image',//以图标形式显示
    'lists'			=> 'Affichez par liste',//以列表形式显示
   
    // 分页 pagination.html
    'first'			=> 'Première',//第一页      
    'previous'		=> 'Précédante',//上一页 
    'next'			=> 'Suivante',//下一页     
    'last'			=> 'Dernière',//最后一页                  
    
    /**
     * 【登录】弹出框
     *  user/loginbox.html
     */
    'now'			=> 'Inscrivez-vous tout de suite ',//没有帐号，马上
    'register'		=> 'Inscription',//注册    
    'forgetpwd'		=> 'Code secret perdu',//忘记密码
    'remain'		=> "Se souvenir de moi",//记住我    
    'pwd'			=> 'Code secret',//密码
    'email'			=> 'Boîte aux lettres', //邮箱 
    'cancel'		=> 'Annulation', //取消 
    'username'		=> 'Compte',//帐号
    'entermail'		=> 'Veuillez entrer la boîte aux lettres',//请输入邮箱
    'enterpwd'		=> 'Veuillez entrer le code secret', //请输入密码  
         
     /**
     * 视频上传页：http://xiyou.cntv.cn/upload.html
     * videoupload/index.html
     * 
     */ 
    'client_down'	=> 'Téléchargez le terminal clientèle de Xiyou',//爱西柚客户端下载      
    'upload_help'	=> 'Aide à la soumise',//上传帮助
    'video_format'	=> 'Format du vidéo',//视频格式        
    'video_size'	=> 'Taille du vidéo',//视频大小
    'more_help'		=> "Trouvez plus d'information",//查看更多帮助信息
    'imp_items'		=> 'Affiares importantes',//重要事项
    'ple_mes'		=> "Veuillez ne pas soumettre les émissions Tv, les vidéos musicaux, ou les vidéos commerciaux avant d'avoir l'autorisation, à l'exception que le vidéo est fabriqué complètement par vous. ",//请勿在未经授权的情况下上传任何电视节目、音乐视频、音乐会视频或商用视频，除非视频完全由您个人制作。  
	'up_mes' => "la contenance maxi d'un vidéo soumis par le site-web est 1G, le contenance maxi d'un vidéo soumis par le terminal clientèle est 10G",//网页上传单个视频最大500M；客户端上传单个视频最大1G

    /**
     * 爱西柚显示异常报错页面：
     * http://xiyou.cntv.cn/error.html     
     */
	'can' => 'Vous pouvez : ',//您可以
    'mes_error'		=> 'Il y a une erreur sur la page demandée', //您请求的页面发生错误！     
    'click'			=> 'Entrez par ici',//请点此  
    'enter'			=> "Entrez dans la page d'accueil",//进入主页           
    'mes_error2' => "Nous sommes désolés, la page que vous souhaitez visiter peut avoir disparu ou n'ont pas été là !", //非常抱歉，您想访问的页面可能已经消失或尚未出现！     
    'web' => "Entrer l'URL, ou à ", //重新输入网址，或者到   
    'looks' => ' Voir :', //看看：     
    'go' => 'Visiter le',//前往
    'classify' => "Classification de l'amour vidéo de pamplemousse :",
    'recommends' => 'Nous vous recommandons les vidéos suivantes.',  
        
    /**
     * 搜索【结果页】 
     * search/index.html
     * 
     */ 
    'keyword'		=> 'Mots clés',//热门关键字
    'sear' => '',
    'result' => '',    
    'total'			=> 'En total ',//共**个
    'num'			=> '',//个   
       
    //【结果页】search/video.html,channel.html,album.html
    'rel_degree'	=> 'Corrélativité',//相关程度        
    'num_video'		=> 'Nombre de vidéo',//视频数量 
    'video_time'	=> 'Longueur du vidéo',//视频时长       
    'vis_count'		=> 'Nombre de visite',//访问次数      
    'up_times'		=> 'Date de soumise',//上传时间 
    'play_counts'	=> 'Nbr diffusion',//播放次数 
    'fav_counts'	=> 'Nbr collection',//收藏次数 
    'comment_counts'=> 'Nbr commantaire',//评论次数    
    
    //【结果异常页】 search/noresult.html
    'sorry'			=> "Désolée, pas de vidéo relatif avec", //抱歉，没有找到与**相关的视频     
    'related'		=> ' ', //相关的  涉及变量
    'solution'		=> 'Solution: ',//解决方案：    
    'check_mes'		=> 'Vérifiez si vos mots clés possèdent des erreurs',//• 检查您的关键字是否有错别字；
    'redu_mes'		=> "Reduisez des mots clés, pour élargir les conditions de recherche",//• 减少关键字，以放宽搜索条件；
    'try_mes'		=> 'Utilisez des mots clés simples, ou séparez les mots clés par la touche "Espace"',//• 尽量使用简洁的关键词，或用空格将多个关键词分开。
             
    'hist_video'	=> 'Vous avez regardé', //您最近看过的 historyvideo.html         
    'fav_video'		=> 'Vous allez aimer',  //您可能喜欢的 favoritevideo.html     

    /**
     * 原创频道 http://xiyou.cntv.cn/dv
     * 【功能区】original.html
     * 
     */ 
    'independent_film'	=> 'Sketches indépendants', //独立短片     
    'series_short'		=> 'Sketches en série',//系列短剧
    'original_cartoon'	=> 'Animation originale',//原创动漫        
    'music_story'		=> 'Histoire musicale ',//音乐故事
    'block_recom'		=> 'Recommandation majeur',//重磅推荐
    'join_original'		=> 'Entrez dans le programme du pionnier de création.',//加入原创先锋计划
    'original_pioneer'	=> 'Liste "Créateur"',//原创先锋榜    
    'new_talent'		=> 'Liste des talents nouveux',//新锐达人榜
    'join_talent'       => 'Rejoindre les rangs des nouveaux talents',//加入新锐达人行列
    'explore_screens'	=> 'Explorez la salle des vidéos',//探索影厅
    'more_film'			=> 'Plus de sketches indépendants',//更多独立短片
    'more_short'		=> 'Plus de sketches en série',//更多系列短剧
    'more_cartoon'		=> "Plus d'animation originales",//更多原创动漫
    'more_story'		=> "Plus d'histoires musicales",//更多音乐故事  
    
    /**
     * 【视频专辑列表页】
     */ 
    //左侧【专辑信息】 album/info.html    
    'video_play'	=> 'Diffusez le vidéo', //视频播放
    'create_asc'	=> 'En ordre chronologique de la date de création',//按创建时间顺序
    'create_desc'	=> 'En ordre déscendant de la date de création',//按创建时间倒序
                
	//右侧专辑信息 album/albuminfo.html   
    'album_info'	=> "Informations de l'album",//专辑信息
    'creator'		=> 'Créateur', //创建者    
    'create_time'	=> 'Date de créaxtion',//创建时间
    'updated_time'	=> 'Date de renouvellement', //更新时间   
    'details'		=> 'Détails',//展开详细
    'on_details'	=> 'Détails',//展开详情
    'abstract'		=> "Présentation de l'album",//专辑简介
    'collect'		=> 'Collection',//收藏
    'report'		=> 'Rapport', //举报   
    'tag'			=> 'Titre',//标签        
    'class'			=> 'Classement',//分类
    'pack_up'		=> 'Relavage', //收起    
            
    //右侧【视频信息】album/slider.html   
    'video_list'		=> 'Liste',//视频列表
    'automatic_series'	=> 'Auto-diffusion',//自动连播   
    'showall'			=> 'Affichez tout',//显示全部      
    'album_creator' => 'Album Créateur',//专辑创建者
    'collected' => 'A Collectionnez',	//已收藏
               
    //点击举报弹出对话框 report/index.html    
    'reports'		=> 'Raison de signale',//举报原因    
    'note'			=> 'Remarques',//备注  
    'upload' => 'Soumission',//上传于
	'attention' => 'Attention', //关注
	'del_attention' => 'Annuler attention', //取消关注
    //右侧栏目信息 album/infoslider.html
    'other_album'	=> 'Albums divers du créateur',//创建者的其他专辑
    'related_album' => 'Albums relatifs',//相关专辑
    'hot_album'		=> 'Albums distractifs chauds ',  //热门娱乐专辑   ---涉及变量需要判断？
    'original_album'=> 'Albums originaux chauds', //热门原创专辑       ---涉及变量需要判断？

    //右侧【视频信息】album/slider.html,video/slider.html         
    'video_info'	=> 'Infos du vidéo',//视频信息       
    'video_desc'	=> 'Introduction du vidéo',//视频简介     
        
	//视频【播放列表页】 video/showlist.html       
    'have'				=> 'Actuellement, il y a ',//当前有 
    'videos'			=> 'Vidéo(s)',//个视频 
    'empty'				=> 'Videz',//清空    
    'check'				=> 'sélectionner',//全选
    'play'				=> 'Diffusez',//播放
    'savefavor'			=> 'Ajouter aux favoris',//保存为收藏     
    'savealbum'			=> "Ajouter à l'album",//保存为专辑
    'look'				=> 'Les autres regardent aussi',//大家也在看
	'recommendations' 	=> 'Vidéos recommandées', //精彩推荐
	'highlignts'        => 'Moments excellentes', //视频看点
    'video_collected'   => 'Vidéo dispose de collections', //视频已经收藏     
    'xyjx'				=> 'Les méiileures sélections de Xiyou', //西柚精选 recommendxyjx.html     
    'recommend_video'	=> 'Vidéos recommendés', //推荐视频 recommendvideo.html   
    'highlights' 		=> 'Aspect de la vidéo',//视频看点
    
    /**
     * 【通用左侧导航】
     *  include/left.html     
     */ 
    'per_data'			=> 'Informations personnelles',//个人资料             
    'man_album'			=> 'Changez de nom',//专辑管理    
    'cre_album'			=> 'Créez un album',//创建专辑   
    'mes_com'			=> 'Commentaire et message',//留言和评论
    'pre_set'			=> 'Réglage des limites',//权限设置
    'tv_set'			=> 'Réglage de la station',//电视台设置        
    'baseinfo'			=> 'Informations basiques',//基本信息      
    'player'			=> 'Diffuseur',//播放器
    'connect_set'		=> "Réglage des liens à l'exérieur de la station",//站外连接设置            
    'notice'			=> 'Annonce',// 公告   
    'myalbum'			=> 'Mon album',//我的专辑
    'my_fav'			=> 'Mes collections',//我的收藏


    /**
     * 【视频管理】
     * http://xiyou.cntv.cn/manage/videomanage
     * manage/videomanage.html,manage/videoedit.html
     */         
    'play_num'			=> 'Nbr Diffusion', //播放数
    'com_num'			=> 'Nbr Commentaire', //评论数
    'pub_time'			=> 'Date de publication', //发布时间          
    'edit'				=> 'Rédigez',//编辑
    'delete'			=> 'Supprimez',//删除
    'del_video'			=> 'Êtes-vous sur(e) de supprimé ce vidéo? ',//确定要删除该视频吗    
    'no_check'			=> "Vous n'avez pas encore sélectionné(e) de vidéo.", //您还没有选中视频   
    'edit_video'		=> "Rédaction d'un vidéo",//编辑视频
    'copyright'			=> "Droit d'auteur",//版权    
    'privacy'			=> "Confidentialité", //隐私       
        
    /**
     * 我的专辑：
     * http://xiyou.cntv.cn/manage/albummanage
     * http://xiyou.cntv.cn/manage/creatalbum     
     */ 
    'pub'				=> 'Publié',//已发布      
    'review'			=> 'A vérifier',//待审核
    'not_audit'			=> 'Refusé',//审核未通过            
    'category'			=> 'Catégorie',//所属分类
    'operat'			=> 'Opération',//操作 
    'modify_info'		=> 'Modifiez les informations',//修改信息       
    'manage_video'		=> 'Gérez les vidéos',//管理视频          
    'creat_album'		=> 'Créez un nouveau album', //创建新专辑     
    'title'				=> 'Titre',//标题
    'desc'				=> 'Introduction',//简介     
    'use_mes'			=> 'Veuillez séparer par un "espace" ou une virgule.',//请用空格或逗号分隔 
    'used_tag'			=> 'Mes étiquettes utilisées',    //我用过的标签

    /**
     * 我的收藏：
     * http://xiyou.cntv.cn/manage/favvideo
     * http://xiyou.cntv.cn/manage/favalbum
     */ 
    'col_video'			=> 'Mes vidéos collectionnés', //我收藏的视频     
    'col_time'			=> 'Dates de collections',//收藏时间
    'col_cancel'		=> 'Allunez la collection', //取消收藏成功
    'homepage'			=> "Page d'accueil", // 主页   
    'video_count'		=> 'Nombre de vidéo',//视频数
    'visit_count'		=> 'Nombre de visite',//访问数
    
    /**
     * 【我的电视台左侧导航】
     *  channel/user.html     
     */       
    'album_count'		=> "Nombre d'album",//专辑数
    'myblog'			=> 'Mon bloc',//我的博客        
    'myweibo'			=> 'Mon microbloc',//我的微博
    'traffic'			=> 'Quantité de visite',//访问量
    'tv_desc'			=> 'Présentation de la station',//电视台简介   
    'tv_notice'			=> 'Annonce de la station',//电视台公告
    'visitors'			=> 'Visiteurs récents',//最近访客
    'latest_com'		=> 'Derniers commentaires',//最新评论
	'no_player' => "Actuellement,il n'y a pas encore de vidéo recommandé,",//目前还没有推荐视频。 
    'enter_player'		=> "veuilez entrer dans le réglage de diffuseur",//进入播放器设置
    'add_upload'		=> 'Veuillez ajouter vos vidéos soumis dans cet endroit',//将您上传的视频添加到这里
    'the_latest'		=> 'Nouveautés',//最新
    'hottest'			=> 'Les plus recommandés',//最热
    'more_video'		=> 'Plus de vidéo',//更多视频
    'no_video'			=> "Pas de vidéo pour l'instant",//暂无视频
    'more_albums'		=> "Plus d'album",//更多专辑
    'no_albums'			=> "Pas d'album pour l'instant",//暂无专辑
    'more_collection'	=> 'Plus de collection',//更多收藏
    'no_collection'		=> "Pas de collection de vidéo pour l'instant",//暂无视频收藏
    'message_board'		=> 'Livre de visiteur',//留言板
    'leave_message'		=> 'Je veux laisser un message',//我要留言        
    
    /**
     * 【播放页】
     */
    'current_location'	=> 'Page présente',//当前位置
    'pop'				=> 'Vibration',//弹窗
    'turn_off'			=> 'Etteignez la lumière',//关灯    
    'up'				=> 'Pour',//顶
    'down'				=> 'Contre',//踩
    'download_video'	=> 'Téléchargez ce vidéo',//下载该视频    
    'related_video'		=> 'Vidéo relatif', //相关视频 
      
    //【评论区】video/comment.html  
    'user_comment'		=> 'Je vais faire des commentaires', //我要评论        
    'ident_code'		=> 'Confirmation', //验证码 
    'click_here'		=> 'Changez',  //点这里换一张     
    'anonymous'			=> "A l'anonyme",  //匿名发表     
    'recommend'			=> 'Recommandation de la rédaction',   //编辑推荐 video/recommendflow.html
    'hot_videos' 		=> 'Vidéos populaires',  //精彩视频推荐  video/recommendvideo.html    
    'add_comment'		=> 'Publiez',  //发表评论  
    'quick_message'		=> 'Message rapide', //快捷留言 
    'qm_01'				=> 'Ce vidéo est très bon, je le loue. ', // 片子很不错，很感动，赞一个！
    'qm_02'				=> 'Très choquant, je suis pour ', //太雷人了，我顶！ 
    'qm_03'				=> 'Je passe pour rien. …', // 打酱油，路过…
    'netizen_comments'	=> 'Commentaire des internautes', // 网友评论 
    'input_message'		=> 'Entrez vos commentaires',  // 输入您想说的话
    'code_error' => 'Vérifier que le code erreur',//验证码错误
	'no_exist' 	=>"L'utilisateur n'existe pas",//用户不存在

    /**
     * 【评论留言】
     * http://xiyou.cntv.cn/manage/commentin
     * http://xiyou.cntv.cn/manage/commentsent
     * http://xiyou.cntv.cn/manage/commentset
     */ 
    'publish'			=> 'Publié', //我发表的                      
    'received'			=> 'Reçu', //我收到的         
    'mecom_perm'		=> 'Limites pour les commentaires',//留言评论权限      
    'com_perm'			=> 'Réglage des limites de commentaire',//评论权限设置
    'allow_com'			=> 'Tout le monde peut me laisser des commentaires', //允许所有人给我的评论           
    'recom'				=> 'Recommandé',//推荐
    'mes_perm'			=> 'Réglage des limites de message',//留言权限设置 
    'no_com'			=> "Personne n'est autosirée de me laisser des commentaires",//不允许任何人给我评论
    'allow_mes'			=> 'Tout le monde peut me laisser des messages. ', //允许所有人给我留言  
    'no_mes'			=> "Personne n'est autosirée de me laisser des mesages",//不允许任何人给我留言
    'set_saved'			=> 'Le réglage a été enregistré',//设置已保存      
    
    'need'				=> 'Je veux',//我要
    'share_friends'		=> 'partager aux amis',//分享给好友
    'copy_code'			=> 'Transférer copie',//复制转发代码
    'copy_title'		=> 'Copier Titre et lien',//复制视频标题和链接
    'copy_url'			=> "Copie Adresse vidéo",//复制视频播放地址
    'quote'				=> 'Remettez dans le forum',//转贴到社区
    'no_copy' => 'Désolé(e), le browser que vous utilisez ne peut pas le copier automatiquement dans le presse-papier, veuillez le copier manuellement', //抱歉，你使用的浏览器里不能自动复制到剪贴板，请手动复制
    'user_mes' => 'La reproduction du code est réussite!', 
    'copy_suc' => 'code a été copié avec succès', //代码已经复制成功
    'video_url' => 'La reproduction du code est réussite', 

    /**
     * 帮助页面
     * http://xiyou.cntv.cn/help.html
     * 
     */
	'help_title'=> 'Aider',//帮助
    'client' => 'Terminal clientèle Xiyou', //爱西柚客户端     
    //help/index.html     
    'problems' => 'Les problèmes généraux. ',  //常见问题    
    'a_01' => 'La vidéo ne peut pas être diffusée. ',//视频无法播放
    'a_02' => 'La situation rencontrée est: ',//遇到的状况是            
    'a_03' => 'Écran noir',//黑屏
    'a_04' => "L'avertissement de l'installation de l'adobe flashplayer", //提示安装adobe flashplayer
    'a_05' => "La vidéo est en cours de l'amortissement.",  //视频一直在缓冲     
    'a_06' => "L'écran noir peut être résolu par ce moyen. ",//黑屏，可以尝试这样解决         
    'a_07' => "Vitez les cookies: Menu de l'IE - Outil - Option d'internet - Suppression des cookies -  Validé.",//清空cookies：浏览器上的菜单->i工具->internet选项->删除cookies->确定      
    'a_08' => "Vitez les mémoires cachés de l'IE: Menu de l'IE: Outil - Option d'internet - Suppression des dossiers - Suppression du contenu hors circuit - Validé.  ",//清空ie缓存文件：工具->internet选项->删除文件->删除所有脱机内容->确定
    'a_09' => 'Après les deux processus, appuyez sur F5 pour actualiser la page. ', // 完成上述两个步骤后，按F5刷新页面。          
    'a_10' => "Installez l'adobe flashplayer selon les avertissements, pour la résolution. ",//提示安装adobe flashplayer，可以尝试这样解决 
    'a_11' => "Téléchargez et installez directement selon les avertissements, lors de l'installation, il faut fermer tous les pages web. En cas des informations importantes, il faut d'abord les conserver.  ",//根据提示直接下载安装即可，安装前需要关闭所有网页，如果有重要内容请先保存。          
    'a_12' => "En cas de l'échec de téléchargement automatique, vous pouvez faire le téléchargement et l'installation manuellement.",//如果自动下载有问题的话可以尝试手动下载安装；      
    'a_13' => "Les exploitants IE comprennent IE, TT de Tencent, Maxthon, Grennbrowser, The World, et l'exploitant sécuritaire de 360, etc.",//ie内核浏览器包括IE、腾讯TT、Maxthon（傲游）、GreenBrowser（绿色浏览器）、TheWorld（世界之窗）、360安全浏览器等。
    'a_15' => 'Les exploitants non IE,  comprennent FireFox, Google Chrome, Opera, Safari, etc; ',//非ie内核浏览器包括FireFox、Google Chrome、Opera、Safari等。
    'a_16' => 'Cliquez ici pour télécharger et installer manuellement les logiciels de flashplayer. ',//点击此处，手动下载安装flashplayer插件 
    'a_17' => "La vidéo est en cours de l'amortissement.",//视频一直在缓冲       
    'a_18' => "1. Les blocages de diffusion de la vidéo peuvent être causés par les embouteillages du réseau, la situation la plus généralement est: l'utilisation en même temps de plusieurs outils de téléchargement lors de la diffusion, ou l'utilisation des autres logiciels qui occupent le réseau. on vous conseille de fermer ces outils, et de suspendre la diffusion de la vidéo, jusqu'à l'amortissement de la vidéo. ",// 1)  视频一直在缓冲可能是网络连接不顺畅，最常见的情况就是您在看视频同时正在用迅雷，bt等工具进行下载，或者电脑内安装了其他视频网站的加速器工具。建议您先关闭这些工具，然后重新打开视频页面。     
    'a_19' => "2. Vitez les mémoires cachés: Menu de l'IE: Outil - Option d'internet - Suppression des dossiers - Suppression du contenu hors circuit - Validé.   ",//2)  尝试清空缓存：IE浏览器菜单：工具-internet选项-删除文件-删除所有脱机内容-确定。如下图所示。
    'a_20' => 'Regardez la vidéo de trop',//看视频太卡            
    'a_21' => "1. Les blocages de diffusion de la vidéo peuvent être causés par les embouteillages du réseau, la situation la plus généralement est: l'utilisation en même temps de plusieurs outils de téléchargement lors de la diffusion, ou l'utilisation des autres logiciels qui occupent le réseau. on vous conseille de fermer ces outils, et de suspendre la diffusion de la vidéo, jusqu'à l'amortissement de la vidéo.   ",//1)	视频播放太卡可能是网络拥挤，最常见的情况就是您在看视频同时正在用迅雷，bt等工具进行下载，或者电脑上其他软件正在占用网络。建议您先关闭这些工具，暂定正在播放的视频，等待视频频缓冲完成后，就能流畅播放了。
    'a_22' => "2. Vitez les mémoires cachés: Menu de l'IE: Outil - Option d'internet - Suppression des dossiers - Suppression du contenu hors circuit - Validé. ", //2)	尝试清空缓存：IE浏览器菜单：工具-internet选项-删除文件-删除所有脱机内容-确定。    
    'a_23' => "3. Comme la netteté de la vidéo de Xiyou est très élevée, la vitesse de transmission du réseau à 512K sera insuffisante, on vous conseille de l'augmenter à 1 m. ", //3)	另外由于爱西柚视频的清晰度较高，如果您的网络带宽是512K的话会比较卡，推荐升级到1M及以上。
    'a_24' => 'Pourquoi la vidéo soumise est invisible?', //上传的视频怎么看不到   
    'a_25' => "Une vidéo depuis la soumission jusqu'à la réussite de diffusion doit passer les processus suivants: ",//一个视频从开始上传到成功发布，需要经历以下步骤：
    'a_26' => 'Transformation de format: après la soumission, le serveur  doit transformer la vidéo en format identifiable du diffuseur, le temps de transformation est décidé par le format et la taille de la vidéo.',//转码：上传完成后，服务器需要将视频转化成播放器能够识别的格式，转码时间由视频格式和大小决定。    
    'a_27' => "Vérification: Après la réussite de transformation de format, la vidéo est entrée dans l'étape de vérification, il n'y a que les vidéos en conforme avec les spécifications de diffusion. ", //审核：转码完成后，进入审核阶段，符合视频发布规定的视频才能审核通过。     
    'a_28' => 'Diffusion: Après la réussite de la vérification, la vidéo est diffusée dans votre station TV personnelle. ', // 发布：审核通过后视频正式发布，出现在你的个人电视台中。  
    'a_29' => "Généralement la publication de la vidéo peut être réussite dans quelques heures, vous pouvez soumettre les autres vidéos dans l'attente. ",// 一般情况下视频会在数小时内发布成功，您可以在等待过程中上传其他视频。           
    'a_30' => 'Comment fais-je pour télécharger la vidéo dans un téléphone mobile/PSP/mp4?',//我想下载视频到手机/PSP/mp4看怎么办
    'a_31' => 'Veuillez télécharger',//请下载     
    'a_33' => "Pour résoudre vos problèmes, Le terminal clientèle Xiyou peut faire une gestion et une conversion sur les vidéos téléchargées sous tous les formats, telles que les formats convenables pour les téléphones mobiles (Format  de l'iPhone, Format de l'Android, Format de Nokia, et Formats généraux de téléphones mobiles), PSP, MP4, MP5, etc.  ",//，能完美解决您的问题。爱西柚客户端支持把爱西柚的视频下载到电脑，并支持转换为各种手机（如iPhone/android手机/Nokia手机），PSP，MP4，MP5等可用的格式。      
   
    //help.viewvideo.html
    'b_01' => 'Regardez les vidéos relatives.', // 看视频相关    
    'b_02' => 'Trouvez une vidéo/album',//找视频/专辑
    'b_03' => 'Chez Xiyou, vous pouvez trouver les vidéos et albums par plusieurs méthodes.', // 在爱西柚，您可以通过多种方式找到想看的视频或专辑：           
    'b_04' => '1.', //1) 爱西柚首页的精彩推荐；
    'b_05' => "Les conseils favorites de la page d'accueil de Xiyou", 
    'b_06' => '', //的精彩推荐；      
    'b_07' => '2.', //2) 爱西柚各个频道页的精彩内容；     
    'b_08' => "Les contenus favorites de chaque chaîne de Xiyou",//频道
    'b_09' => '', //页的精彩内容；          
    'b_10' => '3. Station TV des personnes connues de Xiyou.', //3)	爱西柚的名人电视台；
    'b_11' => '4. Recherches, etc. ', //4)	搜索等。
    'b_12' => 'Les conseils sur la diffusion ',//看视频小技巧
    'b_13' => "1. Appuyez sur ".'"soir"'." pour cacher le contenu à l'extérieur de la vidéo, convenable pour le soir.",//1)	点击“关灯”可以将视频外的内容都遮住，适合晚上观看视频使用。   
    'b_14' => "2. Cliquez sur l'étiquette, le diffuseur peut agrandir automatiquement pour approprier à votre écran. ", //2)	点击图中的图标，播放器能自动放大适应你的屏幕。
    'b_15' => "3. Cliquez sur l'étiquette pour régler la luminosité et le contraste selon votre habitude, et pour obtenir un meilleur effet de diffusion. ", //3)	点击图中的图标，可以按你的习惯调整视频的亮度和对比度，达到最佳的观看效果。          
    'b_16' => "Partagez la vidéo", //分享视频     
    'b_17' => "Recommandez les vidéos favorites à vos amis, Xiyou possède plusieurs modes de partage, sur Microblog de Sina, de Baidu, de Renren, de Kaixin, de QQ, de Feixin, et de Sohu, etc., vous pouvez aussi copier le code pour l'ajouter dans le bloc, le forum, et le page web.", //把好的视频推荐给你的朋友吧。爱西柚视频提供了多种分享方式，一键转帖到新浪微博、百度i贴吧、人人网、开心网、QQ空间、飞信空间、搜狐微博等。还可以复制代码加入博客，论坛和网页中。
    
    //help/uploadvideo.html
    'c_01' => 'Relatif à la soumission des vidéos.',  //传视频相关          
    'c_02' => 'Quel mode est le meilleur.', //哪种方式上传比较好
    'c_03' => "L'utilisateur non système Windows ou inférieur de 1G peut passer directement.", //小于500M的或者非Windows系统的用户可以直接通过
    'c_04' => 'La soumission par le page web.', //网页上传       
    'c_05' => "", //500-1000M的视频推荐使用     
    'c_06' => 'La soumission par le terminal clientèle de Xiyou ', //爱西柚客户端上传
	'c_061' => "est recommandé pour la vidéo de plus de 1G", //500-1000M的视频推荐使用
    'c_07' => 'Pourquoi il faut remplir les informations?', //为什么要填写各种信息           
    'c_08' => "Le titre, l'introduction, la classification, l'étiquetage de la vidéo peut aider les utilisateurs de trouver ce vidéo, veuillez remplir sérieusement. ", //视频的标题，简介，分类，标签都是为了让更多的用户找到这个视频，所以请认真填写。
    'c_09' => 'La vidéo soumise peut être regardé dans combien de temps. ', //上传视频后多久才能看到
    'c_10' => "Généralement, la diffusion des vidéos peut être terminée en quelques heures, vous pouvez soumettre les autres vidéos dans l'attente. ", //一般情况下视频会在数小时内发布完成，您可以在等待过程中上传其他视频。
    'c_11' => 'Pourquoi la vérification des vidéos soumis est en échec. ', //上传的视频为什么未通过审核  
    'c_12' => "Xiyou respecte les règlementations et les exigences du Parti et du pays dans l'industrie culturelle, maintient l'environnement harmonieux médiatique de la société, charge les responsabilités de l'élimination de la culture vulgaire. Les vidéos concernées aux contenus suivants seront interdits strictement:   ",//爱西柚遵循党和国家在文化产业中的各项规定和要求，维护和谐社会的传媒环境，担负摒弃低俗的社会责任。涉及以下内容的视频将被严格禁止播放：
    'c_13' => 'Les informations dérogées les lois et les réglementations de la société, la sécurité de la société et les intérêts du pays.', //反党反社会违宪违法,以及危害国家安全损害国家利益的信息；         
    'c_14' => "Les informations dérogées la solidarité nationale, dérangées la croyance des autres personnes, démolies la stabilité sociale et encouragées l'hérésie. ", //破坏民族团结干涉他人宗教信仰，破坏社会稳定宣扬邪教的信息；
    'c_15' => 'Les informations nuisibles (Sanglant, violent, pornographique, vulgaire)', //不良内容导向（血腥暴力色情低俗）的信息；
    'c_16' => 'Les émissions non autorisés et les informations dérogées les réglementations du Pays.', //未经授权的节目，以及其他违反国家相关规定的信息。      
    'c_17' => 'Quels sont les contenus favorables à soumettre?',   //上传哪些内容比较受欢迎   
    'c_18' => "Xiyou encourage la soumission de vidéos saines et actives, particulièrement les originaux, c'est une scène des podcasts. ", //爱西柚鼓励健康，积极向上的视频内容，尤其欢迎原创内容，这里会是播客的舞台。
    
    //help/channel
    'd_01' => 'Station TV personnelle.', //个人电视台           
    'd_02' => "La station TV personnelle est un produit personnalisé basé par les vidéos créé par Xiyou de XNTV. Les modules personnalisés et le diffuseur à grande dimension choquante sont  liés avec les autres produits de CNTV, avec la propagation puissante de Xiyou, c'est votre scène personnelle de démonstration.", //个人电视台产品是中国网络电视台爱西柚打造的一款以视频为核心的个性空间产品。丰富的个性化模板，极具冲击性的大尺寸播放器，和CNTV各种产品相互打通，加上爱西柚的强势推广，这里会是你的个人展示舞台。
    'd_03' => 'Comment fait-on la demande de station TV?', //怎么申请自己的个人电视台
    'd_04' => "Vous n'avez pas besoin de faire la demande spéciale, l'inscription en membre de CNTV est suffisante pour obtenir une station TV personnalisée. Entrez dans Xiyou, puis cliquez sur la droite pour entrer dans ".'"ma station TV", ou cliquez "ma station TV" du menu "Mien" pour entrer. ', //无需特别申请，注册成为CNTV会员即可拥有自己的个性电视台。进入爱西柚后在右边可以点击“我的电视台”直接进入，或者从“我的”菜单中点击“我的电视台”进入。
    'd_05' => 'Personnalisez ma station Tv personnelle', //个性化我的个人电视台
    'd_06' => "Module: La station TV personnel de Xiyou fournit actuellement 6 modèles de module différent (en cours de l'enrichissement), il faut simplement cliquer ".'"Module" pour sélectionner et conserver le module que vous préférez."',//模板：爱西柚个人电视台目前提供了6套不同风格的模板（还在不断丰富），点击“模板”，选择喜欢的模板保存即可。
    'd_07' => 'Diffuseur: présenter tacitement les 10 derniers vidéos soumis, et modifier dans le réglage du diffuseur le mode de proposition du vidéo en manuel.', //播放器：默认展示最新上传的10个视频，也可以在播放器设置里改为手动推荐视频。        
    'd_08' => "Infos divers: La présentation et la publication personnelle, l'ajoutement des amis comme les liens amicaux peuvent augmenter votre popularité.",  //其他信息：个性的简介，公告，添加朋友作为友情链接，可以让你的人气更高。    
    'd_09' => 'Gérez ma station TV', //管理我的个人电视台
    'd_10' => 'Appuyez sur la touche "Gérez ma station TV" pour entrer dans'." l'interface de gestion, y compris:",   //点击个人电视台主页的“管理我的电视台”进入管理界面，包括：        
    'd_11' => 'Gestion des vidéos: la rédaction des vidéos soumis, etc.', //视频管理：上传的视频进行再编辑等操作；
    'd_12' => "Gestion des albums: la création des albums, l'ajoutement des vidéos dans l'album.", //专辑管理：创建专辑，给专辑内添加视频等操作；
    'd_13' => 'Gestion des favorites: Les vidéos et les albums collectionnés peuvent être gérés dans cet endroit.', //收藏管理：收藏的视频和专辑可以在这里统一管理；
    'd_14' => 'Commentaires et Messages: vous pouvez publier des commentaires et messages, et gérer les messages et les messages.',  //    留言和评论：发表的留言和评论，收到的留言和评论可以在这里统一管理；
    'd_15' => 'Réglage de la station TV: vous pouvez modifier à cet endroit, la description de votre station TV, le réglage du diffuseur, et les liens amicaux, etc. ', //电视台设置：在这里可以更改自己电视台的相关说明，播放器的设置以及友情链接等内容。
    
    //help/client.html           
    'e_03' => "C'est un terminal clientèle du côté l'ordinateur lancé par XIyou sur le système Windows pour la soumission, le téléchargement et le partage des vidéos.", //是爱西柚推出的Windows系统下的集上传视频、下载视频、分享视频为一体的电脑客户端软件。
    'e_04' => 'Soumission',//上传
    'e_05' => 'Le terminal clientèle Xiyou peut offrir un résultat de soumission plus stable que la page web, et une soumission à grande quantité, en simplifiant le processus de soumission.',   //通过客户端上传比网页上传更快速更稳定，而且可以批量操作，极大简化上传流程。
    'e_06' => 'Téléchargement', //下载
    'e_07' => 'Les vidéos de Xiyou sont traitées en section, les modes de téléchargement général ne peuvent être effectués. le terminal clientèle Xiyou peut télécharger parfaitement les vidéos de Xiyou, et soutenir le téléchargement de plusieurs vidéos en même temps, et la diffusion après le téléchargement.', //爱西柚视频是经过分段处理的，一般方式无法下载。爱西柚客户端能完美下载爱西柚视频，并支持多视频同时下载，并可在下载后播放。     
    'e_08' => 'Conversion & Gestion', //转换和管理
    'e_09' => "Le terminal clientèle Xiyou peut faire une gestion et une conversion sur les vidéos téléchargées sous tous les formats, telles que les formats convenables pour les téléphones mobiles (Format  de l'iPhone, Format de l'Android, Format de Nokia, et Formats généraux de téléphones mobiles), PSP, MP4, MP5, etc.  " ,//爱西柚客户端能对下载的视频进行各种格式的转换和管理，支持把爱西柚视频转换为各种手机（如iPhone专用格式，android手机格式，Nokia手机格式和通用手机格式等），PSP，MP4，MP5等可用的格式。

    'look_recom' => 'Voir ce que nous vous recommandons :', //看看我们为您推荐的：
    'hot' =>'Chaud',
    'hot_recom' =>"Chaud aujourd'hui",
    'feedback' => 'Vos commentaires',
    'help' => 'Amour aide de pamplemousse',
    'join' => 'Rejoignez les albums',
    'determine' => 'Déterminer',
    'name' =>'Le nom',
    'tel' =>'Courrier/Mobile :',
    'ixiyou' => 'Aime le pamplemousse',    
	'return_01' => '1 an avant',
	'return_02' => '6 mois avant',
	'return_03' => '3 mois avant',
	'return_04' => '1 mois avant',
	'return_05' => '2 semaines avant',
	'return_06' => '1 semaine avant',
	'return_07' => '3 jours avant',
	'return_08' => '1 jour avant',
	'return_09' => 'Semi-jour avant',
	'return_10' => '6 heures avant',
	'return_11' => '3 heures avant',
	'return_12' => '1 heures avant',
	'return_13' => '2 heures avant',
	'return_14' => '45 minutes avant ',
	'return_15' => '30 minutes avant',
	'return_16' => '15 minutes avant',
	'return_17' => '10 minutes avant',
	'return_18' => '5 minutes avant',
	'return_19' => '2 minutes avant',
	'return_20' => '1 minutes avant',
	'return_21' => 'Juste',
    //新增内容
    //manage/albumcreatestep3.html
    'created'		=> 'a été créé avec succès!', //已创建成功！
    'album_manage'	=> "La gestion de l'album",//我的专辑管理    
    'none'			=> 'Absent',//暂无  
    'pending'		=> "L'information a été remise, en attente d'examen",//信息已经提交，等待审核。 
    'al_mes1'		=> '',//还没有创建新专辑，现在就
    'al_mes2'		=> 'Pas de nouvel album, créez-un maintenant',//创建  
    'al_mes3'		=> '',//吧
    'al_mes4'		=> "Vous n'avez pas encore sélectionner d'album",//您还没有选择专辑！ 
    'sel_album'		=> "Sélectionnez l'album",//选择专辑
    'sure'			=> 'Etes-vous sur(e) de supprimer cet album?',//确定要删除该专辑吗？
    'added'			=> 'Ajoutez le temps',//添加时间       
    'remove'		=> 'Etes-vous sur(e) de supprimer le vidéo sélectonné?',//确定要移除选中的视频吗？  
    'not_sel'		=> "Vous n'avez pas encore de vidéo sélectionné!",//您还没有选中视频！
    'enter_mes'		=> 'Veuillez entrer le format correct de vidéo!',//请输入正确的视频格式！ 
    'not_add'		=> "Il n'y a pas encore de vidéo dans cet album",//该专辑没有添加任何视频
    'moved'			=> "L'erreur de suppression",//移入错误。  
    'del_mes'		=> 'Etes-vous sur(e) de supprimer ce message? ',//确定要删除该留言吗？       
    'del_com'		=> 'Etes-vous sur(e) de supprimer ce commentaire?',//确定要删除该评论吗？  
    'enter_com'		=> 'Entrez le commentaire',//请输入评论内容
    'fav_albums'	=> 'Mes albums collectionés', //我收藏的专辑
    'no_fav'		=> "Pas d'album collectionné",//没有收藏任何专辑        
    'links_set'		=> 'Le réglage des liens amicaux',//友情链接设置       
    'input_nick'	=> "Veuillez entrer le nom d'utilisateur", //请输入用户昵称 
    'add_mes'		=> 'Veuillez ajouter maximum 10 utilisateurs de CNTV étant les liens amicaux ',//请添加CNTV的用户为友情链接，最多10个。    
    'avatar'		=> 'Image',//头像    
    'user'			=> "Nom d'utilisateur",//用户名  
    'sequence'		=> 'Mise en ordre',//排序  
    'del_link'		=> 'Etes-vous sur(e) de supprimer ce lien amical?',//确定要删除该友情链接吗？  
    'add_suc'		=> 'Le surcroit réussit!',//添加成功！     
    'station'		=> 'Gérez ma station TV',//管理我的电视台  
    'tel_mes'		=> 'Cette station TV est visible uniquement pour les amis ',//该电视台设置为仅好友可见。    
    'copied'		=> 'Le contenu a été copié dans le presse-papier',//内容已经复制到粘贴板。
    'man_video'		=> 'La gestion de mes vidéos', //我的视频管理 
    'reproduced'	=> 'Reproduisez', //转载   
    'open'			=> 'Publiez', // 公开  
    'set_privacy'	=> 'Reconnu comme le secret par le diffuseur',//已被上传者设为隐私
    'add_playlist'	=> 'Ajoutez dans la liste de diffusion',//添加到播放列表
    'set_player'	=> 'Réglez la station TV - Machine de diffusion', //电视台设置 - 播放器
    'tips_01'		=> 'Conseil: la quantité de vidéo recommandé est',//小贴士：当前已推荐视频数   //
    'tips_02'		=> ', les vidéos recommandables restants sont',//个，还可以推荐
    'sel_empty'		=> 'Pas de vidéo séléctionné',//选定视频为空！
    'suc_save'		=> "La réussite de l'enregistrement", //保存成功
    'set_announce'	=> 'Réglez la station TV - annonce',//电视台设置 - 公告   
    'an_set'		=> "Le reglage de l'annonce de la station TV",//电视台公告设置   
    'an_now'		=> "L'annonce actuelle",//当前公告
    'an_modify'		=> "La correction de l'annonce",  //修改公告 
    'ins_mes'		=> "La présentatoin ne dépasse pas 200 lettres, le soutien du code html n'est pas valide pour l'instant ",//简介不超过200个汉字，暂时不支持html代码。    
    'ins_mes2'		=> "La correction de l'annonce a été soumise, veuillez patienter à l'approbation.",//公告修改已经提交，请耐心等待审核！          
    'set_home'		=> "Le reglage de la page d'accueil de la diffusion",//主页播放器设置
    'defaul'		=> 'La sélection automatique (les 10 derniers vidéos soumis)',// 自动选择（最新上传的10个视频）  
    'manually'		=> "La sélection manuelle (appuyez sur le bouton de l'ajoutement pour ajouter maximum 10 vidéos)",//手动选择（点添加节目按钮添加视频，最多10个）    
    'del_record'	=> 'Etes-vous sur(e) de supprimer cet enregistrement?',// 确定删除该记录吗？  
    'set_access'	=> "Le réglage de la station TV - La permission de la visite de la station TV",//电视台设置 - 电视台访问权限
    'tv_access'		=> 'La permission de la visite de la station TV', //电视台访问权限  
    'allow_all'		=> 'Autorisez toutes les personnes de visiter mon station TV', //允许所有人访问我的电视台   
    'only_friends'	=> 'Autorisez uniquement mes amis de visiter mon station TV', //仅允许我的好友访问我的电视台 
    'submitted'		=> 'La correction de la permission de la visite a été soumise.',//访问权限修改已经提交！    
    'conect'		=> 'Vous êtes connecté à ',//您已连接到
    'personal'		=> 'Personnalisé', //个性定制  
    'bind_set'		=> 'Le réglage de fixation du microblog', //微博绑定设置    
    'sina'			=> 'Microblog de Sina',//新浪微博   
    'tecent'		=> 'Microblog de Tencent',//腾讯微博    
    'sohu'			=> 'Microblog de Sohu', //搜狐微博 
    'kaixin'		=> 'Kaixin',//开心网    
    'renren'		=> 'Renren',//人人网    
    'con_01'		=> 'Connectez votre compte Xiyou - CNTV avec ', ////将您的       将您的CNTV-爱西柚帐号与**建立连接
    'con_02'		=> '',//爱西柚帐号   
    'con_03'		=> '',//与    
    'con_04'		=> '', //建立连接。 
    'con_bind'		=> 'Etes-vous sur(e) de fixer',//确认绑定        
    'bind_mes1'		=> 'Après la fixation, faites les manipulations suivantes pour synchroniser automatiquement avec votre compte **',//绑定后，以下操作即可               //绑定后，以下操作即可自动同步到您的**账号
    'bind_mes2'		=> '',//自动同步 
    'bind_mes3'		=> '',//到您的   
    'bind_mes4'		=> '', //账号       
    'favs_videos'	=> 'Collectionnez les vidéos', // 收藏视频      
    'conne1'		=> 'La connexion avec votre compte** de ** a été établie', //已经与您在            //已经与您在**的帐号**建立连接。
    'conne2'		=> '',//的帐号   
    'operat1'		=> 'Vous pouvez régler plus profondement les opérations qui doivent synchroniser dans **',//您可以进一步设置需要同步到         //您可以进一步设置需要同步到**的操作：       
    'operat2'		=> '',//的操作：        
    'like'			=> 'Louez le vidéo',//顶视频
    'dislike'		=> 'Rabaissez le vidéo',//踩视频
    'modify_sub'	=> "La modification du réglage a été soumise, veuillez patienter à l'approbation!",//设置修改已提交，请耐心等待审核！        
    'nofav'			=> 'Pas de vidéo collectionné',// 没有收藏任何视频            
    'favs_album'	=> "Collectionnez l'album",//收藏专辑     
    'title_mes'		=> 'La description ne doit pas dépasser 50 caractères', //名称不能超过50个字符
	'cooperative'	=> 'La gestion de collaboration',//合作管理 

	'tabs_mes'		=> 'Chaque étiquette peut mettre maximum 10 caractères, maximum 10 étiquettes, séparez par la touche Espace ou Virgule', //最多10个标签，每个标签最多10个字符，逗号或者空格分割。
    'upload_mes'	=> 'Sélectionnez depuis ma liste des vidéos soumis:', //从我上传的视频中选取   
    'add_link'		=> 'Ajoutez le lien du vidéo: ',//添加视频链接        
    'select'		=> 'Sélectionnez',//选取   
	'list_empty' => 'La liste de vidéo sélectionné est vide',//视频点播列表为空 

 	'mes_01' => "Jusqu'à 10 balises.", //最多10个标签。
 	'mes_02' => "Étiquettes jusqu'à 10 caractères chacune.", //每个标签最多10个字符。
 	'mes_03' => 'Sélectionnez la balise video est manquant.', //选择视频标记丢失。   
 	'mes_04' => 'Veuillez entrer un titre.', //请输入标题。
 	'mes_05' => 'Pas plus de 50 caractères.', //不要超过50个字符。
 	'mes_06' => "Le titre contient les mots sensibles, n'utilisez pas", //标题含有敏感词汇，请勿使用
 	'mes_07' => "Merci de remplir l'étiquette.", //请填写标签。
 	'mes_08' => "Création de l'album", //专辑创建
 	'mes_09' => "Album a été créé avec succès, en attendant l'examen, s'il vous plaît !", //专辑创建成功，请等待审核！
 	'album_mes' => 'Total album : pas plus de 200.', //专辑数不能超过200个。	

 	 /**
 	 * 举报页面
 	 * report/index.html
 	 */
 	'con_wrong' =>'Coordonnées entrées sont incorrectes', //联系方式输入有误
 	'sel_report' =>'Sélectionnez rapports raisons', //请选择举报原因
 	'inf_note' =>'Veuillez entrer une information de commentaire', //请输入备注信息
 	'cor_contact' =>'Veuillez remplir le bon contact', //请填写正确的联系方式
 	'add_report' =>'Ajouter des informations de rapport', //添加举报信息
 	'failed' =>"Données n'a pas pu charger, s'il vous plaît vérifiez votre connexion réseau", //数据加载失败,请检查网络连接
    'sexual' => 'Contenu sexuellement explicite', //色情内容
    'reactionary' =>'Remarques réactionnaires', //反动言论
    'violation' => "Envahir la vie privée d'autrui" , //侵犯他人隐私
    'other' =>'Autres matières malsaines', //其他不健康内容 	
    'suc' => 'Succès de la déclaration', //举报成功
    'faile' => 'Rapport a échoué',//举报失败 

    'to_sina' => 'Reproduisez au microblog de Sina', //转发至新浪微博
    'baidu' => 'Transmis à Baidu', //转发至百度贴吧
    'to_renren' => 'De transmettre à la Renren', //转发至人人网
    'remove_list' => 'Retirer de la liste de lecture', //从播放列表删除     
    'empty_album' => "Album n'affiche aucune vidéo", //专辑内没有视频  
    'his_load' => 'Charges vidéo historiques', //历史视频加载
    'play_load' => 'Chargement de la playlist', //播放列表加载
    'play_mes' => 'Chargement de playlist a échoué, vérifiez votre connexion réseau', //播放列表加载失败,请检查网络连接
    'suc_album' => "L'admission de l'album vidéo !", //该视频成功加入专辑！
    'rem_mes' => "Vidéo ou l'album que vous souhaitez répondre a été supprimé !", //您要回复的视频或者专辑已被删除！
    'no_perm' => "Vous n'êtes pas autorisé à commenter", //您没有发表评论的权限
	'succ' => 'Message de réussite',//留言成功
	'album_fav' => "L'album a collection !",//该专辑已经收藏！
    'video_fav' => 'La vidéo a collection !',//该视频已经收藏！
    'mes_tip' => 'News conseils',//消息提示
    'update_fail' => 'Mise à jour a échoué',//更新失败
	
	/**
	 * 影视，动漫，纪实二级页面
 	 * 
 	 */
	'ranks' => 'Classement Top nouvelles',//热门资讯排行榜
	'films_news' => 'Informations de télévision',//影视资讯抢先看
	'films_shows' => 'Séries et films populaires',//热剧大片抢先看
	'conferences' => 'Activités en direct',//活动现场抢鲜看
	'special_topics' => 'Reportage spécial',//影视热门策划推荐
	
	'animations_ranks' => 'Liste Anime-demande',//人气动漫点播榜
	'comic' => 'Informations des animations',//动画前沿速递
	'animations' => 'Animations populaires',//人气动漫大本营
	'cosplay' => 'Cosplay',//动漫周边-cosplay专区
	'topics' => 'Dossiers spécials',//动漫热门策划专题推荐
	
	'video_ranks' => 'Top vidéos hot',//热门视频排行榜
	'historical' => 'secrets historiques',//历史秘闻
	'realities' => 'réalités des célébrités',//名人真相
	'memory' => 'mémoire extraordinaire',//非常记忆
	'real_moments' => 'vrais moments',//真实瞬间
	'hotdoc' => 'Séries documentaires populaires',//纪录片热门策划
	
	'hots_ranks' => '最热视频精选',//最热视频精选
 	/**
 	 * 下载页面
 	 * down/
 	 */
	'pc' => 'Terminal PC',
	'Paike' => 'Terminal LOMO',
 	'down_01' => 'Version: 2.0',  
 	'down_02' => 'Taille: 9.45MB', 
 	'down_03' => 'Système: WinXP/Vista/Win7', 
 	'down_04' => 'Upload maxi à 10G, Upload à quantité supporté', 
 	'down_05' => 'Envie de plus? Download sans retenue!',  
 	'down_06' => 'Multi-terminal possible (y compris iPhone,PSP,etc.)', 
 	'pkdown_01' => 'Terminal LOMO', 
 	'pkdown_02' => "Introduction:Le terminal LOMO de CNTV est conçu spécialement pour les clients de l'Android et de l'IOS pour partager les plaisirs. Une apparence élégente et simple, une opération facile, pour filmer librement par votre mobile, noter les nouveautés,  soumettre rapidement, partager avec les amies en un premier temps, et profiter un moment tendre sur le plateforme de CNTV. ",
 	'pkdown_03' => '★Système IOS 5.0 et plus acceptable★',  
 	'pkdown_04' => '★iPhone 3GS et plus (y compris iPhone 5) accepetable★', 
 	'pkdown_05' => "Mercie de votre commentaire, c'est notre force de l'avancement", 
 	'pkdown_06' => 'Android: dernier version: V2.1.9: 30 septembre 2014',
 	'pkdown_07' => 'iPhone : dernier version: V2.1.8: 30 septembre 2014',
	'page_title' => 'Terminal PC',//爱西柚视频客户端官方下载
	'page_keywords' => '爱西柚视频客户端,爱西柚视频软件,视频上传,视频点播,高清播放,超清播放,UGCclient,iXiYou,视频下载,批量上传视频',
	'page_description' => '爱西柚视频客户端为用户提供视视频上传、视频下载、视频点播功能，视频上传突破网页限制，最大可上传10G视频，同时支持批量上传及断点续传',
	'copyright' =>'央视国际网络有限公司 版权所有',
	'seo_title' => 'iXiyou-CNTV',//爱西柚-CNTV中国网络电视台
	'lit_title' => 'iXiyou',//爱西柚-CNTV中国网络电视台
	'common_title' => "iXiyou- Podcast de la cha?ne CNTV, s'applique à offrir des services de la publication et du partage des vidéos",//iXiyou:CNTV播客频道，提供视频上传和分享服务
//================================= END ========================================       
    
    'basic_set'		=> '基本信息设置',//基本信息设置
    'tv_name'		=> '电视台的名称',//电视台的名称   
    'tv_tags'		=> '电视台的标签',//电视台的标签    
    'tv_info'		=> '电视台的简介',//电视台的简介  
    'link_mes'		=> '复制视频链接粘贴到输入框中，用回车分割。',//复制视频链接粘贴到输入框中，用回车分割。        
    'back_tv'		=> '返回我的电视台',// 返回我的电视台
    'copy_mes'		=> '复制链接如:http://xiyou.cntv.cn/xxxxxxx，多个链接用回车间隔',//复制链接如:http://xiyou.cntv.cn/xxxxxxx，多个链接用回车间隔 
    'abl_mes'		=> "Vidéos de l'album ne peut pas être plus de 200",// 专辑中视频数不能超过100个   
    'alb_view'		=> '查看本专辑',//查看本专辑   
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
