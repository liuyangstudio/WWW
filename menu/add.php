<?php
header("Content-Type: text/html;charset=utf-8");
if (isset($_POST['sub'])) {
    $time=time();
    $type=$_POST['t'];
    $zhu=$_POST['zhushi'];
    $zhushi =implode("-", $zhu);
echo $zhushi;
    $cai = $_POST['cai'];
    $ling = $_POST['ling'];

    $pdo=new PDO('mysql:host=localhost;dbname=menu','root','84708597');
    $sql='INSERT log (class,zhucai,lingshi,date) VALUES ("'.$type.'","'.$cai.'","'.$ling.'","'.$time.'")';
    $pdo->exec($sql);
$sql='select last_insert_id();';
$data=$pdo->query($sql);
foreach ($)

}









/**
 * Created by PhpStorm.
 * User: 刘洋
 * Date: 2017/7/18
 * Time: 12:55
 */