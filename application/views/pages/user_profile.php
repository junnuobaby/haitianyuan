<!--普通用户个人资料页面-->
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
            <div class="col-md-3">
                <div class="thumbnail profile-thumbnail ">
                    <img class="img-thumbnail "
                         src="<?php echo base_url('/assets/images/touxiang/1.jpg'); ?>"
                         alt="...">

                    <div class="caption">
                        <h3 class="text-center"><?= '君诺宝宝' ?></h3>

                    </div>
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
