<!--导航栏-->
<nav class="navbar navbar-default navbar-fixed-top" xmlns="http://www.w3.org/1999/html" id="navbar">
    <div class="container">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url('/index.php/index') ?>"><span
                        class="glyphicon glyphicon-home"></span> 首页</a>
            </div>

            <div class="collapse navbar-collapse narbar_font_size">
                <ul class="nav navbar-nav">
                    <li><a href="#">理财室</a></li>
                    <li><a href="#">华山论剑</a></li>
                    <li><a href="#">知识服务</a></li>
                    <li><a href="#">论坛</a></li>
                </ul>

                <!--                根据是否登陆导航条显示不同的内容，当前默认为未登录-->
                <?php $login_state = true ?>
                <?php if ($login_state == false): ?>
                    <div class="navbar-form navbar-right ">
                        <a href="<?php echo base_url('/index.php/login') ?>">
                            <input class="btn btn-danger" type="button" id="login" value="登陆"/></a>
                        <a href="<?php echo base_url('/index.php/register') ?>">
                            <input class="btn btn-danger" type="button" id="register" value="注册"/></a>
                    </div>

                <?php else: ?>
                    <!--                    登陆成功后导航条上显示的内容-->
                    <ul class="nav navbar-nav navbar-right">
                        <!--                        显示用户名-->
                        <li class="dropdown">
                            <a id='navbar-username' href="#" class="dropdown-toggle" data-toggle="dropdown"
                               role="button"
                               aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span>
                                <?php echo '君诺宝宝' ?><span class="caret"></span></a>

                            <ul class="dropdown-menu dropdown-menu-profile">
                                <li id="info_dropdown">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <img width="100px" class="img-circle"
                                                 src="<?php echo base_url('/assets/images/touxiang/1.jpg'); ?>"
                                                 alt="...">
                                        </div>
                                        <div class="col-md-7">
                                            <div class="panel panel-default sign">
                                                <div class="panel-body">
                                                    你还未填写个人资料，请在个人资料页面完善信息
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-3">
                                            <a href="#"> 关注 <?php echo '14' ?></a>
                                        </div>
                                        <div class="dropdown-menu-profile-item"></div>
                                        <div class="col-md-3">
                                            <a href="#"> 粉丝 <?php echo '20' ?></a>
                                        </div>
                                        <div class="dropdown-menu-profile-item"></div>
                                        <div class="col-md-3">
                                            <a href="#"> 订单 <?php echo '0' ?></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!--                        用户的个人菜单-->
                        <li class="dropdown">
                            <a id="navbar-menu" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false"><span
                                    class="glyphicon glyphicon-envelope"></span>
                                我的空间<span class="caret"></span></a>

                            <ul class="dropdown-menu">
                                <li><a href="#">我的主页</a></li>
                                <li><a href="#">我的订单</a></li>
                                <li><a href="#">我的私信</a></li>
                                <li><a href="#">我的收藏</a></li>
                                <li><a href="#">我的钱包</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">设置</a></li>
                                <li><a href="#">退出</a></li>
                            </ul>
                        </li>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>

<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>

