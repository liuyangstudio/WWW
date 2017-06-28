<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <title>用户注册</title>
    <style>

        input {
            border: 1px solid #aeaeae;

            height: 30px;
            padding: 5px;
            font-size: 20px;
        }

        span {
            padding-left: 16px;
            margin-left: 20px;

        }

        i {
            background: url("icon.png");
            display: inline-block;
            width: 15px;
            height: 17px;
            margin-right: 10px;

        }

        #pw1 {
            border-top: none;
            border-bottom: none;
        }

        .ok {
            background-position: 0 0;

        }

        .notic {
            background-position: 0 -100px;
        }

        .warn {
            background-position: 0 -50px;
        }

    </style>
</head>
<body>

<div>
    <form action="Register.php" method="post">


        <input type="text" id="un" name="username" placeholder="用户名" value="" maxlength="15">
        <span></span><br>

        <input type="password" id="pw1" name="password" placeholder="密码" value="" maxlength="15">
        <span></span><br>

        <input type="password" id="pw2" name="password2" placeholder="确认密码" value="" disabled maxlength="15">
        <span></span><br>
        <input type="submit" id="sub" value="注册" name="sub" disabled>

    </form>


</div>


</body>
<script>
    var un = document.getElementById('un');
    var pw1 = document.getElementById('pw1');
    var pw2 = document.getElementById('pw2');
    var span = document.getElementsByTagName('span');
    var reg = /[\W]/g;

    un.onfocus = function () {
        span[0].innerHTML = '<i class=notic></i>请输入用户名（5-15位数字和字母组成）';
    };
    un.onkeyup = function () {
        span[0].innerHTML = this.value.length + '位';

    };
    un.onblur = function () {

        if (this.value == '') {
            span[0].innerHTML = '<i class=warn></i>用户名不能为空'
        } else if (reg.test(this.value)) {
            span[0].innerHTML = '<i class=warn></i>只能使用数字和字母'

        } else if (this.value.length < 5) {
            span[0].innerHTML = '<i class=warn></i>用户名必须大于5位'
        } else {
            span[0].innerHTML = '<i class=ok></i>OK'
        }
    };

    pw1.onfocus = function () {
        span[1].innerHTML = '<i class=notic></i>请输入密码（由6-15位数字和字母组成）';

    };
    pw1.onkeyup = function () {
        span[1].innerHTML = this.value.length + '位';
    };
    pw1.onblur = function () {
        if (this.value == '') {
            pw2.setAttribute('disabled', '');
            span[1].innerHTML = '<i class=warn></i>密码不能为空';
        } else if (reg.test(this.value)) {
            pw2.setAttribute('disabled', '');
            span[1].innerHTML = '<i class=warn></i>只能使用数字和字母'
        } else if (this.value.length < 5) {
            pw2.setAttribute('disabled', '');
            span[1].innerHTML = '<i class=warn></i>密码必须大于5位'
        } else {
            pw2.removeAttribute('disabled');
            span[1].innerHTML = '<i class=ok></i>OK'
        }
    };

    pw2.onfocus = function () {
        span[2].innerHTML = '<i class=notic></i>请再次输入密码';

    };
    pw2.onblur = function () {
        if (this.value != pw1.value) {
            span[2].innerHTML = '<i class=warn></i>两次输入的密码不一致，请重新输入'
        } else {
            span[2].innerHTML = '<i class=ok></i>OK';
            var n = /\w{6,15}/;
            var p = /\w{5,15}/;

            if (n.test(un.value) && p.test(pw1.value)) {


                document.getElementById('sub').removeAttribute('disabled');

            }else
                document.getElementById('sub').setAttribute('disabled','');

        }


    };

</script>
</html>


<?php


if (@$_POST['sub']) {


    $username = $_POST['username'];
    $password = $_POST['password'];
    $pw=password_hash($password,1);

    $link = mysqli_connect('localhost', 'root', '84708597', 'web');
    $query = 'insert user (username,password) values("' . $username . '","' .$pw. '")';
   if( mysqli_query($link, $query)){
       echo '<script>  alert("注册成功！")</script>';
   }else{
       echo '<script>  alert("fail~~~")</script>';
   }


    mysqli_close($link);


}


?>