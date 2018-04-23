<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link type="text/css" rel="stylesheet" href="/statics/css/gsfw_work.css"/>
<div class="wrapper " style="background: rgb(249, 249, 249) none repeat scroll 0% 0%;">
    <div class="wrapper-main">
        <section class="businessDetails">
            <div class="business_wrapper wrapper_info" style="background:url(/statics/img/cer/info_top_bg_1.jpg) no-repeat center top">
                <!-- content main -->
                <h2 class="search_location">

                </h2>
                <div class="business_gd1">
                    <div class="bus_gd1_main">
                        <div class="bus_gd1_l fl">
                            <a href="">
                                <img src="/statics/img/slide_gsfw.png" width="595"/>
                            </a>
                        </div>
                        <div class="bus_gd1_r fl">
                            <div class="card_context">
                                <h2>
                                    <span class="r_img">
                                        公司注册报价估算
                                    </span>
                                </h2>
                                <!-- -资质报价估算- -->
                                <div class="card card1">
                                    <form action="/data/zizhi-try-get-price" method="post" class="list-input-form">
                                        <input name="_csrf" id="_csrf" value="U1g3N2tZcnIpGUBzOi8YMBVubkUvET4gFzIHcSgeQEoDPmNmUxAkIA==" type="hidden"/>
                                        <ul>
                                            <li>
                                                <select id="sco-per" class="list-input-txt select required" name="sco_id">
                                                    <option value="0">
                                                        选择所在地区
                                                    </option>
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
                                                    <option value="30" selected="">
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
                                            <li>
                                                <select id="sysort" class="list-input-txt select required" name="parent_id">
                                                    <option value="0">
                                                        选择企业类型
                                                    </option>
                                                    <option value="1" selected="">
                                                        国内企业
                                                    </option>
                                                    <option value="2" selected="">
                                                        国内外资企业
                                                    </option>
                                                </select>
                                            </li>
                                            <li>
                                                <select id="syitem" class="list-input-txt select required" name="zizhi_id">
                                                    <option value="0">
                                                        选择资质专业
                                                    </option>
                                                    <option value="2" selected="">
                                                        钢结构工程专业承包
                                                    </option>
                                                    <option value="3">
                                                        建筑幕墙工程专业承包
                                                    </option>
                                                    <option value="5">
                                                        建筑工程施工总包
                                                    </option>
                                                    <option value="66">
                                                        环保工程专业承包
                                                    </option>
                                                    <option value="65">
                                                        消防设施工程专业承包
                                                    </option>
                                                    <option value="4">
                                                        建筑机电安装工程专业承包
                                                    </option>
                                                    <option value="10">
                                                        建筑装修装饰工程专业承包
                                                    </option>
                                                    <option value="67">
                                                        安防工程资质
                                                    </option>
                                                    <option value="9">
                                                        机电工程施工总包
                                                    </option>
                                                    <option value="8">
                                                        电子与智能化工程专业承包
                                                    </option>
                                                    <option value="6">
                                                        电力工程施工总包
                                                    </option>
                                                    <option value="7">
                                                        房地产开发企业资质
                                                    </option>
                                                    <option value="70">
                                                        市政公用工程施工总包
                                                    </option>
                                                    <option value="71">
                                                        输变电工程专业承包
                                                    </option>
                                                    <option value="72">
                                                        建筑劳务专业承包
                                                    </option>
                                                    <option value="73">
                                                        地基基础工程专业承包
                                                    </option>
                                                    <option value="74">
                                                        预拌混凝土专业承包
                                                    </option>
                                                    <option value="75">
                                                        防水防腐保温工程专业承包
                                                    </option>
                                                    <option value="76">
                                                        模板脚手架专业承包
                                                    </option>
                                                    <option value="77">
                                                        特种工程专业资质 （建筑物纠偏和平移）
                                                    </option>
                                                    <option value="208">
                                                        特种工程专业资质 （结构补强）
                                                    </option>
                                                    <option value="209">
                                                        特种工程专业资质 （特殊设备起重吊装）
                                                    </option>
                                                    <option value="210">
                                                        特种工程专业资质 （特种防雷技术）
                                                    </option>
                                                    <option value="78">
                                                        物业管理企业资质
                                                    </option>
                                                    <option value="79">
                                                        城市及道路照明工程专业承包
                                                    </option>
                                                    <option value="80">
                                                        矿山工程施工总包
                                                    </option>
                                                    <option value="81">
                                                        石油化工工程施工总包
                                                    </option>
                                                    <option value="82">
                                                        起重设备安装工程总包
                                                    </option>
                                                    <option value="83">
                                                        桥梁工程专业承包
                                                    </option>
                                                    <option value="84">
                                                        隧道工程专业承包
                                                    </option>
                                                    <option value="85">
                                                        核工程专业承包
                                                    </option>
                                                    <option value="86">
                                                        古建筑工程专业承包
                                                    </option>
                                                    <option value="87">
                                                        海洋石油工程专业承包
                                                    </option>
                                                    <option value="222">
                                                        冶金工程施工总承包
                                                    </option>
                                                    <option value="224">
                                                        安全生产许可证
                                                    </option>
                                                    <option value="271">
                                                        工程监理资质
                                                    </option>
                                                    <option value="272">
                                                        工程造价咨询资质
                                                    </option>
                                                    <option value="273">
                                                        招标代理资质
                                                    </option>
                                                </select>
                                            </li>
                                            <li>
                                                <select id="sylevel" class="list-input-txt select required" name="level">
                                                    <option value="0">
                                                        选择资质等级
                                                    </option>
                                                    <option value="1">
                                                        一级
                                                    </option>
                                                    <option value="2">
                                                        二级
                                                    </option>
                                                    <option value="3">
                                                        三级
                                                    </option>
                                                </select>
                                            </li>
                                            <li class="img-code">
                                                <input id="cer_phone" name="phone" value="13142774496" type="hidden"/>
                                                <input id="cer_yzm" placeholder="输入验证码" name="verifyCode" class="list-input-txt info required img_yzm" type="text"/>
                                                <img id="w0-image" class="code_img" src="/data/captcha?v=5abceba9251a3" alt="换一个" title="换一个" style=""/>
                                                <span id="trans" class="trans">
                                                    看不清楚，换一张
                                                </span>
                                            </li>
                                            <li class="sel_items">
                                                <span id="parent_id" style="display: inline;">
                                                    住建工程类
                                                </span>
                                                <span id="zizhi_id" style="display: inline;">
                                                    钢结构工程专业承包
                                                </span>
                                                <span id="level">
                                                </span>
                                                <span id="sco_id" style="display: inline;">
                                                    山东
                                                </span>
                                            </li>
                                            <li>
                                                <input value="开始报价" class="list-input-sub ajax-bus" type="submit"/>
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                                <div class="card card2">
                                    <div class="sel_items">
                                        <span id="parent_id" style="display:block">
                                            住建工程类
                                        </span>
                                        <span id="zizhi_id" style="display:inline">
                                            钢结构工程专业承包
                                        </span>
                                        <span id="level" style="display:inline">
                                        </span>
                                        <span id="sco_id" style="display:inline">
                                            山东
                                        </span>
                                    </div>
                                    <div class="result">
                                        <div class="Tit">
                                            计算结果：（单位：万）
                                        </div>
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <th class="tits">
                                                        人员费用：
                                                    </th>
                                                    <td id="total_people_price">
                                                        面议
                                                    </td>
                                                </tr>
                                                <!--
                                                    <tr>
                                                        <th class="tits">
                                                            服务代理费用：
                                                        </th>
                                                        <td id="agent_price">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th class="tits">
                                                            合计：
                                                        </th>
                                                        <td id="total_price">
                                                        </td>
                                                    </tr>
                                                -->
                                                <tr>
                                                    <th class="tits">
                                                        其他费用：
                                                    </th>
                                                    <td class="mes">
                                                        资质报价受市场及企业情况影响较大，因此该报价只针对核心的人员费用做出估算，不包含其他费用
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="mes">
                                    </div>
                                    <div class="but">
                                        <span class="apply trans">
                                            重新报价
                                        </span>
                                        <a class="ajax-cons" rel="nofollow" href="http://dbt.zoosnet.net/LR/Chatpre.aspx?id=DBT84865761&amp;cid=1495766315246815440879" target="_blank">
                                            轻松办理
                                        </a>
                                    </div>
                                    <div class="hidden">
                                        当前城市暂无报价，报价以山东为参考
                                    </div>
                                </div>
                                <!-- 报价详情 -->
                                <div id="dialog">
                                    <div class="dis_top">
                                        <div class="close">
                                            <div id="diaBtn" class="btn">
                                                Χ
                                            </div>
                                            <div id="narrow" class="btn">
                                                −
                                            </div>
                                        </div>
                                        <div class="Tit">
                                            <h2>
                                                <span class="r_img">
                                                    资质报价估算
                                                </span>
                                            </h2>
                                            <span>
                                                （填写
                                                <span>
                                                    已有人数
                                                </span>
                                                获取详细报价）
                                            </span>
                                        </div>
                                    </div>
                                    <div class="dis_con">
                                        <div class="sel_items">
                                            <span id="parent_id">
                                                住建工程类
                                            </span>
                                            <span id="zizhi_id">
                                                钢结构工程专业承包
                                            </span>
                                            <span id="level">
                                            </span>
                                            <span id="sco_id">
                                                山东
                                            </span>
                                            <a class="hidden mes2">
                                                当前城市暂无报价，报价以山东为参考
                                            </a>
                                            <a class="more" target="_blank" href="/cer/baojia">
                                                获取更多组合报价
                                            </a>
                                        </div>
                                        <div class="pers_r_click">
                                            <div class="table">
                                                <div class="Tit">
                                                    <li>
                                                        费用
                                                    </li>
                                                    <li>
                                                        工程师类型
                                                    </li>
                                                    <li>
                                                        工程师明细
                                                    </li>
                                                    <li>
                                                        需求人数
                                                    </li>
                                                    <li>
                                                        已有人数
                                                    </li>
                                                    <li>
                                                        单价（万）
                                                    </li>
                                                    <li>
                                                        小计
                                                    </li>
                                                </div>
                                                <div class="tableList">
                                                    <div class="list-l">
                                                        人员费用
                                                    </div>
                                                    <div class="list-r">
                                                    </div>
                                                </div>
                                                <!--
                                                    <div class="price price1">
                                                        <li>
                                                            人员费用
                                                        </li>
                                                        <li>
                                                            人员费用：本报价仅供参考，不代表实际价格。
                                                        </li>
                                                        <li class="price_per">
                                                        </li>
                                                    </div>
                                                    <div class="price price2">
                                                        <li class="total_price">
                                                            服务代理费
                                                        </li>
                                                        <li class="total_num">
                                                            <div class="num per_num">
                                                            </div>
                                                            <div>
                                                                （备注：包括业绩费用，寻证书费用、官费、代理费等）
                                                            </div>
                                                        </li>
                                                    </div>
                                                    <div class="price price2">
                                                        <li class="total_price">
                                                            总计
                                                        </li>
                                                        <li class="total_num">
                                                            <div class="num t_num">
                                                            </div>
                                                            <div>
                                                                （备注：此报价为系统报价，详细数据请咨询人工精准报价）
                                                            </div>
                                                        </li>
                                                    </div>
                                                -->
                                                <div class="price price1">
                                                    <li>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    </li>
                                                    <li>
                                                        本报价仅供参考，不代表实际价格。
                                                    </li>
                                                    <li class="price_per">
                                                        总计：
                                                    </li>
                                                </div>
                                                <div class="price price2">
                                                    <li class="total_price">
                                                        其他费用
                                                    </li>
                                                    <li class="total_num">
                                                        <!--
                                                            <div class="num t_num">
                                                            </div>
                                                            <div>
                                                                （备注：此报价为系统报价，详细数据请咨询人工精准报价）
                                                            </div>
                                                        -->
                                                        资质报价受市场政策及企业情况影响较大，因此该报价只针对核心的人员费用做出估算，不包含其他费用，请酌情参考，如有疑问请咨询在线客服或拨打400-8394-777
                                                    </li>
                                                </div>
                                                <div class="price price3">
                                                    <li class="com_price">
                                                        企业标准要求
                                                    </li>
                                                    <li class="com1">
                                                        净资产
                                                        <span>
                                                        </span>
                                                        万元以上
                                                    </li>
                                                    <li class="com2">
                                                        企业需求人员
                                                        <span>
                                                        </span>
                                                        人以上
                                                    </li>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="but">
                                            <span class="apply trans">
                                                重新报价
                                            </span>
                                            <a class="ajax-cons" rel="nofollow" href="http://dbt.zoosnet.net/LR/Chatpre.aspx?id=DBT84865761&amp;cid=1495766315246815440879" target="_blank">
                                                轻松办理
                                            </a>
                                        </div>
                                    </div>
                                    <div class="dis_bot">
                                    </div>
                                </div>
                                <div id="zzc">
                                </div>
                                <div class="on_price r_img">
                                    展开
                                </div>
                            </div>
                            <div class="r_img step_icon_context">
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    var djArray = null;
                </script>
                <script>
                    $(function(){
                    $('#publish-per').change(function(){
                    location.href = '/cer/info?id=2&sco_id='+$(this).val();
                    });
                    })
                    var dzArry = null;
                    //          console.log(dzArry);
                </script>
            </div>
            <!-- -可能关注的项目- -->
            <!-- 新增资质导航 -->
            <div class="bus-details">
                <div class="bus-details-nav info clearfix">
                    <ul>
                        <li>
                            <a href="#details">
                                常态业务
                            </a>
                        </li>
                        <li>
                            <a href="#valuable">
                                价值体现
                            </a>
                        </li>
                        <li>
                            <a href="#strength">
                                企业实力
                            </a>
                        </li>
                        <li>
                            <a href="#service">
                                服务保障
                            </a>
                        </li>
                        <li>
                            <a href="#problem">
                                常见问题
                            </a>
                        </li>
                        <li>
                            <a href="#case">
                                企业展示
                            </a>
                        </li>
                    </ul>
                    <div>
                        <a target="_blank" rel="nofollow" href="#">
                            立即咨询
                        </a>
                        咨询热线：400-005-8178
                    </div>
                </div>
            </div>
            <div class="business_wrapper business_wrapperBg" style="background:url(/statics/img/cer/business_wrapperBg.jpg) no-repeat center top">
                <a name="details" class="floor">
                </a>
                <div class="business_gd2 martop40">
                    <div class="bus_gd2_l fr">
                        <!-- ----tab切换---- -->
                        <!-- -tab 切换标题- -->
                        <div id="block_banner">
                            <ul class="bus_gd2_tabnav">
                                <li class="bus_gd2_current" style="width:25%">
                                    有限公司
                                </li>
                                <li style="width:25%">
                                    股份公司
                                </li>
                                <li style="width:25%">
                                    集团公司
                                </li>
                                <li style="width:25%">
                                    海外公司
                                </li>
                            </ul>
                            <!--
                                <a href="javascript:void(0);" class="fr quick_btn">
                                    立即办理
                                </a>
                            -->
                            <div class="clear clearfix">
                            </div>
                        </div>
                        <!-- -tab 切换内容- -->
                        <div class="bus_gd2_tabmain">
                            <!-- -tab 切换:有限责任企业- -->
                            <div class="bus_gd2_tabcontent">
                                <ul class=" list-paddingleft-2">
                                    <li>
                                        <div class="content">
                                            <div class="Tits">
                                                <div class="pre">
                                                    <img src="/statics/img/cer/pre1.png"/>
                                                </div>
                                                <div class="Tit" style="width: 120px;">
                                                    注册有限责任企业
                                                </div>
                                                <div class="Title">
                                                    这些是空白材料！
                                                </div>
                                            </div>
                                            <div>
                                                <p>
                                                    告知承诺书
                                                </p>
                                                <p>
                                                    企业名称预先核准申请书(空白版)
                                                </p>
                                                <p>
                                                    公司章程（多人股东）（空白版）
                                                </p>
                                                
                                                <p>
                                                    公司登记（备案）申请书 （空白版）
                                                </p>
                                                <p>
                                                    公司章程（一人有限公司不设董事会不设监事会）（空白版）
                                                </p>
                                                <p>
                                                   股东会决议（多人股东）（空白版）
                                                </p>
                                                <p>
                                                   股东决议(一人有限公司)（空白版）
                                                </p>
                                                <p>
                                                   指定代表或者共同委托代理人授权委托书（空白版）
                                                </p>
                                                <p>
                                                   上海市私钥版电子营业执照申请书（空白版）
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="content">
                                            <div class="Tits">
                                                <div class="pre">
                                                    <img src="/statics/img/cer/pre2.png"/>
                                                </div>
                                                <div class="Tit" style="width: 120px;">
                                                    注册有限责任企业
                                                </div>
                                                <div class="Title">
                                                    您可要参考示范版本！
                                                </div>
                                            </div>
                                            <div>
                                                <p>
                                                   公司设立登记提交材料目录
                                                </p>
                                                <p>
                                                   企业名称预先核准申请书 (填写示范版)
                                                </p>

                                                <p>
                                                    公司章程（多人股东）（填写示范版）
                                                </p>
                                                <p>
                                                   公司登记（备案）申请书（填写示范版）
                                                </p>
                                                <p>
                                                   公司章程（一人有限公司不设董事会不设监事会）（填写示范版）
                                                </p>
                                                <p>
                                                   股东会决议（多人股东）（填写示范版）
                                                </p>

                                                <p>
                                                   股东决议(一人有限公司)（填写示范版）
                                                </p>
                                                <p>
                                                  指定代表或者共同委托代理人授权委托书（填写示范版）
                                                </p>
                                                
                                                <p>
                                                   上海市私钥版电子营业执照申请书（填写示范版）
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- -tab 切换：有限责任企业- -->
                            <!-- -tab 切换：合伙企业- -->
                            <div class="bus_gd2_tabcontent" style="display: none">
                                <ul class=" list-paddingleft-2">
                                    <li>
                                        <div class="content">
                                            <div class="Tits">
                                                <div class="pre">
                                                    <img src="/statics/img/cer/pre1.png"/>
                                                </div>
                                                <div class="Tit" style="width: 120px;">
                                                    注册港澳台企业
                                                </div>
                                                <div class="Title">
                                                    你需要准备哪些材料？
                                                </div>
                                            </div>
                                            <div>
                                                <p>
                                                    1.企业名称
                                                </p>
                                                <p>
                                                    1.企业名称
                                                </p>
                                                <p>
                                                    1.企业名称
                                                </p>
                                                <p>
                                                    1.企业名称
                                                </p>
                                                <p>
                                                    1.企业名称
                                                </p>
                                                <p>
                                                    1.企业名称
                                                </p>
                                                <p>
                                                    1.企业名称
                                                </p>
                                                <p>
                                                    1.企业名称
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="content">
                                            <div class="Tits">
                                                <div class="pre">
                                                    <img src="/statics/img/cer/pre2.png"/>
                                                </div>
                                                <div class="Tit" style="width: 120px;">
                                                    注册海外企业
                                                </div>
                                                <div class="Title">
                                                    你需要准备哪些材料？
                                                </div>
                                            </div>
                                            <div>
                                                <p>
                                                    1.企业名称
                                                </p>
                                                <p>
                                                    1.企业名称
                                                </p>
                                                <p>
                                                    1.企业名称
                                                </p>
                                                <p>
                                                    1.企业名称
                                                </p>
                                                <p>
                                                    1.企业名称
                                                </p>
                                                <p>
                                                    1.企业名称
                                                </p>
                                                <p>
                                                    1.企业名称
                                                </p>
                                                <p>
                                                    1.企业名称
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- -tab 切换：合伙企业- -->

                            <!-- -tab 切换：分公司- -->
                            <div class="bus_gd2_tabcontent" style="display: none">
                                <ul class=" list-paddingleft-2">
                                    <li>
                                        <div class="content">
                                            <div class="Tits">
                                                <div class="pre">
                                                    <img src="/statics/img/cer/pre1.png"/>
                                                </div>
                                                <div class="Tit" style="width: 120px;">
                                                    注册港澳台企业
                                                </div>
                                                <div class="Title">
                                                    你需要准备哪些材料？
                                                </div>
                                            </div>
                                            <div>
                                                <p>
                                                    1.企业名称
                                                </p>
                                                <p>
                                                    1.企业名称
                                                </p>
                                                <p>
                                                    1.企业名称
                                                </p>
                                                <p>
                                                    1.企业名称
                                                </p>
                                                <p>
                                                    1.企业名称
                                                </p>
                                                <p>
                                                    1.企业名称
                                                </p>
                                                <p>
                                                    1.企业名称
                                                </p>
                                                <p>
                                                    1.企业名称
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="content">
                                            <div class="Tits">
                                                <div class="pre">
                                                    <img src="/statics/img/cer/pre2.png"/>
                                                </div>
                                                <div class="Tit" style="width: 120px;">
                                                    注册海外企业
                                                </div>
                                                <div class="Title">
                                                    你需要准备哪些材料？
                                                </div>
                                            </div>
                                            <div>
                                                <p>
                                                    1.企业名称
                                                </p>
                                                <p>
                                                    1.企业名称
                                                </p>
                                                <p>
                                                    1.企业名称
                                                </p>
                                                <p>
                                                    1.企业名称
                                                </p>
                                                <p>
                                                    1.企业名称
                                                </p>
                                                <p>
                                                    1.企业名称
                                                </p>
                                                <p>
                                                    1.企业名称
                                                </p>
                                                <p>
                                                    1.企业名称
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- -tab 切换：分公司- -->


                            <!-- -tab 切换：个人独资- -->
                            <div class="bus_gd2_tabcontent" style="display: none">
                                <ul class=" list-paddingleft-2">
                                    <li>
                                        <div class="content">
                                            <div class="Tits">
                                                <div class="pre">
                                                    <img src="/statics/img/cer/pre1.png"/>
                                                </div>
                                                <div class="Tit" style="width: 120px;">
                                                    注册港澳台企业
                                                </div>
                                                <div class="Title">
                                                    你需要准备哪些材料？
                                                </div>
                                            </div>
                                            <div>
                                                <p>
                                                    1.企业名称
                                                </p>
                                                <p>
                                                    1.企业名称
                                                </p>
                                                <p>
                                                    1.企业名称
                                                </p>
                                                <p>
                                                    1.企业名称
                                                </p>
                                                <p>
                                                    1.企业名称
                                                </p>
                                                <p>
                                                    1.企业名称
                                                </p>
                                                <p>
                                                    1.企业名称
                                                </p>
                                                <p>
                                                    1.企业名称
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="content">
                                            <div class="Tits">
                                                <div class="pre">
                                                    <img src="/statics/img/cer/pre2.png"/>
                                                </div>
                                                <div class="Tit" style="width: 120px;">
                                                    注册海外企业
                                                </div>
                                                <div class="Title">
                                                    你需要准备哪些材料？
                                                </div>
                                            </div>
                                            <div>
                                                <p>
                                                    1.企业名称
                                                </p>
                                                <p>
                                                    1.企业名称
                                                </p>
                                                <p>
                                                    1.企业名称
                                                </p>
                                                <p>
                                                    1.企业名称
                                                </p>
                                                <p>
                                                    1.企业名称
                                                </p>
                                                <p>
                                                    1.企业名称
                                                </p>
                                                <p>
                                                    1.企业名称
                                                </p>
                                                <p>
                                                    1.企业名称
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- -tab 切换：个人独资- -->
                        </div>
                        <!-- -tab 切换内容- -->
                    </div>
                    <!-- 右边 行业资讯 -->
                </div>
                <!-- content main -->
                <div class="clear clearfix">
                </div>
            </div>
            <!-- advice_wrapper -->
            <!--
                <div id="mask">
                </div>
            -->
            <div style="width:100%;height:590px;background:url(/statics/img/cer/advice_wrapper1.jpg) no-repeat center top;padding-top:296px;position:relative">
                <div id="carousel">
                    <img src="/statics/img/cer/cate1.jpg" alt="#"/>
                    <img src="/statics/img/cer/cate1.jpg" alt="#"/>
                    <img src="/statics/img/cer/cate1.jpg" alt="#"/>
                    <img src="/statics/img/cer/cate1.jpg" alt="#"/>
                    <img src="/statics/img/cer/cate1.jpg" alt="#"/>
                    <img src="/statics/img/cer/cate1.jpg" alt="#"/>
                    <img src="/statics/img/cer/cate1.jpg" alt="#"/>
                    <img src="/statics/img/cer/cate1.jpg" alt="#"/>
                    <img src="/statics/img/cer/cate1.jpg" alt="#"/>
                </div>
            </div>
            <div class="advice_wrapper advice_wrapper1" style="background:url(/statics/img/cer/advice_wrapper2.jpg) no-repeat center top;position:relative">
                <a name="valuable" class="floor floor-valuable">
                </a>
                <div class="certificate">
                    <div class="Tits">
                        以企业实际需求出发 为您制定专属工商服务
                    </div>

                    <div class="tab">
                        <!-- shadow con_open -->
                        <div class="li">
                            <div class="tits tit1 shadow">
                                <div class="open close">
                                </div>
                                <div class="tit">
                                    个人独资企业
                                </div>
                            </div>
                            <div class="tab_con  con_open">
                                <div class="p">
