<?php

$name = $_POST['name'];
$content = $_POST['content'];
$color = $_POST['idvalue'];

$connect = mysqli_connect('localhost', 'root', 84708597, 'wall');
$time=time();
$now=date('Y-m-d H:i:s',$time);


if (mysqli_query($connect, 'insert wall (name,content,color,time) values("' . $name . '","' . $content . '","' . $color . '","'.$now.'")')) {
    echo '<script> alert("添加成功！！！");window.location.href="index.php";</script>';
} else {
    echo '<script >alert("失败并返回");window.location.href="index.php";</script>';
}


mysqli_close($connect);
