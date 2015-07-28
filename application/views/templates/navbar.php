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

            <div class="collapse navbar-collapse" style="font-size: 16px">
                <ul class="nav navbar-nav">
                    <li><a href="#">理财室</a></li>
                    <li><a href="#">华山论剑</a></li>
                    <li><a href="#">知识服务</a></li>
                    <li><a href="#">论坛</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo base_url('/index.php/register') ?>">注册</a></li>
                </ul>

                <form class="navbar-form navbar-right">
                    <div class="form-group">
                        <input type="text" class="form-control" id="recipient-name" placeholder="用户名">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="recipient-name" placeholder="密码">
                    </div>
                    <button class="btn btn-danger" type="submit">登陆</button>
                </form>

            </div>
        </div>
    </div>
</nav>

