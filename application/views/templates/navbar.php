<!--导航栏-->
<div class="container">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
<!--            <div class="col-xs-12 col-md-12 col-lg-12">-->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url('/index.php/index')?>"><span class="glyphicon glyphicon-home"></span> 首页</a>
                </div>

                <div class="collapse navbar-collapse" style="font-size: 16px">
                    <ul class="nav navbar-nav">
                        <li><a href="#">理财问答</a></li>
                        <li><a href="#">理财观点</a></li>
                        <li><a href="#">华山论剑</a></li>
                        <li><a href="#">知识服务</a></li>
                        <li><a href="#">论坛</a></li>

                    </ul>
                    <div></div>



                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">登陆</a></li>
                    <li><a href="<?php echo base_url('/index.php/register')?>">注册</a></li>
                </ul>

                    <form class="navbar-form navbar-right" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="关键字">
                        </div>
                        <button type="submit" class="btn btn-default">搜索</button>
                    </form>

                </div><!-- /.narbar-collapse-->
            </div><!-- /.col-->
<!--        </div><!-- /.row-->
    </nav>
</div><!-- /.container -->
