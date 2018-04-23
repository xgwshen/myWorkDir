<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link type="text/css" rel="stylesheet" href="/statics/css/zz_search.css"/>
<link type="text/css" rel="stylesheet" href="/statics/css/affi_card.css"/>
<style type="text/css">
    .wrapper{background-color: #FAFAFA;}
</style>
<div class="wrapper ">
    <div class="wrapper-main">
        <section class="zzsearch transfer">
            <div class="search_wrapper">
                <!-- 所在位置 -->
                <h2 class="search_location amrgin">
                    您所在的位置：
                    <a href="/">
                        首页
                    </a>
                    &gt;
                    <a href="/index.php?m=content&c=index&a=lists&catid=10">
                        交易大厅
                    </a>
                </h2>
                <div class="search_menu">
                    <div class="search_submenu">
                        <div class="search_submenu_list borline">
                            <div class="">
                                需求类别：
                            </div>
                            <ul class="search_submenu_ul">
                                  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=cd609b7b9ac4fadeb42b5e7f97a5f535&action=category&catid=%24catid&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$catid,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                                     <?php $i=0;?>
                                     <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                     
                                <li>
                                    <a href="<?php echo $r['url'];?>" class="<?php if($i==0) { ?>search_txt_current<?php } ?>">
                                        <?php echo $r['catname'];?>
                                    </a>
                                </li>
                                <?php $i++; ?>
   <?php $n++;}unset($n); ?>
   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>                            

                            </ul>
                        </div>
                        <div class="search_submenu_list martop20">
                            <div class="">
                                服务省份：
                            </div>
                            <ul class="search_submenu_ul search_city">
                                

                                <li>
                                    <a href="<?php echo $url;?>" class="<?php if(intval($_GET['area'])==0) { ?>search_txt_current<?php } ?>">
                                        不限
                                    </a>
                                </li>
                               <?php $option = array('北京','四川','江苏','上海','广东','山东','河北','浙江','陕西','安徽','重庆','湖北','河南','福建','天津','湖南','山西','江西','广西','辽宁','贵州','黑龙江','云南','甘肃','吉林','内蒙古','青海','海南','宁夏','新疆','西藏');?>
