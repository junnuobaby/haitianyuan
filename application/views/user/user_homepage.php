<!--理财师主页-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="zh-cn">
<?php $this->load->view('./templates/head'); ?>
<body class="bg-gray">
<?php $this->load->view('./templates/navbar'); ?>
<div class="wrapper">
    <div class="master_homepage_jumptron">
        <div class="container">
            <div>
                <img class="img-responsive user_avatar_box img-circle" src="<?php echo base_url('/assets/images/touxiang/12.jpg'); ?>" alt="理财师头像">
            </div>
            <div class="user_homepage_name">
                君诺宝宝
            </div>
            <p class="user_signature">
                大千世界,万千事物,欢哉悲哉,一念之间
            </p>
        </div>
    </div>
    <!--页面主要内容-->
    <div class="container master_homepage_container">
        <div class="col-md-8 col-sm-8 bg-white block-radius user_min_height">
            <div class="sub_nav">
                <ul class="nav nav-tabs">
                    <li role="presentation" class="active"><a href="#qa" data-toggle="tab">问答</a></li>
                    <li role="presentation"><a href="#self_master" data-toggle="tab">私人理财师</a></li>
                    <li role="presentation"><a href="#simulation_trade" data-toggle="tab">华山论剑</a></li>
                    <li role="presentation"><a href="#simulation_contest" data-toggle="tab">海天赛场</a></li>
                </ul>
            </div>
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
                <!--理财师-->
                <div class="tab-pane" id="self_master">
                    <div class="bg-white q_a_container">
                        <div class="panel-body">
                            <?php foreach ($vips as $vip): ?>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="master_avatar_box"><img src="<?php echo base_url('/assets/images/touxiang/1.jpg');?>"
                                                                            class="img-responsive img-circle user_homepage_avatar" alt="..."></div>
                                    </div>
                                    <div class="col-md-9">
                                        <h4><a href= "#" class="theme-color"><?php echo $vip['username']; ?></a></h4>
                                        <p>关注 <?php echo $vip['concerns_count']; ?> | 粉丝 <?php echo $vip['fans_count']; ?>
                                            | <?php if ($vip['online_state'] == true) {
                                                echo '在线';
                                            } else {
                                                echo "离线";
                                            } ?></p>
                                        <p>个性签名：<?php echo $vip['signature']; ?></p>
                                    </div>
                                </div>
                                <hr class="qu_hr"/>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <!--华山论剑-->
                <div class="tab-pane" id="simulation_trade">
                    <div class="bg-white q_a_container">
                        <img src="<?php echo base_url('/assets/images/1.png'); ?>" class="img-responsive" alt="...">
                    </div>
                </div>
                <!--海天赛场-->
                <div class="tab-pane" id="simulation_contest">
                    <div class="bg-white q_a_container">
                        <section>
                            <h4 class="theme-color">收益率</h4>
                            <div class="row">
                                <img src="<?php echo base_url('assets/images/2.png'); ?>"/>
                            </div>
                            <div class="row well">
                                <div class="col-md-3">
                                    <div class="table-responsive">
                                        <table class="table basic_fund_info">
                                            <tr><th>本日收益率</th><td id="my_position">10%</td></tr>
                                            <tr><th>本日排名</th><td id="fd_rate">3</td></tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-3 col-md-offset-1">
                                    <div class="table-responsive">
                                        <table class="table basic_fund_info">
                                            <tr><th>周收益率</th><td id="pl_value">15%</td></tr>
                                            <tr><th>周排名</th><td id="fd_value">1</td></tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-3 col-md-offset-1">
                                    <div class="table-responsive">
                                        <table class="table basic_fund_info">
                                            <tr><th>月收益率</th><td id="pl_rate">1.54%</td></tr>
                                            <tr><th>月排名</th><td id="fd_rate">3</td></tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section>
                            <h4 class="theme-color">资金</h4>
                            <div class="row">
