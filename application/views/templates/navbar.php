<!--导航栏-->
<header class="header">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo base_url('/index.php/index'); ?>">
                <img src="<?php echo base_url('assets/images/logo/logo_0.png'); ?>"/>
            </a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <nav class="collapse navbar-collapse pull-left" style="margin-top: 5px;">
            <ul class="nav navbar-nav top-menu">
                <li><a href="<?php echo base_url('/index.php/index'); ?>">首页</a></li>
                <li><a href="#">问答</a></li>
                <li><a href="<?php echo base_url('/index.php/stocks/simulation/index') ?>">华山论剑</a></li>
                <li><a href="#">论坛</a></li>
            </ul>
        </nav>

        <!--根据是否登陆导航条显示不同的内容，当前默认为未登录-->
        <?php $login_state = true; ?>
        <?php if ($login_state == false): ?>
            <div class="navbar-form navbar-right navbar-login">
                <a href="<?php echo base_url('/index.php/login') ?>" class="theme-color">
                    登陆</a>
                <a href="<?php echo base_url('/index.php/register') ?>" class="theme-color">
                    注册</a>
            </div>
        <?php else: ?>
            <!--登陆成功后导航条上显示的内容-->
            <ul class="nav pull-right user-nav">
                <li class="dropdown user-nav-dropdown user-img">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                       aria-haspopup="true" aria-expanded="false"><img class="img-responsive"
                                                                       src="<?php echo base_url('assets/images/touxiang/2.jpg'); ?>"/></a>
                    <ul class="dropdown-menu avatar-dropdown-menu">
                        <li><a href="<?php echo base_url("index.php/home/load_home/web/master/qa");  ?>"><span class="glyphicon glyphicon-home"></span> 我的主页</a></li>
                        <li><a href="<?php echo base_url("index.php/master/master_profile");?>"><span class="glyphicon glyphicon-education"></span> 个人中心</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-cog"></span> 账号设置</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> 退出登陆</a></li>
                    </ul>
                </li>
                <li class="dropdown user-nav-dropdown user-msg">
                    <a  href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                       aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-envelope hz-icon"></span> 消息</a>
                    <ul class="dropdown-menu msg-dropdown-menu">
                        <li><a href="#"><span class="glyphicon glyphicon-question-sign"></span> 问答</a></li>
                        <li><a href="#"><span
                                    class="glyphicon glyphicon-bullhorn"></span> 通知</a></li>
                        <li><a href="#"><span
                                    class="glyphicon glyphicon-comment"></span> 回复</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-level-up"></span> 私信</a></li>
                    </ul>
                </li>

                <li>
                    <a class="btn com add-in-btn"><span class="glyphicon glyphicon-plus"></span> 理财师入驻</a>
                </li>
            </ul>
        <?php endif; ?>
    </div>
</header>

<script>
    $(function () {
        $('li.user-img').hover(function () {
            $('.avatar-dropdown-menu').show();
        }, function () {
            $('.avatar-dropdown-menu').hide();
        });
        $('li.user-msg').hover(function () {
            $('.msg-dropdown-menu').show();
        }, function () {
            $('.msg-dropdown-menu').hide();
        });
    })
</script>

