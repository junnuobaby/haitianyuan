<!--华山论剑导航栏-->
<nav class="bg-white txt_center sub_navigation">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div>
                    <ul class="stocks_menu">
                        <li><a class="white-color" href="<?php echo base_url('/index.php/index');?>">首页</a></li>
                        <li class="<?php if($nav_mode == "simu_index") echo "nav_current"; ?>"><a href="<?php echo base_url('index.php/stocks/simulation/index')?>">模拟交易</a></li>
                        <li ><a href="#">排行榜</a></li>
                        <li ><a href="#">比赛排名</a></li>
                        <li class="<?php if($nav_mode == "match_lists") echo "nav_current"; ?>"><a href="<?php echo base_url('index.php/match/index')?>">报名参赛</a></li>
                        <li class="<?php if($nav_mode == "trading_rules") echo "nav_current"; ?>"><a href="<?php echo base_url('index.php/stocks/rules')?>">交易规则</a></li>
                        <li class="<?php if($nav_mode == "trading_guides") echo "nav_current"; ?>"><a href="<?php echo base_url('index.php/stocks/guides')?>">操作指南</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
<style>
    nav.sub_navigation {
        background-image: url(<?php echo base_url('/assets/images/sub_nav_bg.png')?>);
    }
</style>