<!--                                <img src="--><?php //echo base_url('assets/images/3.png'); ?><!--"/>-->
                            </div>
                            <div class="row well">
                                <div class="col-md-4">
                                    <div class="table-responsive">
                                        <table class="table basic_fund_info">
                                            <tr><th>总资产</th><td id="my_asset" class="formatted">10120000</td></tr>
                                            <tr><th>总现金</th><td class="formatted">10000000</td></tr>
                                            <tr><th>可用现金</th><td class="formatted">1000000</td></tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="table-responsive">
                                        <table class="table basic_fund_info">
                                            <tr><th>股票市值</th><td id="stock_value">392600</td></tr>
                                            <tr><th>债券市值</th><td id="bond_value">200000</td></tr>
                                            <tr><th>仓位</th><td id="my_position">10%</td></tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="table-responsive">
                                        <table class="table basic_fund_info">
                                            <tr><th>总盈亏</th><td id="pl_value">15902</td></tr>
                                            <tr><th>总盈亏率</th><td id="pl_rate">1.54%</td></tr>
                                            <tr><th>浮动盈亏</th><td id="fd_value">-1900</td></tr>
                                            <tr><th>浮动盈亏率</th><td id="fd_rate">3.46%</td></tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section>
                            <h4 class="theme-color">持有股票<small>(行情每8s刷新)</small></h4>
                            <div class="table-responsive">
                                <table class="table table-bordered table-condensed table-hover">
                                    <thead>
                                    <tr>
                                        <th>代码</th>
                                        <th>名称</th>
                                        <th>持仓</th>
                                        <th>可卖</th>
                                        <th>成本</th>
                                        <th>现价</th>
                                        <th>浮动盈亏</th>
                                        <th>盈亏率</th>
                                        <th>涨跌幅</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($user_stocks as $stock_item): ?>
                                        <?php $sell_avail = intval($stock_item['Volume_All']) - intval($stock_item['Ban_Volume']) - intval($stock_item['Order_Volume']);?>
                                        <tr id="<?php echo $stock_item['SecurityID']; ?>">
                                            <td data-toggle="modal" data-target="#graphModal" onclick="fillimage('<?= $stock_item['SecurityID']; ?>', '<?= $stock_item['Symbol']; ?>')">
                                                <a href="#"><?php echo $stock_item['SecurityID']; ?></a>
                                            </td>
                                            <td><?php echo $stock_item['Symbol']; ?></td>
                                            <td class="formatted"><?php echo intval($stock_item['Volume_All']); ?></td>
                                            <td class="formatted"><?php echo $sell_avail;?></td>
                                            <td><?php echo number_format(floatval($stock_item['BuyCost']), 2); ?></td>
                                            <td class="stock_present_price"></td>
                                            <td class="stock_pl_value"></td>
                                            <td class="stock_pl_rate"></td>
                                            <td class="stock_extend"></td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <h4 class="theme-color">持有债券<small>(行情每8s刷新)</small></h4>
                            <div class="table-responsive">
                                <table class="table table-bordered table-condensed table-hover">
                                    <thead>
                                    <tr>
                                        <th>代码</th>
                                        <th>简称</th>
                                        <th>成本</th>
                                        <th>现价</th>
                                        <th>全价</th>
                                        <th>持仓</th>
                                        <th>可卖</th>
                                        <th>浮动盈亏</th>
                                        <th>盈亏率</th>
                                        <th>涨跌幅</th>
                                        <th>距付息</th>
                                        <th>到期时间</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($user_bonds as $stock_item): ?>
                                        <?php $sell_avail = intval($stock_item['Volume_All']) - intval($stock_item['Ban_Volume']) - intval($stock_item['Order_Volume']);?>
                                        <tr id="<?php echo $stock_item['SecurityID']; ?>" data-interest="<?php echo $stock_item['interest']; ?>">
                                            <td><?php echo $stock_item['SecurityID']; ?></td>
                                            <td><?php echo $stock_item['Symbol']; ?></td>
                                            <td><?php echo number_format(floatval($stock_item['BuyCost']), 2); ?></td>
                                            <td class="bond_present_price"></td>
                                            <td class="completed_cost"></td>
                                            <td class="formatted"><?php echo intval($stock_item['Volume_All']); ?></td>
                                            <td class="formatted"><?php echo $sell_avail; ?></td>
                                            <td class="bond_pl_value"></td>
                                            <td class="bond_pl_rate"></td>
                                            <td class="bond_extend"></td>
                                            <td><?php echo intval($stock_item['day_left']); ?></td>
                                            <td><?php echo $stock_item['profit_end']; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view('./templates/right-sidebar'); ?>
    </div>
    <!--悬停go-top按钮-->
    <?php $this->load->view('./templates/go-top'); ?>
</div>
<?php $this->load->view('./templates/footer'); ?>
</body>
</html>
<script>
    $(document).ready(function () {
        $('.master_homepage_jumptron').css('background-image', 'url("<?php echo base_url('assets/images/back/2.jpg'); ?>")');
    });
</script>