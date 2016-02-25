<!--海天介绍页面-->
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="zh-cn">
<?php $this->load->view('./templates/head'); ?>
<body class="bg-gray">
<div class="wrapper">
    <div class="page_min_height">
        <div class="ht_info_nav">
            <?php $this->load->view('./templates/navbar'); ?>
        </div>
        <div id="dowebok">
            <div class="section section1">
                <div class="center-wrap">
                    <div class="lcs_desc">
                        <h1>什么是海天理财师？</h1>
                        <p>fullPage.js — 基本演示</p>
                    </div>
                </div>
            </div>
            <div class="section section2">
                <h3>第二屏</h3>
                <p>fullPage.js — 基本演示</p>
            </div>
            <div class="section section3">
                <h3>第三屏</h3>
                <p>fullPage.js — 基本演示</p>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('./templates/footer'); ?>
</body>
</html>

<script>
    $(function(){
        $('#dowebok').fullpage({
//            sectionsColor: ['#C2E5FF','#FDF6E1', '#7BAABE'],
            afterLoad: function (anchorLink, index) {
                if(index == 2){
                    $('.section2').find('p').delay(500).animate({
                        left: '0'
                    }, 1500, 'easeOutExpo');
                }
                if(index == 3){
                    $('.section3').find('p').delay(500).animate({
                        bottom: '0'
                    }, 1500, 'easeOutExpo');
                }
            }
        });
    });

</script>
<style>
    .section2 p{
        position: relative;
        left: -120%;
    }
    .section3 p{
        position: relative;
        bottom: -120%;
    }
</style>

