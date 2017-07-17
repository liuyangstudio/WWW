<?php
session_start();

$username=$_POST['username'];
$passwd = $_POST['passwd'];

$pdo=new PDO('mysql:host=localhost;dbname=test','root','84708597');
$sql='SELECT passwd FROM user WHERE username="'.$username.'"';
$res=$pdo->query($sql);
foreach ($res as $arr){
    if (password_verify($passwd,$arr['passwd'])) {
            $_SESSION['username']=$username;

        echo '<script>alert("登录成功");window.location.href="show.php";</script>';


    }else{
        echo "fail";
    }


}










