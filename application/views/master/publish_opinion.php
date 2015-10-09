<!--理财师个人中心页面-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="zh-cn">
<?php $this->load->view('./templates/head'); ?>
<body class="bg-gray">
<script src="<?php echo base_url('/assets/js/htyjs/general_navbar.js') ?>"></script>

<div class="wrapper">
    <?php $this->load->view('./templates/navbar'); ?>
    <div class="container container_to_top">
        <div class="row">
            <div class="col-sm-3 col-md-3 ">
                <?php $this->load->view('./master/master_sidebar'); ?>
            </div>
            <div class="col-sm-9 col-md-9 block-radius">
                <div class="master_opinion">
                    <form>
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3><span class="glyphicon glyphicon-pencil"></span> 发表新观点</h3>
                            </div>
                            <div class="panel-body panel_body_div">
                                <div class="form-group">
                                    <label for="opinion_title">观点标题</label>
                                    <input type="text" class="form-control" id="opinion_title" name="opinion_title" placeholder="请输入标题">
                                </div>
                                <div class="form-group">
                                    <label for="opinion_content">观点内容</label>
                                    <textarea class="form-control ta" id="opinion_content" name="opinion_content" placeholder="请编辑您的观点"
                                              rows="15"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="kword">标签</label>
                                    <select id="kword" name="kword" class="form-control">
                                        <option>A股</option>
                                        <option>债券</option>
                                        <option>期货</option>
                                        <option>黄金外汇</option>
                                        <option>美股</option>
                                        <option>其他</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>权限设置</label>
                                    <div class="free_charge block-radius">
                                        <label class="radio-inline">
                                            <input type="radio" name="charge_options" value="仅VIP可见">
                                            仅VIP可见
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="charge_options" value="免费">
                                            免费
                                        </label>
                                    </div>
                                </div>
                                <div class="publish_btn">
                                    <button type="submit" class="btn self-btn-danger btn-danger" id="publish_btn">发表观点
                                    </button>
                                </div>

                                <div class="alert alert-success publish_warning" role="alert">
                                    <p>注意事项:</p>
                                    <h5>1. 这里发言，表示您接受了海天互联的用户行为准则。</h5>
                                    <h5>2. 请对您的言行负责，并遵守中华人民共和国有关法律法规,尊重网上道德。</h5>
                                    <h5>3. 理财师的回答仅代表个人观点，请勿恶意攻击他人。</h5>
                                    <h5>4. 投资有风险，入市须谨慎。</h5>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--.wrapper-->
<!--悬停go-top按钮-->
<?php $this->load->view('./templates/go-top'); ?>
<?php $this->load->view('./templates/footer'); ?>
</body>
</html>

