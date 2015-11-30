<!--理财师设置VIP会员价格-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="zh-cn">
<?php $this->load->view('./templates/head'); ?>
<?php
//生成一个测试用的问答组
$qa = array(
    "qa_id" => 1,
    "question" => "老师你好，今天大盘强震，后市如何操作？需要减仓规避风险吗？玉龙股份17.6成本，微套，近期能看高吗？后市如何操作。",
    "answer" => "牛市快跌是必然走势，所以短线需要规避几天再抄底，明日估计会有个修正的高开，根据你的仓位做处理，满仓当然要先减仓",
    "question_time" => "2015-08-09 20:25",
    "answer_time" => "2015-08-09 22:25",
);
$qa_list = array($qa, $qa, $qa, $qa, $qa, $qa, $qa, $qa, $qa, $qa);
?>
<body class="bg-gray">
<script src="<?php echo base_url('/assets/js/htyjs/general_navbar.js') ?>"></script>

<div class="wrapper">
    <?php $this->load->view('./templates/navbar'); ?>
    <div class="container container_to_top">
        <div class="row">
            <div class="col-sm-3 col-md-3 ">
                <?php $this->load->view('./master/master_sidebar'); ?>
            </div>
            <div class="col-sm-9 col-md-9 block-radius bg-white set_price mas_min_height">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">我的会员</h3>
                    </div>
                    <div class="panel-body">
                        <?php foreach ($vips as $vip): ?>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="master_avatar_box"><img
                                            src="<?php echo base_url('/assets/images/touxiang/1.jpg'); ?>"
                                            class="img-responsive img-circle" alt="..."></div>
                                </div>
                                <div class="col-md-10">
                                    <h4><a href="#" class="theme-color"><?php echo $vip['vip_name']; ?></a></h4>

                                    <p><span>剩余服务期： <?php echo $vip['vip_left_days']; ?>天</span> |
                                           <span><a class="hty_a" role="button" data-toggle="collapse"
                                                    href="#<?php echo 'collapse'.$vip['vip_id'];?>" aria-expanded="false"
                                                    aria-controls="collapseExample">
                                                   查看历史订单
                                               </a></span> |
                                        <span><a href="#records_modal" class="hty_a" data-toggle="modal">历史问答记录</a></span>
                                    </p>

                                    <div class="collapse" id="<?php echo 'collapse'.$vip['vip_id']; ?>">
                                        <div class="well">
                                            <table class="table">
                                                <thead>

                                                <tr>
                                                    <th>下单时间</th>
                                                    <th>套餐种类</th>
                                                    <th>价格(元)</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php foreach ($vip['records'] as $record): ?>
                                                    <tr>
                                                        <td><?php echo $record['start_time'];?></td>
                                                        <td><?php echo $record['term'];?></td>
                                                        <td><?php echo $record['price'];?></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
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
<!-- 历史问答记录Modal -->
<div class="modal fade" id="records_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">历史问答</h4>
            </div>
            <div class="modal-body">
                <!--历史问题-->
                <div role="tabpanel" class="tab-pane  qa_his_height" id="qa_done">
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
                                </div>
                            </article>
                        </div>
                        <hr class="q_a_hr"/>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
            </div>
        </div>
    </div>
</div>
<!--悬停go-top按钮-->
<?php $this->load->view('./templates/go-top'); ?>
<?php $this->load->view('./templates/footer'); ?>
</body>
<script>
</script>
</html>