<pre style="font-family: '微软雅黑';font-size: 12px;">
资质说明：
（1）可承担工程范围的证件；
（2）参照建筑业企业资质管理规定
</pre>
                                </div>
                            </div>
                        </div>
                        <div class="li">
                            <div class="tits tit2 shadow">
                                <div class="open close">
                                </div>
                                <div class="tit">
                                    合伙有限公司
                                </div>
                            </div>
                            <div class="tab_con ">
                                <div class="p">
<pre style="font-family: '微软雅黑';font-size: 12px;">
    等级划分说明：
    （1）建筑工程共分三种资质等级；
    （1）不同资质等级承接工程不同；
</pre>
                                </div>
                            </div>
                        </div>
                        <div class="li">
                            <div class="tits tit3 shadow">
                                <div class="open close">
                                </div>
                                <div class="tit">
                                    股份有限公司
                                </div>
                            </div>
                            <div class="tab_con ">
                                <div class="p">
<pre style="font-family: '微软雅黑';font-size: 12px;">
可承担下列建筑工程的施工：
（1）高度50米以下建筑工程；
（2）高度70米以下的构筑物工程；
（3）建筑面积1.2万米以下建筑工程；
（4）单跨跨度27米以下的建筑工程；
</pre>
                                </div>
                            </div>
                        </div>
                        <div class="li">
                            <div class="tits tit4 shadow">
                                <div class="open close">
                                </div>
                                <div class="tit">
                                    集团公司
                                </div>
                            </div>
                            <div class="tab_con ">
                                <div class="p">