<?php $n=1; if(is_array($option)) foreach($option AS $key => $val) { ?>
                               <li>
                                    <a href="<?php echo $url;?>&area=<?php echo $key+1;?>" 
                                    class="<?php if(intval($_GET['area'])-1==$key) { ?>search_txt_current<?php } ?>">
                                        <?php echo $val;?>
                                    </a>
                                </li>
<?php $n++;}unset($n); ?>

                            </ul>
                        </div>
                    </div>
                    <div class="clear clearfix">
                    </div>
                </div>
                <!-- menu main -->
                <div class="martop40">
                    <div class="search_table_main">
                        <!-- title -->
                        <form action="" method="get" id="searchForm">
                            <div class="search_main_title transfer_main_title">
                                <!--
                                    <span class="active">
                                        综合
                                    </span>
                                -->
                                <a class="active" href="#">
                                    综合
                                </a>
                                <a href="#">
                                    时间
                                </a>
                                <a href="#">
                                    价格
                                </a>
                                <span class="searchBox img">
                                    <input name="keyword" id="search" placeholder="输入关键词快速查找" type="search"/>
                                    <span id="btn">
                                    </span>
                                </span>
                                <label>
                                    搜索
                                </label>
                            </div>
                        </form>
                        <div class="search_tab">
                            <!-- tab 个人 -->
                            <div class="search_tab_user">
                                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=8a01b777b595a1231f07a92bec212a3d&action=lists&catid=%24catid&num=25&order=id+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>'25',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                <ul>
                                    <a class="ul" href="<?php echo $r['url'];?>">
                                        <li>
                                            <span class="buy">
                                                转让
                                            </span>
                                            <span class="tits">
                                                <?php echo $r['title'];?>
                                            </span>
                                        </li>
                                        <li class="times">
                                            更新时间：
                                            <span>
                                                <?php echo date('Y-m-d',$r['updatetime']);?>
                                            </span>
                                        </li>
                                        <li class="look">
                                            <span class="details">
                                                查看详情
                                            </span>
                                        </li>
                                        <li class="prices">
                                            面议
                                        </li>
                                        <li class="z-price">
                                            注册资金：
                                            <span>
                                                未公布
                                            </span>
                                        </li>
                                        <li class="z-times">
                                            注册时间：
                                            <span>
                                                未公布
                                            </span>
                                        </li>
                                        <li class="locals">
                                            所在地：
                                            <span>
                                                浙江
                                            </span>
                                        </li>
                                        <li class="views">
                                            浏览量：
                                            <span>
                                                <?php echo $r['hits'];?>
                                            </span>
                                        </li>
                                    </a>
                                    <li class="consult">
                                        <a class="ul" href="/transfer/441">
                                        </a>
                                        <a target="_blank" rel="nofollow" href="#">
                                            咨询服务顾问
                                        </a>
                                    </li>
                                </ul>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                            </div>
                        </div>
                        <!-- 分页 -->
                        <ul class="news-list-page">
                            <li class="first disabled">
                                <span>
                                    首页
                                </span>
                            </li>
                            <li class="page-previous disabled">
                                <span>
                                    上一页
                                </span>
                            </li>
                            <li class="active">
                                <a href="/transfer/index?type=1&amp;sheng=0&amp;page=1" data-page="0">
                                    1
                                </a>
                            </li>
                            <li>
                                <a href="/transfer/index?type=1&amp;sheng=0&amp;page=2" data-page="1">
                                    2
                                </a>
                            </li>
                            <li>
                                <a href="/transfer/index?type=1&amp;sheng=0&amp;page=3" data-page="2">
                                    3
                                </a>
                            </li>
                            <li>
                                <a href="/transfer/index?type=1&amp;sheng=0&amp;page=4" data-page="3">
                                    4
                                </a>
                            </li>
                            <li>
                                <a href="/transfer/index?type=1&amp;sheng=0&amp;page=5" data-page="4">
                                    5
                                </a>
                            </li>
                            <li>
                                <a href="/transfer/index?type=1&amp;sheng=0&amp;page=6" data-page="5">
                                    6
                                </a>
                            </li>
                            <li>
                                <a href="/transfer/index?type=1&amp;sheng=0&amp;page=7" data-page="6">
                                    7
                                </a>
                            </li>
                            <li>
                                <a href="/transfer/index?type=1&amp;sheng=0&amp;page=8" data-page="7">
                                    8
                                </a>
                            </li>
                            <li>
                                <a href="/transfer/index?type=1&amp;sheng=0&amp;page=9" data-page="8">
                                    9
                                </a>
                            </li>
                            <li>
                                <a href="/transfer/index?type=1&amp;sheng=0&amp;page=10" data-page="9">
                                    10
                                </a>
                            </li>
                            <li class="next">
                                <a href="/transfer/index?type=1&amp;sheng=0&amp;page=2" data-page="1">
                                    下一页
                                </a>
                            </li>
                            <li class="last">
                                <a href="/transfer/index?type=1&amp;sheng=0&amp;page=18" data-page="17">
                                    尾页
                                </a>
                            </li>
                        </ul>
                        <div class="no-search img">
                            <ul>
                                <li>
                                    <span>
                                        暂未找到心仪资质？
                                    </span>
                                    <a target="_blank" rel="nofollow" href="#" class="img">
                                        咨询服务顾问
                                    </a>
                                </li>
                                <li>
                                    不要急哦，好多信息没有展示出来，马上联系服务顾问获取！
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="transfer-right">
                        <div class="release">
                            <li>
                                <a class="transfer_mflink" href="" target="_blank">
                                    <!--
                                        <h2>
                                            资质新办
                                        </h2>
                                    -->
                                    <p>
                                        立即发布
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a class="transfer_link" href="" target="_blank">
                                    <p>
                                        立即发布
                                    </p>
                                </a>
                            </li>
                        </div>

                        <!-- -资质报价估算- -->
                        <div class="bus_gd1_r">
                            <div class="card_context">
                                <h2>
                                    <span class="r_img">
                                        资质报价估算
                                    </span>
                                </h2>
                                <div class="card card1">
   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- menu main end -->
            </div>
        </section>
    </div>
</div>
<?php include template("content","footer"); ?>
