<!--理财师主页-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="zh-cn">
<?php $this->load->view('./templates/head'); ?>
<body class="bg-gray">
<?php $this->load->view('./templates/navbar'); ?>
<?php
//生成一个测试用的问答组
$qa = array(
    "id" => 1,
    "question" => "老师你好，今天大盘强震，后市如何操作？需要减仓规避风险吗？玉龙股份17.6成本，微套，近期能看高吗？后市如何操作。",
    "answer" => "牛市快跌是必然走势，所以短线需要规避几天再抄底，明日估计会有个修正的高开，根据你的仓位做处理，满仓当然要先减仓",
    "question_time" => "2015-08-09 20:25",
    "answer_time" => "2015-08-09 22:25",
    "star" => "5"
);
$qa_list = array($qa, $qa, $qa, $qa, $qa, $qa, $qa);
//生成一个测试用的观点数组
$view = array(
    "id" => 1,
    "title" => "第三期计划上线，跟紧大时代，狙击牛市龙头",
    "content" => "我一直认为，股票市场同房地产一样，做为一个重要的资本市场，是财富再分配的核心场所。如何理解这句话，其实质意义就是如果
    本轮牛市你没有深度参与，那将同身边参与这轮牛市的人拉开巨大的财富鸿沟。去年12月份的券商股，今年的互联网+等相关的概念股，短短的1-3个
    月就有翻倍的上涨，再加上杠杆工具的结合，其赚钱效应就已经将那些没有参与市场的人的财富远远甩在了后面。",
    "time" => "2015-09-09 20:25",
    "read_num" => "512"
);
$view_list = array($view, $view, $view, $view, $view, $view, $view);
?>

<div class="wrapper">
    <?php $this->load->view('./templates/navbar'); ?>
    <?php $this->load->view('./master/master_jumptron'); ?>
    <!--页面主要内容-->
    <div class="container master_homepage_container">
        <div class="col-md-8 col-sm-8 bg-white block-radius">
            <div class="sub_nav">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#qa" role="tab" data-toggle="tab">问答</a></li>
                    <li role="presentation"><a href="#viewpoint" role="tab" data-toggle="tab">观点</a></li>
                    <li role="presentation"><a href="#demonstration" role="tab" data-toggle="tab">示范</a></li>
                    <li role="presentation"><a href="#contest" role="tab" data-toggle="tab">华山论剑</a></li>
                    <li role="presentation"><a href="#bbs" role="tab" data-toggle="tab">论坛</a></li>
                </ul>
            </div>
            <div class="tab-content">
                <!--问答-->
                <div role="tabpanel" class="tab-pane active" id="qa">
                    <div class="bg-white q_a_container">
                        <?php foreach ($qa_list as $qa_item): ?>
                            <div class="q_a">
                                <article>
                                    <h4 class="q_a_question inline_block">
                                        <span class="q_a_span">问</span>
                                        <a href="#"><?php echo $qa_item['question']; ?> </a></h4>
                                    <span>【<?php echo $qa_item['question_time']; ?>】</span>

                                    <p class="q_a_answer"><span
                                            class="theme-color">答:</span>&nbsp;&nbsp;<?php echo $qa_item['answer']; ?>
                                    </p>

                                    <div class="q_a_footer">
                                        <span>满意度：<?php echo $qa_item['star']; ?></span>
                                        <span>回答时间：<?php echo $qa_item['answer_time']; ?></span>
                                    </div>
                                </article>
                            </div>
                            <hr class="q_a_hr"/>
                        <?php endforeach; ?>
                    </div>
                </div>
                <!--观点-->
                <div role="tabpanel" class="tab-pane" id="viewpoint">
                    <div class="bg-white q_a_container">
                        <?php foreach ($view_list as $view_item): ?>
                            <div class="master_view">
                                <article>
                                    <header>
                                        <h4><a href="<?php echo base_url("index.php/master/view/1"); ?>"
                                               target="_blank"> <?php echo $view_item['title']; ?></a></h4>
                                    </header>
                                    <section>
                                        <!--控制最多显示内容不超过100个字-->
                                        <p><?php if (strlen($view_item['content']) >= 150) {
                                                echo mb_substr($view_item['content'], 0, 150, 'utf-8') . '...';
                                            } else {
                                                echo $view_item['content'];
                                            }
                                            ?>
                                        </p>
                                    </section>
                                    <section class="view_footer">
                                        <span><?php echo $view_item['time']; ?></span>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span><?php echo $view_item['read_num']; ?>次阅读</span>
                                    </section>
                                </article>
                            </div>
                            <hr class="view_hr"/>
                        <?php endforeach; ?>
                    </div>
                </div>
                <!--示范-->
                <div role="tabpanel" class="tab-pane" id="demonstration">...</div>
                <!--华山论剑+-->
                <div role="tabpanel" class="tab-pane" id="contest">...</div>
                <!--论坛-->
                <div role="tabpanel" class="tab-pane" id="bbs">...</div>
            </div>
        </div>
        <?php $this->load->view('./templates/right-sidebar'); ?>
    </div>
    <!--悬停go-top按钮-->
    <?php $this->load->view('./templates/go-top'); ?>
</div>
<!--提问的模态框-->
<?php $state = 1; ?>
<div class="modal fade" id="question_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <?php if ($state == 2): ?>
            <div class="modal-body">
                <div class="panel panel-danger">
                    <div class="panel-heading">输入问题（不超过500字）</div>
                    <div class="panel-body">
                        <form>
                                <textarea id="my_question" name="question" rows="5"
                                          placeholder="请尽可能准确地描述您的问题"></textarea>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                <button type="button" class="btn btn-primary">确定</button>
            </div>
            <?php elseif
            ($state == 0): ?>
            <div class="modal-body">
                <p>请登录</p>
            </div>
            <?php else: ?>
                <div class="modal-body">
                    <div class="container">
                    <p>对不起，请购买成为VIP再提问</p></div>
                </div>
            <?php endif; ?>
        </div>

    </div>
</div>
</div>
<?php $this->load->view('./templates/footer'); ?>
<script>
    $(document).ready(function () {
        /* 让模态框居中 */
        function centerModals() {
            $('.modal').each(function (i) {
                var $clone = $(this).clone().css('display', 'block').appendTo('body');
                var top = Math.round(($clone.height() - $clone.find('.modal-content').height()) / 2);
                top = top > 0 ? top : 0;
                $clone.remove();
                $(this).find('.modal-content').css("margin-top", top);
            });
        }

        $('#question_modal').on('show.bs.modal', centerModals);
        $(window).on('resize', centerModals);
    });


    $(document).ready(function () {

    });
</script>
</body>
</html>