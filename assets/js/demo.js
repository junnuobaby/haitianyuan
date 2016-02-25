/**
 * validate the code.
 */
function validate_code(code){
    if(code.length == 6 && !isNaN(code)){
        return true;
    }else{
        return false;
    }
}

/**
 * show the hint list.
 */
function display_hint_list(code_input, hint_list){
    code_input.keyup(function(event){
        get_hint_list(event, code_input, hint_list);
    });
    code_input.keydown(function(event){
        navigate_list(event, code_input, hint_list);
    });
    hint_list.delegate('tr', 'mouseover mouseout click', function(event){mouse_list(event, code_input, hint_list);});
}

function get_hint_list(event, code_input, hint_list) {
    var xhr;
    var code_input_val = code_input.val();
    if (code_input_val == '' || event.which == 27) {
        hint_list.empty().hide();
    }
    if ((event.which >= 48 && event.which <= 57) || event.which == 8 || event.which == 46 || (event.which >= 96 && event.which <= 105)) {
        if (xhr) {
            xhr.abort();
        }
        if (code_input_val.length >= 1) {
            xhr = $.ajax({
                url: '/helper/search' + '/' + code_input_val,
                method: 'get',
                cache: false,
                dataType: 'json',
                success: function(response){
                    var content = '<table class="table table-responsive table-condensed">' +
                        '<tr><th>代码</th><th>名称</th></tr>';
                    for (var i = 0; i < response.length; i++) {
                        content += '<tr><td>' + response[i][0] + '</td><td>' + response[i][1] + '</td></tr>';
                    }
                    content += '</table>';
                    hint_list.html(content).show();
                }
            });
        }
    }
}

//响应上下键事件
function navigate_list(event, code_input, hint_list) {
    var cur = hint_list.children('tr.hint_active');
    var bond_code = code_input;
    switch (event.which) {
        case 38:  //上键
            if (cur.length > 0) {
                cur.removeClass('hint_active').prev('tr').addClass('hint_active');
            }
            else {
                hint_list.children('tr:last').addClass('hint_active');
            }
            break;
        case 40:  //下键
            if (cur.length > 0) {
                cur.removeClass('hint_active').next('tr').addClass('hint_active');
            }
            else {
                hint_list.children('tr:nth-child(2)').addClass('hint_active');
            }
            break;
        case  13: //enter键
            bond_code.val(hint_list.children('tr.hint_active td:first').html())
            hint_list.empty().hide();
    }
}

//鼠标移动和点击事件
function mouse_list(event,code_input, hint_list) {
    var cur = hint_list.children('tr.hint_active');
    var bond_code = code_input;
    if (event.type == 'mouseover') {
        cur.removeClass('hint_active');
    }
    $(this).toggleClass('hint_active');

    if (event.type == 'click') {
        bond_code.val($(this).children('td:first').html());
        hint_list.empty().hide();
        bond_code.focus();
    }
}