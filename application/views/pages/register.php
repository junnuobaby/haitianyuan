<!--注册页面-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="zh-cn">
<?php $this->load->view('./templates/head'); ?>
<body>
<div class="wrapper">
    <?php $this->load->view('./templates/jumptron'); ?>
    <?php $this->load->view('./templates/navbar'); ?>


    <div class="container">
        <div class="panel">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="page-header">
                            <h1>海天理财 <small>新用户注册</small></h1>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <form>

                            <div class="form-group has-feedback">
                                <label for="username">用户名</span></label>
                                <input type="email" class="form-control" id="username" placeholder="用户名">
                                <span class="glyphicon glyphicon-user form-control-feedback" aria-hidden="true"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <label for="email">邮箱 </label>
                                <input type="email" class="form-control" id="email" placeholder="e-mail">
                                <span class="glyphicon glyphicon-envelope form-control-feedback" aria-hidden="true"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <label for="password1">密码 </label>
                                <input type="password" class="form-control" id="password1" placeholder="输入密码">
                                <span class="glyphicon glyphicon-lock form-control-feedback" aria-hidden="true"></span>
                            </div>

                            <div class="form-group has-feedback">
                                <label for="password2">确认密码 </label>
                                <input type="password" class="form-control" id="password2" placeholder="再次输入密码">
                                <span class="glyphicon glyphicon-lock form-control-feedback" aria-hidden="true"></span>
                            </div>

                            <button type="submit" class="btn btn-lg btn-danger col-md-offset-5">注册</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!--.wrapper-->
<?php $this->load->view('./templates/footer'); ?>
</body>


</html>