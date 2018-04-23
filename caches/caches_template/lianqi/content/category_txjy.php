<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<div class="wrapper index">
    <div class="wrapper-main">
        <div class="banner-index cer-ban">
            <div class="banner-list-main">
                <ul class="banner-bg">
                    <li style="background-image: url(/statics/img/cer/banner.jpg);">
                    </li>
                </ul>
                <div class="banner-state">
                    <div class="banner-cer">
                        <div class="banner-cer-left menu-box active" id="cer-menu-box">
                            <!--
                                <div class="bg">
                                </div>
                            -->
                            <div class="cer-menuCateBox">
                                <div class="cer-left-menuLis" id="menuList">
                                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=cd609b7b9ac4fadeb42b5e7f97a5f535&action=category&catid=%24catid&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$catid,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                                     <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                    <dl class="menuList">
                                        <dt class="clearfix">
                                            <i class="icon">
                                            </i>
                                            <span>
                                                <?php echo $r['catname'];?>
                                            </span>
                                            <em>
                                                &gt;
                                            </em>
                                        </dt>
                                    </dl>
                                     <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                                </div>
                                <div class="cer-menuContainer" id="menuContainer" style="display: none;">
                                    <div id="menuCate_Container" style="display: none;">
                                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=cd609b7b9ac4fadeb42b5e7f97a5f535&action=category&catid=%24catid&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$catid,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                                     <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                        <div class="menuCate_box" style="display: none;">
                                            <dl>
                                                <dt>
                                                    <?php echo $r['catname'];?>
                                                </dt>
                                                <dd>
                                                    <div class="cer_menuBox clearfix">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=cebb1c9ce7106216a604e7a36d192227&action=lists&catid=%24r%5B%27catid%27%5D&num=25&order=id+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$r['catid'],'order'=>'id DESC','limit'=>'25',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $s) { ?>
                                                        <a target="_blank" class="hot" href="<?php echo $s['url'];?>">
                                                           <?php echo $s['title'];?>
                                                        </a>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                                                    </div>
                                                    <ul class="imgbox clearfix">
                                                        <li>
                                                            <img src="http://www.dztcjt.cn/upload/zizhitype/1711/g9s7s_p7r2.jpg"/>
                                                        </li>
                                                        <li>
                                                            <img src="http://www.dztcjt.cn/upload/zizhitype/1711/g9se3_al02.jpg"/>
                                                        </li>
                                                        <li>
                                                            <img src="http://www.dztcjt.cn/upload/zizhitype/1711/g9tuo_b9q2.jpg"/>
                                                        </li>
                                                    </ul>
                                                </dd>
                                            </dl>
                                        </div>
                                        <?php $n++;}unset($n); ?>
                                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                                       </div>
                                    <!-- menuCate_Container end -->
                                </div>
                            </div>
                            <!-- menuCateBox end -->
                        </div>
                        <div class="banner-cer-middle">
                            <div class="banner-cer-list">
                                <ul class="banner-list-img" id="banner-img-01">
                                    <li class="active" style="background-image: url('http://www.dztcjt.cn/upload/push/1712/dg7g3_hge2.jpg'); display: none;">
                                        <a href="javascript:void(0);">
                                        </a>
                                    </li>
                                    <li class="" style="background-image: url('http://www.dztcjt.cn/upload/push/1707/ddqcn_qii2.jpg'); display: none;">
                                        <a href="javascript:void(0);">
                                        </a>
                                    </li>
                                    <li class="" style="background-image: url('http://www.dztcjt.cn/upload/push/1707/ddqe4_pfv2.jpg'); display: list-item;">
                                        <a href="javascript:void(0);">
                                        </a>
                                    </li>
                                </ul>
                                <ul class="banner-list-hover" style="bottom: 20px;" id="banner-hover-01">
                                    <li>
                                        <a href="javascript:void(0);" class="">
                                        </a>
                                        <a href="javascript:void(0);" class="">
                                        </a>
                                        <a href="javascript:void(0);" class="active">
                                        </a>
                                    </li>
                                </ul>
                                <a href="javascript:;" class="banner-guide left" style="top: 160px;">
                                </a>
                                <a href="javascript:;" class="banner-guide right" style="top: 160px;">
                                </a>
                            </div>
                            <ul class="banner-cer-slogan">
                                <li>
                                    <a target="_blank" href="/cer/224">
                                        <img src="/statics/img/cer/cer-slogan-1.jpg" alt=""/>
                                        <h2>
                                            安全许可证
                                        </h2>
                                        <p>
                                            服务周期：2-5个月
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="/cer/22">
                                        <img src="/statics/img/cer/cer-slogan-2.jpg" alt=""/>
                                        <h2>
                                            建筑幕墙
                                        </h2>
                                        <p>
                                            服务周期：3-5个月
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="/cer/174">
                                        <img src="/statics/img/cer/cer-slogan-3.jpg" alt=""/>
                                        <h2>
                                            承修装饰
                                        </h2>
                                        <p>
                                            服务周期：3-5个月
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="banner-cer-right">
                            <dl class="banner-cer-notice">
                                <dt>
                                    最新资讯
                                </dt>
                                <dd>
                                    <ul class="notice-list">
                                        <li>
                                            <a href="http://www.dztcjt.com/view/5071">
                                                资质升级业绩如何备案
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.dztcjt.com/view/5070">
                                                消防资质升级失败因素汇总
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.dztcjt.com/view/5069">
                                                物业资质取消后门槛会降低吗?
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.dztcjt.com/view/5068">
                                                揭秘：机电施工三级资质和机电安装三级资质4大不同之处
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.dztcjt.com/view/5067">
                                                水利三级资质办理多少钱
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.dztcjt.com/view/5066">
                                                聚焦建筑总承包资质需要哪些条件有没有变化？
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="http://www.dztcjt.com/news" class="more">
                                                更多内容
                                            </a>
                                        </li>
                                    </ul>
                                </dd>
                            </dl>
                            <img src="/statics/img/cer/slogan.png" alt=""/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-cer">
            <div class="banner-report cer-report">
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
                           
                        </div>
                    </dd>
                </dl>
            </div>
            <div class="cer-price">
                <div class="cer-price-left">
                    <dl class="price-tab-box">
                        <dt>
                            <a  class="active">
                                <h2>
                                    资质报价估算
                                    <em>
                                        10秒获取智能报价
                                    </em>
                                </h2>
                            </a>
                        </dt>
                        <dd>
                            <div class="cer-price-zh active">
                                <ul class="" id="cerTab">
                                    <li>
                                        <span>
                                            所在地区：
                                        </span>
                                        <select name="sco_id" id="sco-per">
                                            <option value="36">
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
                                    </li>
                                    <li id="cer_type">
                                        <span>
                                            资质类型：
                                        </span>
                                        <p>
                                            <span style="height: 28px;">                                      
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=4465e32567990a2a6440040e8dc972aa&action=category&catid=7&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'7','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
<a data-id="<?php echo $r['catid'];?>" href="javascript:" class="">
    <?php echo $r['catname'];?>
