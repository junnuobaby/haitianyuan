<!--理财师主页-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="zh-cn">
<?php $this->load->view('./templates/head'); ?>
<body>
<link href="<?php echo base_url('/assets/css/jquery.Jcrop.css'); ?>" rel="stylesheet" media="screen">
<script src="<?php echo base_url('/assets/js/htyjs/general_navbar.js') ?>"></script>
<script src="<?php echo base_url('/assets/js/webjs/Region.js') ?>"></script>
<script src="<?php echo base_url('/assets/js/webjs/jquery.Jcrop.js') ?>"></script>
<div class="wrapper">
    <?php $this->load->view('./templates/navbar'); ?>
    <div class="container" style="margin-top: 100px">
        <div class="row">
            <div class="col-sm-3 col-md-3 ">
                <?php $this->load->view('./master/master_sidebar'); ?>
            </div>

            <div class="col-md-9">
                <!--                    登陆信息面板-->
                <div class="panel panel-danger">
                    <div class="panel-heading">更改登陆信息</div>
                    <div class="panel-body master-profile-panel">
                        <!--                        <div class="row">-->
                        <form>

                            <div class="form-group">
                                <label for="master_profile_phone">手机号码</label>
                                <label id="master_profile_phone_error" style="color: red"></label>
                                <input type="text" class="form-control" id="master_profile_phone"
                                       name="master_profile_phone" onchange="display_phone_block(this)"
                                       value='<?php echo "18244288433" ?>' data-old="<?php echo '18244288433' ?>">
                            </div>

                            <div id="submit_phone_block" style="display: none">
                                <div class="form-group">
                                    <div class="input-group input-group-verification">
                                        <input type="text" class="form-control" id="verification_code" name="phone_code"
                                               placeholder="输入手机收到的验证码" required>
                                        <span class="input-group-btn">
                                            <button href="#" id="send_code"
                                                    class="btn btn-warning self-btn-danger btn-a-light">发送验证码
                                            </button>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-warning  btn-round self-btn-danger">
                                        确定
                                    </button>
                                </div>
                            </div>
                        </form>

                        <form>
                            <div class="form-group">
                                <label for="master_profile_email">邮箱</label>
                                <label id="master_profile_email_error" style="color: red"></label>
                                <input type="email" class="form-control" id="master_profile_email"
                                       name="master_profile_email" value='<?php echo "444092487@qq.com" ?>'
                                       data-old="<?php echo "444092487@qq.com" ?>" required
                                       onchange="display_email_block(this)">
                            </div>
                            <div id="submit_email_block" class="form-group" style="display: none">
                                <button type="submit" class="btn btn-warning  btn-round self-btn-danger">
                                    确定
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!--                    基本信息面板-->
                <div class="panel panel-danger">
                    <div class="panel-heading">更改个人基本信息</div>
                    <div class="panel-body master-profile-panel">
                        <!--                        上传头像-->
                        <div>
                            <p><strong>更换头像(图片文件不能超过1024k)</strong></p>

                            <div>
                                <table>
                                    <tr>
                                        <td>
                                            <input type="file" id="master-profile-avater" name="master-profile-avater">
                                        </td>
                                        <td>
                                            <input type="button" value="确定上传"
                                                   class="btn btn-warning btn-sm self-btn-danger">
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div id="display_avater_block">
                                <img id='master-profile-avater-display' class="img-rounded img-responsive"
                                     name='master-profile-avater-display'
                                     src="<?php echo base_url('/assets/images/touxiang/6.jpg'); ?>"
                                     alt="我的头像">
                            </div>

                        </div>
                        <!--使用x-editable修改个人基本信息-->
                        <table class="table">
                            <tr>
                                <td width="20%">用户名</td>
                                <td width="80%"><a href="#" id="master_profile_name" name="master_profile_name"
                                                   data-type="text" data-pk="1" data-url="/post" class="basic-info-a"
                                                   data-title="修改用户名"><?php echo "君诺宝宝" ?></a></td>
                            </tr>
                            <tr>
                                <td width="20%">性别</td>
                                <td width="80%"><a href="#" id="master_profile_sex" data-type="select" data-pk="1"
                                                   data-url="/post" class="basic-info-a" data-title="选择性别"
                                                   data-emptytext="未设置"></a></td>
                            </tr>

                            <tr>
                                <td width="20%">出生年月</td>
                                <td width="80%"><a href="#" id="master_profile_birthday" data-type="date"
                                                   class="basic-info-a"
                                                   data-pk="1" data-url="/post" data-title="设置出生年月">1984-05-15</a>
                                </td>
                            </tr>
                            <tr>
                                <td width="20%">居住地</td>
                                <td width="80%">
                                    <!--                                    居住地信息以表单形式提交-->
                                    <form id="master_address_form">
                                        <span>*</span> 省
                                        <select id="sel_Province" style="width:80px" name="sel_Province"></select>
                                        <span>*</span> 市
                                        <select id="sel_City" name="sel_City"></select>
                                        <span>*</span> 县/区
                                        <select id="sel_County" name="sel_County"></select>
                                        <button type="submit" class="btn btn-warning btn-xs btn-round self-btn-danger">
                                            确定
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td width="20%">机构</td>
                                <td width="80%"><a href="#" id="master_profile_company" name="master_profile_company"
                                                   data-type="text" data-pk="1" data-url="/post" class="basic-info-a"
                                                   data-title="修改所属机构"><?php echo "广发证券" ?></a></td>
                            </tr>
                            <tr>
                                <td width="20%">资格证号码</td>
                                <td width="80%"><a href="#" id="master_profile_identification"
                                                   name="master_profile_identification"
                                                   data-type="text" data-pk="1" data-url="/post" class="basic-info-a"
                                                   data-title="修改资格证号码"><?php echo "123456" ?></a></td>
                            </tr>
                            <tr>
                                <td width="20%">个人简介</td>
                                <td width="80%"><a href="#" id="master_profile_comments"
                                                   name="master_profile_comments"
                                                   data-type="textarea" data-pk="1" class="basic-info-a"
                                                   data-title="编辑个人简介" data-emptytext="未填写"></a></td>
                            </tr>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--.wrapper-->
