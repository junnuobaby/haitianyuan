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
                <!--登陆信息面板-->
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

                <!--基本信息面板-->
                <div class="panel panel-danger">
                    <div class="panel-heading">更改个人基本信息</div>
                    <div class="panel-body master-profile-panel">
                        <!--上传头像-->
                        <div>
                            <form action="http://192.168.0.105/modify_info/do_upload" enctype="multipart/form-data"
                                  method="post" onsubmit="return checkCoords();">
                                <p><strong>更换头像(图片文件宽高不得大于500)</strong></p>
                                <a href="#" class="avatar-upload">
                                    <input type="file" id="master-profile-avatar"
                                           name="master-profile-avatar" onchange="read_avatar()">选择文件
                                </a>

                                <div id="display_avatar_div">
                                    <div class="row">
                                        <!--预览图-->
                                        <div class="col-md-7">
                                            <div id="display_avatar_block">
                                                <img id='master-profile-avatar-display'
                                                     name='master-profile-avatar-display' alt="..." src="">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 表单元素，值为裁剪时获取到的左上角x坐标,y坐标，宽度，高度 -->
                                    <input type="hidden" id="x" name="x">
                                    <input type="hidden" id="y" name="y">
                                    <input type="hidden" id="w" name="w">
                                    <input type="hidden" id="h" name="h">
                                    <!--点击按钮提交表单-->
                                    <button type="submit"
                                            class="btn btn-warning btn-sm self-btn-danger"> 确定裁剪
                                    </button>
                                </div>
                            </form>
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
<script src="<?php echo base_url('/assets/js/htyjs/master_profile.js') ?>"></script>
</body>
</html>
