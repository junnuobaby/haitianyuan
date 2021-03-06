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
                <?php $this->load->view('./user/user_sidebar'); ?>
            </div>
            <div class="col-sm-9 col-md-9 bg-white block-radius set_price user_min_height">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">我的理财师</h3>
                    </div>
                    <div>
                        <?php foreach ($vips as $vip): ?>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="master_avatar_box"><img src="<?php echo base_url('/assets/images/touxiang/1.jpg'); ?>"
                                         class="img-responsive img-circle" alt="..."></div>
                                </div>
                                <div class="col-md-6">
                                    <h4><a href= "#" class="theme-color"><?php echo $vip['username']; ?></a></h4>
                                    <p>关注 <?php echo $vip['concerns_count']; ?> | 粉丝 <?php echo $vip['fans_count']; ?>
                                        | <?php if ($vip['online_state'] == true) {
                                            echo '在线';
                                        } else {
                                            echo "离线";
                                        } ?></p>
                                    <p>个性签名：<?php echo $vip['signature']; ?></p>
                                </div>
                            </div>
                            <hr class="qu_hr"/>
                        <?php endforeach; ?>
                    </div>
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

