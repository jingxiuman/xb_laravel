/**
 * Created by zhoub on 2015/10/5.
 */
$(function () {
    $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
    });
    $("#index_btn").on("click", function () {
        var username = $("#index_username").val().trim(),
            password = $("#index_password").val().trim(),
            reg = /^\w+$/;
        if(reg.test(username) && reg.test(password)){
            $.ajax({
                url: "/register/login",
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'post',
                data: {
                    "username": username,
                    'password': password
                },
                success: function (data) {
                    if (data == 0) {
                        $(".login-box-msg").html("用户名或者密码错误")
                    }
                }
            })
        }else{
            $(".login-box-msg").html("请输入字母数字或者下划线组成的字母")
        }
    })
});