<pre style="font-family: '微软雅黑';font-size: 12px;">
可承担下列建筑工程的施工：
（1）高度100米以下建筑工程；
（2）高度120米以下构筑物工程；
（3）建筑面积4万平米以下建筑工程；
（4）单跨跨度39米以下建筑工程；
</pre>
                                </div>
                            </div>
                        </div>
                        <div class="li">
                            <div class="tits tit5 shadow">
                                <div class="open close">
                                </div>
                                <div class="tit">
                                    海外公司
                                </div>
                            </div>
                            <div class="tab_con ">
                                <div class="p">
<pre style="font-family: '微软雅黑';font-size: 12px;">
可承担3000万元以上建筑工程施工：
（1）高度200米以下建筑工程；
（2）高度240米以下的构筑物工程；
</pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="advice_wrapper advice_wrapper2" style="background:url(/statics/img/cer/advice_wrapper3.jpg) no-repeat center top;position:relative">
                <a name="strength" class="floor">
                </a>
                <div class="certificate">
                    <h3>
                        有实力 更有效率
                        <br/>
                        还有0成本资质维护
                    </h3>
                    <div class="p">
                        年检、延续 为您定制专属资质升级规划方案
                    </div>
                    <div class="p p1">
                        <div class="link">
                            <a href="javascript:;">
                                展开了解更多
                            </a>
                        </div>
                        <div class="add">
                        </div>
                    </div>
                </div>
            </div>
            <div class="advice_wrapper advice_wrapper2_open">
                <div class="certificate1">
                    <div class="Tits">
                        <div class="close">
                            ×
                        </div>
                    </div>
                    <ul>
                        <li>
                            全国协作 效率高
                        </li>
                        <div>
                            31家省级分公司，全国资源共享，优势互补，协作高；
                            <br/>
                            独创全国人才数据库，配证快；材料人员专人筹办，上门服务，效率高；
                        </div>
                    </ul>
                    <ul>
                        <li>
                            一站式服务  付款灵活
                        </li>
                        <div>
                            客服、培训、财务人员等一应俱全，资质细则了解彻底，审批顺畅；加班加点压缩办理周期，高效办理，一次通过率高，省时省钱；
                        </div>
                    </ul>
                    <ul>
                        <li>
                            定制资质规划，促进资质升级
                        </li>
                        <div>
                            提供长久技术支持，0成本维护企业资质，保证动态核查、延续顺利进行
                            <br/>
                            公司特设专业团队，定期提醒企业进行资质升级，不错过最佳时机
                        </div>
                    </ul>
                </div>
            </div>
            <div class="advice_wrapper advice_wrapper2 advice_wrapper3" style="background:url(/statics/img/cer/advice_wrapper4.jpg) no-repeat center top">
                <div class="certificate">
                    <h3>
                        万里挑一，为何只选链企
                    </h3>
                    <div class="p">
                        为什么那么多的企业家通过链企来注册公司？
                    </div>
                    <h3>
                        这是秘密 告诉你如何快速成功注册公司！
                    </h3>
                    <div class="p p1">
                        <div class="add">
                        </div>
                        <div class="link">
                            <a href="javascript:;">
                                展开了解更多
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="advice_wrapper advice_wrapper2_open">
                <div class="certificate1">
                    <div class="Tits">
                        <div class="close">
                            ×
                        </div>
                    </div>
                    <ul>
                        <li>
                            制定计划•监督把控
                        </li>
                        <div>
                            每个项目启动前，公司均会设计专项组，并做充分相关准备及申报计划，严格把控各个时间节点，并有客户管理中心透明监督，合作过程中不定时向合作伙伴汇报整个申报过程进度，确保合作事宜如约履行；
                        </div>
                    </ul>
                    <ul>
                        <li>
                            专项申报•管理严苛
                        </li>
                        <div>
                            公司特设材料技术部和专项申报部，对内我们有相适配的材料组卷绩效考核制度，同时材料部有内部材料审查流程，确保所有材料无人为失误；
                        </div>
                    </ul>
                    <ul>
                        <li>
                            专家团队•一次达标
                        </li>
                        <div>
                            专家团队分为材料技术指导型和材料指标审查型；材料整理过程中材料技术指导型专家会全程监督指导整个材料的整理细节及过程；完成后，材料指标审查型专家会对所有材料按照相关要求逐一审查，确保一次性达标；
                        </div>
                    </ul>
                    <ul>
                        <li>
                            从业十年•资源丰富
                        </li>
                        <div>
                            这个实力和经验，身为10年行业领军企业，你懂的！
                        </div>
                    </ul>
                </div>
            </div>
            <div class="advice_wrapper advice_wrapper1 advice_wrapper4" style="position:relative">
                <a name="service" class="floor">
                </a>
                <div class="Tits">
                    不要“假大空”的承诺  只要签约后的保障
                </div>
                <div class="certificate4">
                    <li>
                        <div class="icon">
                            <img src="/statics/img/cer/advice_icon1.jpg"/>
                        </div>
                        <div class="tits">
                            办理过程出现问题
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <img src="/statics/img/cer/advice_icon2.jpg"/>
                        </div>
                        <div class="tits">
                            反馈问题
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <img src="/statics/img/cer/advice_icon3.jpg"/>
                        </div>
                        <div class="tits">
                            客户关系管理中心
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <img src="/statics/img/cer/advice_icon4.jpg"/>
                        </div>
                        <div class="tits">
                            核实情况属实
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <img src="/statics/img/cer/advice_icon5.jpg"/>
                        </div>
                        <div class="tits">
                            链企集团平台
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <img src="/statics/img/cer/advice_icon6.jpg"/>
                        </div>
                        <div class="tits">
                            理赔基金先行赔付
                        </div>
                    </li>
                    <li class="p">
                        <div class="icon">
                            <img src="/statics/img/cer/advice_icon7.jpg"/>
                        </div>
                        <div class="tits">
                            赔付到账
                        </div>
                    </li>
                </div>
            </div>
            <div class="advice_wrapper advice_wrapper5" style="background:url(/statics/img/cer/advice_wrapper5.jpg) no-repeat center top">
            </div>
            <div class="common-problem" style="position:relative">
                <a name="problem" class="floor">
                </a>
                <h2 class="common-problem-bt">
                    常见问题
                </h2>
                <ul>
                    <li>
                        <a href="http://www.dztcjt.com/faq/m-1-181" target="_blank">
                            建筑施工企业怎么办理安全生产许可证？
                        </a>
                        <p>
                            建筑施工企业怎么办理安全生产许可证?现在就把经验分享给大家。
                            首先，办理安全生产许可证需要购买安全码锁
                            其次，办理安全许可证需要配置相关主要人员
                            接着，制定规章制度
                            紧接着，准备办理安全生产许可证的申请资料
                            最后，提出办理安全生产许可证的申请
                            以上就是建筑事故企业办理安全生产许可证需要的流程，需要提醒的是，企业想要办理安…
                        </p>
                    </li>
                    <li>
                        <a href="http://www.dztcjt.com/faq/m-1-180" target="_blank">
                            关于简化建筑业企业资质标准部分指标的通知
                        </a>
                        <p>
                            给大家普及下各专业挂靠含金量高的证件，各行业的筒子们行动起来。一般要考执业资格证件，都跟自己大学所学专业有关系，这个好像是硬性条件吧。其次就是工作年限的要求把。
                            先从我了解的建筑业开始。
                            二级建造师。这个证件可能是建筑业有含金量且相对容易的证件。挂靠金额各专业有所差异，共5个专业，公路、水利、建筑、机电、市政。
                            试科目
                            一级建造师执业资格…
                        </p>
                    </li>
                    <li>
                        <a href="http://www.dztcjt.com/faq/m-1-179" target="_blank">
                            水利水电工程施工总承包企业资质等级标准
                        </a>
                        <p>
                            水利水电工程施工总承包企业资质分为特级、一级、二级、三级。
                            一级资质标准：
                            1、企业近10年承担过下列6项中的3项以上所列工程的施工，其中至少有1项是（1）（2）中的工程，工程质量合格。
                            （1）库容10亿立方米以上或坝高80米以上大坝1座，或库容1亿立方米以上或坝高60米以上大坝2座；
                            （2）过闸流量&gt;3000立方米/秒的拦河闸1座，或过闸流量&gt;10…
                        </p>
                    </li>
                    <li>
                        <a href="http://www.dztcjt.com/faq/m-1-178" target="_blank">
                            电力工程施工总承包企业资质等级标准
                        </a>
                        <p>
                            电力工程施工总承包企业资质分为特级、一级、二级、三级。
                            一级资质标准：
                            1、企业近5年承担过下列5项中的2项以上所列工程的施工总承包或主体工程承包，工程质量合格。
                            （1）累计电站装机容量150万千瓦以上；
                            （2）单机容量60万千瓦机组，或2台单机容量30万千瓦机组，或4台单机容量20万千瓦机组整体工程；
                            （3）单机容量30万千瓦以上核电站核岛或常规…
                        </p>
                    </li>
                    <li>
                        <a href="http://www.dztcjt.com/faq/m-1-177" target="_blank">
                            公路工程施工总承包企业资质等级标准
                        </a>
                        <p>
                            公路工程施工总承包企业资质分为特级、一级、二级、三级。
                            一级资质标准：
                            1、企业近10年承担过下列4项中的3项以上所列工程的施工，工程质量合格。
                            （1）累计修建一级以上公路路基100公里以上；
                            （2）累计修建高级路面400万平方米以上；
                            （3）累计修建单座桥长≥500米或单跨跨度≥100米的公路特大桥6座以上；
                            （4）完成过单项合同额1亿元以…
                        </p>
                    </li>
                </ul>
                <a href="#" class="view-more-problem">
                    查看更多问题&gt;&gt;
                </a>
            </div>
            <div class="case-display" style="position:relative">
                <a name="case" class="floor">
                </a>
                <h2 class="common-problem-bt">
                    企业展示
                </h2>
                <div class="case-banner" id="case-banner">
                    <div class="case-ban-box">
                        <div class="tempWrap" style="overflow:hidden; position:relative;">
                            <div class="ser-wrap" style="width: 4904px; position: relative; overflow: hidden; padding: 0px; margin: 0px; left: -2992.05px;">
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
                            <li class="on">
                                1
                            </li>
                            <li class="">
                                2
                            </li>
                        </ul>
                    </div>
                </div>
                <a href="/cer/case" class="view-more-problem">
                    查看更多证书&gt;&gt;
                </a>
            </div>
            <script type="text/javascript" src="/statics/js/carousel.js">
            </script>
            <script>
                $('.tj-r-ul>li>p').on('click', function(){
                    var el = $(this).children('.tj-r-i');
                if(el.hasClass('tjexplore')){
                    el.removeClass('tjexplore').addClass('tjfold');
                    $(this).next().hide();
                }else if(el.hasClass('tjfold')){
                    el.removeClass('tjfold').addClass('tjexplore');
                    $(this).next().show();
                }
                });
                //资质详情轮播效果
                $(function () {
                    $('#carousel').carousel({curDisplay: 0, autoPlay: true, interval: 3000});
                });
            </script>
        </section>
        
    </div>
    <?php include template("content","footer"); ?>
