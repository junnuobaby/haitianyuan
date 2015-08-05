<!--用户注册后跳转至此页面完善个人资料页面-->
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
        <div class="col-md-10 col-md-offset-1">
            <div class="page-header">
                <h3>完善个人资料
                    <small>普通用户选择会员，理财师用户选择理财师进行个人资料完善</small>
                </h3>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist" id="myTabs">
                        <li role="presentation" class="active"><a href="#user" id="user-tab"
                                                                  aria-controls="user" role="tab"
                                                                  data-toggle="tab"><span
                                    class="glyphicon glyphicon-user" aria-hidden="true"></span> 会员</a></li>
                        <li role="presentation"><a href="#adviser" id="adviser-tab" aria-controls="adviser"
                                                   role="tab"
                                                   data-toggle="tab"><span class="glyphicon glyphicon-yen"
                                                                           aria-hidden="true"></span> 理财师</a></li>
                    </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <!-- 会员个人资料完善 -->
                        <div role="tabpanel" class="tab-pane active" id="user" aria-labelledby="user-tab">
                            <div class="col-md-5 col-md-offset-2">
                                <form>
                                    <br/>

                                    <div class="form-group has-feedback">
                                        <label for="username">用户名 <span class="key_info">*</span></span></label>
                                        <input type="text" class="form-control" id="username" name="username"
                                               placeholder="用户名" required>
                                        <span class="glyphicon glyphicon-user form-control-feedback"
                                              aria-hidden="true"></span>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label for="email">邮箱 <span class="key_info">*</span> </label>
                                        <input type="email" class="form-control" id="user_email" name="user_email"
                                               placeholder="e-mail" required>
                                        <span class="glyphicon glyphicon-envelope form-control-feedback"
                                              aria-hidden="true"></span>
                                    </div>

                                    <button type="submit" class="btn btn-lg btn-danger btn-block">确定</button>
                                </form>
                            </div>
                            <div class="col-md-4 col-md-offset-1">
                                <br/><br/><br/>

                                <p><strong>1.</strong> 带 <span class="key_info">*</span> 号为必填项</p>

                                <p><strong>2. </strong>为正常使用，请使用国内邮箱。</p>
                            </div>

                        </div>
                        <!-- 理财师个人资料完善 -->
                        <div role="tabpanel" class="tab-pane" id="adviser" aria-labelledby="adviser-tab">
                            <div class="col-md-5 col-md-offset-2 ">
                                <form>
                                    <br/>

                                    <div class="form-group has-feedback">
                                        <label for="username">用户名 <span class="key_info">*</span></label>
                                        <input type="text" class="form-control" id="master" name="master"
                                               placeholder="用户名" required>
                                        <span class="glyphicon glyphicon-user form-control-feedback"
                                              aria-hidden="true"></span>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label for="email">邮箱 <span class="key_info">*</span> </label>
                                        <input type="email" class="form-control" id="master_email" name="master_email"
                                               placeholder="e-mail" required>
                                        <span class="glyphicon glyphicon-envelope form-control-feedback"
                                              aria-hidden="true"></span>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label for="company">机构 </label>
                                        <input type="text" class="form-control" id="master_company"
                                               name="master_company" placeholder="机构名称">
                                        <span class="glyphicon glyphicon-th form-control-feedback"
                                              aria-hidden="true"></span>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label for="certification_code">资格证号码 </label>
                                        <input type="text" class="form-control" id="master_code" name="master_code"
                                               placeholder="资质号码">
                                        <span class="glyphicon glyphicon-search form-control-feedback"
                                              aria-hidden="true"></span>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label for="adviser_name">真实姓名 <span class="key_info">*</span> </label>
                                        <input type="text" class="form-control" id="master_name" name="master_name"
                                               placeholder="您的真实姓名" required>
                                        <span class="glyphicon glyphicon-sunglasses form-control-feedback"
                                              aria-hidden="true"></span>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label for="id_code">身份证号码 <span class="key_info">*</span></label>
                                        <input type="text" class="form-control" id="master_idc" name="master_idc"
                                               placeholder="身份证号码" required>
                                        <span class="glyphicon glyphicon-eye-open form-control-feedback"
                                              aria-hidden="true"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">身份证照片 <span class="key_info">*</span></label>
                                        <input type="file" id="master_idc_pic" name="master_idc_pic" required>

                                        <p class="help-block">请上传你的身份证正面照片</p>
                                    </div>


                                    <button type="submit" class="btn btn-lg btn-danger btn-block ">确定</button>
                                </form>
                            </div>

                            <div class="col-md-4 col-md-offset-1">
                                <br/><br/><br/>

                                <p><strong>1.</strong> 带 <span class="key_info">*</span> 号为必填项</p>

                                <p><strong>2. </strong>为正常使用，请使用国内邮箱。</p>

                                <p><strong>3.</strong> 机构和资格证号码为选填。</p>

                                <p><strong>4.</strong> 请上传身份证正面照。</p>

                                <p><strong>5. </strong>我们确保不会泄露您的个人信息。</p>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--.wrapper-->
<?php $this->load->view('./templates/footer'); ?>
<script type="text/javascript">
    $('#myTabs a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
    })
</script>
</body>
</html>
