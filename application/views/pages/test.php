<!--支付主页-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="zh-cn">
<?php $this->load->view('./templates/head'); ?>
<script src="<?php echo base_url('/assets/js/moment.js') ?>"></script>
<style>
    .position{
        margin-top: 100px;
        margin-left: 200px;
    }
</style>
<body>
<div class="container position">
    <a href="#" id="username" data-type="text" data-pk="1">awesome</a>
</div>

<div class="container position">
    <input type="text" name="name" id="name">
    <button id="sub_btn">提交</button>
</div>

<div class="position">
    <a href="#" id="birthday" name="birthday"
        data-type="combodate" class="basic-info-a" data-pk="2" data-value="1984-05-15" data-title="设置出生年月"></a></div>

</body>
<script>
    $(function(){
        $('#sub_btn').click(function(){
            $.post('<?php echo base_url("index.php/test/play/")?>',{name : 'name', value : $('#name').val()}, function (data, status) {
                alert("Data: " + data + "\nStatus: " + status);
            });
        });

        $('#username').editable({
            url: '<?php echo base_url("index.php/test/get")?>',
            title: 'Enter username',
            success: function(response, newValue) {
                if(response.status == 'error') return response.msg; //msg will be shown in editable form
            }
        });

        //设置出生日期的x-editable选项
        $('#birthday').editable({
            format: 'YYYY-MM-DD',
            viewformat: 'YYYY/MM/DD',
            template: 'YYYY/MMMM/D',
            url: '<?php echo base_url("index.php/test/birthday")?>',
            combodate: {
                minYear: 1920,
                maxYear: 2015,
                minuteStep: 1
            }
        });
    });
</script>
</html>
