<!--导航栏-->
<nav class="navbar navbar-default navbar-fixed-top">
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
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo base_url('/index.php/register') ?>">注册<span>&nbsp</span></a></li>
                        <li><a href="<?php echo base_url('/index.php/register/user_info') ?>">
                                <img src="<?php echo base_url('/assets/images/qq.png'); ?>"
                                     alt="..." class="img-rounded narbar_li"></a></li>
                        <li><a href="<?php echo base_url('/index.php/login/weibo_login') ?>">
                                <img src="<?php echo base_url('/assets/images/weibo.png'); ?>"
                                     alt="..." class="img-rounded narbar_li"></a></li>
                    </ul>

                    <form class="navbar-form navbar-right">
                        <div class="form-group">
                            <input type="text" class="form-control" id="user_name_input" name="user_name_input"
                                   placeholder="邮箱 / 手机号码">
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" id="password_input" name="password_input"
                                   placeholder="密码">
                        </div>
                        <button class="btn btn-danger" type="submit" id="login">登陆</button>

                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="忘记密码"><span>&nbsp</span><span
                                class="glyphicon glyphicon-question-sign"></span></a>
                    </form>
                <?php else: ?>
                    <!--                    登陆成功后导航条上显示的内容-->
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">
                                君诺宝宝 <span class="caret"></span></a>


                            <ul class="dropdown-menu" >
                                <li id="info_dropdown">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <img width="100px" class="img-circle"
                                                 src="<?php echo base_url('/assets/images/touxiang/1.jpg'); ?>"
                                                 alt="...">
                                        </div>

                                        <div class="col-md-7">
                                            <a href="#" class="btn btn-default">个人资料</a>
                                            <a href="#" class="btn btn-default">退出</a>
                                        </div>

                                    </div>
                                </li>
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

