<?php
if (isset($_POST['usercode'])) {
    session_start();
    if (strtolower($_POST['usercode']) === $_SESSION['code']) {
        echo "ok";
    } else {
        echo "fail";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>验证码</title>
    <style>
        img {
            border: 1px solid #767676;
        }

        div {
            width: 500px;
            margin: 100px auto;
        }
    </style>
</head>
<body>
<div>
    <form action="#" method="post">
        <img id="img" src="yanzhengma.php" alt=""><br>
        <label for="input">请输入验证码</label>
        <input type="text" id="input" name="usercode">
        <a href="javascript:void(0)"
           onclick="document.getElementById('img').src='yanzhengma.php?r='+Math.random()">看不清，换一张</a><br>
        <input type="submit" value="提交">

    </form>
</div>

</body>

</html>