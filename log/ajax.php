<?php

$username=$_POST['user'];
$pdo=new PDO('mysql:host=localhost;dbname=test','root','84708597');

$sql='select id from user where username="'.$username.'"';
$data=$pdo->query($sql);
foreach ($data as $arr) {
    if ($arr['id']) {
        echo '该户名已存在，请重试';
    } else{
        echo 'ok';
    };


}