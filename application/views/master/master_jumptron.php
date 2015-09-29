<!--理财师主页巨幕显示内容组件-->
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
                <div>
                    <a class="btn "><span
                            class="glyphicon glyphicon-plus"></span> 关注
                    </a>
                    <a class="btn" data-toggle="modal" data-target="#question_modal"><span
                            class="glyphicon glyphicon-question-sign"></span> 提问
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-3">
            <div class="master_homepage_jumptron_div">
                <h3><?php echo $username; ?></h3>
                <hr/>
                <p class="self-font signature"><span>简介：</span><?php echo $signature; ?></p>
            </div>
        </div>
        <div class="col-md-4 col-md-offset-1 col-sm-4">
            <div class="master_homepage_jumptron_div">
                <div class="row">
                    <table class="table table-responsive text-center master_info">
                        <tr>
                            <td><h5>回答问题数</h5> <h4><?php echo $questions_count; ?></h4></td>
                            <td><h5>满意率</h5><h4><?php echo $satisfication_rate; ?></h4>
                            </td>
                            <td><h5>响应时间</h5><h4><?php echo $response_time; ?>小时</h4>
                            </td>
                        </tr>
                        <tr>
                            <td><h5>VIP用户</h5><h4><?php echo $vips_count; ?></h4>
                            </td>
                            <td><h5>粉丝</h5><h4><?php echo $fans_count; ?></h4></td>
                            <td><h5>关注</h5><h4><?php echo $concerns_count; ?></h4>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="row text-center">
                    <a href="<?php echo base_url("index.php/master/vip_price"); ?>" class="btn btn-default vip-link"
                       target="_blank"><span>体验VIP会员</span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('.master_homepage_jumptron').css('background-image', 'url("<?php echo base_url('assets/images/jumptron_background.jpg'); ?>")');
    });
</script>