<!--模拟炒股金榜-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="zh-cn">
<?php $this->load->view('./templates/head'); ?>
<?php
$item = array('rank'=>'1', 'name'=>'158xxxxxx75', 'profit_rate'=>'142.31%', 'week_rate'=> '10.2%', 'month_rate'=>'60%');
$lists_10 = array($item,$item,$item,$item,$item,$item,$item,$item,$item,$item);
?>
<body class="match_index_body">
<div class="wrapper">
    <?php $this->load->view('./stocks/bonds_navbar'); ?>
    <div class="container">
        <div class="col-md-11">
            <div class="match_jmp"></div>
        </div>
        <div class="col-md-10  col-md-offset-1">
            <div class="match_jmp_logo">
                <h1 class="match_txt_color">参加金榜比赛赢取大奖</h1>
                <h3 class="match_txt_color">所以参赛选手缴纳的入场费，将作为奖金全额发放</h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-md-10 col-md-offset-1">
            <section class="match_section">
                <span class="match_badge">报名入口</span>
                <div class="match_rules">
                    <div class="row">
                        <div class="col-md-3">
                            <h3>周赛</h3>
                        </div>
                        <div class="col-md-6">
                            <p>每周进行收益排名，比赛时间为周一至周五。</p>
                        </div>
                        <div class="col-md-3">
                            <div class="match_jmp_txt">
                                <a href="<?php echo base_url('index.php/match/match_center')?>" class="btn">报名周赛</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h3>月赛</h3>
                        </div>
                        <div class="col-md-6">
                            <p>每月进行收益排名，比赛时间为月初至月末。</p>
                        </div>
                        <div class="col-md-3">
                            <div class="match_jmp_txt">
                                <a href="<?php echo base_url('index.php/match/match_center')?>" class="btn">报名月赛</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h3>年赛</h3>
                        </div>
                        <div class="col-md-6">
                            <p>每年进行收益排名，比赛时间为年初至年末。</p>
                        </div>
                        <div class="col-md-3">
                            <div class="match_jmp_txt">
                                <a href="<?php echo base_url('index.php/match/match_center')?>" class="btn">报名年赛</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="match_section">
                <span class="match_badge">参赛规则</span>
                <div class="match_rules">
                    <div class="row">
                        <div class="col-md-4">
                            <h3>比赛时间</h3>
                        </div>
                        <div class="col-md-8">
                            <p>2015年1月1日 ~ 2016年4月1日
                                <br/>【比赛期间也接受报名，从报名成功日开始计算收益】
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <h3>报名方式</h3>
                        </div>
                        <div class="col-md-8">
                            <p>1.点击我要报名按钮进入支付页面，参赛者需缴纳10元入场费；
                                <br/>2.本次比赛的全部入场费将作为奖金全额发放给优胜者；
                                <br/>3.每个参赛用户有一百万的启动资金；
                                <br/>4.用户可下载海天互联IOS客户端APP用手机进行操作；
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <h3>奖金设置</h3>
                        </div>
                        <div class="col-md-8">
                            <p>1.设有周奖、月奖、季奖三类；
                                <br/>2.周奖以现金方式发放给每周收益表现优异者（月奖、季奖类似）；
                                <br/>3.周奖/月奖的发奖时间为获奖名单公布后的后一周；
                                <br/>4.在活动结束后工作人员会主动与获奖者沟通联系；
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <h3>交流平台</h3>
                        </div>
                        <div class="col-md-8">
                            <p>1.官方QQ交流群：xxxxxx；
                                <br/>2.官方咨询方式：xxxxxx；
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="match_section">
                <span class="match_badge">排行榜</span>
                <a href="#" class="match_cmp_rank pull-right">查看完整榜单 <span class="glyphicon glyphicon-hand-right"></span></a>
                <div class="match_rules">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table match_rank_table table-condensed">
                                <thead>
                                <tr class="heading">
                                    <th>排名</th>
                                    <th>用户名</th>
                                    <th>总收益率</th>
                                    <th>月收益率</th>
                                    <th>周收益率</th>
                                </tr>
                                </thead>
                                <?php foreach($lists_10 as $list):?>
                                <tr>
                                    <td ><span class="rank_cirle"><?php echo $list['rank'];?></span></td>
                                    <td><?php echo $list['name'];?></td>
                                    <td><?php echo $list['profit_rate'];?></td>
                                    <td><?php echo $list['month_rate'];?></td>
                                    <td><?php echo $list['week_rate'];?></td>
                                </tr>
                                <?php endforeach;?>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

</div>
<?php $this->load->view('./templates/go-top'); ?>
<?php $this->load->view('./templates/footer'); ?>
</body>
</html>
<style>
    .match_index_body{
        background: #E33F27 url('<?php echo base_url('/assets/images/back/3.png');?>') no-repeat scroll;
    }
    .match_jmp{
        height:310px;
        background: url('<?php echo base_url('/assets/images/jumptron/4.png');?>') no-repeat;
        margin: 10px auto;
        position: relative;
        left: 50px;
    }
</style>