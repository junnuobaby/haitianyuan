<!--理财师个人空间侧边栏-->
<?php
$basic_info = array(
    "username" => "开普勒",
    "concerns_count" => "10",
    "fans_count" => "20",
    "vips_count" => "5"
);
?>
<div class="profile-sidebar">
    <div class="profile-userpic">
        <img class="img-circle img-responsive"
             src="<?php echo base_url('/assets/images/touxiang/6.jpg'); ?>" alt="我的头像">
    </div>

    <div class="text-center">
        <h4><?php echo $basic_info["username"] ?></h4>
        <h5><a href="<?php echo base_url("index.php/index/authentication"); ?>"><span class="label label-danger">实名认证</span></a></h5>
    </div>
    <div class="row">
        <div class="col-md-4 text-center">
            <a href="#"><h4 id=""><strong><?php echo $basic_info["concerns_count"]; ?></strong></h4></a>
            <h5>关注</h5>
        </div>
        <div class="col-md-4 text-center">
            <a href="#"><h4><strong><?php echo $basic_info["fans_count"]; ?></strong></h4></a>
            <h5>粉丝</h5>
        </div>
        <div class="col-md-4 text-center">
            <a href="#"><h4><strong><?php echo $basic_info["vips_count"]; ?></strong></h4></a>
            <h5>会员</h5>
        </div>
    </div>

    <div class="profile-usermenu">
        <ul class="list-group ">
            <li class="list-group-item ">
                <h4><i class="glyphicon glyphicon-edit"></i> 问答管理</h4>

                <div class="list-group">
                    <a href="<?php echo base_url("index.php/master/ques_tobeanswered"); ?>" class="list-group-item">全部问题</a>
                </div>
            </li>
            <li class="list-group-item ">
                <h4><i class="glyphicon glyphicon-list-alt"></i> 观点管理</h4>

                <div class="list-group">
                    <a href="<?php echo base_url("index.php/master/publish_opinion"); ?>" class="list-group-item">发布观点</a>
                    <a href="<?php echo base_url("index.php/opinion/index"); ?>" class="list-group-item">已发布观点</a>
                </div>
            </li>
            <li class="list-group-item ">
                <h4><i class="glyphicon glyphicon-fire"></i> 华山论剑</h4>

                <div class="list-group">
                    <a href="#" class="list-group-item">模拟炒股</a>
                    <a href="#" class="list-group-item">示范操作</a>
                </div>
            </li>
            <li class="list-group-item ">
                <h4><i class="glyphicon glyphicon-list-alt"></i> VIP管理</h4>

                <div class="list-group">
                    <a href="<?php echo base_url("index.php/master/set_price"); ?>" class="list-group-item">VIP价格</a>
                    <a href="<?php echo base_url("index.php/master/master_vips"); ?>" class="list-group-item">VIP会员</a>
                </div>
            </li>
            <li class="list-group-item ">
                <h4><i class="glyphicon glyphicon-user"></i> 个人信息管理</h4>

                <div class="list-group">
                    <a href="#" class="list-group-item">我的钱包</a>
                    <a href="<?php echo base_url("index.php/master/master_profile"); ?>" class="list-group-item">修改个人资料</a>
                </div>
            </li>

        </ul>
    </div>
</div>