<?php


$pdo = new PDO('mysql:host=localhost;dbname=menu', 'root', '84708597');
$sql='select zhushi from log';
$data=$pdo->query($sql);
foreach ($data as $arr) {
    print_r($arr);

}







/**
 * Created by PhpStorm.
 * User: 刘洋
 * Date: 2017/7/18
 * Time: 12:56
 */