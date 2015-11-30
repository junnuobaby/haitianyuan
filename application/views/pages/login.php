<!--登陆-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="zh-cn">
<?php $this->load->view('./templates/head'); ?>
<body>
<div class="wrapper">
    <?php $this->load->view('./templates/navbar'); ?>

    <div class="login-box">
        <div class="login-form">
            <form class="form-horizontal login_form">
                <div class="input-group">
                    <span class="input-group-addon"><span
                            class="glyphicon glyphicon-user"></span></span>
                    <input type="text" class="form-control" id="user_name_input"
                           name="user_name_input"
                           placeholder="手机号/会员名/邮箱">
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><span
                            class="glyphicon glyphicon-lock"></span></span>
                    <input type="text" class="form-control" id="user_name_input"
                           name="user_name_input"
                           placeholder="密码">
                </div>
                <div class="row">
                    <div class="col-md-5 col-md-offset-1">
                        <a href="#" class="white-color">忘记密码？</a>
                    </div>
                    <div class="col-md-5">
                        <a href="#" class="white-color">免费注册</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="login-btn-div">
                            <button type="submit" class="btn btn-block self-btn-danger">登陆</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div>
            <ul class="nav navbar-nav txt-center">
                <!--qq第三方登陆-->
                <li><a href="#" class="white-color">
                        <img width="25px" height="25px" src="<?php echo base_url('/assets/images/qq.png'); ?>"
                             alt="..." class="img-rounded narbar_li"> qq登陆</a></li>
                <!--微博第三方登陆-->
                <li><a href="#" class="white-color">
                        <img width="25px" height="25px" src="<?php echo base_url('/assets/images/weibo.png'); ?>"
                             alt="..." class="img-rounded narbar_li"> 微博登陆</a></li>
            </ul>
        </div>
    </div>
</div>
<!--.wrapper-->
<?php $this->load->view('./templates/footer'); ?>
</body>
</html>
<style>
    body {
        position: relative;
        background-image: url("<?php echo base_url('assets/images/back/1.jpg'); ?>");
    }
</style>