<?php
if (isset($_POST['usercode'])) {
    session_start();
    if (strtolower($_POST['usercode'])===$_SESSION['code']) {
        echo "ok";
    }else{
        echo "fail";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
img{
    border: 1px solid #000000;
}
        div{
    width: 500px;
            margin:100px auto;
        }
    </style>
</head>
<body>
<div>
    <form action="#" method="post">   <img src="yanzhengma.php" alt="">
    <label for="input">请输入验证码</label>
    <input type="text" id="input" name="usercode">
        <input type="submit" value="提交">

    </form>
</div>

</body>

</html>