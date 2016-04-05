<!--首页--><?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="zh-cn">
<?php $this->load->view('./templates/head'); ?>
<?php
$qa = array("id" => 1, "question" => "老师你好，今天大盘强震，后市如何操作？需要减仓规避风险吗？玉龙股份17.6成本，微套，近期能看高吗？后市如何操作。", "answer" => "牛市快跌是必然走势，所以短线需要规避几天再抄底，明日估计会有个修正的高开，根据你的仓位做处理，满仓当然要先减仓", "question_time" => "2015-08-09 20:25", "answer_time" => "2015-08-09 22:25", "star" => 5, "answerer" => '君诺宝宝', "questioner" => '开普勒', "kwords" => 'A股');

$qa_list = array($qa, $qa, $qa, $qa, $qa);

$view = array("op_id" => 1, "master_name" => "君诺宝宝", "op_title" => "第三期计划上线，跟紧大时代，狙击牛市龙头", "op_content" => "我一直认为，股票市场同房地产一样，做为一个重要的资本市场，是财富再分配的核心场所。如何理解这句话，其实质意义就是如果
    本轮牛市你没有深度参与，那将同身边参与这轮牛市的人拉开巨大的财富鸿沟。去年12月份的券商股，今年的互联网等相关的概念股，短短的1-3个
    月就有翻倍的上涨，再加上杠杆工具的结合，其赚钱效应就已经将那些没有参与市场的人的财富远远甩在了后面。", "op_timestamp" => "2015-09-09 20:25", "op_kwords" => "A股", "op_auth" => 0,);

$view_list = array($view, $view, $view, $view, $view);

$item = array('name' => '158xxxxxx75', 'profit_rate' => '142.31%', 'week_rate' => '10.2%', 'month_rate' => '60%');
$lists_10 = array($item, $item, $item, $item, $item, $item, $item, $item, $item, $item);
?>
<body class="bg-gray">
<div class="wrapper">
    <div class="page_min_height">
        <?php $this->load->view('./templates/navbar'); ?>
        <?php $this->load->view('./templates/jumptron'); ?>
        <div class="container">
            <section class="row index-ht-info">
                <div class="col-md-4">
                    <a href="<?php echo base_url('/index.php/index/ht_lcs_info'); ?>" class="index-info-box" target="_blank">
                        <h3>什么是海天理财师？</h3>
                        <img class="img-responsive center-block" src="<?php echo base_url('assets/images/logo/logo_2.png'); ?>"/>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="<?php echo base_url('/index.php/index/ht_match'); ?>" class="index-info-box" target="_blank">
                        <h3>如何参加金榜争夺赛？</h3>
                        <img class="img-responsive center-block" src="<?php echo base_url('assets/images/logo/logo_3.png'); ?>"/>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="<?php echo base_url('/index.php/index/ht_vip'); ?>" target="_blank" class="index-info-box">
                        <h3>VIP用户有哪些特权？</h3>
                        <span>无限次提问，查看理财师观点</span>
                        <img class="img-responsive center-block" src="<?php echo base_url('assets/images/logo/logo_4.png'); ?>"/>
                    </a>
                </div>
            </section>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <section class="row">
                        <div class="index-content-box">
                            <div class="item_title">
                                <span>热门理财师</span>
                                <div class="item_sort">
                                    <a href="#">股票</a> | <a href="#">债券</a> | <a href="#">期货</a>
                                </div>
                                <a href="#" class="to_more">更多</a>
                            </div>
                            <div class="item_content">
                                <div id="carousel-rmd-master" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner" role="listbox">
                                        <div class="item active">
                                            <div class="col-md-3">
                                                <a class="index_lcs_item text-center" href="#">
                                                    <img class="img-responsive img-circle center-block" width="100px" src="<?php echo base_url('assets/images/touxiang/9.jpg'); ?>" alt="...">
                                                    <h5><?php echo '君诺宝宝' ?></h5>
                                                    <div class="index_lcs_hr"></div>
                                                    <div class="row theme-color">
                                                        <div class="lcs_basic_info">
                                                            <div class="col-md-6">
                                                                <h4><strong>10</strong></h4>
                                                                <h5>回答</h5>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <h4><strong>20</strong></h4>
                                                                <h5>观点</h5>
                                                            </div>
                                                        </div>
                                                        <div class="lcs_intro hidden col-md-12">
                                                            <p>简介：擅长A股分析，期货走势预测</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-md-3">
                                                <a class="index_lcs_item text-center" href="#">
                                                    <img class="img-responsive img-circle center-block" width="100px" src="<?php echo base_url('assets/images/touxiang/9.jpg'); ?>" alt="...">
                                                    <h5><?php echo '君诺宝宝' ?></h5>
                                                    <div class="index_lcs_hr"></div>
                                                    <div class="row theme-color">
                                                        <div class="lcs_basic_info">
                                                            <div class="col-md-6">
                                                                <h4><strong>10</strong></h4>
                                                                <h5>回答</h5>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <h4><strong>20</strong></h4>
                                                                <h5>观点</h5>
                                                            </div>
                                                        </div>
                                                        <div class="lcs_intro hidden col-md-12">
                                                            <p>简介：擅长A股分析，期货走势预测</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-md-3">
                                                <a class="index_lcs_item text-center" href="#">
                                                    <img class="img-responsive img-circle center-block" width="100px" src="<?php echo base_url('assets/images/touxiang/9.jpg'); ?>" alt="...">
                                                    <h5><?php echo '君诺宝宝' ?></h5>
                                                    <div class="index_lcs_hr"></div>
                                                    <div class="row theme-color">
                                                        <div class="lcs_basic_info">
                                                            <div class="col-md-6">
                                                                <h4><strong>10</strong></h4>
                                                                <h5>回答</h5>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <h4><strong>20</strong></h4>
                                                                <h5>观点</h5>
                                                            </div>
                                                        </div>
                                                        <div class="lcs_intro hidden col-md-12">
                                                            <p>简介：擅长A股分析，期货走势预测</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-md-3">
                                                <a class="index_lcs_item text-center" href="#">
                                                    <img class="img-responsive img-circle center-block" width="100px" src="<?php echo base_url('assets/images/touxiang/9.jpg'); ?>" alt="...">
                                                    <h5><?php echo '君诺宝宝' ?></h5>
                                                    <div class="index_lcs_hr"></div>
                                                    <div class="row theme-color">
                                                        <div class="lcs_basic_info">
                                                            <div class="col-md-6">
                                                                <h4><strong>10</strong></h4>
                                                                <h5>回答</h5>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <h4><strong>20</strong></h4>
                                                                <h5>观点</h5>
                                                            </div>
                                                        </div>
                                                        <div class="lcs_intro hidden col-md-12">
                                                            <p>简介：擅长A股分析，期货走势预测</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="left carousel-control" href="#carousel-rmd-master" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span> </a>
                                    <a class="right carousel-control" href="#carousel-rmd-master" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span> </a>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="row">
                        <div class="index-content-box">
                            <div class="item_title">
                                <span>排行榜 top-10</span>
                                <div class="item_sort">
                                    <a href="#">周榜</a> | <a href="#">月榜</a> | <a href="#">年榜</a>
                                </div>
                            </div>
                            <div class="item_content">
                                <table class="table table-condensed">
                                    <thead>
                                    <tr class="heading">
                                        <th>排名</th>
                                        <th>用户名</th>
                                        <th>周收益率</th>
                                        <th>月收益率</th>
                                        <th>总收益率</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $rank = 1; ?>
                                    <?php foreach ($lists_10 as $list): ?>
                                        <tr>
                                            <td><?php echo $rank; ?></td>
                                            <td><?php echo $list['name']; ?></td>
                                            <td><?php echo $list['week_rate']; ?></td>
                                            <td><?php echo $list['month_rate']; ?></td>
                                            <td><?php echo $list['profit_rate']; ?></td>
                                        </tr>
                                        <?php $rank += 1; ?><?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>

                    <section class="row">
                        <div class="index-content-box">
                            <div class="item_title">
                                <span>热门问答</span>
                                <div class="item_sort">
                                    <a href="#">走势分析</a> | <a href="#">大盘解读</a> | <a href="#">如何选股</a>
                                </div>
                                <a href="#" class="to_more">更多</a>
                            </div>
                            <?php foreach ($qa_list as $qa_item): ?>
                                <div class="item_content">
                                    <div class="index_qa_item">
                                        <h4><span class="glyphicon glyphicon-question-sign theme-color"></span>
                                            <?php if(strlen($qa_item['question']) >= 30) {
                                                echo mb_substr($qa_item['question'], 0, 30, 'utf-8') . '...';
                                            } else {
                                                echo $qa_item['question'];
                                            }
                                            ?>
                                        </h4>
                                        <p><span class="glyphicon glyphicon-user green-color"></span>
                                            <?php if(strlen($qa_item['answer']) >= 40) {
                                                echo mb_substr($qa_item['answer'], 0, 40, 'utf-8') . '...';
                                            } else {
                                                echo $qa_item['answer'];
                                            }
                                            ?>
                                            <a class="theme-color" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"> 查看详情 </a>
                                        </p>
                                        <div class="collapse" id="collapseExample">
                                            <div class="well">
                                                <div>
                                                    <a href="#" class="theme-color"><strong><?php echo $qa_item['questioner']; ?>: </strong></a>
                                                    <?php echo $qa_item['question']; ?>
                                                </div>
                                                <div>
                                                    <a href="#" class="green-color"><strong><?php echo $qa_item['answerer']; ?>: </strong></a>
                                                    <?php echo $qa_item['answer']; ?>
                                                </div>
                                                <div class="index_qa_info">
                                                    <span class="pull-left">分类：<?php echo $qa_item['kwords']; ?></span>
                                                    <span class="pull-right">回答时间：<?php echo $qa_item['answer_time']; ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                            <?php endforeach; ?>
                        </div>
                    </section>

                    <section class="row">
                        <div class="index-content-box">
                            <div class="item_title">
                                <span>推荐观点</span>
                                <div class="item_sort">
                                    <a href="#">操作要点</a> | <a href="#">捕捉买点</a> | <a href="#">时事解读</a>
                                </div>
                                <a href="#" class="to_more">更多</a>
                            </div>
                            <?php foreach ($view_list as $view_item): ?>
                                <div class="item_content">
                                    <div class="index_view_item row">
                                        <div class="col-md-2">
                                            <a href="#"><img class="img-responsive" width="100px" src="<?php echo base_url('assets/images/touxiang/9.jpg'); ?>" alt="..."></a>
                                        </div>
                                        <div class="col-md-9">
                                            <h5 class="theme-color"><?php echo $view_item['master_name']; ?>
                                                <span class="pull-right"><?php echo $view_item['op_timestamp']; ?></span>
                                            </h5>
                                            <h4><?php echo $view_item['op_title']; ?></h4>
                                            <div>
                                                <a href="<?php echo base_url("index.php/opinion/single_opinion") . '/' . $view_item['op_id']; ?>" class="grey-color" target="_blank">
                                                    <?php if(strlen($view_item['op_content']) >= 60) {
                                                        echo mb_substr($view_item['op_content'], 0, 60, 'utf-8') . '...';
                                                    } else {
                                                        echo $view_item['op_content'];
                                                    }
                                                    ?>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </section>
                </div>
                <?php $this->load->view('./templates/right-sidebar'); ?>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('./templates/footer'); ?>
</body>
</html>
<script>
    $(document).ready(function () {
        $('.index_lcs_item').hover(function () {
            $(this).find('.lcs_basic_info').addClass('hidden');
            $(this).find('.lcs_intro').removeClass('hidden');
        }, function () {
            $(this).find('.lcs_intro').addClass('hidden');
            $(this).find('.lcs_basic_info').removeClass('hidden');
        });

    });
</script>