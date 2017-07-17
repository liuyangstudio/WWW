<html>
<style>

    img {
        width: 300px;
        height: 200px;
    }
</style>

</html>


<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('location:index.html');
    echo '<script>alert("请重新登录")</script>';
    die;
} else {
    echo '欢迎回来,' . $_SESSION['username'];


    $pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '84708597');
    $sql = 'select*from user';
    $data = $pdo->query($sql);
    foreach ($data as $arr) {
        echo '<h2>' . $arr['username'] . '</h2>';
        echo '<img src="' . $arr['url'] . '">';


    }
}


?>