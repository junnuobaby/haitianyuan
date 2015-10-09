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
//生成一个测试用的观点数组
$view = array(
    "id" => 1,
    "title" => "第三期计划上线，跟紧大时代，狙击牛市龙头",
    "content" => "我一直认为，股票市场同房地产一样，做为一个重要的资本市场，是财富再分配的核心场所。如何理解这句话，其实质意义就是如果
    本轮牛市你没有深度参与，那将同身边参与这轮牛市的人拉开巨大的财富鸿沟。去年12月份的券商股，今年的互联网等相关的概念股，短短的1-3个
    月就有翻倍的上涨，再加上杠杆工具的结合，其赚钱效应就已经将那些没有参与市场的人的财富远远甩在了后面。",
    "time" => "2015-09-09 20:25",
    "read_num" => "512",
    "kwords" => "A股",
    "access" => "仅VIP可见",
);
$view_list = array($view, $view, $view, $view, $view);
?>

<div class="wrapper">
    <?php $this->load->view('./templates/navbar'); ?>
    <div class="container container_to_top">
        <div class="row">
            <div class="col-sm-3 col-md-3 ">
                <?php $this->load->view('./master/master_sidebar'); ?>
            </div>
            <div class="col-sm-9 col-md-9 block-radius">
                <div class="panel panel-success">
                    <div class="panel-heading"><h3><span class="glyphicon glyphicon-list"></span> 已发表观点</h3>
                    </div>
                    <div class="panel-body">
                        <div class="opinion_category">
                            <label for="kword">权限:</label>
                            <select id="kword" name="kword">
                                <option>全部</option>
                                <option>仅VIP可见</option>
                                <option>免费</option>
                            </select>
                            <button class="btn btn-danger self-btn-danger btn-sm">查找</button>
                        </div>
                    </div>
                    <!-- 已发表的观点列表 -->
                    <div class="opinion_list">
                        <?php foreach ($view_list as $view_item): ?>
                            <div class="master_view">
                                <article>
                                    <header>
                                        <h4 class="inline_div"><a
                                                href="<?php echo base_url("index.php/master/view/1"); ?>"
                                                target="_blank"> <?php echo $view_item['title']; ?></a></h4>
                                        <span class="key_word"><?php echo $view_item['kwords']; ?></span>
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
                                        <span><?php echo $view_item['time']; ?></span>
                                        <span><?php echo $view_item['read_num']; ?>次阅读</span>
                                        <span><a href="#" class="edit_view view_delete"  data-viewid="<?php echo $view_item['id'];?>">删除</a></span>
                                        <span><a class="edit_view">|</a> </span>
                                        <span>
                                            <a href="#" class="x-editable-kwords edit_view"
                                               data-value="<?php echo $view_item['kwords']; ?>" data-type="select"
                                               data-pk="<?php echo $view_item['id']; ?>" data-url="/post"
                                               data-title="更改标签"></a>
                                        </span>
                                        <span>
                                            <a href="#" class="x-editable-access edit_view"
                                               data-value="<?php echo $view_item['access']; ?>" data-type="select"
                                               data-pk="<?php echo $view_item['id']; ?>" data-url="/post"
                                               data-title="更改权限"></a>
                                        </span>
                                    </section>
                                </article>
                            </div>
                            <hr/>
                        <?php endforeach; ?>
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
<script>
    $(document).ready(function () {
        //设置x-editable的权限
        $('a.x-editable-access').editable({
            name: 'access',
            source: [
                {value: '免费', text: '免费'},
                {value: '仅VIP可见', text: '仅VIP可见'},
            ]
        });
        //设置删除的事件
        $('a.view_delete').bind();
        $('a.view_delete').click(function () {
            var r = confirm('删除观点后将不可恢复，是否继续？');
            if (r == true) {
                $.post(url, {name: 'delete', value: });
                return true;
            }
            else {
                return false;
            }
        });


    });
</script>
</html>

