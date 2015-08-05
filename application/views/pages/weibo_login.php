<!--首页-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="zh-cn">
<?php $this->load->view('./templates/head'); ?>
<body>
<div class="wrapper">
    <?php $this->load->view('./templates/navbar'); ?>
    <?php $this->load->view('./templates/jumptron'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><img src="<?php echo base_url('/assets/images/weibo.png'); ?>"
                                                    alt="..." class="img-rounded narbar_li">
                        使用您的微博账号登陆<strong>海天理财</strong></div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="<?php echo base_url('/assets/images/weibo_pic1.jpg'); ?>"
                                     alt="..." class="img-rounded">
                            </div>

                            <div class="col-md-5 col-md-offset-4">
                                <form class="form-horizontal " style="padding-top: 6em;">
                                    <div class="form-group">
                                        <label for="weibo_name" class="col-md-3 control-label">账号：</label>

                                        <div class="col-md-7">
                                            <input type="text" class="form-control" id="weibo_name" name="weibo_name"
                                                   placeholder="请用微博账号登陆">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="weibo_password" class="col-md-3 control-label">密码：</label>

                                        <div class="col-md-7">
                                            <input type="password" class="form-control" id="weibo_password"
                                                   name="weibo_password" placeholder="请输入密码">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6">

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class=" col-md-7 col-md-offset-3">
                                            <button type="submit" class="btn btn-block btn-danger">登陆</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <p>提示：授权后表明你已同意<a href="#" target="_blank"><strong>海天理财登陆服务协议</strong></a></p>
            </div>
        </div>
    </div>
</div>
<!--.wrapper-->
<?php $this->load->view('./templates/footer'); ?>

</body>
</html>
