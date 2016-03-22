<!--首页-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="zh-cn">
<?php $this->load->view('./templates/head'); ?>
<?php
$qa = array(
    "id" => 1,
    "question" => "老师你好，今天大盘强震，后市如何操作？需要减仓规避风险吗？玉龙股份17.6成本，微套，近期能看高吗？后市如何操作。",
    "answer" => "牛市快跌是必然走势，所以短线需要规避几天再抄底，明日估计会有个修正的高开，根据你的仓位做处理，满仓当然要先减仓",
    "question_time" => "2015-08-09 20:25",
    "answer_time" => "2015-08-09 22:25",
    "star" => 5,
);
$qa_list = array($qa);
$view = array(
    "op_id" => 1,
    "master_name" => "理财师",
    "op_title" => "第三期计划上线，跟紧大时代，狙击牛市龙头",
    "op_content" => "我一直认为，股票市场同房地产一样，做为一个重要的资本市场，是财富再分配的核心场所。如何理解这句话，其实质意义就是如果
    本轮牛市你没有深度参与，那将同身边参与这轮牛市的人拉开巨大的财富鸿沟。去年12月份的券商股，今年的互联网等相关的概念股，短短的1-3个
    月就有翻倍的上涨，再加上杠杆工具的结合，其赚钱效应就已经将那些没有参与市场的人的财富远远甩在了后面。",
    "op_timestamp" => "2015-09-09 20:25",
    "op_kwords" => "A股",
    "op_auth" => 0,
);
$view_list = array($view);
$user = array('pos'=>'1','name'=> 'baby', 'fund'=>'1100000', 'profit'=>'10%');
$jinbang = array($user,$user,$user,$user,$user,$user,$user,$user,$user,$user);
?>
<body class="bg-gray">
<div class="wrapper">
    <div class="page_min_height">
        <?php $this->load->view('./templates/navbar'); ?>
        <?php $this->load->view('./templates/jumptron'); ?>
        <section class="web-info-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <a href="<?php echo base_url('/index.php/index/ht_info'); ?>" class="index-info-box">
                            <h3>什么是海天理财师？</h3>
                            <img width="300px" src="<?php echo base_url('assets/images/logo/logo_2.png'); ?>"/>
                            <div class="info-box-img info-box-img-1">
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="index-info-box">
                            <h3>如何参加金榜争夺赛？</h3>
                            <span>1.购买VIP入场券，直接参与金榜争夺赛</span>
                            <span>2.参加银榜比赛，优胜者免费进入金榜</span>

                            <div class="info-box-img info-box-img-2">
                                <img height="120px" src="<?php echo base_url('assets/images/logo/logo_3.png'); ?>"/>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="<?php echo base_url('/index.php/index/ht_vip'); ?>" target="_blank" class="index-info-box">
                            <h3>VIP用户有哪些特权？</h3>
                            <span>无限次提问，查看理财师观点</span>

                            <div class="info-box-img info-box-img-3">
                                <img width="160px" src="<?php echo base_url('assets/images/logo/logo_4.png'); ?>"/>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="index-section index-rmd-master">
            <div class="container bg-white mas_min_height">
                <div class="index-section-header text-center">
                    <div class="header-div">
                        <span>推荐理财师</span>
                        <div class="help-line"></div>
                        <p>解答理财疑问，投资咨询，走势分析</p>
                    </div>
                </div>
                <div class="index-section-content index-section-1">
                    <div class="row">
                        <div id="carousel-rmd-master" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <div class="col-md-10 col-md-offset-1">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <a href="#" class="thumbnail">
                                                    <img class="img-responsive avatar-radius"
                                                         src="<?php echo base_url('assets/images/touxiang/1.jpg'); ?>"
                                                         alt="...">

                                                    <div class="text-center">
                                                        <h4 class="theme-color"><?php echo '君诺宝宝' ?></h4>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-md-2">
                                                <a href="#" class="thumbnail">
                                                    <img class="img-responsive"
                                                         src="<?php echo base_url('assets/images/touxiang/2.jpg'); ?>"
                                                         alt="...">

                                                    <div class="text-center">
                                                        <h4 class="theme-color"><?php echo 'Krischao' ?></h4>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-rmd-master" role="button"
                               data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carousel-rmd-master" role="button"
                               data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="index-section-header text-center">
                    <div class="header-div">
                        <span>热门问答</span>
                        <div class="help-line"></div>
                        <p>解答理财疑问，投资咨询，走势分析</p>
                    </div>
                </div>
                <div class="index-section-content">
                    <div class="tab-content">
                        <!--问答-->
                        <div class="tab-pane active" id="qa">
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
                    </div>
                </div>
                <div class="index-section-header text-center">
                    <div class="header-div">
                        <span>热门观点</span>
                        <div class="help-line"></div>
                        <p>解答理财疑问，投资咨询，走势分析</p>
                    </div>
                </div>
                <div class="index-section-content">
                    <div class="tab-content ">
                        <!--观点-->
                        <div class="tab-pane active" id="viewpoint">
                            <div class="bg-white q_a_container">
                                <?php foreach ($view_list as $view_item)  : ?>
                                    <div class="master_view">
                                        <article>
                                            <header>
                                                <h4 class="inline_block"><a
                                                        href="<?php echo base_url("index.php/opinion/single_opinion").'/'.$view_item['op_id']; ?>"
                                                        target="_blank"> <?php echo $view_item['op_title']; ?></a></h4>
                                                <span class="key_word"><?php echo $view_item['op_kwords']; ?></span>
                                            </header>
                                            <section>
                                                <!--控制最多显示内容不超过100个字-->
                                                <p><?php if (strlen($view_item['op_content']) >= 150) {
                                                        echo mb_substr($view_item['op_content'], 0, 150, 'utf-8') . '...';
                                                    } else {
                                                        echo $view_item['op_content'];
                                                    }
                                                    ?>
                                                </p>
                                            </section>
                                            <section class="view_footer">
                                                <span><?php echo $view_item['op_timestamp']; ?></span>&nbsp;&nbsp;&nbsp;&nbsp;
                                            </section>
                                        </article>
                                    </div>
                                    <hr class="view_hr"/>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="index-section-header text-center">
                    <div class="header-div">
                        <span>英雄榜</span>
                        <div class="help-line"></div>
                        <p>模拟投资金榜排名优胜者，可获取巨额奖金，赶紧来加入群雄争霸赛吧！</p>
                        <p>所以用户均可免费参加海天银榜排名，银榜优胜者可直接角逐金榜排名。</p>
                        <p>只需购买一张金榜入场券，即可跳过银榜争夺赛，直接进入金榜排名赛赢取奖金。</p>
                    </div>
                </div>
                <div class="index-section-content">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-1">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover table-condensed">
                                    <caption class="caption-jinbang">海天金榜</caption>
                                    <thead>
                                    <tr>
                                        <th>排名</th>
                                        <th>用户名</th>
                                        <th>总资产</th>
                                        <th>总收益率</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($jinbang as $item):?>
                                    <tr>
                                        <td><?php echo $item['pos'];?></td>
                                        <td><?php echo $item['name'];?></td>
                                        <td><?php echo $item['fund'];?></td>
                                        <td><?php echo $item['profit'];?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div style="margin-top: 100px;margin-left: 25px;">
                                <img src="<?php echo base_url('assets/images/logo/logo_6.png'); ?>"/>

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover table-condensed">
                                    <caption class="caption-yinbang">海天银榜</caption>
                                    <thead>
                                    <tr>
                                        <th>排名</th>
                                        <th>用户名</th>
                                        <th>总资产</th>
                                        <th>总收益率</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($jinbang as $item): ?>
                                        <tr>
                                            <td><?php echo $item['pos']; ?></td>
                                            <td><?php echo $item['name']; ?></td>
                                            <td><?php echo $item['fund']; ?></td>
                                            <td><?php echo $item['profit']; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<?php $this->load->view('./templates/footer'); ?>
</body>
</html>