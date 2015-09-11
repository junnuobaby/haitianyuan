<!--理财师主页-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="zh-cn">
<?php $this->load->view('./templates/head'); ?>
<body>
<script src="<?php echo base_url('/assets/js/htyjs/general_navbar.js') ?>"></script>
<?php
$online_state = false;   //是否在线，在线为true
$username = "开普勒";
$concerns_count = "104";
$fans_count = "2000";
$vips_count = "1190";
$questions_count = "2388";
$satisfication_rate = "80%";
$response_time = "2";
$signature = "生活源于自然,成功源于专业,理财源于全面,具备全面的金融理财学识,精通投资策略分析和资产配置";
?>
<!--生成一个测试用的问答组-->
<?php
$qa = array(
    "question" => "老师你好，今天大盘强震，后市如何操作？需要减仓规避风险吗？玉龙股份17.6成本，微套，近期能看高吗？后市如何操作。",
    "answer" => "牛市快跌是必然走势，所以短线需要规避几天再抄底，明日估计会有个修正的高开，根据你的仓位做处理，满仓当然要先减仓",
    "question_time" => "2015-08-09 20:25",
    "answer_time" => "2015-08-09 22:25",
    "star" => "5"
);
$qa_list = array($qa, $qa, $qa, $qa, $qa, $qa, $qa, $qa);
?>
<div class="wrapper">
    <?php $this->load->view('./templates/navbar'); ?>
    <div class="container-fluid master_homepage_jumptron">
        <div class="container">
            <div class="col-md-2 col-sm-4">
                <div class="master_homepage_jumptron_div">
                    <div class="avatar_box">
                        <img class="img-responsive" src="<?php echo base_url('/assets/images/touxiang/15.jpg'); ?>"
                             alt="理财师头像">
                    </div>
                    <!--根据是否在线显示不同的状态，当前默认为在线-->
                    <div class="online_status">
                        <?php if ($online_state == false): ?>
                            <img class="img-responsive" src="<?php echo base_url('/assets/images/offline.png'); ?>">
                        <?php else: ?>
                            <img class="img-responsive" src="<?php echo base_url('/assets/images/online.png'); ?>">
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="master_homepage_jumptron_div">
                    <h3><?php echo $username; ?></h3>
                    <hr/>
                    <p><span>简介：</span><?php echo $signature; ?></p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="master_homepage_jumptron_div">
                    <div class="row">
                        <a href="<?php echo base_url("index.php/master/vip_price"); ?>" class="btn btn-default"
                           target="_blank"><span class="theme-color">体验VIP会员</span></a>
                    </div>
                    <div class="row">
                        <table class="table table-responsive">
                            <tr>
                                <td>回答问题数 <span
                                        class="theme-color"><strong><?php echo $questions_count; ?></strong></span></td>
                                <td>满意率 <span
                                        class="theme-color"><strong><?php echo $satisfication_rate; ?></strong></span>
                                </td>
                                <td>响应时间 <span class="theme-color"><strong><?php echo $response_time; ?></strong></span>
                                </td>
                            </tr>
                            <tr>
                                <td>VIP用户 <span class="theme-color"><strong><?php echo $vips_count; ?></strong></span>
                                </td>
                                <td>粉丝 <span class="theme-color"><strong><?php echo $fans_count; ?></strong></span></td>
                                <td>关注 <span class="theme-color"><strong><?php echo $concerns_count; ?></strong></span>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <button class="btn btn-danger self-btn-danger"><span
                                    class="glyphicon glyphicon-plus"></span> 关注
                            </button>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <button class="btn btn-danger self-btn-danger"><span
                                    class="glyphicon glyphicon-question-sign"></span> 提问
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-md-12 col-sm-12">
            <div class="master_homepage_subnav">
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="master_homepage_menu">
                        <ul class="nav navbar-nav narbar_font_size">
                            <li><a href="#">问答</a></li>
                            <li><a href="#">观点</a></li>
                            <li><a href="#">示范</a></li>
                            <li><a href="#">华山论剑</a></li>
                            <li><a href="#">论坛</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!--页面主要内容-->
    <div class="container">
        <div class="col-md-8 col-sm-8">
            <hr/>
            <?php foreach ($qa_list as $qa_item): ?>
                <div class="q_a">
                    <article>
                        <h4 class="inline-block">
                            <span class="theme-color">问:</span>&nbsp;&nbsp;
                            <a href="#"><?php echo $qa_item['question']; ?> </a></h4>
                        <span>【<?php echo $qa_item['question_time']; ?>】</span>
                        <br/><br/>
                        <p class="answer-font"><span
                                class="theme-color">答:</span>&nbsp;&nbsp;<?php echo $qa_item['answer']; ?>
                        </p>
                        <footer style="text-align: left;">
                            <span>满意度：<?php echo $qa_item['star']; ?></span>
                            <span>回答时间：<?php echo $qa_item['answer_time']; ?></span>
                        </footer>
                    </article>
                </div>
                <hr/>
            <?php endforeach; ?>
        </div>
        <!-- 左侧边栏-->
        <?php $this->load->view('./templates/right-sidebar'); ?>
    </div>
    <!--悬停go-top按钮-->
    <?php $this->load->view('./templates/go-top'); ?>
</div>
<?php $this->load->view('./templates/footer'); ?>
</body>
</html>