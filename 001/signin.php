<?php
session_start();
$uninfo = '';

if (@$_POST['sub']) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $pw = password_hash($password, 1);

    $link = mysqli_connect('localhost', 'root', '84708597', 'web');
//    $query = 'select id from user where username="' . $username .'"';
    $str = "select id from user where username='" . $username . "'and password='" . $pw . "'";
    $data = mysqli_query($link, $str);
    $arr = mysqli_fetch_all($data, MYSQLI_ASSOC);
    print_r($arr);

    if ($arr) {
//        $_SESSION['username'] = $username;
//        $_SESSION['uid'] = $arr[0]['id'];
//        header("Location:index.php");
    } else {
        echo ' <script>
alert = ("用户名或密码错误，请重试；");</script> ';
    }


    mysqli_close($link);


}

?>


<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <title>登录</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            text-decoration: none;
            font-size: 14px;

        }

        header {
            width: 1200px;
            margin: 100px auto;

        }

        h1 {
            font-size: 30px;
            font-weight: 400;
            margin-left: 100px;
        }

        .line {
            border-bottom: 1px solid #df6600;
            box-shadow: 0 2px 5px #c3c3c3;
            margin-top: 25px;
        }

        .register {
            width: 1000px;
            margin: 0 auto;
        }

        /*输入框*/

        form {
            text-align: right;

            float: left;
            width: 400px;
            margin-left: 100px;
        }

        input {
            border: 1px solid #aeaeae;
            margin-bottom: 5px;
            height: 30px;
            width: 300px;
            padding: 5px;
            font-size: 17px;
            border-radius: 3px;
        }

        #sub {
            height: 35px;
            width: 200px;
            margin-right: 4px;
            color: #ffffff;
            background-color: #df6600;
            border-radius: 4px;
            border: 1px solid #b95500;
            box-shadow: 2px 2px 5px 1px #9a9a9a;

        }

        #sub:hover {
            box-shadow: 2px 2px 5px 1px #d6d6d6;
            background-color: #ff7700;
        }

        label {

        }

        /*提示信息*/

        .info {
            width: 400px;
            float: left;
            height: 90px;
        }

        span {
            display: block;
            color: #ff0000;
            height: 45px;
            line-height: 45px;
        }

        i {
            background: url("icon.png");
            display: inline-block;
            width: 15px;
            height: 17px;
            margin-right: 10px;

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
<header>
    <h1>登录</h1>

    <p class="line"></p>


</header>
<div class="register">
    <form action="signin.php" method="post" onsubmit="return check()">


        <label>用户名</label> <input type="text" id="un" name="username" placeholder="请输入用户名" value="" maxlength="15"
                                  required>
        <br>

        <label>密码</label> <input type="password" id="pw1" name="password" placeholder="请输入登录密码" value="" maxlength="15"
                                 required>
        <br>


        <input type="submit" id="sub" value="登录" name="sub">

    </form>
</div>
<div class="info">
    <span>&nbsp;</span>
    <span>&nbsp;</span>

</div>
</body>
<script>
    var un = document.getElementById('un');
    var pw1 = document.getElementById('pw1');
    var span = document.getElementsByTagName('span');
    var unreg = /[^A-Za-z0-9]/;
    /*提交表单时，检查用户名与密码是否合法*/
    function check() {
        var unreg = /[^A-Za-z0-9]/;

        if (unreg.test(un.value) || unreg.test(pw1.value) || pw1.value !== pw2.value) {
            console.log(1312);
            return false;
        } else if (un.value.length < 5 || pw1.value.length < 6) {
            return false;
        }
    }


    un.onkeyup = function () {
        if (unreg.test(this.value) || this.value.length < 5) {
            span[0].innerHTML = ' < i class=notic ></i > 长度5 - 15位，只支持数字和大小写字母';
            this.style.borderColor = '#ff0000';
            this.style.outlineColor = '#ff0000';
        } else if (this.value.length > 4) {
            span[0].innerHTML = '<i class=ok></i>';
            this.style.borderColor = '#adadad';
            this.style.outlineColor = '#000000';
        }
    };

    un.onblur = function () {

        if (this.value == '') {
            span[0].innerHTML = '<i class=warn></i>用户名不能为空';
            this.style.borderColor = '#ff0000';
        } else if (unreg.test(this.value)) {
            span[0].innerHTML = '<i class=warn></i>只能使用数字和字母';
            this.style.borderColor = '#ff0000';
        } else if (this.value.length < 5) {
            span[0].innerHTML = '<i class=warn></i>用户名至少为5位';
            this.style.borderColor = '#ff0000';
        } else {
            span[0].innerHTML = '<i class=ok></i>';
            this.style.borderColor = '#adadad';
        }
    };


    pw1.onkeyup = function () {
        if (unreg.test(this.value) || this.value.length < 6) {
            span[1].innerHTML = '<i class=notic></i>长度6-15位，只支持数字和大小写字母';
            this.style.borderColor = '#ff0000';
            this.style.outlineColor = '#ff0000';
        } else if (this.value.length > 5) {
            span[1].innerHTML = '<i class=ok></i>';
            this.style.borderColor = '#adadad';
            this.style.outlineColor = '#000000';
        }
    };

    pw1.onblur = function () {
        if (this.value == '') {
            span[1].innerHTML = '<i class=warn></i>密码不能为空';
            this.style.borderColor = '#ff0000';
        } else if (unreg.test(this.value)) {
            span[1].innerHTML = '<i class=warn></i>只能使用数字和字母';
            this.style.borderColor = '#ff0000';
        } else if (this.value.length < 5) {
            span[1].innerHTML = '<i class=warn></i>密码至少为6位';
            this.style.borderColor = '#ff0000';
        } else {
            span[1].innerHTML = '<i class=ok></i>';
            this.style.borderColor = '#adadad';
        }


    };


</script>
</html>