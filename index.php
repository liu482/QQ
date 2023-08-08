<?php
include('./conf/zanlog.php');
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>文的QQ主页</title>
    <meta name="keywords" content="文的QQ主页"><!--为搜索引擎定义关键词-->
    <meta name="description" content="文的QQ主页 | 每天都是最好的自己!"><!--为网页定义描述内容-->   
    <meta name="author" content="文的QQ主页"> <!--定义网页作者-->
    <meta itemprop="name" content="文的QQ主页 | 每天都是最好的自己!" /><!-- 分享显示的标题-->
    <meta itemprop="image" content="http://q.qlogo.cn/headimg_dl?dst_uin=430916378&spec=640&img_type=jpg" /><!-- 分享显示的缩略图-->   
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no minimal-ui"><!--设置自动适应电脑和手机屏幕-->
   <link rel="shortcut icon" href="http://q.qlogo.cn/headimg_dl?dst_uin=430916378&spec=640&img_type=jpg">
   <link rel="stylesheet" href="./asstes/css/style.css"><!--引入css文件-->
   <link rel="stylesheet" href="//at.alicdn.com/t/font_1092713_xsi7nqjxuzm.css">
</head>
<audio id="bgmMusic" src="https://music.airli.cn/music/wm.mp3" autoplay="autoplay" loop="loop" preload="auto"></audio>
 <body>
     <!--主体-->
    <div class="centent">
        <!--中间内容区-->
        <div class="main">
            <!--头像区-->
            <div class="tx">
                <div class="img">
                    <img src="http://q.qlogo.cn/headimg_dl?dst_uin=430916378&spec=640&img_type=jpg" alt="">
                </div>
                <div class="nc"><b>文</b></div>
                <!--位置信息-->
                <div class="dingwei">
                    <!--img src="./asstes/img/zx.png" alt="" title="<//?php include('./conf/qq.php');?>"-->
                    <?php include('./conf/qq.php');?>
                    <i class="iconfont icon-dingwei"></i>
                    <div class="dingwei-dw">中国 - 山东</div>

                </div>
            </div>
            <!--点赞-->
            <div class="dianzan">
                <a href="./conf/dianzan.php" style="color:#ffffff;text-decoration:none">
                    <div class="zan">
                        <i class="iconfont icon-zan"></i>
                        <div class="zanshu"><?php include('./conf/duquzan.php');?></div>
                    </div>
                </a>
            </div>
            <!--信息-->
            <div class="xx">
                <!--信息列第一行信息-->
                <div class="xx-lie1">
                    <!--图标-->
                    <i class="iconfont icon-wode3"></i>
                    <div class="mz">
                        <div class="xxn"><p>金牛座</p></div>
                        <!--div class="xxn-m"-->
                            <img src="./asstes/img/Boys.png" alt="">
                        <!--/div-->
                    </div>
                </div>

                <!--信息列 第二行qq号-->
                <div class="xx-liee">
                    <!--图标-->
                    <i class="iconfont icon-qq"></i>
                    <div class="qq">
                        <div class="liang"><p>靓</p></div>
                        <div class="liang-q"><a href="http://wpa.qq.com/msgrd?v=3&uin=430916378&site=qq&menu=yes">430916378</a></div>
                    </div>
                </div>
                <!--信息列-->
                <div class="xx-lie">
                    <!--图标-->
                    <i class="iconfont icon-wangluo1"></i>
                    <div class="wz">
                        <div class="liang"><p>官</p></div>
                        <div class="liang-w"><a href="https://www.971k.cn">暂无为GitHub部署运行</a></div>
                    </div>
                </div>
                <!--信息列-->
                <div class="xx-lie">
                    <!--图标--> 
                    <i class="iconfont icon-qianming"></i>
                    <div class="ner">
                        <div class="liang-n">好好生活 慢慢相遇</div>
                    </div>
                </div>
                <!--信息列-->
                <div class="xx-lie">
                    <!--图标--> 
                    <i class="iconfont icon-huiyuan2"></i>
                    <div class="ner">
                        <img src="./asstes/img/svip10.png" alt="" class="svip">
                        <div class="liang-n">
                            <img src="./asstes/img/e6s.png" alt="">
                            <img src="./asstes/img/dsvip.png" alt="">
                            <img src="./asstes/img/sviphlw.png" alt="">
                            <img src="./asstes/img/sviplz.png" alt="">
                            <img src="./asstes/img/hlwlz.png" alt="">
                            <img src="./asstes/img/cjys.png" alt="">
                            <img src="./asstes/img/lz10.png" alt="">
                            <img src="./asstes/img/cfo10.png" alt="">
                            <!--img src="./asstes/img/ibe.png" alt="">
                            <img src="./asstes/img/ibf.png" alt=""-->
                        </div>
                    </div>
                </div>
            </div>
            <!--
