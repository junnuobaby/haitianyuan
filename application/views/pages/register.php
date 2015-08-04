<!--注册页面-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="zh-cn">
<?php $this->load->view('./templates/head'); ?>
<body>
<div class="wrapper">
    <?php $this->load->view('./templates/navbar'); ?>
    <?php $this->load->view('./templates/jumptron'); ?>
<!--    --><?php //echo base_url("index.php/register/send_code/")?>

    <div class="container">
        <div class="panel">
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-4 col-md-4 col-md-offset-4">
                        <div class="page-header">
                            <h1>海天理财
                                <small>会员注册</small>
                            </h1>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4 col-sm-offset-4 col-md-4 col-md-offset-4">

                        <?php echo form_open('register/load_info'); ?>
                            <div class="form-group has-feedback">
                                <label for="user_mobile">手机号</span></label>
                                <input type="tel" class="form-control" id="user_mobile" name="phone_number" placeholder="手机号">
                                <span class="glyphicon glyphicon-phone form-control-feedback" aria-hidden="true"></span>
                                <a href="#" id="phone_number" class="btn btn-sm btn-danger col-md-offset-9" style="margin-top: 1em">发送验证码</a>
<!--                                <input type="button" name='send_code' id="phone_number" class="btn btn-sm btn-danger col-md-offset-9" style="margin-top: 1em">发送验证码</input>-->
                            </div>
                            <div class="form-group has-feedback">
                                <label for="verification_code">验证码 </label>
                                <input type="text" class="form-control" id="verification_code" name="phone_code" placeholder="输入手机收到的验证码">
                                <span class="glyphicon glyphicon-edit form-control-feedback"
                                      aria-hidden="true"></span>
                            </div>


                            <div class="form-group has-feedback register_input" >
                                <label for="password1">登陆密码 </label>
                                <input type="password" class="form-control" id="password1" name="password" placeholder="输入密码">
                                <span class="glyphicon glyphicon-lock form-control-feedback" aria-hidden="true"></span>
                            </div>

                            <div class="form-group has-feedback register_input">
                                <label for="password2">确认密码 </label>
                                <input type="password" class="form-control" id="password2" name="passconf" placeholder="再次输入密码">
                                <span class="glyphicon glyphicon-lock form-control-feedback" aria-hidden="true"></span>
                            </div>

                            <button type="submit" class="btn btn-lg btn-block btn-danger">注册</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!--.wrapper-->
<?php $this->load->view('./templates/footer'); ?>
<script type="text/javascript">
    var seconds = 59;
    var speed = 1000;
    var phone_number = document.getElementById("phone_number");
    function countDown(seconds,speed){
        var txt = ((seconds < 10) ? "0" + seconds : seconds);
        phone_number.innerHTML = txt;
        var timeId = setTimeout("countDown(seconds--,speed)",speed);
        if(seconds == 0){
            clearTimeout(timeId);
            phone_number.innerHTML = "获取验证码";
            seconds = 59;

        };
    }

    $(document).ready(function () {
        $("#phone_number").click(function () {
            var xmlhttp = new XMLHttpRequest();
            var phone_number = $("user_mobile").val();
            xmlhttp.open("GET", '<?php echo base_url("index.php/register/send_code/")?>' + '/' +phone_number, true);
            xmlhttp.send();
            countDown(seconds,speed);
        });
    });
</script>
</html>