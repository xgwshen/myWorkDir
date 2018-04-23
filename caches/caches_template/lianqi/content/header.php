<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1"/>
        <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
        <meta name="keywords" content="<?php echo $SEO['keyword'];?>">
        <meta name="description" content="<?php echo $SEO['description'];?>">
        <!--[if lte IE 9]>
            <script type="text/javascript" src="/statics/js/html5.js">
            </script>
        <![endif]-->
        <link type="text/css" rel="stylesheet" href="/statics/css/zzh.css"/>
        <style type="text/css">
        </style>
        <script type="text/javascript" src="/statics/js/jquery-1.11.min.js">
        </script>
        <script>
            <?php if($_username) { ?>

            var login_property = 'c';

            <?php } else { ?>
            var login_property = '';
            <?php } ?>
        </script>
    </head>
    <body>
        <div class="header_top" id="header_top">
            <div class="header_top_box">
                <ul class="header_top_city">
                    <li id="top_city">
                        <span class="header_city_txt" id="top_city_txt" data-val="">
                            上海
                        </span>
                        <dl id="top_city_menu" class="header_city">
                            <dt>
                                选择城市
                            </dt>
                             <!--
                            <dd>
                                <span>
                                    华北地区：
                                </span>
                                <span>
                                    <a href="http://hb.dztchun.com" data-tel='400-005-8178'>
                                        河北
                                    </a>
                                    <a href="http://www.dztcnm.com" data-tel='400-005-8178'>
                                        内蒙古
                                    </a>
                                    <a href="http://sx.dztchu.com" data-tel='400-005-8178'>
                                        山西
                                    </a>
                                    <a href="http://beijing.lsqifu.com" data-tel='400-005-8178'>
                                        北京
                                    </a>
                                    <a href="http://tianjin.lsqifu.com" data-tel='400-005-8178'>
                                        天津
                                    </a>
                                </span>
                            </dd>
                            <dd>
                                <span>
                                    东北地区：
                                </span>
                                <span>
                                    <a href="http://hlj.dztcnm.com" data-tel='400-005-8178'>
                                        黑龙江
                                    </a>
                                    <a href="http://ln.dztcbj.com" data-tel='400-005-8178'>
                                        辽宁
                                    </a>
                                    <a href="http://jl.dztcnm.com" data-tel='400-005-8178'>
                                        吉林
                                    </a>
                                </span>
                            </dd>
                            -->
                            <dd>
                                <span>
                                    华东地区：
                                </span>
                                <span>
                                    <a href="<?php echo APP_PATH;?>" data-tel='400-005-8178'>
                                        上海
                                    </a>
                                    <a href="<?php echo APP_PATH;?>" data-tel='400-005-8178'>
                                        浙江
                                    </a>
                                    <a href="<?php echo APP_PATH;?>" data-tel='400-005-8178'>
                                        福建
                                    </a>
                                </span>
                            </dd>
                            <!--
                            <dd>
                                <span>
                                    华中地区：
                                </span>
                                <span>
                                    <a href="http://www.dztcyu.com" data-tel='13253687797'>
                                        河南
                                    </a>
                                </span>
                            </dd>
                            <dd>
                                <span>
                                    华南地区：
                                </span>
                                <span>
                                    <a href="http://hb.dztcfj.com" data-tel='400-8394-777'>
                                        湖北
                                    </a>
                                    <a href="http://gd.dztcnm.com" data-tel='13924299802'>
                                        广东
                                    </a>
                                </span>
                            </dd>
                            <dd>
                                <span>
                                    西南地区：
                                </span>
                                <span>
                                    <a href="http://gz.dztcbj.com" data-tel='18586826883'>
                                        贵州
                                    </a>
                                    <a href="http://cq.dztcnm.com" data-tel=''>
                                        重庆
                                    </a>
                                    <a href="http://sc.dztcnm.com" data-tel='028-86274988'>
                                        四川
                                    </a>
                                </span>
                            </dd>
                            <dd>
                                <span>
                                    西北地区：
                                </span>
                                <span>
                                    <a href="http://sx.dztcah.com" data-tel='18553156307'>
                                        陕西
                                    </a>
                                </span>
                            </dd>  -->
                           
                                <dd>
                                    <p>
                                        更多城市筹备上线中，敬请期待...
                                    </p>
                                </dd>
                            
                        </dl>
                    </li>
                     <?php if(get_nickname() !='') { ?>
                    你好，<?php echo get_nickname();?>
                     <?php } else { ?>
                    <li class="border">
                        <a href="/index.php?m=member&c=index&a=login" target="_blank" rel="nofollow">
                            登录
                        </a>
                    </li>
                    <li class="border">
                        <a href="/index.php?m=member&c=index&a=register" target="_blank" rel="nofollow">
                            注册
                        </a>
                    </li>
                    <?php } ?>
                </li>
            </ul>
            <ul class="header_top_guide box">
                <li>
                    <a href="/index.php" target="_blank">
                        官网首页
                    </a>
                </li>
                <li class="map">
                    <a href="#" target="_blank">
                        商务合作
                    </a>
                </li>
                <li class="map">
                    <a href="#" target="_blank">
                        网站地图
                    </a>
                </li>
                <li id="top_wx" class="phone">
                    <a href="javascript:void(0);" class="header_top_img">
                        手机版
                    </a>
                    <dl class="top_code box">
                        <dd>
                            <img src="/statics/img/code_img/m.dztchu.com.png" alt="访问手机版"/>
                            <p>
                                访问手机版
                            </p>
                        </dd>
                        <dd>
                            <img src="/statics/img/code_img/m.dztchu.com.png" alt="关注微信公众号"/>
                            <p>
                                关注微信公众号
                            </p>
                        </dd>
                    </dl>
                </li>
                <li class="custom">
                    <a rel="nofollow" href="#" target="_blank">
                        联系客服
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="header <?php if($catid==0 || $catid == 7) { ?>index<?php } ?>">
        <div class="header-list-logo">
            <h1>
                <a href="/">
                    <img src="/statics/img/logo.png" alt="lian-qi 链企"/>
                </a>
            </h1>
            <dl class="header-list-city">

            </dl>
            <a class="custom" rel="nofollow" target="_blank" href="#">
            </a>
            <a>
                400-005-8178
            </a>
        </div>
        <div class="header-list-nav ">
            <ul>
                <li>
                    <a href="/" class="<?php if(!$catid) { ?> active <?php } ?>" target="_self">
                        <span>
                            首页
                        </span>
                    </a>
                </li>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                
                <li>
                    <a href="<?php echo $r['url'];?>" class="<?php if($r['catid'] == $cur_catid) { ?> active <?php } ?> " target="_self">
                        <span>
                            <?php echo $r['catname'];?>
                        </span>
                    </a>
                </li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                <li>
                    <a href="javascript:;" class="header-list-search">
                        <span>
                            &nbsp;
                        </span>
                        <dl>
                            <dd>
                                <form action="">
                                    <input type="text" value="" placeholder="请输入要搜索的内容"/>

                                    <input type="submit" class="urlTo" value=""/>
                                </form>
                            </dd>
                        </dl>
                    </a>
                </li>
                <li class="head_li_10 ">
                    <a href="javascript:;" class="header_top_map" rel="nofollow">
                        发布需求
                    </a>
                    <dl class="head_li_ul">
                        <dd>
                            <a href="#" target="_blank">
                                我要办理营业执照
                            </a>
                        </dd>
                        <dd>
                            <a href="#" target="_blank">
                                我要收购营业执照
                            </a>
                        </dd>
                        <dd>
                            <a href="#" target="_blank">
                                我要入驻园区
                            </a>
                        </dd>
                    </dl>
                </li>
                  <?php if(get_nickname() !='') { ?>
                  <li class="head_li_11 ">
                        <a target="_blank" href="/index.php?m=member&c=index">会员中心</a>
                        <a href="/index.php?m=member&c=index&a=logout">退出</a>

                    </li>
                     <?php } else { ?>
                <li class="head_li_11 ">
                    <a target="_blank" href="/index.php?m=member&c=index&a=register" rel="nofollow">
                        注册
                    </a>
                    <a target="_blank" href="/index.php?m=member&c=index&a=login" rel="nofollow">
                        登录
                    </a>
                </li>
                <?php } ?>
            </ul>
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
                    <a href="/" class="<?php if(!$catid) { ?> active <?php } ?>" target="_self">
                        <span>
                            首页
                        </span>
                    </a>
                </li>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li>
                    <a href="<?php echo $r['url'];?>" class="<?php if($r['catid'] == $catid) { ?> active <?php } ?> " target="_self">
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
                400-005-8178
            </div>
        </div>
    </div>
