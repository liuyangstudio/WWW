<?php
if (empty($_POST['user'])) {
    die;
}

$username=$_POST['user'];
$pdo=new PDO('mysql:host=localhost;dbname=test','root','84708597');

$sql='select id from user where username="'.$username.'"';
$data=$pdo->query($sql);
echo $data->rowCount();