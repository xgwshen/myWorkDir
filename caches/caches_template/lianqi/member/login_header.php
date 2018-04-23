<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1"/>
        <title>
            账号登录_大志天成集团
        </title>
        <!--[if lte IE 9]>
            <script type="text/javascript" src="/statics/js/html5.js">
            </script>
        <![endif]-->
        <link type="text/css" rel="stylesheet" href="/statics/css/zzh.css"/>
        <link type="text/css" rel="stylesheet" href="/statics/css/advice.css" />
        <link type="text/css" rel="stylesheet" href="/statics/css/static_css_login.css" />
        <link type="text/css" rel="stylesheet" href="/statics/css/static_css_map.css"/>
        <style type="text/css">
        </style>
        <script type="text/javascript" src="/statics/js/jquery-1.11.min.js">
        </script>
        <script>
            var login_property = '';
        </script>
    </head>
    <body>
        <div class="header_top" id="header_top">
            <div class="header_top_box">
                <ul class="header_top_city">
                    <li id="top_city">
                        <span class="header_city_txt" id="top_city_txt" data-val="">
                            加载中
                        </span>
                        <dl id="top_city_menu" class="header_city">
                            <dt>
                                选择城市
                            </dt>
                            <dd>
                                <span>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;地区：
                                </span>
                                <span>
                                    <a rel="nofollow" href="http://www.dztcjt.com" data-tel="">
                                        全国
                                    </a>
                                </span>
                            </dd>
                            <dd>
                                <span>
                                    华北地区：
                                </span>
                                <span>
                                    <a rel="nofollow" href="http://tianjin.dztcjt.com" data-tel=''>
                                        天津
                                    </a>
                                    <a rel="nofollow" href="http://shanxi.dztcjt.com" data-tel=''>
                                        山西
                                    </a>
                                    <a rel="nofollow" href="http://neimenggu.dztcjt.com" data-tel=''>
                                        内蒙古
                                    </a>
                                    <a rel="nofollow" href="http://beijing.dztcjt.com" data-tel=''>
                                        北京
                                    </a>
                                    <a rel="nofollow" href="http://hebei.dztcjt.com" data-tel=''>
                                        河北
                                    </a>
                                </span>
                            </dd>
                            <dd>
                                <span>
                                    东北地区：
                                </span>
                                <span>
                                    <a rel="nofollow" href="http://jilin.dztcjt.com" data-tel=''>
                                        吉林
                                    </a>
                                    <a rel="nofollow" href="http://liaoning.dztcjt.com" data-tel=''>
                                        辽宁
                                    </a>
                                    <a rel="nofollow" href="http://heilongjiang.dztcjt.com" data-tel=''>
                                        黑龙江
                                    </a>
                                </span>
                            </dd>
                            <dd>
                                <span>
                                    华东地区：
                                </span>
                                <span>
                                    <a rel="nofollow" href="http://zhejiang.dztcjt.com" data-tel=''>
                                        浙江
                                    </a>
                                    <a rel="nofollow" href="http://jiangxi.dztcjt.com" data-tel=''>
                                        江西
                                    </a>
                                    <a rel="nofollow" href="http://jiangsu.dztcjt.com" data-tel=''>
                                        江苏
                                    </a>
                                    <a rel="nofollow" href="http://anhui.dztcjt.com" data-tel=''>
                                        安徽
                                    </a>
                                    <a rel="nofollow" href="http://fujian.dztcjt.com" data-tel=''>
                                        福建
                                    </a>
                                    <a rel="nofollow" href="http://shandong.dztcjt.com" data-tel='400-8394-777'>
                                        山东
                                    </a>
                                    <a rel="nofollow" href="http://shanghai.dztcjt.com" data-tel=''>
                                        上海
                                    </a>
                                </span>
                            </dd>
                            <dd>
                                <span>
                                    华中地区：
                                </span>
                                <span>
                                    <a rel="nofollow" href="http://henan.dztcjt.com" data-tel=''>
                                        河南
                                    </a>
                                </span>
                            </dd>
                            <dd>
                                <span>
                                    华南地区：
                                </span>
                                <span>
                                    <a rel="nofollow" href="http://hainan.dztcjt.com" data-tel=''>
                                        海南
                                    </a>
                                    <a rel="nofollow" href="http://hunan.dztcjt.com" data-tel=''>
                                        湖南
                                    </a>
                                    <a rel="nofollow" href="http://guangxi.dztcjt.com" data-tel=''>
                                        广西
                                    </a>
                                    <a rel="nofollow" href="http://guangdong.dztcjt.com" data-tel=''>
                                        广东
                                    </a>
                                    <a rel="nofollow" href="http://hubei.dztcjt.com" data-tel=''>
                                        湖北
                                    </a>
                                </span>
                            </dd>
                            <dd>
                                <span>
                                    西南地区：
                                </span>
                                <span>
                                    <a rel="nofollow" href="http://guizhou.dztcjt.com" data-tel=''>
                                        贵州
                                    </a>
                                    <a rel="nofollow" href="http://yunnan.dztcjt.com" data-tel=''>
                                        云南
                                    </a>
                                    <a rel="nofollow" href="http://xizang.dztcjt.com" data-tel=''>
                                        西藏
                                    </a>
                                    <a rel="nofollow" href="http://sichuan.dztcjt.com" data-tel=''>
                                        四川
                                    </a>
                                    <a rel="nofollow" href="http://chongqing.dztcjt.com" data-tel=''>
                                        重庆
                                    </a>
                                </span>
                            </dd>
                            <dd>
                                <span>
                                    西北地区：
                                </span>
                                <span>
                                    <a rel="nofollow" href="http://qinghai.dztcjt.com" data-tel=''>
                                        青海
                                    </a>
                                    <a rel="nofollow" href="http://shanx.dztcjt.com" data-tel=''>
                                        陕西
                                    </a>
                                    <a rel="nofollow" href="http://xinjiang.dztcjt.com" data-tel='1'>
                                        新疆
                                    </a>
                                    <a rel="nofollow" href="http://ningxia.dztcjt.com" data-tel=''>
                                        宁夏
                                    </a>
                                    <a rel="nofollow" href="http://gansu.dztcjt.com" data-tel=''>
                                        甘肃
                                    </a>
                                </span>
                            </dd>
                        </dl>
                    </li>
                    <li class="border">
                        <a href="/index.php?m=member&c=index&a=login" rel="nofollow" target="_blank">
                            登录
                        </a>
                    </li>
                    <li class="border">
                        <a href="/index.php?m=member&c=index&a=register" rel="nofollow" target="_blank">
                            注册
                        </a>
                    </li>
                </li>
            </ul>
            <ul class="header_top_guide box">
                <li>
                    <a href="/" target="_blank">
                        官网首页
                    </a>
                </li>
                <li id="top_map" class="top_map1 open">
                    <a href="javascript:void(0);" class="header_top_map">
                        我是人才
                    </a>
                    <dl class="top_map box">
                        <dd>
                            <a href="/user/release" target="_blank">
                                创建全职简历
                            </a>
                        </dd>
                        <dd>
                            <a href="/user/release" target="_blank">
                                发布证书
                            </a>
                        </dd>
                        <dd>
                            <a href="/partime/s-0-0-0-0-c" target="_blank">
                                找全职工作
                            </a>
                        </dd>
                    </dl>
                </li>
                <li id="top_map" class="top_map2 open">
                    <a href="javascript:void(0);" class="header_top_map">
                        我是建企
                    </a>
                    <dl class="top_map box top_map_box1">
                        <dd>
                            <a href="/company/release" target="_blank">
                                发布全职招聘
                            </a>
                        </dd>
                        <dd>
                            <a href="/company/release" target="_blank">
                                发布找证需求
                            </a>
                        </dd>
                        <dd>
                            <a href="/partime/s-0-0-0-0-p" target="_blank">
                                查看全职人才
                            </a>
                        </dd>
                        <dd>
                            <a href="/partime/s-0-0-0-0-p" target="_blank">
                                查看持证人才
                            </a>
                        </dd>
                        <dd>
                            <a href="/cer" target="_blank">
                                办资质
                            </a>
                        </dd>
                    </dl>
                </li>
                <li class="map">
                    <a href="/about/join" target="_blank">
                        商务合作
                    </a>
                </li>
                <li class="map">
                    <a href="/site/map" target="_blank">
                        网站地图
                    </a>
                </li>
                <li id="top_wx" class="phone">
                    <a href="javascript:void(0);" class="header_top_img">
                        手机版
                    </a>
                    <dl class="top_code box">
                        <dd>
                            <img src="/statics/img/cer/code_weixin.png" alt="大志天成微信二维码"/>
                            <p>
                                访问手机版
                            </p>
                        </dd>
                        <!--
                            <dd>
                                <img src="/statics/img/cer/code_phone.png" alt="大志天成手机站二维码"/>
                                <p>
                                    关注微信公众号
                                </p>
                            </dd>
                        -->
                    </dl>
                </li>
                <li class="custom">
                    <a rel="nofollow" href="http://dbt.zoosnet.net/LR/Chatpre.aspx?id=DBT84865761&cid=1495766315246815440879" target="_blank">
                        联系客服
                    </a>
                </li>
            </ul>
        </div>
    </div>


    <div class="header index">
        <div class="header-list-logo">
            <h1>
                <a href="/">
                    <img src="/statics/img/logo.png" alt="大志天成集团"/>
                </a>
            </h1>
            <dl class="header-list-city">
            </dl>
            <a rel="nofollow" class="custom" target="_blank" href="#">
            </a>
            <a>
                400-8394-777
            </a>
        </div>
    </div>
    <div class="newnav">
        <div class="newnav_con">
            <div class="newnav_logo">
                <a href="/">
                    <img src="/statics/img/logo-nav.png" style="height: 30px;"/>
                </a>
            </div>
            <ul class="newnav_list">
                <li>
                    <a href="/" class="active" target="_self">
                        <span>
                            首页
                        </span>
                    </a>
                </li>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li>
                    <a href="<?php echo $r['url'];?>" class="" target="_self">
                        <span>
                            <?php echo $r['catname'];?>
                        </span>
                    </a>
                </li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
            <a rel="nofollow" href="#" target="_blank" class="newnav_service">
            </a>
            <div class="newnav_tel">
                400-8394-777
            </div>
        </div>
    </div>
