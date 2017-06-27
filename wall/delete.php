<?php


$id=$_GET['id'];
$connect=mysqli_connect('localhost','root','84708597','wall');



if (mysqli_query($connect, 'DELETE FROM wall WHERE id="'.$id.'"')) {
    echo '<script> alert("删除成功！！！");window.location.href="index.php"</script>';
}


mysqli_close($connect);






