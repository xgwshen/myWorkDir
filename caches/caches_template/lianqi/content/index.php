<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

<link type="text/css" rel="stylesheet" href="/statics/css/advice.css" />
<link type="text/css" rel="stylesheet" href="/statics/css/static_css_map.css"/>
    <div class="wrapper index">
        <div class="wrapper-main">
            <div class="banner-index" >
                <div class="banner-list-main">
                    <!--
                        <div class="left_over">
                        </div>
                        <div class="right_over">
                        </div>
                    -->
                    <ul class="banner-list-img" id="banner-img-01" >
                        <li class="active" style="background-image: url(/statics/img/bnner1.jpg);">
                            <a href="/cer/index">
                            </a>
                        </li>
                        <li class="" style="background-image: url(/statics/img/bnner2.jpg);">
                            <a href="/partime">
                            </a>
                        </li>
                        <li class="" style="background-image: url(/statics/img/bnner3.jpg);">
                            <a href="/edu/px">
                            </a>
                        </li>
                    </ul>
                    <div class="banner-state">
                        <div class="menu-box active" id="menu-box">
                            <div class="menuCateBox">
                                <div class="banner-left" id="menuList">
                                    <!-- 业务大类循环 -->
                                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b2693892c35a89956d5574d578ef8350&action=category&catid=0&num=4&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'4',));}?>
                                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                    <dl class="menuList">
                                        <dt class="">
                                            <?php echo $r['catname'];?>
                                            <em>
                                                >
                                            </em>
                                        </dt>
                                        <dd>
                                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3e96fcf0e98248c5f18f8f09a649ce5d&action=category&catid=%24r%5B%27catid%27%5D&num=4&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$r['catid'],'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'4',));}?>
                                                <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                                            <a target="_blank" href="<?php echo $v['url'];?>">
                                                <?php echo $v['catname'];?>
                                            </a>
                                            <?php $n++;}unset($n); ?>
                                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                                        </dd>
                                    </dl>
                                     <?php $n++;}unset($n); ?>
                                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

                                </div>
                                <div class="menuContainer" id="menuContainer">
                                    <div id="menuCate_Container">
                                        <!-- 类目列表循环 -->
                                     <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b2693892c35a89956d5574d578ef8350&action=category&catid=0&num=4&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'4',));}?>
                                                <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                                        <div class="menuCate_box box2">
                                            <dl>
                                                <dt>
                                                    <?php echo $v['catname'];?>
                                                </dt>
                                                <dd>
                                                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c6e4b5cb8841ce18629a1b7bc321130a&action=category&catid=%24v%5Bcatid%5D&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$v[catid],'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                                                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                                    <a target="_blank"  href="<?php echo $r['url'];?>">
                                                        <?php echo $r['catname'];?>
                                                    </a>
                                                    <?php $n++;}unset($n); ?>
                                                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                                                </dd>
                                            </dl>
                                            <div class="box2_list">
                                                <dl class="zp">
                                                    <dt>
                                                        <i>
                                                        </i>
                                                        最新聘请
                                                    </dt>
                                                    <dd>
                                                        <p>
                                                            <a target="_blank" href="/partime/c-20566">
                                                                公路道路桥梁中高级职称资质需要
                                                            </a>
                                                            <span>
                                                                03-14
                                                            </span>
                                                        </p>
                                                        
                                                    </dd>
                                                </dl>
                                                <dl class="qz">
                                                    <dt>
                                                        <i>
                                                        </i>
                                                        最新人才
                                                    </dt>
                                                    <dd>
                                                        <p>
                                                            <a target="_blank" href="/partime/p-329">
                                                                造价工程师交通部转出
                                                            </a>
                                                            <span>
                                                                03-09
                                                            </span>
                                                        </p>
                                                       
                                                    </dd>
                                                </dl>
                                            </div>
                                        </div>
                                         <?php $n++;}unset($n); ?>
                                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                                        </div>
                                    </div>
                                    <!-- menuContainer end -->
                                </div>
                            </div>
                            <!-- menu-box end -->
                            <div class="banner-middle">
                                <ul class="banner-list-hover" id="banner-hover-01">
                                    <li>
                                    </li>
                                </ul>
                                <a href="javascript:;" class="banner-guide left">
                                </a>
                                <a href="javascript:;" class="banner-guide right">
                                </a>
                                <ul class="banner-list-zone">
                                    <li class="zone-list-1">
                                        <a href="#" target="_blank">
                                            <h3>
                                                全域营销
                                            </h3>
                                            <span>
                                                立即咨询
                                            </span>
                                        </a>
                                    </li>
                                    <li class="zone-list-2">
                                        <a href="#" target="_blank">
                                            <h3>
                                                链企加盟
                                            </h3>
                                            <span>
                                                立即办理
                                            </span>
                                        </a>
                                    </li>
                                    <li class="zone-list-3">
                                        <a href="#" target="_blank">
                                            <h3>
                                                园区入驻
                                            </h3>
                                            <span>
                                                立即办理
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="banner-right">
                                <dl class="banner-notice">
                                    <dt>
                                        <a href="#" class="active">
                                            资质快讯
                                        </a>
                                        <a href="#">
                                            人才快讯
                                        </a>
                                    </dt>
                                    <dd>
                                        <div class="banner-notice-list active">
                                            <ul>
                                                <li>
                                                    <a href="/view/4917" title="建筑安全生产许可证过期不补办可以施工吗" >
                                                        建筑安全生产许可证过期不补办可以施工吗
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/view/4916" title="关于资质办理的常见问题" >
                                                        关于资质办理的常见问题
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/view/4915" title="房地产三级资质升级雷区不能踩" >
                                                        房地产三级资质升级雷区不能踩
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/view/4914" title="专业解读电力工程资质办理流程，让你恍然大悟！" >
                                                        专业解读电力工程资质办理流程，让你恍然大悟！
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/view/4913" title="山东水利资质转让主要存在的风险3点要看！" >
                                                        山东水利资质转让主要存在的风险3点要看！
                                                    </a>
                                                </li>
                                            </ul>
                                            <dl class="banner-ass">
                                                <form action="/data/zizhi-try-apply" method="post" class="list-input-form">
                                                    <input name="_csrf" type="hidden" id="_csrf" value="eDNjLjZMR2UAWw18ZTUjUDRdN2tcDhhSVQUkY2QudlI0dhV5VSsySA=="/>
                                                    <dt>
                                                        资质报价估算
                                                    </dt>
                                                    <dd>
                                                        <select id="sco-per" class="list-input-txt select required" name="sco_id">
                                                            <option value="">
                                                                选择所在地区
                                                            </option>
                                                            <option value="36" selected>
                                                                上海
                                                            </option>
                                                            <option value="32">
                                                                河南
                                                            </option>
                                                            <option value="37">
                                                                安徽
                                                            </option>
                                                            <option value="38">
                                                                湖北
                                                            </option>
                                                            <option value="39">
                                                                黑龙江
                                                            </option>
                                                            <option value="30">
                                                                山东
                                                            </option>
                                                            <option value="33">
                                                                浙江
                                                            </option>
                                                            <option value="34">
                                                                河北
                                                            </option>
                                                            <option value="35">
                                                                云南
                                                            </option>
                                                            <option value="40">
                                                                贵州
                                                            </option>
                                                            <option value="41">
                                                                福建
                                                            </option>
                                                            <option value="42">
                                                                广东
                                                            </option>
                                                            <option value="43">
                                                                内蒙古
                                                            </option>
                                                            <option value="44">
                                                                山西
                                                            </option>
                                                            <option value="45">
                                                                江苏
                                                            </option>
                                                            <option value="46">
                                                                广西
                                                            </option>
                                                            <option value="47">
                                                                湖南
                                                            </option>
                                                            <option value="48">
                                                                陕西
                                                            </option>
                                                            <option value="49">
                                                                辽宁
                                                            </option>
                                                            <option value="50">
                                                                江西
                                                            </option>
                                                            <option value="51">
                                                                吉林
                                                            </option>
                                                            <option value="52">
                                                                宁夏
                                                            </option>
                                                            <option value="53">
                                                                西藏
                                                            </option>
                                                            <option value="54">
                                                                新疆
                                                            </option>
                                                            <option value="55">
                                                                北京
                                                            </option>
                                                            <option value="56">
                                                                天津
                                                            </option>
                                                            <option value="57">
                                                                重庆
                                                            </option>
                                                            <option value="58">
                                                                青海
                                                            </option>
                                                            <option value="59">
                                                                海南
                                                            </option>
                                                            <option value="60">
                                                                四川
                                                            </option>
                                                            <option value="61">
                                                                甘肃
                                                            </option>
                                                        </select>
                                                        <select class="list-input-txt select required" name="parent_id" id="sysort">
                                                            <option value="0">
                                                                选择资质分类
                                                            </option>
                                                            <option value="1">
                                                                住建工程类
                                                            </option>
                                                            <option value="11">
                                                                交通运输类
                                                            </option>
                                                            <option value="16">
                                                                住建设计类
                                                            </option>
                                                            <option value="17">
                                                                环保水利类
                                                            </option>
                                                            <option value="98">
                                                                国防安全类
                                                            </option>
                                                            <option value="99">
                                                                工信通信类
                                                            </option>
                                                            <option value="100">
                                                                食药监管类
                                                            </option>
                                                            <option value="101">
                                                                电监类
                                                            </option>
                                                            <option value="102">
                                                                人力广电安检类
                                                            </option>
                                                            <option value="103">
                                                                质量认证类
                                                            </option>
                                                            <option value="104">
                                                                发改科技类
                                                            </option>
                                                            <option value="105">
                                                                勘察类
                                                            </option>
                                                        </select>
                                                    </dd>
                                                    <dd>
                                                        <select class="list-input-txt select required" name="zizhi_id" id="syitem">
                                                            <option value="0">
                                                                选择资质专业
                                                            </option>
                                                        </select>
                                                        <select class="list-input-txt select required" name="zizhi_dengji" id="sylevel">
                                                            <option value="0">
                                                                选择资质等级
                                                            </option>
                                                        </select>
                                                    </dd>
                                                    <dd class="v-code">
                                                        <input id="cer_phone" type="text" placeholder="填写手机号" name="phone" class="list-input-txt tel required first"/>
                                                    </dd>
                                                    <dd>
                                                        <input type="submit" value="立即获取" class="list-input-sub ajax-login-index"/>
                                                    </dd>
                                                    <dd>
                                                        <p>
                                                            今日已为
                                                            <em>
                                                                3715
                                                            </em>
                                                            位用户提供报价服务  <!--
                                                            近期申请：
                                                            <em>
                                                                76,096
                                                            </em>
                                                            人
                                                        -->
                                                    </p>
                                                </dd>
                                            </form>
                                        </dl>
                                    </div>
                                    <div class="banner-notice-list card2">
                                        <ul>
                                            <li>
                                                <a href="/view/4898" title="关于2018年度第八批一级建造师注册人员名单的公示" >
                                                    关于2018年度第八批一级建造师注册人员名单的公示
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/view/4877" title="内蒙古9月1日启用新版职业资格证书" >
                                                    内蒙古9月1日启用新版职业资格证书
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/view/4864" title="资质代办申报审批流程解析" >
                                                    资质代办申报审批流程解析
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/view/4852" title="造价工程师的未来之路怎么样" >
                                                    造价工程师的未来之路怎么样
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/view/4840" title="一级建造师办理问题汇总" >
                                                    一级建造师办理问题汇总
                                                </a>
                                            </li>
                                        </ul>
                                        <dl class="banner-ass banner-list-price active" id="certificate">
                                            <div class="list-price-box active">
                                                <form action="/data/zhengshu-price" method="post" class="list-input-form">
                                                    <input type="hidden" value="eDNjLjZMR2UAWw18ZTUjUDRdN2tcDhhSVQUkY2QudlI0dhV5VSsySA==" id="_csrf" name="_csrf" />
                                                    <dt>
                                                        证书免费估价
                                                    </dt>
                                                    <dd>
                                                        <select name="sheng" class="list-input-txt select required" id="cer-adress">
                                                            <option value="0">
                                                                选择所在地区
                                                            </option>
                                                            <option value="上海" selected >
                                                                上海
                                                            </option>
                                                            <option value="河南"  >
                                                                河南
                                                            </option>
                                                            <option value="安徽"  >
                                                                安徽
                                                            </option>
                                                            <option value="湖北"  >
                                                                湖北
                                                            </option>
                                                            <option value="黑龙江"  >
                                                                黑龙江
                                                            </option>
                                                            <option value="山东"  >
                                                                山东
                                                            </option>
                                                            <option value="浙江"  >
                                                                浙江
                                                            </option>
                                                            <option value="河北"  >
                                                                河北
                                                            </option>
                                                            <option value="云南"  >
                                                                云南
                                                            </option>
                                                            <option value="贵州"  >
                                                                贵州
                                                            </option>
                                                            <option value="福建"  >
                                                                福建
                                                            </option>
                                                            <option value="广东"  >
                                                                广东
                                                            </option>
                                                            <option value="内蒙古"  >
                                                                内蒙古
                                                            </option>
                                                            <option value="山西"  >
                                                                山西
                                                            </option>
                                                            <option value="江苏"  >
                                                                江苏
                                                            </option>
                                                            <option value="广西"  >
                                                                广西
                                                            </option>
                                                            <option value="湖南"  >
                                                                湖南
                                                            </option>
                                                            <option value="陕西"  >
                                                                陕西
                                                            </option>
                                                            <option value="辽宁"  >
                                                                辽宁
                                                            </option>
                                                            <option value="江西"  >
                                                                江西
                                                            </option>
                                                            <option value="吉林"  >
                                                                吉林
                                                            </option>
                                                            <option value="宁夏"  >
                                                                宁夏
                                                            </option>
                                                            <option value="西藏"  >
                                                                西藏
                                                            </option>
                                                            <option value="新疆"  >
                                                                新疆
                                                            </option>
                                                            <option value="北京"  >
                                                                北京
                                                            </option>
                                                            <option value="天津"  >
                                                                天津
                                                            </option>
                                                            <option value="重庆"  >
                                                                重庆
                                                            </option>
                                                            <option value="青海"  >
                                                                青海
                                                            </option>
                                                            <option value="海南"  >
                                                                海南
                                                            </option>
                                                            <option value="四川"  >
                                                                四川
                                                            </option>
                                                            <option value="甘肃"  >
                                                                甘肃
                                                            </option>
                                                        </select>
                                                    </dd>
                                                    <dd>
                                                        <select class="list-input-txt select required" name="zhengshu_type">
                                                            <option value="">
                                                                请选择证书
                                                            </option>
                                                            <optgroup label="---一级建造师---">
                                                                <option value="2">
                                                                    建筑工程
                                                                </option>
                                                                <option value="3">
                                                                    机电工程
                                                                </option>
                                                                <option value="6">
                                                                    市政公用
                                                                </option>
                                                                <option value="7">
                                                                    水利水电
                                                                </option>
                                                                <option value="8">
                                                                    公路工程
                                                                </option>
                                                                <option value="9">
                                                                    矿业工程
                                                                </option>
                                                                <option value="10">
                                                                    铁路工程
                                                                </option>
                                                                <option value="11">
                                                                    民航机场
                                                                </option>
                                                                <option value="12">
                                                                    通信与广电
                                                                </option>
                                                                <option value="13">
                                                                    港口与航道
                                                                </option>
                                                            </optgroup>
                                                            <optgroup label="---二级建造师---">
                                                                <option value="5">
                                                                    建筑工程
                                                                </option>
                                                                <option value="14">
                                                                    机电工程
                                                                </option>
                                                                <option value="15">
                                                                    市政公用
                                                                </option>
                                                                <option value="16">
                                                                    水利水电
                                                                </option>
                                                                <option value="17">
                                                                    公路工程
                                                                </option>
                                                                <option value="18">
                                                                    矿业工程
                                                                </option>
                                                            </optgroup>
                                                            <optgroup label="---结构工程师---">
                                                                <option value="20">
                                                                    一级结构师
                                                                </option>
                                                                <option value="21">
                                                                    二级结构师
                                                                </option>
                                                            </optgroup>
                                                            <optgroup label="---造价工程师---">
                                                                <option value="23">
                                                                    建设部
                                                                </option>
                                                                <option value="24">
                                                                    交通部
                                                                </option>
                                                                <option value="25">
                                                                    水利部
                                                                </option>
                                                            </optgroup>
                                                            <optgroup label="---注册建筑师---">
                                                                <option value="27">
                                                                    一级建筑师
                                                                </option>
                                                                <option value="28">
                                                                    二级建筑师
                                                                </option>
                                                            </optgroup>
                                                            <optgroup label="---电气工程师---">
                                                                <option value="30">
                                                                    供配电
                                                                </option>
                                                                <option value="31">
                                                                    发输变电
                                                                </option>
                                                            </optgroup>
                                                            <optgroup label="---公用设备工程师---">
                                                                <option value="33">
                                                                    暖通空调
                                                                </option>
                                                                <option value="34">
                                                                    动力
                                                                </option>
                                                                <option value="35">
                                                                    给水排水
                                                                </option>
                                                            </optgroup>
                                                            <optgroup label="---监理工程师---">
                                                                <option value="37">
                                                                    建设部
                                                                </option>
                                                                <option value="38">
                                                                    水利部
                                                                </option>
                                                                <option value="39">
                                                                    交通部
                                                                </option>
                                                            </optgroup>
                                                            <optgroup label="---土木工程师---">
                                                                <option value="41">
                                                                    注册岩土
                                                                </option>
                                                                <option value="42">
                                                                    港口航道
                                                                </option>
                                                                <option value="43">
                                                                    水利水电
                                                                </option>
                                                            </optgroup>
                                                            <optgroup label="---注册咨询师---">
                                                                <option value="45">
                                                                    环境工程
                                                                </option>
                                                                <option value="46">
                                                                    市政公用工程
                                                                </option>
                                                                <option value="47">
                                                                    水电核电火电
                                                                </option>
                                                                <option value="48">
                                                                    建筑/建筑材料
                                                                </option>
                                                                <option value="49">
                                                                    农业林业
                                                                </option>
                                                                <option value="50">
                                                                    城市规划
                                                                </option>
                                                                <option value="51">
                                                                    轻工纺织
                                                                </option>
                                                                <option value="63">
                                                                    其他
                                                                </option>
                                                            </optgroup>
                                                            <optgroup label="---职称证书---">
                                                                <option value="65">
                                                                    建筑工程
                                                                </option>
                                                                <option value="66">
                                                                    市政
                                                                </option>
                                                                <option value="74">
                                                                    园林
                                                                </option>
                                                                <option value="75">
                                                                    机电/电力
                                                                </option>
                                                                <option value="76">
                                                                    暖通空调/热处理
                                                                </option>
                                                                <option value="77">
                                                                    建筑设计类
                                                                </option>
                                                                <option value="78">
                                                                    结构
                                                                </option>
                                                                <option value="79">
                                                                    暖通
                                                                </option>
                                                                <option value="80">
                                                                    给排水
                                                                </option>
                                                                <option value="81">
                                                                    材料
                                                                </option>
                                                                <option value="100">
                                                                    化工
                                                                </option>
                                                                <option value="101">
                                                                    燃气
                                                                </option>
                                                                <option value="102">
                                                                    会计
                                                                </option>
                                                                <option value="103">
                                                                    通风
                                                                </option>
                                                                <option value="104">
                                                                    测量/测绘
                                                                </option>
                                                                <option value="105">
                                                                    总图
                                                                </option>
                                                                <option value="106">
                                                                    焊接
                                                                </option>
                                                                <option value="107">
                                                                    电气
                                                                </option>
                                                                <option value="108">
                                                                    机械设备/机械
                                                                </option>
                                                                <option value="109">
                                                                    自动化
                                                                </option>
                                                                <option value="110">
                                                                    公路/道路桥梁
                                                                </option>
                                                                <option value="111">
                                                                    造价/概预算
                                                                </option>
                                                                <option value="112">
                                                                    计算机
                                                                </option>
                                                                <option value="113">
                                                                    电子/通信
                                                                </option>
                                                                <option value="114">
                                                                    水利水电
                                                                </option>
                                                                <option value="115">
                                                                    环境工程
                                                                </option>
                                                                <option value="116">
                                                                    环保
                                                                </option>
                                                                <option value="121">
                                                                    经济师专业类
                                                                </option>
                                                            </optgroup>
                                                            <optgroup label="---其他证书---">
                                                                <option value="68">
                                                                    注册税务师
                                                                </option>
                                                                <option value="69">
                                                                    注册会计师
                                                                </option>
                                                                <option value="70">
                                                                    房地产估价师
                                                                </option>
                                                                <option value="71">
                                                                    环保工程师
                                                                </option>
                                                                <option value="72">
                                                                    土地估价师
                                                                </option>
                                                                <option value="73">
                                                                    安全评价师
                                                                </option>
                                                                <option value="117">
                                                                    城市规划师
                                                                </option>
                                                                <option value="118">
                                                                    安全工程师
                                                                </option>
                                                                <option value="119">
                                                                    消防工程师
                                                                </option>
                                                                <option value="120">
                                                                    其他证书
                                                                </option>
                                                            </optgroup>
                                                            <optgroup label="---技工证---">
                                                                <option value="83">
                                                                    初级技工证
                                                                </option>
                                                                <option value="84">
                                                                    中级技工证
                                                                </option>
                                                                <option value="85">
                                                                    高级技工证
                                                                </option>
                                                            </optgroup>
                                                            <optgroup label="---八大员---">
                                                                <option value="92">
                                                                    安全员
                                                                </option>
                                                                <option value="93">
                                                                    造价员
                                                                </option>
                                                                <option value="94">
                                                                    施工员
                                                                </option>
                                                                <option value="95">
                                                                    质量员
                                                                </option>
                                                                <option value="96">
                                                                    机械员
                                                                </option>
                                                                <option value="97">
                                                                    劳务员
                                                                </option>
                                                                <option value="98">
                                                                    材料员
                                                                </option>
                                                                <option value="99">
                                                                    资料员
                                                                </option>
                                                            </optgroup>
                                                        </select>
                                                    </dd>
                                                    <dd class="v-code">
                                                        <input id="cer_phone" type="text" placeholder="填写手机号" name="phone" class="list-input-txt tel required first"/>
                                                    </dd>
                                                    <dd>
                                                        <input type="submit" value="立即获取" class="list-input-sub expectP"/>
                                                    </dd>
                                                    <dd>
                                                        <p>
                                                            今日已为
                                                            <em>
                                                                3715
                                                            </em>
                                                            位用户提供报价服务
                                                        </dd>
                                                    </form>
                                                </div>
                                                <div class="list-result-box">
                                                    <dl>
                                                        <dd>
                                                            <h3>
                                                                你的证书估价
                                                            </h3>
                                                        </dd>
                                                        <dd>
                                                            <h2>
                                                                初始：
                                                                <span>
                                                                </span>
                                                                元/年
                                                            </h2>
                                                        </dd>
                                                        <dd>
                                                            <h2>
                                                                转注：
                                                                <span>
                                                                </span>
                                                                元/年
                                                            </h2>
                                                        </dd>
                                                        <!--
                                                            <dd>
                                                                <h1>
                                                                    <span>
                                                                    </span>
                                                                </h1>
                                                            </dd>
                                                            <dd>
                                                                <h3>
                                                                    办理周期
                                                                </h3>
                                                            </dd>
                                                            <dd>
                                                                <h1>
                                                                    <span>
                                                                    </span>
                                                                </h1>
                                                            </dd>
                                                        -->
                                                    </dl>
                                                    <input type="submit" value="返回" class="list-input-sub back"/>
                                                </div>
                                            </dl>
                                        </div>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div class="banner-report">
                        <dl>
                            <dt>
                                <span>
                                    实时播报
                                </span>
                            </dt>
                            <dd class="banner-report-box">
                                <div id="banner-report-ul">
                                    <ul class="banner-report-list">
                                        <li>
                                            福建省SX建设工程有限公司成功公告批复建筑装修装饰工程二级资质
                                        </li>
                                        <li>
                                            山东SR科技股份有限公司成功公告批复建筑企业安全生产许可证质
                                        </li>
                                        <li>
                                            厦门FG交通工程咨询有限公司成功公告批复公路交通工程（公路安全设施分项）二级资质
                                        </li>
                                    </ul>
                                    <ul class="banner-report-list">
                                        <li>
                                            泰安XD路桥工程有限公司成功公告批复安全生产许可证
                                        </li>
                                        <li>
                                            陕西WKR有限公司成功公告批复建筑装修装饰工程二级资质
                                        </li>
                                        <li>
                                            湖南DR物业管理有限公司成功公告批复增加年度用水计划指标的核定资质
                                        </li>
                                    </ul>
                                    <ul class="banner-report-list">
                                        <li>
                                            山东滨州ZSGC置业有限公司成功公告批复房地产暂定级资质延续
                                        </li>
                                        <li>
                                            上海DGF建筑安装工程有限公司成功公告批复建筑机电安装工程专业承包三级资质
                                        </li>
                                        <li>
                                            HDFR工业有限公司成功公告批复建筑装修装饰工程二级资质
                                        </li>
                                    </ul>
                                    <ul class="banner-report-list">
                                        <li>
                                            山西RS市政园林有限公司成功公告批复建筑装修装饰工程二级资质
                                        </li>
                                        <li>
                                            山东WG信息科技有限公司成功公告批复安防工程企业资质三级资质
                                        </li>
                                        <li>
                                            山东AB消防有限公司成功公告批复一体化换证
                                        </li>
                                    </ul>
                                    <ul class="banner-report-list">
                                        <li>
                                            云南FT建设有限公司成功公告批复市政共用三级资质
                                        </li>
                                        <li>
                                            广东WY股份有限公司成功公告批复建筑工程总承包三级资质
                                        </li>
                                        <li>
                                            WTY置业有限公司成功公告批复房地产四级资质
                                        </li>
                                    </ul>
                                    <ul class="banner-report-list">
                                        <li>
                                            山西DX建设工程有限公司成功公告批复施工劳务不分资质等级资质
                                        </li>
                                        <li>
                                            青岛LX高新技术有限公司成功公告批复安防工程企业资质三级资质
                                        </li>
                                        <li>
                                            云南RY交通工程咨询有限公司成功公告批复市政公用工程三级资质资质
                                        </li>
                                    </ul>
                                    <ul class="banner-report-list">
                                        <li>
                                            广东SH交通工程咨询有限公司成功公告批复公路交通工程二级资质
                                        </li>
                                        <li>
                                            山东FMSD地产开发有限公司成功公告批复房地产开发企业暂定级资质
                                        </li>
                                        <li>
                                            河北ERH建设工程有限公司成功公告批复施工劳务不分资质等级资质
                                        </li>
                                    </ul>
                                    <ul class="banner-report-list">
                                        <li>
                                            滨州YC特种设备有限公司成功公告批复乘客电梯安装、维修C级
                                        </li>
                                        <li>
                                            北京TY建工有限公司成功公告批复建筑工程三级资质
                                        </li>
                                        <li>
                                            湖南XXW建设工程设计有限公司成功公告批复建筑幕墙工程二级资质
                                        </li>
                                    </ul>
                                    <ul class="banner-report-list">
                                        <li>
                                            青岛ZJ建通建筑劳务有限公司成功公告批复建筑企业施工劳务资质
                                        </li>
                                        <li>
                                            北京FH建设有限公司成功公告批复市政共用三级资质
                                        </li>
                                        <li>
                                            贵州SF股份有限公司成功公告批复建筑工程总承包三级资质
                                        </li>
                                    </ul>
                                    <ul class="banner-report-list">
                                        <li>
                                            青岛GH通建筑工程有限公司成功公告批复安证延期重审
                                        </li>
                                        <li>
                                            山东HD成功公告批复承装修五级
                                        </li>
                                        <li>
                                            贵州ET设计研究院有限公司成功公告批复规划编制乙级资质
                                        </li>
                                    </ul>
                                    <ul class="banner-report-list">
                                        <li>
                                            江苏GH物业管理有限公司成功公告批复增加年度用水计划指标的核定资质
                                        </li>
                                        <li>
                                            上海WR市政园林工程有限公司成功公告批复专业承包钢结构工程三级增项资质
                                        </li>
                                        <li>
                                            淄博BD钢板仓有限公司成功公告批复钢结构专业承包三级
                                        </li>
                                    </ul>
                                    <ul class="banner-report-list">
                                        <li>
                                            YYK设计研究院有限公司成功公告批复规划编制乙级资质
                                        </li>
                                        <li>
                                            山东TR电力工程有限公司成功公告批复承装修试四级许可证
                                        </li>
                                        <li>
                                            河北WVB建设有限公司成功公告批复建筑工程三级资质
                                        </li>
                                    </ul>
                                    <ul class="banner-report-list">
                                        <li>
                                            上海FG建设有限公司成功公告批复市政共用三级资质
                                        </li>
                                        <li>
                                            山东DESY电力有限公司成功公告批复承装修试四级许可证延续
                                        </li>
                                        <li>
                                            山西RH建设工程有限公司成功公告批复建筑装修装饰工程二级资质
                                        </li>
                                    </ul>
                                    <ul class="banner-report-list">
                                        <li>
                                            上海XN物业管理有限公司成功公告批复增加年度用水计划指标的核定资质
                                        </li>
                                        <li>
                                            河南SD建设有限公司成功公告批复建筑工程三级资质
                                        </li>
                                        <li>
                                            青岛SY电控设备有限公司成功公告批复承装承修承试四级
                                        </li>
                                    </ul>
                                    <ul class="banner-report-list">
                                        <li>
                                            山西FG建设有限公司成功公告批复城市及道路照明工程三级资质
                                        </li>
                                        <li>
                                            云南QY市政园林工程有限公司成功公告批复专业承包钢结构工程三级增项资质
                                        </li>
                                        <li>
                                            济南DY建设工程有限公司成功公告批复市政公用工程总承包三级
                                        </li>
                                    </ul>
                                    <ul class="banner-report-list">
                                        <li>
                                            山西TY建筑劳务有限公司成功公告批复安全生产许可证资质
                                        </li>
                                        <li>
                                            YKL设计研究院有限公司成功公告批复规划编制乙级资质
                                        </li>
                                        <li>
                                            东平DR物业有限公司成功公告批复物业三级延续
                                        </li>
                                    </ul>
                                    <ul class="banner-report-list">
                                        <li>
                                            山西RY建设工程咨询有限公司成功公告批复施工总承包建筑工程三级资质
                                        </li>
                                        <li>
                                            西藏TM市政园林有限公司成功公告批复建筑装修装饰工程二级资质
                                        </li>
                                        <li>
                                            山东ZX环境工程有限公司成功公告批复环保工程专业承包三级
                                        </li>
                                    </ul>
                                    <ul class="banner-report-list">
                                        <li>
                                            西藏WH建筑劳务有限公司成功公告批复安全生产许可证资质
                                        </li>
                                        <li>
                                            云南BL建工有限公司成功公告批复建筑工程三级资质
                                        </li>
                                        <li>
                                            青岛TYD劳务有限公司成功公告批复劳务资质
                                        </li>
                                    </ul>
                                    <ul class="banner-report-list">
                                        <li>
                                            广东RY设计研究院有限公司成功公告批复规划编制乙级资质
                                        </li>
                                        <li>
                                            辽宁BF房地产有限公司成功公告批复房地产四级资质
                                        </li>
                                        <li>
                                            YTR置业有限公司成功公告批复房地产二级级资质
                                        </li>
                                    </ul>
                                    <ul class="banner-report-list">
                                        <li>
                                            山东AH消防科技有限公司成功公告批复消防施工专业承包二级换证
                                        </li>
                                        <li>
                                            辽宁SV建筑安装工程有限公司成功公告批复建筑机电安装工程专业承包三级资质
                                        </li>
                                        <li>
                                            山东JL置业有限公司成功公告批复房地产暂定级资质
                                        </li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </div>
                </div>
                <div class="section-index">
                    <div class="section-index-box">
                        <div class="section-index-title">
                            <h2>
                                资质许可专区
                                <span>
                                    申报时间短，通过率高
                                </span>
                            </h2>
                            <a target="_blank" href="/cer" class="more">
                                更多>
                            </a>
                        </div>
                        <div class="section-index-bar">
                            <a href="javascript:void(0);" class="prev">
                                &lt;
                            </a>
                            <ul>
                                <li>
                                </li>
                            </ul>
                            <a href="javascript:void(0);" class="next">
                                &gt;
                            </a>
                        </div>
                        <div class="bd">
                            <div class="section-index-service">
                                <div class="service-list service-list-1" >
                                    <dl>
                                        <dt>
                                            <span>
                                                住建工程类
                                            </span>
                                        </dt>
                                        <dd>
                                            <a class="hot"  href="/cer/2" target="_blank" title="钢结构工程专业承包">
                                                钢结构工程专业承包
                                            </a>
                                            <a class="hot"  href="/cer/3" target="_blank" title="建筑幕墙工程专业承包">
                                                建筑幕墙工程专业承包
                                            </a>
                                            <a   href="/cer/5" target="_blank" title="建筑工程施工总包">
                                                建筑工程施工总包
                                            </a>
                                            <a class="hot"  href="/cer/66" target="_blank" title="环保工程专业承包">
                                                环保工程专业承包
                                            </a>
                                            <a class="hot"  href="/cer/65" target="_blank" title="消防设施工程专业承包">
                                                消防设施工程专业承包
                                            </a>
                                            <a class="hot"  href="/cer/4" target="_blank" title="建筑机电安装工程专业承包">
                                                建筑机电安装工程专业承包
                                            </a>
                                            <a class="hot"  href="/cer/10" target="_blank" title="建筑装修装饰工程专业承包">
                                                建筑装修装饰工程专业承包
                                            </a>
                                            <a class="hot"  href="/cer/67" target="_blank" title="安防工程资质">
                                                安防工程资质
                                            </a>
                                            <a class="hot"  href="/cer/9" target="_blank" title="机电工程施工总包">
                                                机电工程施工总包
                                            </a>
                                            <a   href="/cer/8" target="_blank" title="电子与智能化工程专业承包">
                                                电子与智能化工程专业承包
                                            </a>
                                            <a class="hot"  href="/cer/6" target="_blank" title="电力工程施工总包">
                                                电力工程施工总包
                                            </a>
                                            <a class="hot"  href="/cer/7" target="_blank" title="房地产开发企业资质">
                                                房地产开发企业资质
                                            </a>
                                            <a class="hot"  href="/cer/70" target="_blank" title="市政公用工程施工总包">
                                                市政公用工程施工总包
                                            </a>
                                            <a class="hot"  href="/cer/71" target="_blank" title="输变电工程专业承包">
                                                输变电工程专业承包
                                            </a>
                                            <a   href="/cer/72" target="_blank" title="建筑劳务专业承包">
                                                建筑劳务专业承包
                                            </a>
                                            <a   href="/cer/73" target="_blank" title="地基基础工程专业承包">
                                                地基基础工程专业承包
                                            </a>
                                            <a   href="/cer/74" target="_blank" title="预拌混凝土专业承包">
                                                预拌混凝土专业承包
                                            </a>
                                            <a   href="/cer/75" target="_blank" title="防水防腐保温工程专业承包">
                                                防水防腐保温工程专业承包
                                            </a>
                                            <a class="hot"  href="/cer/76" target="_blank" title="模板脚手架专业承包">
                                                模板脚手架专业承包
                                            </a>
                                            <a   href="/cer/77" target="_blank" title="特种工程专业资质 （建筑物纠偏和平移）">
                                                特种工程专业资质 （建筑物纠偏和平移）
                                            </a>
                                            <a class="hot"  href="/cer/208" target="_blank" title="特种工程专业资质 （结构补强）">
                                                特种工程专业资质 （结构补强）
                                            </a>
                                            <a   href="/cer/209" target="_blank" title="特种工程专业资质 （特殊设备起重吊装）">
                                                特种工程专业资质 （特殊设备起重吊装）
                                            </a>
                                            <a   href="/cer/210" target="_blank" title="特种工程专业资质 （特种防雷技术）">
                                                特种工程专业资质 （特种防雷技术）
                                            </a>
                                            <a class="hot"  href="/cer/78" target="_blank" title="物业管理企业资质">
                                                物业管理企业资质
                                            </a>
                                            <a class="hot"  href="/cer/79" target="_blank" title="城市及道路照明工程专业承包">
                                                城市及道路照明工程专业承包
                                            </a>
                                            <a class="hot"  href="/cer/80" target="_blank" title="矿山工程施工总包">
                                                矿山工程施工总包
                                            </a>
                                            <a class="hot"  href="/cer/81" target="_blank" title="石油化工工程施工总包">
                                                石油化工工程施工总包
                                            </a>
                                            <a   href="/cer/82" target="_blank" title="起重设备安装工程总包">
                                                起重设备安装工程总包
                                            </a>
                                            <a   href="/cer/83" target="_blank" title="桥梁工程专业承包">
                                                桥梁工程专业承包
                                            </a>
                                            <a   href="/cer/84" target="_blank" title="隧道工程专业承包">
                                                隧道工程专业承包
                                            </a>
                                            <a   href="/cer/85" target="_blank" title="核工程专业承包">
                                                核工程专业承包
                                            </a>
                                            <a   href="/cer/86" target="_blank" title="古建筑工程专业承包">
                                                古建筑工程专业承包
                                            </a>
                                            <a   href="/cer/87" target="_blank" title="海洋石油工程专业承包">
                                                海洋石油工程专业承包
                                            </a>
                                            <a   href="/cer/222" target="_blank" title="冶金工程施工总承包">
                                                冶金工程施工总承包
                                            </a>
                                            <a class="hot"  href="/cer/224" target="_blank" title="安全生产许可证">
                                                安全生产许可证
                                            </a>
                                            <a   href="/cer/271" target="_blank" title="工程监理资质">
                                                工程监理资质
                                            </a>
                                            <a   href="/cer/272" target="_blank" title="工程造价咨询资质">
                                                工程造价咨询资质
                                            </a>
                                            <a   href="/cer/273" target="_blank" title="招标代理资质">
                                                招标代理资质
                                            </a>
                                        </dd>
                                    </dl>
                                    <a href="javascript:;" class="service-down">
                                        <img src="/statics/img/service-down.png" alt=""/>
                                    </a>
                                </div>
                                <div class="service-list service-list-2" >
                                    <dl>
                                        <dt>
                                            <span>
                                                交通运输类
                                            </span>
                                        </dt>
                                        <dd>
                                            <a class="hot"  href="/cer/14" target="_blank" title="公路工程施工总承包">
                                                公路工程施工总承包
                                            </a>
                                            <a class="hot"  href="/cer/12" target="_blank" title="公路交通工程（公路安全设施分项）">
                                                公路交通工程（公路安全设施分项）
                                            </a>
                                            <a   href="/cer/15" target="_blank" title="公路交通工程（公路机电工程分项）">
                                                公路交通工程（公路机电工程分项）
                                            </a>
                                            <a   href="/cer/13" target="_blank" title="铁路工程施工总承包">
                                                铁路工程施工总承包
                                            </a>
                                            <a class="hot"  href="/cer/39" target="_blank" title="港口与航道工程施工总承包">
                                                港口与航道工程施工总承包
                                            </a>
                                            <a   href="/cer/41" target="_blank" title="水运工程监理企业资质许可">
                                                水运工程监理企业资质许可
                                            </a>
                                            <a   href="/cer/43" target="_blank" title="航道工程专业承包">
                                                航道工程专业承包
                                            </a>
                                            <a   href="/cer/36" target="_blank" title="公路路基工程专业承包">
                                                公路路基工程专业承包
                                            </a>
                                            <a class="hot"  href="/cer/58" target="_blank" title="公路路面工程专业承包">
                                                公路路面工程专业承包
                                            </a>
                                            <a   href="/cer/45" target="_blank" title="通航建筑物工程专业承包">
                                                通航建筑物工程专业承包
                                            </a>
                                            <a   href="/cer/47" target="_blank" title="铁路电气化工程专业承包">
                                                铁路电气化工程专业承包
                                            </a>
                                            <a   href="/cer/40" target="_blank" title="铁路电务工程专业承包">
                                                铁路电务工程专业承包
                                            </a>
                                            <a   href="/cer/44" target="_blank" title="民航空管工程及机场弱电系统工程专包">
                                                民航空管工程及机场弱电系统工程专包
                                            </a>
                                            <a   href="/cer/46" target="_blank" title="机场目视助航工程专业承包">
                                                机场目视助航工程专业承包
                                            </a>
                                            <a   href="/cer/59" target="_blank" title="港口与海岸工程专业承包">
                                                港口与海岸工程专业承包
                                            </a>
                                            <a   href="/cer/60" target="_blank" title="铁路铺轨架梁工程专业承包">
                                                铁路铺轨架梁工程专业承包
                                            </a>
                                            <a   href="/cer/61" target="_blank" title="机场场道工程专业承包">
                                                机场场道工程专业承包
                                            </a>
                                            <a   href="/cer/88" target="_blank" title="船舶运输经营资质">
                                                船舶运输经营资质
                                            </a>
                                            <a   href="/cer/89" target="_blank" title="道路运输经营许可证">
                                                道路运输经营许可证
                                            </a>
                                            <a   href="/cer/90" target="_blank" title="国内水路运输、水路运输服务经营审批">
                                                国内水路运输、水路运输服务经营审批
                                            </a>
                                            <a   href="/cer/91" target="_blank" title="升放无人驾驶自由气球、系留气球单位资质认定">
                                                升放无人驾驶自由气球、系留气球单位资质认定
                                            </a>
                                            <a   href="/cer/93" target="_blank" title="航空运输企业经营许可证">
                                                航空运输企业经营许可证
                                            </a>
                                            <a   href="/cer/94" target="_blank" title="道路危险货物运输许可证">
                                                道路危险货物运输许可证
                                            </a>
                                            <a   href="/cer/96" target="_blank" title="港航设备安装及水上交管工程专包">
                                                港航设备安装及水上交管工程专包
                                            </a>
                                            <a   href="/cer/97" target="_blank" title="烟花爆竹运输许可证核发">
                                                烟花爆竹运输许可证核发
                                            </a>
                                        </dd>
                                    </dl>
                                    <a href="javascript:;" class="service-down">
                                        <img src="/statics/img/service-down.png" alt=""/>
                                    </a>
                                </div>
                                <div class="service-list service-list-3" >
                                    <dl>
                                        <dt>
                                            <span>
                                                住建设计类
                                            </span>
                                        </dt>
                                        <dd>
                                            <a class="hot"  href="/cer/21" target="_blank" title="环境工程（水污染防治工程）">
                                                环境工程（水污染防治工程）
                                            </a>
                                            <a class="hot"  href="/cer/204" target="_blank" title="环境工程（大气污染防治工程）">
                                                环境工程（大气污染防治工程）
                                            </a>
                                            <a   href="/cer/205" target="_blank" title="环境工程（固体废物处理工程）">
                                                环境工程（固体废物处理工程）
                                            </a>
                                            <a   href="/cer/206" target="_blank" title="环境工程（物理污染防治工程）">
                                                环境工程（物理污染防治工程）
                                            </a>
                                            <a   href="/cer/207" target="_blank" title="环境工程（污染修复工程）">
                                                环境工程（污染修复工程）
                                            </a>
                                            <a class="hot"  href="/cer/20" target="_blank" title="风景园林工程设计专项资质">
                                                风景园林工程设计专项资质
                                            </a>
                                            <a   href="/cer/22" target="_blank" title="建筑行业">
                                                建筑行业
                                            </a>
                                            <a   href="/cer/26" target="_blank" title="煤炭行业工程设计资质">
                                                煤炭行业工程设计资质
                                            </a>
                                            <a   href="/cer/27" target="_blank" title="化工石化医药行业工程设计资质">
                                                化工石化医药行业工程设计资质
                                            </a>
                                            <a   href="/cer/53" target="_blank" title="石油天然气（海洋石油）行业工程设计资质">
                                                石油天然气（海洋石油）行业工程设计资质
                                            </a>
                                            <a class="hot"  href="/cer/62" target="_blank" title="电力行业工程设计资质">
                                                电力行业工程设计资质
                                            </a>
                                            <a class="hot"  href="/cer/63" target="_blank" title="冶金行业工程设计资质">
                                                冶金行业工程设计资质
                                            </a>
                                            <a   href="/cer/106" target="_blank" title="军工行业工程设计资质">
                                                军工行业工程设计资质
                                            </a>
                                            <a   href="/cer/107" target="_blank" title="机械行业工程设计资质">
                                                机械行业工程设计资质
                                            </a>
                                            <a   href="/cer/108" target="_blank" title="商物粮行业工程设计资质">
                                                商物粮行业工程设计资质
                                            </a>
                                            <a   href="/cer/109" target="_blank" title="核工业行业工程设计资质">
                                                核工业行业工程设计资质
                                            </a>
                                            <a   href="/cer/110" target="_blank" title="电子通信广电行业/电子工程">
                                                电子通信广电行业/电子工程
                                            </a>
                                            <a   href="/cer/111" target="_blank" title="轻纺行业工程设计资质">
                                                轻纺行业工程设计资质
                                            </a>
                                            <a   href="/cer/112" target="_blank" title="建材行业工程设计资质">
                                                建材行业工程设计资质
                                            </a>
                                            <a   href="/cer/113" target="_blank" title="铁道行业工程设计资质">
                                                铁道行业工程设计资质
                                            </a>
                                            <a   href="/cer/114" target="_blank" title="公路行业工程设计资质">
                                                公路行业工程设计资质
                                            </a>
                                            <a   href="/cer/115" target="_blank" title="水运行业工程设计资质">
                                                水运行业工程设计资质
                                            </a>
                                            <a   href="/cer/116" target="_blank" title="民航行业工程设计资质">
                                                民航行业工程设计资质
                                            </a>
                                            <a class="hot"  href="/cer/117" target="_blank" title="市政行业/给排水工程设计资质">
                                                市政行业/给排水工程设计资质
                                            </a>
                                            <a   href="/cer/118" target="_blank" title="农林行业工程设计资质">
                                                农林行业工程设计资质
                                            </a>
                                            <a   href="/cer/119" target="_blank" title="水利行业工程设计资质">
                                                水利行业工程设计资质
                                            </a>
                                            <a   href="/cer/120" target="_blank" title="建设工程设计事务所资质">
                                                建设工程设计事务所资质
                                            </a>
                                            <a   href="/cer/211" target="_blank" title="海洋行业工程设计资质">
                                                海洋行业工程设计资质
                                            </a>
                                            <a   href="/cer/216" target="_blank" title="建筑行业/建筑幕墙工程设计专项">
                                                建筑行业/建筑幕墙工程设计专项
                                            </a>
                                            <a   href="/cer/217" target="_blank" title="建筑行业/轻型钢结构设计">
                                                建筑行业/轻型钢结构设计
                                            </a>
                                            <a   href="/cer/218" target="_blank" title="建筑行业/建筑智能化系统设计专项">
                                                建筑行业/建筑智能化系统设计专项
                                            </a>
                                            <a   href="/cer/219" target="_blank" title="建筑行业/照明工程设计专项">
                                                建筑行业/照明工程设计专项
                                            </a>
                                            <a   href="/cer/220" target="_blank" title="建筑行业/消防设施工程设计">
                                                建筑行业/消防设施工程设计
                                            </a>
                                            <a   href="/cer/221" target="_blank" title="建筑行业/建筑装饰工程设计">
                                                建筑行业/建筑装饰工程设计
                                            </a>
                                            <a   href="/cer/225" target="_blank" title="环境卫生工程设计资质">
                                                环境卫生工程设计资质
                                            </a>
                                            <a class="hot"  href="/cer/227" target="_blank" title="市政行业/热力工程专业设计">
                                                市政行业/热力工程专业设计
                                            </a>
                                            <a class="hot"  href="/cer/228" target="_blank" title="市政行业/市政道路工程设计">
                                                市政行业/市政道路工程设计
                                            </a>
                                            <a   href="/cer/229" target="_blank" title="市政行业/桥梁工程专业设计">
                                                市政行业/桥梁工程专业设计
                                            </a>
                                            <a   href="/cer/230" target="_blank" title="市政行业/城市隧道工程设计">
                                                市政行业/城市隧道工程设计
                                            </a>
                                            <a   href="/cer/231" target="_blank" title="市政行业/公共交通工程设计">
                                                市政行业/公共交通工程设计
                                            </a>
                                            <a   href="/cer/232" target="_blank" title="市政行业/载人隧道设计">
                                                市政行业/载人隧道设计
                                            </a>
                                            <a   href="/cer/233" target="_blank" title="市政行业/轨道交通工程专业设计">
                                                市政行业/轨道交通工程专业设计
                                            </a>
                                            <a   href="/cer/234" target="_blank" title="市政行业/人民防空工程设计资质">
                                                市政行业/人民防空工程设计资质
                                            </a>
                                            <a   href="/cer/238" target="_blank" title="煤炭行业/矿井">
                                                煤炭行业/矿井
                                            </a>
                                            <a   href="/cer/239" target="_blank" title="化工石化医药行业/炼油工程">
                                                化工石化医药行业/炼油工程
                                            </a>
                                            <a   href="/cer/240" target="_blank" title="石油天然气（海洋石油）行业/油田地面">
                                                石油天然气（海洋石油）行业/油田地面
                                            </a>
                                            <a   href="/cer/241" target="_blank" title="电力行业/火力发电">
                                                电力行业/火力发电
                                            </a>
                                            <a   href="/cer/242" target="_blank" title="冶金行业/金属冶炼">
                                                冶金行业/金属冶炼
                                            </a>
                                            <a   href="/cer/243" target="_blank" title="军工行业/导弹及火箭弹工程">
                                                军工行业/导弹及火箭弹工程
                                            </a>
                                            <a   href="/cer/244" target="_blank" title="机械行业/通用设备制造业工程">
                                                机械行业/通用设备制造业工程
                                            </a>
                                            <a   href="/cer/245" target="_blank" title="商物粮行业/冷冻冷藏工程">
                                                商物粮行业/冷冻冷藏工程
                                            </a>
                                            <a   href="/cer/246" target="_blank" title="核工业行业/反应堆工程设计">
                                                核工业行业/反应堆工程设计
                                            </a>
                                            <a   href="/cer/247" target="_blank" title="电子通信广电行业/通信工程">
                                                电子通信广电行业/通信工程
                                            </a>
                                            <a   href="/cer/248" target="_blank" title="建筑行业/建筑工程专业资质">
                                                建筑行业/建筑工程专业资质
                                            </a>
                                            <a   href="/cer/249" target="_blank" title="市政行业/环境卫生工程专业资质">
                                                市政行业/环境卫生工程专业资质
                                            </a>
                                            <a   href="/cer/250" target="_blank" title="市政行业工程设计资质">
                                                市政行业工程设计资质
                                            </a>
                                            <a   href="/cer/251" target="_blank" title="建材行业/水泥工程">
                                                建材行业/水泥工程
                                            </a>
                                            <a   href="/cer/252" target="_blank" title="铁道行业/桥梁">
                                                铁道行业/桥梁
                                            </a>
                                            <a   href="/cer/253" target="_blank" title="铁路行业/轨道">
                                                铁路行业/轨道
                                            </a>
                                            <a   href="/cer/254" target="_blank" title="公路行业/公路">
                                                公路行业/公路
                                            </a>
                                            <a   href="/cer/255" target="_blank" title="水运行业/港口工程">
                                                水运行业/港口工程
                                            </a>
                                            <a   href="/cer/256" target="_blank" title="民航行业/机场总体规划工程">
                                                民航行业/机场总体规划工程
                                            </a>
                                            <a   href="/cer/257" target="_blank" title="民航行业/场道、目视助航工程">
                                                民航行业/场道、目视助航工程
                                            </a>
                                            <a   href="/cer/258" target="_blank" title="市政行业/给水工程">
                                                市政行业/给水工程
                                            </a>
                                            <a   href="/cer/259" target="_blank" title="市政行业/排水工程">
                                                市政行业/排水工程
                                            </a>
                                            <a   href="/cer/260" target="_blank" title="市政行业/城镇燃气工程专业设计">
                                                市政行业/城镇燃气工程专业设计
                                            </a>
                                            <a   href="/cer/261" target="_blank" title="农林行业/农业综合开发生态工程">
                                                农林行业/农业综合开发生态工程
                                            </a>
                                            <a   href="/cer/262" target="_blank" title="农林行业/种植业工程">
                                                农林行业/种植业工程
                                            </a>
                                            <a   href="/cer/264" target="_blank" title="水利行业/水库枢纽">
                                                水利行业/水库枢纽
                                            </a>
                                            <a   href="/cer/265" target="_blank" title="水利行业/引调水">
                                                水利行业/引调水
                                            </a>
                                            <a   href="/cer/266" target="_blank" title="海洋行业/沿岸工程">
                                                海洋行业/沿岸工程
                                            </a>
                                            <a   href="/cer/267" target="_blank" title="海洋行业/离岸工程">
                                                海洋行业/离岸工程
                                            </a>
                                            <a   href="/cer/268" target="_blank" title="建筑行业/人防工程">
                                                建筑行业/人防工程
                                            </a>
                                        </dd>
                                    </dl>
                                    <a href="javascript:;" class="service-down">
                                        <img src="/statics/img/service-down.png" alt=""/>
                                    </a>
                                </div>
                                <div class="service-list service-list-4" >
                                    <dl>
                                        <dt>
                                            <span>
                                                环保水利类
                                            </span>
                                        </dt>
                                        <dd>
                                            <a class="hot"  href="/cer/18" target="_blank" title="水利水电工程施工总承包">
                                                水利水电工程施工总承包
                                            </a>
                                            <a class="hot"  href="/cer/29" target="_blank" title="水利水电机电安装工程专业承包">
                                                水利水电机电安装工程专业承包
                                            </a>
                                            <a   href="/cer/30" target="_blank" title="建设项目环境影响评价资质">
                                                建设项目环境影响评价资质
                                            </a>
                                            <a   href="/cer/32" target="_blank" title="水工金属结构制作与安装工程专业承包">
                                                水工金属结构制作与安装工程专业承包
                                            </a>
                                            <a class="hot"  href="/cer/33" target="_blank" title="河湖整治工程专业承包">
                                                河湖整治工程专业承包
                                            </a>
                                        </dd>
                                    </dl>
                                    <a href="javascript:;" class="service-down">
                                        <img src="/statics/img/service-down.png" alt=""/>
                                    </a>
                                </div>
                                <div class="service-list service-list-5" >
                                    <dl>
                                        <dt>
                                            <span>
                                                国防安全类
                                            </span>
                                        </dt>
                                        <dd>
                                            <a class="hot"  href="/cer/121" target="_blank" title="国军标认证（GJB9000）">
                                                国军标认证（GJB9000）
                                            </a>
                                            <a   href="/cer/122" target="_blank" title="武器装备科研生产许可证">
                                                武器装备科研生产许可证
                                            </a>
                                            <a   href="/cer/123" target="_blank" title="军工企业保密资质认证三级">
                                                军工企业保密资质认证三级
                                            </a>
                                            <a   href="/cer/124" target="_blank" title="军工企业保密资质认证二级">
                                                军工企业保密资质认证二级
                                            </a>
                                            <a   href="/cer/125" target="_blank" title="军工企业保密资质认证一级">
                                                军工企业保密资质认证一级
                                            </a>
                                            <a   href="/cer/126" target="_blank" title="军工电子装备科研生产许可">
                                                军工电子装备科研生产许可
                                            </a>
                                            <a class="hot"  href="/cer/127" target="_blank" title="装备承制单位资格认证">
                                                装备承制单位资格认证
                                            </a>
                                            <a   href="/cer/128" target="_blank" title="军工涉密业务咨询服务安全保密条件备案证书">
                                                军工涉密业务咨询服务安全保密条件备案证书
                                            </a>
                                            <a class="hot"  href="/cer/129" target="_blank" title="航空铜牌审批（CATA）">
                                                航空铜牌审批（CATA）
                                            </a>
                                        </dd>
                                    </dl>
                                    <a href="javascript:;" class="service-down">
                                        <img src="/statics/img/service-down.png" alt=""/>
                                    </a>
                                </div>
                                <div class="service-list service-list-6" >
                                    <dl>
                                        <dt>
                                            <span>
                                                工信通信类
                                            </span>
                                        </dt>
                                        <dd>
                                            <a   href="/cer/130" target="_blank" title="通信工程施工总承包">
                                                通信工程施工总承包
                                            </a>
                                            <a class="hot"  href="/cer/131" target="_blank" title="信息系统集成资质">
                                                信息系统集成资质
                                            </a>
                                            <a   href="/cer/132" target="_blank" title="涉密信息系统集成资质">
                                                涉密信息系统集成资质
                                            </a>
                                            <a   href="/cer/134" target="_blank" title="涉密信息系统集成资质（系统咨询）">
                                                涉密信息系统集成资质（系统咨询）
                                            </a>
                                            <a   href="/cer/135" target="_blank" title="涉密信息系统集成资质（工程监理）">
                                                涉密信息系统集成资质（工程监理）
                                            </a>
                                            <a   href="/cer/136" target="_blank" title="涉密信息系统集成资质（数据恢复）">
                                                涉密信息系统集成资质（数据恢复）
                                            </a>
                                            <a class="hot"  href="/cer/137" target="_blank" title="涉密信息系统集成资质（软件开发）">
                                                涉密信息系统集成资质（软件开发）
                                            </a>
                                            <a   href="/cer/138" target="_blank" title="涉密信息系统集成资质（运行维护）">
                                                涉密信息系统集成资质（运行维护）
                                            </a>
                                            <a   href="/cer/139" target="_blank" title="游戏版号">
                                                游戏版号
                                            </a>
                                            <a class="hot"  href="/cer/140" target="_blank" title="ISP许可证">
                                                ISP许可证
                                            </a>
                                            <a   href="/cer/141" target="_blank" title="全网SP许可证">
                                                全网SP许可证
                                            </a>
                                            <a class="hot"  href="/cer/142" target="_blank" title="ICP经营许可证">
                                                ICP经营许可证
                                            </a>
                                            <a   href="/cer/143" target="_blank" title=" IDC经营许可证">
                                                IDC经营许可证
                                            </a>
                                            <a class="hot"  href="/cer/144" target="_blank" title=" ICP证变更">
                                                ICP证变更
                                            </a>
                                            <a   href="/cer/145" target="_blank" title="信息安全服务资质认证">
                                                信息安全服务资质认证
                                            </a>
                                            <a class="hot"  href="/cer/146" target="_blank" title="信息安全管理体系（ISMS）认证 ">
                                                信息安全管理体系（ISMS）认证
                                            </a>
                                            <a   href="/cer/147" target="_blank" title="ITSS(信息技术服务标准) ">
                                                ITSS(信息技术服务标准)
                                            </a>
                                            <a   href="/cer/148" target="_blank" title="信息系统安全集成服务资质">
                                                信息系统安全集成服务资质
                                            </a>
                                            <a   href="/cer/149" target="_blank" title="信息安全服务资质（安全运维）">
                                                信息安全服务资质（安全运维）
                                            </a>
                                            <a   href="/cer/150" target="_blank" title="网络文化经营许可证（非游戏类）">
                                                网络文化经营许可证（非游戏类）
                                            </a>
                                            <a   href="/cer/151" target="_blank" title="网络文化经营许可证（游戏类）">
                                                网络文化经营许可证（游戏类）
                                            </a>
                                            <a   href="/cer/152" target="_blank" title="信息技术服务管理（ITSM）认证">
                                                信息技术服务管理（ITSM）认证
                                            </a>
                                            <a   href="/cer/153" target="_blank" title="ISO20000信息技术服务管理体系认证">
                                                ISO20000信息技术服务管理体系认证
                                            </a>
                                            <a   href="/cer/154" target="_blank" title="在线数据处理与交易业务（EDI）">
                                                在线数据处理与交易业务（EDI）
                                            </a>
                                            <a   href="/cer/155" target="_blank" title="信息安全服务资质（软件安全开发）">
                                                信息安全服务资质（软件安全开发）
                                            </a>
                                            <a   href="/cer/157" target="_blank" title="信息安全服务资质（灾难备份与恢复）">
                                                信息安全服务资质（灾难备份与恢复）
                                            </a>
                                            <a   href="/cer/158" target="_blank" title="ISO27001信息安全管理体系认证 ">
                                                ISO27001信息安全管理体系认证
                                            </a>
                                        </dd>
                                    </dl>
                                    <a href="javascript:;" class="service-down">
                                        <img src="/statics/img/service-down.png" alt=""/>
                                    </a>
                                </div>
                                <div class="service-list service-list-7" >
                                    <dl>
                                        <dt>
                                            <span>
                                                食药监管类
                                            </span>
                                        </dt>
                                        <dd>
                                            <a   href="/cer/159" target="_blank" title="农业野生植物进出口审批">
                                                农业野生植物进出口审批
                                            </a>
                                            <a   href="/cer/160" target="_blank" title="进口饲料和饲料添加剂续展登记">
                                                进口饲料和饲料添加剂续展登记
                                            </a>
                                            <a class="hot"  href="/cer/161" target="_blank" title="食品生产许可证">
                                                食品生产许可证
                                            </a>
                                            <a class="hot"  href="/cer/162" target="_blank" title="食品流通许可证">
                                                食品流通许可证
                                            </a>
                                            <a class="hot"  href="/cer/163" target="_blank" title="食品检验机构资质认定">
                                                食品检验机构资质认定
                                            </a>
                                            <a   href="/cer/164" target="_blank" title="ISO 13485认证">
                                                ISO 13485认证
                                            </a>
                                            <a   href="/cer/165" target="_blank" title="中药材生产质量管理规范(GP)认证">
                                                中药材生产质量管理规范(GP)认证
                                            </a>
                                            <a   href="/cer/166" target="_blank" title="药品GMP认证">
                                                药品GMP认证
                                            </a>
                                            <a   href="/cer/167" target="_blank" title="开办农药生产企业审批">
                                                开办农药生产企业审批
                                            </a>
                                            <a   href="/cer/168" target="_blank" title="农产品质量安全检测机构资格认定">
                                                农产品质量安全检测机构资格认定
                                            </a>
                                            <a   href="/cer/169" target="_blank" title="外籍医师在华短期执业许可">
                                                外籍医师在华短期执业许可
                                            </a>
                                            <a   href="/cer/170" target="_blank" title="进口特殊用途化妆品卫生行政许可">
                                                进口特殊用途化妆品卫生行政许可
                                            </a>
                                            <a   href="/cer/171" target="_blank" title="药物非临床研究质量管理规范(GLP)认证">
                                                药物非临床研究质量管理规范(GLP)认证
                                            </a>
                                            <a   href="/cer/172" target="_blank" title="补充保险经办机构资格认定">
                                                补充保险经办机构资格认定
                                            </a>
                                            <a   href="/cer/173" target="_blank" title="农业转基因生物安全管理审批">
                                                农业转基因生物安全管理审批
                                            </a>
                                            <a   href="/cer/212" target="_blank" title="药物临床试验机构资格认定">
                                                药物临床试验机构资格认定
                                            </a>
                                        </dd>
                                    </dl>
                                    <a href="javascript:;" class="service-down">
                                        <img src="/statics/img/service-down.png" alt=""/>
                                    </a>
                                </div>
                                <div class="service-list service-list-8" >
                                    <dl>
                                        <dt>
                                            <span>
                                                电监类
                                            </span>
                                        </dt>
                                        <dd>
                                            <a class="hot"  href="/cer/174" target="_blank" title="承装（修、试）电力设施许可证">
                                                承装（修、试）电力设施许可证
                                            </a>
                                            <a class="hot"  href="/cer/175" target="_blank" title="电力业务许可证">
                                                电力业务许可证
                                            </a>
                                            <a class="hot"  href="/cer/176" target="_blank" title="电力金具生产许可证">
                                                电力金具生产许可证
                                            </a>
                                        </dd>
                                    </dl>
                                    <a href="javascript:;" class="service-down">
                                        <img src="/statics/img/service-down.png" alt=""/>
                                    </a>
                                </div>
                                <div class="service-list service-list-9" >
                                    <dl>
                                        <dt>
                                            <span>
                                                人力广电安检类
                                            </span>
                                        </dt>
                                        <dd>
                                            <a class="hot"  href="/cer/177" target="_blank" title="人力资源服务许可证">
                                                人力资源服务许可证
                                            </a>
                                            <a   href="/cer/178" target="_blank" title="广播电视节目制作许可证">
                                                广播电视节目制作许可证
                                            </a>
                                            <a   href="/cer/179" target="_blank" title="煤矿生产能力核定 ">
                                                煤矿生产能力核定
                                            </a>
                                            <a class="hot"  href="/cer/180" target="_blank" title="煤矿企业安全生产许可证">
                                                煤矿企业安全生产许可证
                                            </a>
                                            <a   href="/cer/181" target="_blank" title="烟花爆竹安全生产许可证 ">
                                                烟花爆竹安全生产许可证
                                            </a>
                                            <a   href="/cer/182" target="_blank" title="非煤矿矿山企业和危险化学品">
                                                非煤矿矿山企业和危险化学品
                                            </a>
                                            <a   href="/cer/183" target="_blank" title="爆破器材生产企业安全生产许可证">
                                                爆破器材生产企业安全生产许可证
                                            </a>
                                            <a class="hot"  href="/cer/185" target="_blank" title="危险化学品经营许可证">
                                                危险化学品经营许可证
                                            </a>
                                        </dd>
                                    </dl>
                                    <a href="javascript:;" class="service-down">
                                        <img src="/statics/img/service-down.png" alt=""/>
                                    </a>
                                </div>
                                <div class="service-list service-list-10" >
                                    <dl>
                                        <dt>
                                            <span>
                                                质量认证类
                                            </span>
                                        </dt>
                                        <dd>
                                            <a class="hot"  href="/cer/186" target="_blank" title="ISO9001质量管理体系认证">
                                                ISO9001质量管理体系认证
                                            </a>
                                            <a   href="/cer/187" target="_blank" title="TL9000通讯质量管理体系认证">
                                                TL9000通讯质量管理体系认证
                                            </a>
                                            <a class="hot"  href="/cer/188" target="_blank" title="QS9000 质量体系">
                                                QS9000 质量体系
                                            </a>
                                            <a   href="/cer/189" target="_blank" title="HACCP 认证">
                                                HACCP 认证
                                            </a>
                                            <a class="hot"  href="/cer/190" target="_blank" title="能源管理体系认证 ">
                                                能源管理体系认证
                                            </a>
                                            <a   href="/cer/191" target="_blank" title="ISO10015认证">
                                                ISO10015认证
                                            </a>
                                            <a   href="/cer/192" target="_blank" title="HSE管理体系认证(中石化中石油) ">
                                                HSE管理体系认证(中石化中石油)
                                            </a>
                                            <a   href="/cer/193" target="_blank" title="ISO14001环境管理体系认证">
                                                ISO14001环境管理体系认证
                                            </a>
                                            <a class="hot"  href="/cer/194" target="_blank" title="企业荣誉证书资质（协会颁发）">
                                                企业荣誉证书资质（协会颁发）
                                            </a>
                                        </dd>
                                    </dl>
                                    <a href="javascript:;" class="service-down">
                                        <img src="/statics/img/service-down.png" alt=""/>
                                    </a>
                                </div>
                                <div class="service-list service-list-11" >
                                    <dl>
                                        <dt>
                                            <span>
                                                发改科技类
                                            </span>
                                        </dt>
                                        <dd>
                                            <a class="hot"  href="/cer/195" target="_blank" title="工程咨询单位资格认定">
                                                工程咨询单位资格认定
                                            </a>
                                            <a class="hot"  href="/cer/196" target="_blank" title="高新技术企业认证">
                                                高新技术企业认证
                                            </a>
                                            <a   href="/cer/197" target="_blank" title="国家企业技术中心认定">
                                                国家企业技术中心认定
                                            </a>
                                            <a   href="/cer/198" target="_blank" title="省/市级企业技术中心认定">
                                                省/市级企业技术中心认定
                                            </a>
                                            <a   href="/cer/199" target="_blank" title="信用评级">
                                                信用评级
                                            </a>
                                            <a   href="/cer/200" target="_blank" title="政府采购项目咨询">
                                                政府采购项目咨询
                                            </a>
                                            <a class="hot"  href="/cer/201" target="_blank" title="ISO17025/ISO15189实验室国家认可">
                                                ISO17025/ISO15189实验室国家认可
                                            </a>
                                        </dd>
                                    </dl>
                                    <a href="javascript:;" class="service-down">
                                        <img src="/statics/img/service-down.png" alt=""/>
                                    </a>
                                </div>
                                <div class="service-list service-list-12" >
                                    <dl>
                                        <dt>
                                            <span>
                                                勘察类
                                            </span>
                                        </dt>
                                        <dd>
                                            <a class="hot"  href="/cer/203" target="_blank" title="水文地质勘察专业资质">
                                                水文地质勘察专业资质
                                            </a>
                                            <a   href="/cer/213" target="_blank" title="工程测量专业资质">
                                                工程测量专业资质
                                            </a>
                                            <a   href="/cer/214" target="_blank" title="工程钻探勘察">
                                                工程钻探勘察
                                            </a>
                                            <a class="hot"  href="/cer/215" target="_blank" title="工程凿井勘察">
                                                工程凿井勘察
                                            </a>
                                            <a class="hot"  href="/cer/236" target="_blank" title="岩土工程勘察设计专业资质">
                                                岩土工程勘察设计专业资质
                                            </a>
                                            <a   href="/cer/237" target="_blank" title="岩土工程物探测试验检测监测专业资质">
                                                岩土工程物探测试验检测监测专业资质
                                            </a>
                                            <a   href="/cer/269" target="_blank" title="工程勘察设计综合资质">
                                                工程勘察设计综合资质
                                            </a>
                                            <a   href="/cer/270" target="_blank" title="岩土工程专业资质">
                                                岩土工程专业资质
                                            </a>
                                        </dd>
                                    </dl>
                                    <a href="javascript:;" class="service-down">
                                        <img src="/statics/img/service-down.png" alt=""/>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--
                            <div class="section-index-banner">
                                <ul>
                                    <li>
                                        <a href="javascript:;">
                                            <img src="/statics/img/service-banner-1.jpg" alt=""/>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <img src="/statics/img/service-banner-2.jpg" alt=""/>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        -->
                        <div class="section-index-title section-index-title1">
                            <h2>
                                转让求购专区
                                <span>
                                    全国资源 海量用户 平台保证承担
                                </span>
                            </h2>
                            <a target="_blank" href="/transfer" class="more">
                                更多>
                            </a>
                        </div>
                        <div class="section-index-forum">
                            <div class="forum-left">
                                <a href="javascript:;" class="forum-guide left">
                                </a>
                                <a href="javascript:;" class="forum-guide right">
                                </a>
                                <div class="forum-main">
                                    <div class="forum-box">
                                        <div class="ul">
                                            <div class="forum-list">
                                                <a target="_blank" href="/transfer/410">
                                                    <h5>
                                                        深圳建筑公司建筑总包一级二级、建筑专包一级转让
                                                    </h5>
                                                    <h4>
                                                        价格：
                                                        <em>
                                                            面议
                                                        </em>
                                                        |
                                                        <span class="forum-list-btn">
                                                            查看详情
                                                        </span>
                                                    </h4>
                                                    <span class="forum-state-in">
                                                        转让
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="forum-list">
                                                <a target="_blank" href="/transfer/409">
                                                    <h5>
                                                        低价转让二级的装修、幕墙等资质，需要可以联系
                                                    </h5>
                                                    <h4>
                                                        价格：
                                                        <em>
                                                            面议
                                                        </em>
                                                        |
                                                        <span class="forum-list-btn">
                                                            查看详情
                                                        </span>
                                                    </h4>
                                                    <span class="forum-state-in">
                                                        转让
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="forum-list">
                                                <a target="_blank" href="/transfer/408">
                                                    <h5>
                                                        出房二市二资质，需要的可以联系我
                                                    </h5>
                                                    <h4>
                                                        价格：
                                                        <em>
                                                            面议
                                                        </em>
                                                        |
                                                        <span class="forum-list-btn">
                                                            查看详情
                                                        </span>
                                                    </h4>
                                                    <span class="forum-state-in">
                                                        转让
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="forum-list">
                                                <a target="_blank" href="/transfer/407">
                                                    <h5>
                                                        山东市政公用工程三级公路
                                                    </h5>
                                                    <h4>
                                                        价格：
                                                        <em>
                                                            面议
                                                        </em>
                                                        |
                                                        <span class="forum-list-btn">
                                                            查看详情
                                                        </span>
                                                    </h4>
                                                    <span class="forum-state-in">
                                                        转让
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ul">
                                            <div class="forum-list">
                                                <a target="_blank" href="/transfer/406">
                                                    <h5>
                                                        收购建筑二级资质公司
                                                    </h5>
                                                    <h4>
                                                        价格：
                                                        <em>
                                                            6万元
                                                        </em>
                                                        |
                                                        <span class="forum-list-btn">
                                                            查看详情
                                                        </span>
                                                    </h4>
                                                    <span class="forum-state-out">
                                                        求购
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="forum-list">
                                                <a target="_blank" href="/transfer/404">
                                                    <h5>
                                                        求购现货水利二级房建二级
                                                    </h5>
                                                    <h4>
                                                        价格：
                                                        <em>
                                                            面议
                                                        </em>
                                                        |
                                                        <span class="forum-list-btn">
                                                            查看详情
                                                        </span>
                                                    </h4>
                                                    <span class="forum-state-out">
                                                        求购
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="forum-list">
                                                <a target="_blank" href="/transfer/393">
                                                    <h5>
                                                        收购全国建筑工程公司
                                                    </h5>
                                                    <h4>
                                                        价格：
                                                        <em>
                                                            面议
                                                        </em>
                                                        |
                                                        <span class="forum-list-btn">
                                                            查看详情
                                                        </span>
                                                    </h4>
                                                    <span class="forum-state-out">
                                                        求购
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="forum-list">
                                                <a target="_blank" href="/transfer/392">
                                                    <h5>
                                                        求购有电力工程安装资质的公司
                                                    </h5>
                                                    <h4>
                                                        价格：
                                                        <em>
                                                            面议
                                                        </em>
                                                        |
                                                        <span class="forum-list-btn">
                                                            查看详情
                                                        </span>
                                                    </h4>
                                                    <span class="forum-state-out">
                                                        求购
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="forum-box">
                                        <div class="ul">
                                            <div class="forum-list">
                                                <a target="_blank" href="/transfer/405">
                                                    <h5>
                                                        转让市政公用工程水利水电工程总承包资质
                                                    </h5>
                                                    <h4>
                                                        价格：
                                                        <em>
                                                            面议
                                                        </em>
                                                        |
                                                        <span class="forum-list-btn">
                                                            查看详情
                                                        </span>
                                                    </h4>
                                                    <span class="forum-state-in">
                                                        转让
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="forum-list">
                                                <a target="_blank" href="/transfer/403">
                                                    <h5>
                                                        转让广东省房建、市政、水利、公路一级施工资质
                                                    </h5>
                                                    <h4>
                                                        价格：
                                                        <em>
                                                            面议
                                                        </em>
                                                        |
                                                        <span class="forum-list-btn">
                                                            查看详情
                                                        </span>
                                                    </h4>
                                                    <span class="forum-state-in">
                                                        转让
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="forum-list">
                                                <a target="_blank" href="/transfer/402">
                                                    <h5>
                                                        总包一级二级、建筑专包一级转让
                                                    </h5>
                                                    <h4>
                                                        价格：
                                                        <em>
                                                            面议
                                                        </em>
                                                        |
                                                        <span class="forum-list-btn">
                                                            查看详情
                                                        </span>
                                                    </h4>
                                                    <span class="forum-state-in">
                                                        转让
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="forum-list">
                                                <a target="_blank" href="/transfer/401">
                                                    <h5>
                                                        山东市政公用工程三级公路
                                                    </h5>
                                                    <h4>
                                                        价格：
                                                        <em>
                                                            面议
                                                        </em>
                                                        |
                                                        <span class="forum-list-btn">
                                                            查看详情
                                                        </span>
                                                    </h4>
                                                    <span class="forum-state-in">
                                                        转让
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ul">
                                            <div class="forum-list">
                                                <a target="_blank" href="/transfer/391">
                                                    <h5>
                                                        需要注册资金在200万左右的公司
                                                    </h5>
                                                    <h4>
                                                        价格：
                                                        <em>
                                                            面议
                                                        </em>
                                                        |
                                                        <span class="forum-list-btn">
                                                            查看详情
                                                        </span>
                                                    </h4>
                                                    <span class="forum-state-out">
                                                        求购
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="forum-list">
                                                <a target="_blank" href="/transfer/390">
                                                    <h5>
                                                        全国范围收一家会计师事务所
                                                    </h5>
                                                    <h4>
                                                        价格：
                                                        <em>
                                                            面议
                                                        </em>
                                                        |
                                                        <span class="forum-list-btn">
                                                            查看详情
                                                        </span>
                                                    </h4>
                                                    <span class="forum-state-out">
                                                        求购
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="forum-list">
                                                <a target="_blank" href="/transfer/385">
                                                    <h5>
                                                        收水利总承包二级
                                                    </h5>
                                                    <h4>
                                                        价格：
                                                        <em>
                                                            100万元
                                                        </em>
                                                        |
                                                        <span class="forum-list-btn">
                                                            查看详情
                                                        </span>
                                                    </h4>
                                                    <span class="forum-state-out">
                                                        求购
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="forum-list">
                                                <a target="_blank" href="/transfer/384">
                                                    <h5>
                                                        收监理房建市政乙级
                                                    </h5>
                                                    <h4>
                                                        价格：
                                                        <em>
                                                            100万元
                                                        </em>
                                                        |
                                                        <span class="forum-list-btn">
                                                            查看详情
                                                        </span>
                                                    </h4>
                                                    <span class="forum-state-out">
                                                        求购
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-index-question">
                            <dl>
                                <dt>
                                    <a href="/faq/m-1" target="_blank">
                                        <img src="/statics/img/question-title.png" alt=""/>
                                        <h2>
                                            常见问题
                                        </h2>
                                        <span>
                                            查看更多>
                                        </span>
                                    </a>
                                </dt>
                                <dd>
                                    <ul>
                                        <li>
                                            <a href="/faq/m-1-181">
                                                建筑施工企业怎么办理安全生产许可证？
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/faq/m-1-180">
                                                关于简化建筑业企业资质标准部分指标的通知
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/faq/m-1-178">
                                                电力工程施工总承包企业资质等级标准
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/faq/m-1-177">
                                                公路工程施工总承包企业资质等级标准
                                            </a>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <a href="/faq/m-6-89">
                                                全国一级建造师重新注册流程
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/faq/m-6-88">
                                                一级建造师申请变更的注册程序
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/faq/m-6-87">
                                                一级建造师增项注册流程
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/faq/m-6-86">
                                                二级建造师挂靠项目一定要有安全B证吗?
                                            </a>
                                        </li>
                                    </ul>
                                </dd>
                            </dl>
                            <div class="section-banner">
                                <a target="_blank" href="/about">
                                    <img src="/statics/img/section-banner.png" alt=""/>
                                    <h3>
                                        <span>
                                            31家分部遍布全国
                                        </span>
                                        <em>
                                            规模庞大   实力保障
                                        </em>
                                    </h3>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-index">
                    <div class="section-index-box">
                        <div class="section-index-title section-index-title02">
                            <h2>
                                人才聘请
                            </h2>
                            <a target="_blank" href="/partime" class="more">
                                更多>
                            </a>
                        </div>
                        <div class="section-index-info">
                            <div class="info-list-banner">
                                <a target="_blank" href="/partime/search?visit_type=p">
                                    <img src="/statics/img/info-banner.jpg" alt=""/>
                                    <h2>
                                        真实简历
                                    </h2>
                                </a>
                            </div>
                            <div class="info-list info-list-1">
                                <dl>
                                    <dt>
                                        <a target="_blank" href="/partime/s-1">
                                            一级建造师
                                        </a>
                                    </dt>
                                    <dd>
                                        <a target="_blank" class="hot" href="/partime/s-1-2">
                                            建筑工程(949)
                                        </a>
                                        <a target="_blank"  href="/partime/s-1-3">
                                            机电工程(927)
                                        </a>
                                        <a target="_blank"  href="/partime/s-1-6">
                                            市政公用(1401)
                                        </a>
                                        <a target="_blank"  href="/partime/s-1-7">
                                            水利水电(656)
                                        </a>
                                        <a target="_blank"  href="/partime/s-1-8">
                                            公路工程(1291)
                                        </a>
                                        <a target="_blank"  href="/partime/s-1-9">
                                            矿业工程(55)
                                        </a>
                                        <a target="_blank"  href="/partime/s-1-10">
                                            铁路工程(250)
                                        </a>
                                        <a target="_blank"  href="/partime/s-1-11">
                                            民航机场(154)
                                        </a>
                                        <a target="_blank"  href="/partime/s-1-12">
                                            通信与广电(150)
                                        </a>
                                        <a target="_blank"  href="/partime/s-1-13">
                                            港口与航道(108)
                                        </a>
                                    </dd>
                                    <a href="javascript:;" class="info-down">
                                        <img src="/statics/img/info-down.png" alt=""/>
                                    </a>
                                    <span class="info-count">
                                        5941
                                    </span>
                                </dl>
                            </div>
                            <div class="info-list info-list-2">
                                <dl>
                                    <dt>
                                        <a target="_blank" href="/partime/s-4">
                                            二级建造师
                                        </a>
                                    </dt>
                                    <dd>
                                        <a target="_blank"  href="/partime/s-4-5">
                                            建筑工程(1254)
                                        </a>
                                        <a target="_blank" class="hot" href="/partime/s-4-14">
                                            机电工程(1221)
                                        </a>
                                        <a target="_blank" class="hot" href="/partime/s-4-15">
                                            市政公用(1515)
                                        </a>
                                        <a target="_blank" class="hot" href="/partime/s-4-16">
                                            水利水电(751)
                                        </a>
                                        <a target="_blank" class="hot" href="/partime/s-4-17">
                                            公路工程(601)
                                        </a>
                                        <a target="_blank"  href="/partime/s-4-18">
                                            矿业工程(25)
                                        </a>
                                    </dd>
                                    <a href="javascript:;" class="info-down">
                                        <img src="/statics/img/info-down.png" alt=""/>
                                    </a>
                                    <span class="info-count">
                                        5367
                                    </span>
                                </dl>
                            </div>
                            <div class="info-list info-list-3">
                                <dl>
                                    <dt>
                                        <a target="_blank" href="/partime/s-19">
                                            结构工程师
                                        </a>
                                    </dt>
                                    <dd>
                                        <a target="_blank"  href="/partime/s-19-20">
                                            一级结构师(415)
                                        </a>
                                        <a target="_blank"  href="/partime/s-19-21">
                                            二级结构师(152)
                                        </a>
                                    </dd>
                                    <a href="javascript:;" class="info-down">
                                        <img src="/statics/img/info-down.png" alt=""/>
                                    </a>
                                    <span class="info-count">
                                        567
                                    </span>
                                </dl>
                            </div>
                            <div class="info-list info-list-4">
                                <dl>
                                    <dt>
                                        <a target="_blank" href="/partime/s-22">
                                            造价工程师
                                        </a>
                                    </dt>
                                    <dd>
                                        <a target="_blank"  href="/partime/s-22-23">
                                            建设部(1540)
                                        </a>
                                        <a target="_blank"  href="/partime/s-22-24">
                                            交通部(18)
                                        </a>
                                        <a target="_blank"  href="/partime/s-22-25">
                                            水利部(7)
                                        </a>
                                    </dd>
                                    <a href="javascript:;" class="info-down">
                                        <img src="/statics/img/info-down.png" alt=""/>
                                    </a>
                                    <span class="info-count">
                                        1565
                                    </span>
                                </dl>
                            </div>
                            <div class="info-list info-list-5">
                                <dl>
                                    <dt>
                                        <a target="_blank" href="/partime/s-26">
                                            注册建筑师
                                        </a>
                                    </dt>
                                    <dd>
                                        <a target="_blank"  href="/partime/s-26-27">
                                            一级建筑师(278)
                                        </a>
                                        <a target="_blank"  href="/partime/s-26-28">
                                            二级建筑师(26)
                                        </a>
                                    </dd>
                                    <a href="javascript:;" class="info-down">
                                        <img src="/statics/img/info-down.png" alt=""/>
                                    </a>
                                    <span class="info-count">
                                        304
                                    </span>
                                </dl>
                            </div>
                            <div class="info-list info-list-6">
                                <dl>
                                    <dt>
                                        <a target="_blank" href="/partime/s-29">
                                            电气工程师
                                        </a>
                                    </dt>
                                    <dd>
                                        <a target="_blank"  href="/partime/s-29-30">
                                            供配电(84)
                                        </a>
                                        <a target="_blank" class="hot" href="/partime/s-29-31">
                                            发输变电(96)
                                        </a>
                                    </dd>
                                    <a href="javascript:;" class="info-down">
                                        <img src="/statics/img/info-down.png" alt=""/>
                                    </a>
                                    <span class="info-count">
                                        180
                                    </span>
                                </dl>
                            </div>
                            <div class="info-list info-list-7">
                                <dl>
                                    <dt>
                                        <a target="_blank" href="/partime/s-32">
                                            公用设备工程师
                                        </a>
                                    </dt>
                                    <dd>
                                        <a target="_blank"  href="/partime/s-32-33">
                                            暖通空调(103)
                                        </a>
                                        <a target="_blank" class="hot" href="/partime/s-32-34">
                                            动力(53)
                                        </a>
                                        <a target="_blank"  href="/partime/s-32-35">
                                            给水排水(135)
                                        </a>
                                    </dd>
                                    <a href="javascript:;" class="info-down">
                                        <img src="/statics/img/info-down.png" alt=""/>
                                    </a>
                                    <span class="info-count">
                                        291
                                    </span>
                                </dl>
                            </div>
                            <div class="info-list info-list-8">
                                <dl>
                                    <dt>
                                        <a target="_blank" href="/partime/s-36">
                                            监理工程师
                                        </a>
                                    </dt>
                                    <dd>
                                        <a target="_blank"  href="/partime/s-36-37">
                                            建设部(698)
                                        </a>
                                        <a target="_blank"  href="/partime/s-36-38">
                                            水利部(23)
                                        </a>
                                        <a target="_blank"  href="/partime/s-36-39">
                                            交通部(13)
                                        </a>
                                    </dd>
                                    <a href="javascript:;" class="info-down">
                                        <img src="/statics/img/info-down.png" alt=""/>
                                    </a>
                                    <span class="info-count">
                                        734
                                    </span>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-index">
                    <div class="section-index-box">
                        <div class="section-index-edu">
                            <div class="section-index-left">
                                <div class="section-index-title">
                                    <h2>
                                        工程师培养
                                    </h2>
                                    <a href="/edu/px" class="more" target="_blank">
                                        更多>
                                    </a>
                                </div>
                                <div class="edu-main">
                                    <div class="edu-banner">
                                        <a href="/edu/px" target="_blank">
                                            <img src="/statics/img/edu-banner.jpg" alt=""/>
                                            <h2>
                                                中国建筑教学领航者
                                            </h2>
                                        </a>
                                    </div>
                                    <div class="edu-list edu-list-1">
                                        <a href="/edu/yijian" target="_blank">
                                            <h3>
                                                一级建造师
                                            </h3>
                                            <span>
                                                考试入口
                                            </span>
                                        </a>
                                    </div>
                                    <div class="edu-list edu-list-2">
                                        <a href="/edu/erjian" target="_blank">
                                            <h3>
                                                二级建造师
                                            </h3>
                                            <span>
                                                考试入口
                                            </span>
                                        </a>
                                    </div>
                                    <div class="edu-list edu-list-3">
                                        <a href="/edu/xiaofang" target="_blank">
                                            <h3>
                                                一级消防工程师
                                            </h3>
                                            <span>
                                                考试入口
                                            </span>
                                        </a>
                                    </div>
                                    <div class="edu-list edu-list-4">
                                        <a href="/edu/zaojia" target="_blank">
                                            <h3>
                                                造价工程师
                                            </h3>
                                            <span>
                                                考试入口
                                            </span>
                                        </a>
                                    </div>
                                    <div class="edu-menu">
                                        <a href="/edu/1" class="edu-menu-list1" target="_blank">
                                            <span>
                                                教学课程
                                            </span>
                                        </a>
                                        <a href="/edu/2" class="edu-menu-list2" target="_blank">
                                            <span>
                                                网络教程
                                            </span>
                                        </a>
                                        <a href="/edu/px" class="edu-menu-list3" target="_blank">
                                            <span>
                                                名师团队
                                            </span>
                                        </a>
                                        <a href="/tiku" class="edu-menu-list4" target="_blank">
                                            <span>
                                                学业在线
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="section-index-right">
                                <div class="section-index-title">
                                    <h2>
                                        人才培养
                                    </h2>
                                    <a href="/edu" class="more" target="_blank">
                                        更多>
                                    </a>
                                </div>
                                <div class="edu-main">
                                    <div class="edu-img">
                                        <ul class="banner-list-img" id="banner-img-02">
                                            <li style="background-image: url(/upload/push/1712/dg5n7_q092.jpg);">
                                                <a href="javascript:void(0);" target="_blank">
                                                </a>
                                            </li>
                                            <li style="background-image: url(/upload/edu/1708/banner2.jpg);">
                                                <a href="javascript:void(0);" target="_blank">
                                                </a>
                                            </li>
                                            <li style="background-image: url(/upload/push/1712/dg5m7_8o32.jpg);">
                                                <a href="javascript:void(0);" target="_blank">
                                                </a>
                                            </li>
                                        </ul>
                                        <ul class="banner-list-hover" id="banner-hover-02">
                                            <li>
                                            </li>
                                        </ul>
                                    </div>
                                    <ul class="edu-img-list">
                                        <li>
                                            <a href="/edu/school#" target="_blank">
                                                中国石油
                                            </a>
                                            <a href="/edu/school#a" target="_blank">
                                                中国地质
                                            </a>
                                            <a href="/edu/school#b" target="_blank">
                                                大连理工
                                            </a>
                                            <a href="/edu/school#c" target="_blank">
                                                中国农业
                                            </a>
                                            <a href="/edu/school#d" target="_blank">
                                                中国医科
                                            </a>
                                            <a href="/edu/school#e" target="_blank">
                                                电子科技
                                            </a>
                                            <a href="/edu/school#f" target="_blank">
                                                四川农业
                                            </a>
                                            <a href="/edu/school#g" target="_blank">
                                                陕西师范
                                            </a>
                                            <a href="/edu/school" target="_blank" class="more">
                                                更多高校>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-index">
                    <div class="section-index-box">
                        <div class="section-index-title section-index-title05">
                            <h2>
                                行家解读
                            </h2>
                        </div>
                        <div class="section-index-news">
                            <div class="news-list-main">
                                <div class="news-list-img">
                                    <a href="/news/m-2" target="_blank">
                                        <img src="/statics/img/newsImg1.jpg" alt=""/>
                                        <h3>
                                            政策动态
                                        </h3>
                                        <span>
                                            更多>
                                        </span>
                                    </a>
                                </div>
                                <dl>
                                    <dd>
                                        <ul class="news-list">
                                            <li>
                                                <a target="_blank" href="/view/4912">
                                                    两会声音 | 刘同德：启动国家推进绿色建
                                                </a>
                                                <span>
                                                    2018.03.14
                                                </span>
                                            </li>
                                            <li>
                                                <a target="_blank" href="/view/4906">
                                                    2016年建设工程监理统计公报
                                                </a>
                                                <span>
                                                    2018.03.13
                                                </span>
                                            </li>
                                            <li>
                                                <a target="_blank" href="/view/4905">
                                                    222个住房城乡建设行业文件废止涉建筑劳
                                                </a>
                                                <span>
                                                    2018.03.13
                                                </span>
                                            </li>
                                            <li>
                                                <a target="_blank" href="/view/4903">
                                                    深圳：这4家建筑业企业被查处
                                                </a>
                                                <span>
                                                    2018.03.12
                                                </span>
                                            </li>
                                            <li>
                                                <a target="_blank" href="/view/4900">
                                                    陕西省建筑业总体规模持续扩大支柱产业地位
                                                </a>
                                                <span>
                                                    2018.03.12
                                                </span>
                                            </li>
                                        </ul>
                                    </dd>
                                </dl>
                            </div>
                            <div class="news-list-main">
                                <div class="news-list-img">
                                    <a href="/news/m-3" target="_blank">
                                        <img src="/statics/img/newsImg2.jpg" alt=""/>
                                        <h3>
                                            行业资讯
                                        </h3>
                                        <span>
                                            更多>
                                        </span>
                                    </a>
                                </div>
                                <dl>
                                    <dd>
                                        <ul class="news-list">
                                            <li>
                                                <a target="_blank" href="/view/4911">
                                                    建筑承包资质代办各环节要注意什么？这4点
                                                </a>
                                                <span>
                                                    2018.03.14
                                                </span>
                                            </li>
                                            <li>
                                                <a target="_blank" href="/view/4899">
                                                    建筑市场信用管理暂行办法明年施行
                                                </a>
                                                <span>
                                                    2018.03.12
                                                </span>
                                            </li>
                                            <li>
                                                <a target="_blank" href="/view/4895">
                                                    取消建筑企业分级资质会有什么影响
                                                </a>
                                                <span>
                                                    2018.03.10
                                                </span>
                                            </li>
                                            <li>
                                                <a target="_blank" href="/view/4890">
                                                    建筑企业工程行业的资质办理
                                                </a>
                                                <span>
                                                    2018.03.10
                                                </span>
                                            </li>
                                            <li>
                                                <a target="_blank" href="/view/4885">
                                                    建筑资质办理那些事儿代办公司为你解答
                                                </a>
                                                <span>
                                                    2018.03.09
                                                </span>
                                            </li>
                                        </ul>
                                    </dd>
                                </dl>
                            </div>
                            <div class="news-list-main">
                                <div class="news-list-img">
                                    <a href="/news/m-5" target="_blank">
                                        <img src="/statics/img/newsImg3.jpg" alt=""/>
                                        <h3>
                                            办事指南
                                        </h3>
                                        <span>
                                            更多>
                                        </span>
                                    </a>
                                </div>
                                <dl>
                                    <dd>
                                        <ul class="news-list">
                                            <li>
                                                <a target="_blank" href="/view/4908">
                                                    关于对杭州二建建设有限公司的行政处罚决定
                                                </a>
                                                <span>
                                                    2018.03.13
                                                </span>
                                            </li>
                                            <li>
                                                <a target="_blank" href="/view/4902">
                                                    在哪办理起重资质
                                                </a>
                                                <span>
                                                    2018.03.12
                                                </span>
                                            </li>
                                            <li>
                                                <a target="_blank" href="/view/4901">
                                                    什么是起重资质必须要办吗
                                                </a>
                                                <span>
                                                    2018.03.12
                                                </span>
                                            </li>
                                            <li>
                                                <a target="_blank" href="/view/4892">
                                                    怎样办理工程行业咨询资质
                                                </a>
                                                <span>
                                                    2018.03.10
                                                </span>
                                            </li>
                                            <li>
                                                <a target="_blank" href="/view/4891">
                                                    园林绿化资质找大志天成集团来办
                                                </a>
                                                <span>
                                                    2018.03.10
                                                </span>
                                            </li>
                                        </ul>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    /*//图片验证码
                    $(function () {
                    $(".trans").click(function(){
                    $.get('/data/captcha',{refresh:''},function(data){
                    evaldata=eval(data);
                    $("#code_img").attr('src',evaldata.url);
                    });
                    });
                    });*/
                </script>
            </div>
        <!-- 左侧悬浮框 -->
        <div class="fixed-leftbox">
            <div class="fixed-left">
                <ul class="hphone">
                    <li>
                        <div>
                            免费热线
                        </div>
                        <div>
                            400-005-8178
                        </div>
                    </li>
                    <li>
                        <div>
                            上海总部
                        </div>
                        <div>
                            400-005-8178
                        </div>
                    </li>
                    <li>
                        <div>上海分部</div>
                        <div>
                            400-005-8178
                        </div>
                    </li>
                </ul>
                <ul class="list">
                    <li>
                        <a rel="nofollow" href="#" target="_blank">
                            建筑资质
                        </a>
                    </li>
                    <li>
                        <a rel="nofollow" href="#" target="_blank">
                            施工资质
                        </a>
                    </li>
                    <li>
                        <a rel="nofollow" href="#" target="_blank">
                            设计资质
                        </a>
                    </li>
                    <li>
                        <a rel="nofollow" href="#" target="_blank">
                            市政资质
                        </a>
                    </li>
                    <li>
                        <a rel="nofollow" href="#" target="_blank">
                            通信资质
                        </a>
                    </li>
                    <li>
                        <a rel="nofollow" href="#" target="_blank">
                            机电资质
                        </a>
                    </li>
                    <li>
                        <a rel="nofollow" href="#" target="_blank">
                            其他资质
                        </a>
                    </li>
                </ul>
                <ul class="botlist">
                    <li>
                        <a rel="nofollow" href="#" target="_blank">
                            立即在线咨询
                        </a>
                    </li>
                    <li class="phone" style="display: none;">
                        <a rel="nofollow" href="javascript:" class="freephone" target="_blank">
                            立即免费通话
                        </a>
                        <div class="fixed-phone">
                            <div>
                                <input type="text" name="phone" class="list-input-txt info-tel" placeholder="请输入您的电话号码" id="telInput"/>
                            </div>
                            <div>
                                <input type="submit" class="list-input-sub post_report" value="立即免费通话" id="callBtn"/>
                            </div>
                            <div>
                                或拨打
                                <span>
                                    400-005-8178
                                </span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="fixed-bar-top">
            </div>
        </div>
        <!-- 左侧电话 -->
        <script>
            document.getElementById("callBtn").onclick = function () {
            lxb.call(document.getElementById("telInput"));
            };
        </script>
            
<?php include template("content","footer"); ?>