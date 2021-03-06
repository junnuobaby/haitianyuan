<!--首页-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="zh-cn">
<?php $this->load->view('./templates/head'); ?>
<body class="bg-gray">
<div class="wrapper">
    <?php $this->load->view('./templates/navbar'); ?>
    <div class="lcs_jmp">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img class="img-responsive" src="<?php echo base_url('/assets/images/logo/logo_8.jpg'); ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="lcs_index_cnt">
            <div class="container">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="lcs_num_box">
                                <p>已入驻</p>
                                <p class="lcs_answer_num">
                                    <span>0</span>
                                    <span>0</span>
                                    <span>0</span>
                                    <span>5</span>
                                    个理财师
                                </p>
                                <p>你是理财达人吗？赶紧申请入驻吧！</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="lcs_num_box">
                                <p>已累计解决</p>
                                <p class="lcs_answer_num">
                                    <span>0</span>
                                    <span>0</span>
                                    <span>0</span>
                                    <span>5</span>
                                    <span>5</span>
                                    个问题
                                </p>
                                <p>理财大师在线解答您的投资问题！</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white mas_min_height master_lists_box">
                        <div class="master_lists">
                            <h4>全部理财师</h4>
                            <hr/>
                            <?php foreach ($masters as $vip): ?>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="master_avatar_box">
                                            <img src="<?php echo base_url('assets/images/touxiang/1.jpg'); ?>" class="img-responsive img-circle" alt="...">
                                        </div>
                                    </div>
                                    <div class="col-md-10 master_intro_box">
                                        <h4><a href="#" target="_blank" class="theme-color"><?php echo $vip['master_name']; ?></a></h4>
                                        <p>关注 <?php echo $vip['concerns_count']; ?> |
                                            粉丝 <?php echo $vip['fans_count']; ?>
                                            | <?php if ($vip['online_state'] == true) {
                                                echo '在线';
                                            } else {
                                                echo "离线";
                                            } ?></p>

                                        <p>个性签名：<?php echo $vip['signature']; ?></p>
                                        <div class="action_box">
                                            <a class="btn bg-theme qu_btn_id" data-id="<?php echo $vip['master_id'];?>" data-name="<?php echo $vip['master_name'];?>"><span
                                                    class="glyphicon glyphicon-plus"></span> 关注
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <hr class="qu_hr"/>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <?php $this->load->view('./templates/right-sidebar'); ?>
            </div>
    </div>
</div>
<?php $this->load->view('./templates/footer'); ?>
</body>
</html>
<script>
    $(document).ready(function () {

    });
</script>