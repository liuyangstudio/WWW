<?php
$id = $_GET['id'];        //接收主页传来的键名。
$msg = file_get_contents('msg.txt');
$arr = unserialize($msg);
unset($arr[$id]);         //根据键名删除数组。
$msg = serialize($arr);
if (file_put_contents('msg.txt', $msg)) {
    echo '<script>alert("删除成功");window.location.href="index.php"</script>';
} else {
    echo '<script >alert("删除失败~~");window.location.href="index.php</script>';
}





