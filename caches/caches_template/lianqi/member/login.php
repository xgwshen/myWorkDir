<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("member","login_header"); ?>  
    <div class="wrapper index">
        <div class="wrapper-main">
            <section class="lx_login da_login">
                <div class="login_wrapper">
                    <!-- content main -->
                    <div class="login_main">
                        <div class="login_content">
                            <div class="login_tab">
                                <a href="javascript:" class="logHover">
                                    账号登录
                                </a>
                                <a href="javascript:" class="fr">
                                    手机动态码登录
                                </a>
                            </div>
                            <div class="clear clearfix">
                            </div>
                            <div class="message">
                            </div>
                            <div class="login_form_menu">
                                <form  method="post" class="list-input-form" enctype="multipart/form-data">
                                    <input name="dosubmit" type="hidden" value="1"/>
                                    <ul class="login_form">
                                        <li>
                                            <input type="text" name="username" placeholder="手机号码" class="list-input-txt tel_log required"/>
                                        </li>
                                        <li>
                                            <input type="password" name="password" placeholder="密码" class="list-input-txt pass required"/>
                                        </li>
                                        <li>
                                            <div class="auto">
                                                <input type="checkbox" name="rememberMe" value="1" id="autologin"/>
                                                <label for="autologin">
                                                    &ensp;7天自动登录
                                                </label>
                                            </div>
                                            <div class="log_lx_link">
                                                <a href="/index.php?m=member&c=index&a=register" >
                                                    新用户注册
                                                </a>
                                                &emsp;|&emsp;
                                                <a href="/index.php?m=member&c=index&a=public_forget_password">
                                                    忘记密码
                                                </a>
                                            </div>
                                        </li>
                                        <!--
                                            <li>
                                                <input type="submit" value="登&ensp;录" class="list-input-sub ajax-login" data-url="/user"/>
                                            </li>
                                        -->
                                        <li>
                                            <input type="submit" value="登&ensp;录" class="list-input-sub ajax-login" data-url="/site/success"/>
                                        </li>
                                        <!--
                                            <li class="idea">
                                                <a href="" >
                                                    登录意见反馈
                                                </a>
                                            </li>
                                        -->
                                    </ul>
                                </form>
                                <!-- 手机动态码登录 -->
                                <form action="/site/sms-login" method="post" style="display: none;" class="list-input-form">
                                    <input name="_csrf" type="hidden" id="_csrf" value="MUdOSzRzMy1uCXYNRjJkRAgvBCl4GnBuWiA9BnEhdxhfA3c/c0p4SQ=="/>
                                    <ul class="login_form">
                                        <li>
                                            <input type="text" name="phone" placeholder="手机号码" class="list-input-txt tel_log required"/>
                                        </li>
                                        <li class="login_duanxin">
                                            <input type="text" name="verifyCode" placeholder="短信验证码" class="list-input-txt info required"/>
                                            <input type="button" value="免费获取短信验证码" class="log_sendCode" data-url="/site/send-login-sms"/>
                                        </li>
                                        <li>
                                            <div class="auto">
                                                <input type="checkbox" name="rememberMe" value="1" id="autologin"/>
                                                <label for="autologin">
                                                    &ensp;7天自动登录
                                                </label>
                                            </div>
                                            <div class="log_lx_link">
                                                <a href="/site/reg" >
                                                    新用户注册
                                                </a>
                                                &emsp;|&emsp;
                                                <a href="/site/find">
                                                    忘记密码
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <input type="submit" value="登&ensp;录" class="list-input-sub ajax-login" />
                                        </li>
                                        <!--
                                            <li class="idea">
                                                <a href="" >
                                                    登录意见反馈
                                                </a>
                                            </li>
                                        -->
                                    </ul>
                                </form>
                            </div>
                            <!-- login_form_menu -->
                            <!-- 扫码登录 -->
                            <div class="code">
                                <div class="login_tab">
                                    <div class="wei">
                                        微信扫码登录
                                    </div>
                                </div>
                                <div class="clear clearfix">
                                </div>
                                <div class="login_form_menu">
                                    <ul class="login_form">
                                        <li class="code_img" id="weixin_qrcode">
                                        </li>
                                        <li>
                                            <!--
                                                <div class="log_lx_link">
                                                    <a href="" >
                                                        新用户注册
                                                    </a>
                                                    &emsp;|&emsp;
                                                    <a href="">
                                                        忘记密码
                                                    </a>
                                                </div>
                                            -->
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- login_content -->
                        <div class="login_bot">
                            <div class="bot_left">
                                <li>
                                    第三方登录
                                </li>
                                <li>
                                    <a class="weixin" href="/login/index?type=weixin">
                                    </a>
                                    <a class="qq" href="/login/index?type=qq">
                                    </a>
                                    <a class="weibo" href="/login/index?type=weibo">
                                    </a>
                                </li>
                            </div>
                            <div class="bot_right">
                                <div class="login-point">
                                </div>
                                <div class="login-switch">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- content main -->
                    <div class="clear clearfix">
                    </div>
                </div>
                <!-- advice_wrapper -->
            </section>
        </div>


<?php include template("content","footer"); ?>  