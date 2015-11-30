<!--理财师个人中心页面-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="zh-cn">
<?php $this->load->view('./templates/head'); ?>
<body class="bg-gray">
<script src="<?php echo base_url('/assets/js/htyjs/general_navbar.js') ?>"></script>
<?php
$qu_num = 3;
$qu_answered_num = 3;
$qu_undo = array(
    "qu_id" => "13",
    "qu_content" => "老师你好：酒钢宏兴600307重仓5元附近成本近期能解套，今天是否减仓如何操作？",
    "qu_timestamp" => "2015-9-29 11:30",
    "qu_master" => "开普勒"
);
$qu_undo_array = array($qu_undo, $qu_undo, $qu_undo);

//生成一个测试用的问答组
$qa = array(
    "qa_id" => 1,
    "question" => "老师你好，今天大盘强震，后市如何操作？需要减仓规避风险吗？玉龙股份17.6成本，微套，近期能看高吗？后市如何操作。",
    "answer" => "牛市快跌是必然走势，所以短线需要规避几天再抄底，明日估计会有个修正的高开，根据你的仓位做处理，满仓当然要先减仓",
    "question_time" => "2015-08-09 20:25",
    "answer_time" => "2015-08-09 22:25",
    "answer_master" => "开普勒",
);
$qa_list = array($qa, $qa, $qa);
?>
<div class="wrapper">
    <?php $this->load->view('./templates/navbar'); ?>
    <div class="container container_to_top">
        <div class="row">
            <div class="col-sm-3 col-md-3 ">
                <?php $this->load->view('./user/user_sidebar'); ?>
            </div>
            <div class="col-sm-9 col-md-9 bg-white block-radius">
                <div class="sub_nav">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#qa_undo_list" role="tab"
                                                                  data-toggle="tab">未解决 <span
                                    class="badge green-color"><?php echo $qu_num ?></span></a>
                        </li>
                        <li role="presentation"><a href="#qa_done" aria-controls="profile" role="tab" data-toggle="tab">已解决
                                <span class="badge theme-bg-color"><?php echo $qu_answered_num ?></span></a>
                        </li>

                    </ul>

                    <div class="tab-content">
                        <!--待回答问题-->
                        <div role="tabpanel" class="tab-pane active" id="qa_undo_list">
                            <?php foreach ($qu_undo_array as $qu_undo_item): ?>
                                <div class="qu_margin">
                                    <div class="qu_time">
                                        <span><?php echo $qu_undo_item['qu_timestamp'] ?></span> 您向<a href="#"
                                                                                                     class="questioner"><?php echo $qu_undo_item['qu_master'] ?></a> 提问
                                    </div>
                                    <p><span class="q_a_span">问</span><?php echo $qu_undo_item['qu_content'] ?></p>
                                </div>
                                <hr class="qu_hr"/>
                            <?php endforeach; ?>
                        </div>

                        <!--已回答问题-->
                        <div role="tabpanel" class="tab-pane" id="qa_done">
                            <?php foreach ($qa_list as $qa_item): ?>
                                <div class="q_a qu_margin">
                                    <article>
                                        <h4 class="q_a_question inline_block">
                                            <span class="q_a_span">问</span>
                                            <a href="#"><?php echo $qa_item['question']; ?> </a></h4>
                                        <span class="qu_time">【<?php echo $qa_item['question_time']; ?>】</span>

                                        <p class="q_a_answer"><span
                                                class="theme-color">答:</span>&nbsp;&nbsp;<?php echo $qa_item['answer']; ?>
                                        </p>
                                        <div class="q_a_footer">
                                            <span>回答时间：<?php echo $qa_item['answer_time']; ?></span>
                                            <span>回答者：<a href="#"
                                                         class="questioner"><?php echo $qa_item['answer_master']; ?></a></span>
                                        </div>
                                    </article>
                                </div>
                                <hr class="q_a_hr"/>
                            <?php endforeach; ?>
                        </div>
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