</a>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>                                                
                                                

                                            </span>
                                        </p>
                                        <a href="javascript:" class="cer_arrow" id="certypeArrow">
                                            <img src="/statics/img/list/business/bussiness_arrow_icon.png"/>
                                        </a>
                                        <h2 id="type-daiban">
                                            
                                        </h2>
                                    </li>
                                    <li id="cer_price">
                                        <span>
                                            资质等级：
                                        </span>
                                        <a href="javascript:" class="cer_arrow" id="cerArrow">
                                            <img src="/statics/img/list/business/bussiness_arrow_icon.png"/>
                                        </a>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=4465e32567990a2a6440040e8dc972aa&action=category&catid=7&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'7','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
<div class="zzgd_sort">
<p>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=4267a6bd95ceb8ea04d237cec8b5866d&action=lists&catid=%24r%5B%27catid%27%5D&num=50&order=id+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$r['catid'],'order'=>'id DESC','limit'=>'50',));}?>                          
<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
<a href="javascript:" data-id="<?php echo $v['id'];?>" class="open" style="display: inline-block;">
<?php echo $v['title'];?>
</a>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</p>
</div>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                                        
                                        <h2 id="cer-daiban">
                                            
                                        </h2>
                                        <div class="clear clearfix">
                                        </div>
                                    </li>
                                    <li id="cer_level">
                                        <span>
                                            专业等级：
                                        </span>
                                        <a href="javascript:;" data-id="1">
                                            一级
                                        </a>
                                        <a href="javascript:;" data-id="2">
                                            二级
                                        </a>
                                        <a href="javascript:;" data-id="3">
                                            三级
                                        </a>
                                    </li>
                                    <li class="zh-form">
                                        <form action="/data/zizhi-try-apply" method="post" class="list-input-form">
                                          
                                            <input id="cer_phone" name="phone" value="13142774496" type="hidden"/>
                                            <input id="cer_yzm" placeholder="输入验证码" name="verifyCode" class="list-input-txt info required img_yzm" type="text"/>
                                            <img id="w0-image" onclick='this.src=this.src+"&"+Math.random()'  class="code_img" src="/api.php?op=checkcode" alt="换一个" title="换一个" style=""/>
                                            <span id="trans" class="trans"  onclick='$("#w0-image").src=$("#w0-image").src+"&"+Math.random()'> 
                                                看不清楚，换一张
                                            </span>
                                            <input value="获取报价" class="list-input-sub ajax-cer zh-send" type="submit"/>
                                        </form>
                                    </li>
                                    <li class="zh-note">
                                        <i>
                                        </i>
                                        已为超过
                                        <b>
                                            50000
                                        </b>
                                        家企业提供一站式服务
                                    </li>
                                </ul>
                            </div>

                        </dd>
                    </dl>
                </div>
                <script>
                    var djArray = <?php echo $get_all_level;?>;
                </script>
                <div class="cer-price-middle">
                    <dl class="pre-mid-tab">
                        <dt>
                            <a href="javascript:void(0);" class="active" style="border-bottom: 1px solid #e7e7e7;width:100%;">
                                转让信息
                            </a>
                        </dt>
                        <dd>
                            <ul class="pre-mid-list active">
                                <li>
                                    <a target="_blank" href="/transfer/441">
                                        <h3>
                                            市政公用工程出售
                                        </h3>
                                        <p>
                                            价格：
                                            <b>
                                                面议
                                            </b>
                                            |
                                            <span>
                                                查看详情
                                            </span>
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="/transfer/439">
                                        <h3>
                                            房建二级转让
                                        </h3>
                                        <p>
                                            价格：
                                            <b>
                                                面议
                                            </b>
                                            |
                                            <span>
                                                查看详情
                                            </span>
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="/transfer/438">
                                        <h3>
                                            市政二级低价转让
                                        </h3>
                                        <p>
                                            价格：
                                            <b>
                                                面议
                                            </b>
                                            |
                                            <span>
                                                查看详情
                                            </span>
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="/transfer/437">
                                        <h3>
                                            山东烟台装饰装修幕墙古建筑二级资质转让
                                        </h3>
                                        <p>
                                            价格：
                                            <b>
                                                面议
                                            </b>
                                            |
                                            <span>
                                                查看详情
                                            </span>
                                        </p>
                                    </a>
                                </li>
                                <p>
                                    <a target="_blank" href="/transfer" style="display: block;">
                                        更多信息
                                    </a>
                                </p>
                            </ul>
                        </dd>
                    </dl>
                </div>
                <div class="cer-price-right">
                    <ul class="pre-r-list">
                        <li>
                            <a rel="nofollow" href="#" target="_blank">
                                <h2>
                                    资质新办
                                </h2>
                                <p>
                                    立即办理
                                </p>
                            </a>
                        </li>
                        <li>
                            <a rel="nofollow" href="#" target="_blank">
                                <h2>
                                    资质升级
                                </h2>
                                <p>
                                    立即办理
                                </p>
                            </a>
                        </li>
                        <li>
                            <a rel="nofollow" href="#" target="_blank">
                                <h2>
                                    资质增项
                                </h2>
                                <p>
                                    立即办理
                                </p>
                            </a>
                        </li>
                        <li>
                            <a rel="nofollow" href="#" target="_blank">
                                <h2>
                                    人才服务
                                </h2>
                                <p>
                                    立即办理
                                </p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- 精选服务 -->
        <div class="cer-service">
            <div class="service-box">
                <div class="ser-xuan">
                    <div class="xuan-txt">
                        <h2>
                            精选服务
                        </h2>
                     <img src="/statics/img/cer/cer-adv.jpg" class="cer-adv-img"/>
                    </div>
                    <div class="cer-server-menu">
                        <div class="ser-menu-box">
                            <div class="server-left">
                                <ul class="short">
                                    <li style="background-image:url('/statics/img/cer/cer-service-1.jpg');">
                                        <a target="_blank" href="#">
                                            <h2>
                                                消防设施工程
                                            </h2>
                                            <p>
                                                已达成：
                                                <span>
                                                    169项
                                                </span>
                                                满意度：
                                                <span>
                                                    98％
                                                </span>
                                            </p>
                                            <strong>
                                                服务周期：2-6个月
                                            </strong>
                                        </a>
                                    </li>
                                    <li style="background-image:url('/statics/img/cer/cer-service-2.jpg');">
                                        <a target="_blank" href="#">
                                            <h2>
                                                食品生产许可证
                                            </h2>
                                            <p>
                                                已达成：
                                                <span>
                                                    120项
                                                </span>
                                                满意度：
                                                <span>
                                                    97％
                                                </span>
                                            </p>
                                            <strong>
                                                服务周期：3-6个月
                                            </strong>
                                        </a>
                                    </li>
                                    <li style="background-image:url('/statics/img/cer/cer-service-3.jpg');">
                                        <a target="_blank" href="#">
                                            <h2>
                                                房地产开发
                                            </h2>
                                            <p>
                                                已达成：
                                                <span>
                                                    235项
                                                </span>
                                                满意度：
                                                <span>
                                                    98％
                                                </span>
                                            </p>
                                            <strong>
                                                服务周期：2-4个月
                                            </strong>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="long">
                                    <li style="background-image:url('/statics/img/cer/cer-service-4.jpg');">
                                        <a target="_blank" href="#">
                                            <h2>
                                                安全生产许可证
                                            </h2>
                                            <p>
                                                已达成：
                                                <span>
                                                    240项
                                                </span>
                                                满意度：
                                                <span>
                                                    96％
                                                </span>
                                            </p>
                                            <strong>
                                                服务周期：2-5个月
                                            </strong>
                                        </a>
                                    </li>
                                    <li style="background-image:url('/statics/img/cer/cer-service-5.jpg');">
                                        <a target="_blank" href="#">
                                            <h2>
                                                建筑幕墙工程
                                            </h2>
                                            <p>
                                                已达成：
                                                <span>
                                                    155项
                                                </span>
                                                满意度：
                                                <span>
                                                    98％
                                                </span>
                                            </p>
                                            <strong>
                                                服务周期：2-5个月
                                            </strong>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="short">
                                    <li style="background-image:url('/statics/img/cer/cer-service-6.jpg');">
                                        <a target="_blank" href="#">
                                            <h2>
                                                机电工程施工总包
                                            </h2>
                                            <p>
                                                已达成：
                                                <span>
                                                    159项
                                                </span>
                                                满意度：
                                                <span>
                                                    98％
                                                </span>
                                            </p>
                                            <strong>
                                                服务周期：3-6个月
                                            </strong>
                                        </a>
                                    </li>
                                    <li style="background-image:url('/statics/img/cer/cer-service-7.jpg');">
                                        <a target="_blank" href="#">
                                            <h2>
                                                承装修试
                                            </h2>
                                            <p>
                                                已达成：
                                                <span>
                                                    356项
                                                </span>
                                                满意度：
                                                <span>
                                                    98％
                                                </span>
                                            </p>
                                            <strong>
                                                服务周期：3-5个月
                                            </strong>
                                        </a>
                                    </li>
                                    <li style="background-image:url('/statics/img/cer/cer-service-8.jpg');">
                                        <a target="_blank" href="#">
                                            <h2>
                                                ICP经营许可证
                                            </h2>
                                            <p>
                                                已达成：
                                                <span>
                                                    165项
                                                </span>
                                                满意度：
                                                <span>
                                                    97％
                                                </span>
                                            </p>
                                            <strong>
                                                服务周期：2-4个月
                                            </strong>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="server-right">
                                <div class="ser-banner">
                                    <div class="ser-ban-box">
                                        <div class="tempWrap" style="overflow:hidden; position:relative; width:273px">
                                            <ul style="width: 1092px; left: -819px; position: relative; overflow: hidden; padding: 0px; margin: 0px;">
                                                <li style="background-image: url('/statics/img/cer/cer-right-1.jpg'); float: left; width: 273px;">
                                                    <a href="#" rel="nofollow" target="_blank">
                                                    </a>
                                                </li>
                                                <li style="background-image: url('/statics/img/cer/cer-right-2.jpg'); float: left; width: 273px;">
                                                    <a href="#" rel="nofollow" target="_blank">
                                                    </a>
                                                </li>
                                                <li style="background-image: url('/statics/img/cer/cer-right-3.jpg'); float: left; width: 273px;">
                                                    <a href="#" rel="nofollow" target="_blank">
                                                    </a>
                                                </li>
                                                <li style="background-image: url('/statics/img/cer/cer-right-4.jpg'); float: left; width: 273px;">
                                                    <a href="#" rel="nofollow" target="_blank">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ser-ban-hover">
                                        <ul>
                                            <li class="">
                                                1
                                            </li>
                                            <li class="">
                                                2
                                            </li>
                                            <li class="">
                                                3
                                            </li>
                                            <li class="on">
                                                4
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- ser-banner end -->
                                <div class="cer-r-article">
                                    <ul>
                                        <li>
                                            <a target="_blank" href="#">
                                                建筑施工企业怎么办理安全生产许可证？
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="#">
                                                关于简化建筑业企业资质标准部分指标的通知
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="#">
                                                电力工程施工总承包企业资质等级标准
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="#">
                                                公路工程施工总承包企业资质等级标准
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- cer-r-article -->
                            </div>
                        </div>
                    </div>
                    <!-- cer-serve-menu end -->
                </div>
                <div class="server-case">
                    <h2>
                        服务案例
                    </h2>
                    <a target="_blank" href="#" class="ser-case-more">
                        查看更多 &gt;
                    </a>
                    <div class="case-banner" id="case-banner">
                        <div class="case-ban-box">
                            <div class="tempWrap" style="overflow:hidden; position:relative;">
                                <div class="ser-wrap" style="width: 4904px; position: relative; overflow: hidden; padding: 0px; margin: 0px; left: -2452px;">
                                    <ul class="clone" style="float: left; width: 1226px;">
                                        <li>
                                            <a target="_blank" href="javascript:;">
                                                <img src="http://www.dztcjt.cn/upload/user/1707/g9iea_s90_co_img.jpg"/>
                                                <div class="case-ban-p">
                                                    <h3>
                                                        东营市**建筑装饰工程有限公司
                                                    </h3>
                                                    <p>
                                                        <span>
                                                            住建工程类
                                                        </span>
                                                        <span>
                                                            建筑装修装饰工程专业承包
                                                        </span>
                                                    </p>
                                                    <em>
                                                        办理周期：3个月
                                                    </em>
                                                    <p>
                                                        <b>
                                                            2016.11.11上报资料
                                                        </b>
                                                        <b>
                                                            2017.01.20资质公示
                                                        </b>
                                                    </p>
                                                    <p>
                                                        <b>
                                                            2017.02.01资质通告
                                                        </b>
                                                        <b>
                                                            2017.02.07领资质证书
                                                        </b>
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="javascript:;">
                                                <img src="http://www.dztcjt.cn/upload/user/1707/g9hra_kr3_co_img.jpg"/>
                                                <div class="case-ban-p">
                                                    <h3>
                                                        山东**电气有限公司
                                                    </h3>
                                                    <p>
                                                        <span>
                                                            住建工程类
                                                        </span>
                                                        <span>
                                                            电力工程施工总包
                                                        </span>
                                                    </p>
                                                    <em>
                                                        办理周期：4个月
                                                    </em>
                                                    <p>
                                                        <b>
                                                            2016.02.06上报资料
                                                        </b>
                                                        <b>
                                                            2016.05.17资质公示
                                                        </b>
                                                    </p>
                                                    <p>
                                                        <b>
                                                            2016.06.02资质通告
                                                        </b>
                                                        <b>
                                                            2016.06.07领资质证书
                                                        </b>
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="javascript:;">
                                                <img src="http://www.dztcjt.cn/upload/user/1707/g9hii_geh_co_img.jpg"/>
                                                <div class="case-ban-p">
                                                    <h3>
                                                        山东**电力工程有限公司
                                                    </h3>
                                                    <p>
                                                        <span>
                                                            住建工程类
                                                        </span>
                                                        <span>
                                                            安全生产许可证
                                                        </span>
                                                    </p>
                                                    <em>
                                                        办理周期：3个月
                                                    </em>
                                                    <p>
                                                        <b>
                                                            2017.03.16上报资料
                                                        </b>
                                                        <b>
                                                            2017.06.19资质公示
                                                        </b>
                                                    </p>
                                                    <p>
                                                        <b>
                                                            2017.06.23资质通告
                                                        </b>
                                                        <b>
                                                            2017.06.26领资质证书
                                                        </b>
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="javascript:;">
                                                <img src="http://www.dztcjt.cn/upload/user/1707/dek37_ckq_co_img.jpg"/>
                                                <div class="case-ban-p">
                                                    <h3>
                                                        滕州市**电力电子工程有限公司
                                                    </h3>
                                                    <p>
                                                        <span>
                                                            电监类
                                                        </span>
                                                        <span>
                                                            承装（修、试）电力设施许可证
                                                        </span>
                                                    </p>
                                                    <em>
                                                        办理周期：3个月
                                                    </em>
                                                    <p>
                                                        <b>
                                                            2016.04.07上报资料
                                                        </b>
                                                        <b>
                                                            2016.06.10资质公示
                                                        </b>
                                                    </p>
                                                    <p>
                                                        <b>
                                                            2017.06.23资质通告
                                                        </b>
                                                        <b>
                                                            2016.06.30领资质证书
                                                        </b>
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul style="float: left; width: 1226px;">
                                        <li>
                                            <a target="_blank" href="javascript:;">
                                                <img src="http://www.dztcjt.cn/upload/user/1707/g9lp7_5qs_co_img.jpg"/>
                                                <div class="case-ban-p">
                                                    <h3>
                                                        山东**环保科技有限公司
                                                    </h3>
                                                    <p>
                                                        <span>
                                                            住建工程类
                                                        </span>
                                                        <span>
                                                            环保工程专业承包
                                                        </span>
                                                    </p>
                                                    <em>
                                                        办理周期：4个月
                                                    </em>
                                                    <p>
                                                        <b>
                                                            2016.11.03上报资料
                                                        </b>
                                                        <b>
                                                            2017.02.02资质公示
                                                        </b>
                                                    </p>
                                                    <p>
                                                        <b>
                                                            2017.02.10资质通告
                                                        </b>
                                                        <b>
                                                            2017.02.14领资质证书
                                                        </b>
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="javascript:;">
                                                <img src="http://www.dztcjt.cn/upload/user/1707/g9l8m_ct2_co_img.jpg"/>
                                                <div class="case-ban-p">
                                                    <h3>
                                                        青岛**建筑装饰工程有限公司
                                                    </h3>
                                                    <p>
                                                        <span>
                                                            住建工程类
                                                        </span>
                                                        <span>
                                                            防水防腐保温工程专业承包
                                                        </span>
                                                    </p>
                                                    <em>
                                                        办理周期：4个月
                                                    </em>
                                                    <p>
                                                        <b>
                                                            2016.11.03上报资料
                                                        </b>
                                                        <b>
                                                            2017.01.16资质公示
                                                        </b>
                                                    </p>
                                                    <p>
                                                        <b>
                                                            2017.02.01资质通告
                                                        </b>
                                                        <b>
                                                            2017.02.07领资质证书
                                                        </b>
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="javascript:;">
                                                <img src="http://www.dztcjt.cn/upload/user/1707/g9jvr_66r_co_img.jpg"/>
                                                <div class="case-ban-p">
                                                    <h3>
                                                        青岛**电气安装工程有限公司
                                                    </h3>
                                                    <p>
                                                        <span>
                                                            电监类
                                                        </span>
                                                        <span>
                                                            承装（修、试）电力设施许可证
                                                        </span>
                                                    </p>
                                                    <em>
                                                        办理周期：3个月
                                                    </em>
                                                    <p>
                                                        <b>
                                                            2017.02.01上报资料
                                                        </b>
                                                        <b>
                                                            2017.03.30资质公示
                                                        </b>
                                                    </p>
                                                    <p>
                                                        <b>
                                                            2017.04.02资质通告
                                                        </b>
                                                        <b>
                                                            2017.04.07领资质证书
                                                        </b>
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="javascript:;">
                                                <img src="http://www.dztcjt.cn/upload/user/1707/g9jk1_fms_co_img.jpg"/>
                                                <div class="case-ban-p">
                                                    <h3>
                                                        青岛**幕墙有限公司
                                                    </h3>
                                                    <p>
                                                        <span>
                                                            住建工程类
                                                        </span>
                                                        <span>
                                                            建筑幕墙工程专业承包
                                                        </span>
                                                    </p>
                                                    <em>
                                                        办理周期：4个月
                                                    </em>
                                                    <p>
                                                        <b>
                                                            2016.12.03上报资料
                                                        </b>
                                                        <b>
                                                            2017.02.16资质公示
                                                        </b>
                                                    </p>
                                                    <p>
                                                        <b>
                                                            2017.02.25资质通告
                                                        </b>
                                                        <b>
                                                            2017.03.02领资质证书
                                                        </b>
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul style="float: left; width: 1226px;">
                                        <li>
                                            <a target="_blank" href="javascript:;">
                                                <img src="http://www.dztcjt.cn/upload/user/1707/g9iea_s90_co_img.jpg"/>
                                                <div class="case-ban-p">
                                                    <h3>
                                                        东营市**建筑装饰工程有限公司
                                                    </h3>
                                                    <p>
                                                        <span>
                                                            住建工程类
                                                        </span>
                                                        <span>
                                                            建筑装修装饰工程专业承包
                                                        </span>
                                                    </p>
                                                    <em>
                                                        办理周期：3个月
                                                    </em>
                                                    <p>
                                                        <b>
                                                            2016.11.11上报资料
                                                        </b>
                                                        <b>
                                                            2017.01.20资质公示
                                                        </b>
                                                    </p>
                                                    <p>
                                                        <b>
                                                            2017.02.01资质通告
                                                        </b>
                                                        <b>
                                                            2017.02.07领资质证书
                                                        </b>
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="javascript:;">
                                                <img src="http://www.dztcjt.cn/upload/user/1707/g9hra_kr3_co_img.jpg"/>
                                                <div class="case-ban-p">
                                                    <h3>
                                                        山东**电气有限公司
                                                    </h3>
                                                    <p>
                                                        <span>
                                                            住建工程类
                                                        </span>
                                                        <span>
                                                            电力工程施工总包
                                                        </span>
                                                    </p>
                                                    <em>
                                                        办理周期：4个月
                                                    </em>
                                                    <p>
                                                        <b>
                                                            2016.02.06上报资料
                                                        </b>
                                                        <b>
                                                            2016.05.17资质公示
                                                        </b>
                                                    </p>
                                                    <p>
                                                        <b>
                                                            2016.06.02资质通告
                                                        </b>
                                                        <b>
                                                            2016.06.07领资质证书
                                                        </b>
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="javascript:;">
                                                <img src="http://www.dztcjt.cn/upload/user/1707/g9hii_geh_co_img.jpg"/>
                                                <div class="case-ban-p">
                                                    <h3>
                                                        山东**电力工程有限公司
                                                    </h3>
                                                    <p>
                                                        <span>
                                                            住建工程类
                                                        </span>
                                                        <span>
                                                            安全生产许可证
                                                        </span>
                                                    </p>
                                                    <em>
                                                        办理周期：3个月
                                                    </em>
                                                    <p>
                                                        <b>
                                                            2017.03.16上报资料
                                                        </b>
                                                        <b>
                                                            2017.06.19资质公示
                                                        </b>
                                                    </p>
                                                    <p>
                                                        <b>
                                                            2017.06.23资质通告
                                                        </b>
                                                        <b>
                                                            2017.06.26领资质证书
                                                        </b>
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="javascript:;">
                                                <img src="http://www.dztcjt.cn/upload/user/1707/dek37_ckq_co_img.jpg"/>
                                                <div class="case-ban-p">
                                                    <h3>
                                                        滕州市**电力电子工程有限公司
                                                    </h3>
                                                    <p>
                                                        <span>
                                                            电监类
                                                        </span>
                                                        <span>
                                                            承装（修、试）电力设施许可证
                                                        </span>
                                                    </p>
                                                    <em>
                                                        办理周期：3个月
                                                    </em>
                                                    <p>
                                                        <b>
                                                            2016.04.07上报资料
                                                        </b>
                                                        <b>
                                                            2016.06.10资质公示
                                                        </b>
                                                    </p>
                                                    <p>
                                                        <b>
                                                            2017.06.23资质通告
                                                        </b>
                                                        <b>
                                                            2016.06.30领资质证书
                                                        </b>
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul style="float: left; width: 1226px;" class="clone">
                                        <li>
                                            <a target="_blank" href="javascript:;">
                                                <img src="http://www.dztcjt.cn/upload/user/1707/g9lp7_5qs_co_img.jpg"/>
                                                <div class="case-ban-p">
                                                    <h3>
                                                        山东**环保科技有限公司
                                                    </h3>
                                                    <p>
                                                        <span>
                                                            住建工程类
                                                        </span>
                                                        <span>
                                                            环保工程专业承包
                                                        </span>
                                                    </p>
                                                    <em>
                                                        办理周期：4个月
                                                    </em>
                                                    <p>
                                                        <b>
                                                            2016.11.03上报资料
                                                        </b>
                                                        <b>
                                                            2017.02.02资质公示
                                                        </b>
                                                    </p>
                                                    <p>
                                                        <b>
                                                            2017.02.10资质通告
                                                        </b>
                                                        <b>
                                                            2017.02.14领资质证书
                                                        </b>
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="javascript:;">
                                                <img src="http://www.dztcjt.cn/upload/user/1707/g9l8m_ct2_co_img.jpg"/>
                                                <div class="case-ban-p">
                                                    <h3>
                                                        青岛**建筑装饰工程有限公司
                                                    </h3>
                                                    <p>
                                                        <span>
                                                            住建工程类
                                                        </span>
                                                        <span>
                                                            防水防腐保温工程专业承包
                                                        </span>
                                                    </p>
                                                    <em>
                                                        办理周期：4个月
                                                    </em>
                                                    <p>
                                                        <b>
                                                            2016.11.03上报资料
                                                        </b>
                                                        <b>
                                                            2017.01.16资质公示
                                                        </b>
                                                    </p>
                                                    <p>
                                                        <b>
                                                            2017.02.01资质通告
                                                        </b>
                                                        <b>
                                                            2017.02.07领资质证书
                                                        </b>
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="javascript:;">
                                                <img src="http://www.dztcjt.cn/upload/user/1707/g9jvr_66r_co_img.jpg"/>
                                                <div class="case-ban-p">
                                                    <h3>
                                                        青岛**电气安装工程有限公司
                                                    </h3>
                                                    <p>
                                                        <span>
                                                            电监类
                                                        </span>
                                                        <span>
                                                            承装（修、试）电力设施许可证
                                                        </span>
                                                    </p>
                                                    <em>
                                                        办理周期：3个月
                                                    </em>
                                                    <p>
                                                        <b>
                                                            2017.02.01上报资料
                                                        </b>
                                                        <b>
                                                            2017.03.30资质公示
                                                        </b>
                                                    </p>
                                                    <p>
                                                        <b>
                                                            2017.04.02资质通告
                                                        </b>
                                                        <b>
                                                            2017.04.07领资质证书
                                                        </b>
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="javascript:;">
                                                <img src="http://www.dztcjt.cn/upload/user/1707/g9jk1_fms_co_img.jpg"/>
                                                <div class="case-ban-p">
                                                    <h3>
                                                        青岛**幕墙有限公司
                                                    </h3>
                                                    <p>
                                                        <span>
                                                            住建工程类
                                                        </span>
                                                        <span>
                                                            建筑幕墙工程专业承包
                                                        </span>
                                                    </p>
                                                    <em>
                                                        办理周期：4个月
                                                    </em>
                                                    <p>
                                                        <b>
                                                            2016.12.03上报资料
                                                        </b>
                                                        <b>
                                                            2017.02.16资质公示
                                                        </b>
                                                    </p>
                                                    <p>
                                                        <b>
                                                            2017.02.25资质通告
                                                        </b>
                                                        <b>
                                                            2017.03.02领资质证书
                                                        </b>
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="case-ban-hover">
                            <ul>
                                <li class="">
                                    1
                                </li>
                                <li class="on">
                                    2
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- service-box end -->
            <div style="background: url(/statics/img/cer/cer-service-liucheng.jpg);width: 100%;height: 468px;margin-top: 35px;">
            </div>
            <!-- 服务团队 -->
            <div class="service-box">
                <div class="dui-main">
                    <h2>
                        服务团队
                    </h2>
                    <!--
                        <a href="" class="dui-more">
                            更多
                        </a>
                    -->
                    <div class="dui-list">
                        <ul>
                            <li>
                                <a rel="nofollow" href="#" target="_blank">
                                    <img src="http://www.dztcjt.cn/upload/adviser/1709/ed4p4_cts2.jpg"/>
                                    <div class="case-ban-p">
                                        <h3>
                                            杨雪莹
                                            <span>
                                                营销总监
                                            </span>
                                        </h3>
                                        <p>
                                            已办理
                                            <span>
                                                986件
                                            </span>
                                            满意度
                                            <span>
                                                99%
                                            </span>
                                        </p>
                                        <p>
                                            <em>
                                                在线咨询
                                            </em>
                                        </p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a rel="nofollow" href="#" target="_blank">
                                    <img src="http://www.dztcjt.cn/upload/adviser/1709/ed4b4_7ig2.jpg"/>
                                    <div class="case-ban-p">
                                        <h3>
                                            刘欣
                                            <span>
                                                营销经理
                                            </span>
                                        </h3>
                                        <p>
                                            已办理
                                            <span>
                                                658件
                                            </span>
                                            满意度
                                            <span>
                                                99%
                                            </span>
                                        </p>
                                        <p>
                                            <em>
                                                在线咨询
                                            </em>
                                        </p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a rel="nofollow" href="#" target="_blank">
                                    <img src="http://www.dztcjt.cn/upload/adviser/1709/ed4o0_k8v2.jpg"/>
                                    <div class="case-ban-p">
                                        <h3>
                                            吴美珍
                                            <span>
                                                营销经理
                                            </span>
                                        </h3>
                                        <p>
                                            已办理
                                            <span>
                                                632件
                                            </span>
                                            满意度
                                            <span>
                                                99%
                                            </span>
                                        </p>
                                        <p>
                                            <em>
                                                在线咨询
                                            </em>
                                        </p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a rel="nofollow" href="#" target="_blank">
                                    <img src="http://www.dztcjt.cn/upload/adviser/1712/ecuvo_dqe2.jpg"/>
                                    <div class="case-ban-p">
                                        <h3>
                                            刘艾红
                                            <span>
                                                高级顾问
                                            </span>
                                        </h3>
                                        <p>
                                            已办理
                                            <span>
                                                568件
                                            </span>
                                            满意度
                                            <span>
                                                98%
                                            </span>
                                        </p>
                                        <p>
                                            <em>
                                                在线咨询
                                            </em>
                                        </p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a rel="nofollow" href="#" target="_blank">
                                    <img src="http://www.dztcjt.cn/upload/adviser/1709/ed4ue_fr02.jpg"/>
                                    <div class="case-ban-p">
                                        <h3>
                                            宋庆荣
                                            <span>
                                                申报经理
                                            </span>
                                        </h3>
                                        <p>
                                            已办理
                                            <span>
                                                763件
                                            </span>
                                            满意度
                                            <span>
                                                99%
                                            </span>
                                        </p>
                                        <p>
                                            <em>
                                                在线咨询
                                            </em>
                                        </p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- dui-main end -->

            </div>
        </div>
    </div>
<?php include template("content","footer"); ?>
