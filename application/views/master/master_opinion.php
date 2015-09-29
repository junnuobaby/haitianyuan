<!--理财师主页-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="zh-cn">
<?php $this->load->view('./templates/head'); ?>
<body class="bg-gray">
<div class="wrapper">
    <?php $this->load->view('./templates/navbar'); ?>
    <?php $this->load->view('./master/master_jumptron'); ?>
    <div class="container  master_homepage_container">
        <div class="col-md-8 col-sm-8 bg-white block-radius" style="height: 800px">
            <div class="view_head">
            </div>
            <div class="view_content">

            </div>


        </div>
        <?php $this->load->view('./templates/right-sidebar'); ?>
    </div>
    <!--悬停go-top按钮-->
    <?php $this->load->view('./templates/go-top'); ?>
    <?php $this->load->view('./templates/footer'); ?>
</body>
</html>