<?php $this->load->view('./templates/footer'); ?>
<script>
    $.fn.editable.defaults.mode = 'inline'; //设置全部使用x-editable的组件均为嵌入形式
    $(document).ready(function () {
        $('#master_profile_name').editable();
        $('#master_profile_company').editable();
        $('#master_profile_identification').editable();
        $('#master_profile_truename').editable();
        $('#master_profile_idcard').editable();
        //选择性别的x-editable选项
        $('#master_profile_sex').editable({
            source: [
                {value: 1, text: '男'},
                {value: 2, text: '女'},
            ]
        });

        //设置出生日期的x-editable选项
        $('#master_profile_birthday').editable({
            format: 'yyyy-mm-dd',
            viewformat: 'yyyy-mm-dd',
            datepicker: {
                weekStart: 1
            }
        });
        //个人简介的x-editable选项
        $('#master_profile_comments').editable({
            url: '/post',
            rows: 5
        });
    });
    //居住地插件初始化
    AreaSelector().init();

    //    验证手机号码是否为11位以及是否修改手机号码，若是则显示验证输入框和提交按钮
    function display_phone_block(id) {
        var txt = $(id).val();
        var submit_phone_block = $("#submit_phone_block");
        //若手机号码不足11位，显示警告信息
        if (txt.length != 11) {
            $("#master_profile_phone_error").html("(请输入11位手机号码)");
            return;
        }
        //若手机号码为11位且进行了修改
        if (txt != $(id).data('old')) {
            submit_phone_block.slideDown("slow");
        }
        else if (submit_phone_block.css('display') != 'none') {
            submit_phone_block.slideUp("slow");
        }
    }

    //    验证邮箱格式是否正确，根据是否更改邮箱决定是否显示提交按钮
    function display_email_block(id) {
        var email_val = $(id).val();
        var apos = email_val.indexOf("@");
        var dotpos = email_val.lastIndexOf(".");
        var submit_email_block = $("#submit_email_block");
        //邮箱格式不正确，发出警告
        if ((apos < 1 || dotpos - apos < 2) && email_val.length > 0) {
            $('#master_profile_email_error').html('(邮箱格式错误！)');
            return;
        }
        else {
            $('#master_profile_email_error').html('');
        }
        //若更换了邮箱账号，验证该邮箱账号是否和原来一样，不一样就显示提交按钮
        if (email_val != $(id).data('old')) {
            submit_email_block.slideDown("slow");
        }
        else if (submit_email_block.css('display') != 'none') {
            submit_email_block.slideUp("slow");
        }
    }
    //头像裁剪插件
    $("#master-profile-avater-display").Jcrop();
</script>
<script src="<?php echo base_url('/assets/js/htyjs/master_profile.js') ?>"></script>
</body>
</html>
