<!--首页-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="zh-cn">
<?php $this->load->view('./templates/head'); ?>
<body>
<div class="wrapper">
    <?php $this->load->view('./templates/jumptron'); ?>
    <?php $this->load->view('./templates/navbar'); ?>


</div>
<?php $this->load->view('./templates/footer'); ?>
</body>


</html>