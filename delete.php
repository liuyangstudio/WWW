<?php
$id = $_GET['id'];

$msg = file_get_contents('msg.txt');
$arr = unserialize($msg);
unset($arr[$id]);
$msg = serialize($arr);
if (file_put_contents('msg.txt', $msg)) {
    echo '<script>alert("删除成功");window.location.href="index.php"</script>';
} else {
    echo '<script >alert("删除失败~~");window.location.href="index.php</script>';
}





