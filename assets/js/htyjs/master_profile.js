/**
 * Created by tch on 2015/8/31.
 * 理财师个人主页的个人资料页面相关js.
 */

//设置全部使用x-editable的组件均为嵌入形式
$.fn.editable.defaults.mode = 'inline';
$(document).ready(function () {

    $('#master_profile_name').editable();
    $('#master_profile_company').editable();
    $('#master_profile_identification').editable();
    $('#master_profile_truename').editable();
    $('#master_profile_idcard').editable();
    //选择性别的x-editable选项
    $('#master_profile_sex').editable({
        source: [
            {value: 1, text: '男'},
            {value: 2, text: '女'},
        ]
    });

    //设置出生日期的x-editable选项
    $('#master_profile_birthday').editable({
        format: 'yyyy-mm-dd',
        viewformat: 'yyyy-mm-dd',
        datepicker: {
            weekStart: 1
        }
    });
    //个人简介的x-editable选项
    $('#master_profile_comments').editable({
        url: '/post',
        rows: 5
    });
});
//居住地插件初始化
AreaSelector().init();

//显示预览图片
function read_avatar() {
    var display_avatar_div = $("#display_avatar_div");
    var obj = document.getElementById('master-profile-avatar');
    var file = obj.files[0];
    var reader = new FileReader();
    //判断类型是不是图片
    if (!/image\/\w+/.test(file.type)) {
        alert("请确保文件为图像类型");
        return false;
    }
    reader.onload = function (e) {


        $('#display_avatar_block').html('<img id="master-profile-avatar-display" class=" img-responsive"' +
            'name="master-profile-avatar-display"' +
            'src="' + e.target.result + '" alt="我的头像">');
        $("#master-profile-avatar-display").Jcrop({
            aspectRatio: 1,
            onSelect: updateCoords,
            minSelect: [32,32], //选框最小选择尺寸。说明：若选框小于该尺寸，则自动取消选择
            maxSize: [300,300], //选框最大尺寸
        });
        //判断上传的图片文件宽高是否超过限制
        var img = document.getElementById('master-profile-avatar-display');
        var avatar_width = img.width;
        var avatar_height = img.height;
        if (avatar_width > 500){
            alert("您上传的文件过宽，不得超过500px，请重新选择");
            return false;
        }
        if (avatar_height > 500){
            alert("您上传的文件过高，不得超过500px，请重新选择");
            return false;
        }
        if (display_avatar_div.css('display') === 'none') {
            display_avatar_div.slideDown("slow");
        }

    };
    reader.readAsDataURL(file);
}

//当裁剪框变动时,将左上角相对图片的X坐标与Y坐标,宽度以及高度放到<input type="hidden">中(上传到服务器上裁剪会用到)
function updateCoords(c) {
    $('#x').val(c.x);
    $('#y').val(c.y);
    $('#w').val(c.w);
    $('#h').val(c.h);
}
function checkCoords(){
    if (parseInt($('#w').val())) {
        return true;
    };
    alert('请先选择要裁剪的区域后，再提交。');
    return false;
};

//验证手机号码是否为11位以及是否修改手机号码，若是则显示验证输入框和提交按钮
function display_phone_block(id) {
    var txt = $(id).val();
    var submit_phone_block = $("#submit_phone_block");
    //若手机号码不足11位，显示警告信息
    if (txt.length != 11) {
        $("#master_profile_phone_error").html("(请输入11位手机号码)");
        return;
    }
    //若手机号码为11位且进行了修改
    if (txt != $(id).data('old')) {
        submit_phone_block.slideDown("slow");
    }
    else if (submit_phone_block.css('display') != 'none') {
        submit_phone_block.slideUp("slow");
    }
}

//    验证邮箱格式是否正确，根据是否更改邮箱决定是否显示提交按钮
function display_email_block(id) {
    var email_val = $(id).val();
    var apos = email_val.indexOf("@");
    var dotpos = email_val.lastIndexOf(".");
    var submit_email_block = $("#submit_email_block");
    //邮箱格式不正确，发出警告
    if ((apos < 1 || dotpos - apos < 2) && email_val.length > 0) {
        $('#master_profile_email_error').html('(邮箱格式错误！)');
        return;
    }
    else {
        $('#master_profile_email_error').html('');
    }
    //若更换了邮箱账号，验证该邮箱账号是否和原来一样，不一样就显示提交按钮
    if (email_val != $(id).data('old')) {
        submit_email_block.slideDown("slow");
    }
    else if (submit_email_block.css('display') != 'none') {
        submit_email_block.slideUp("slow");
    }
}
