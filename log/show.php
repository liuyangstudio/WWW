<?php
$pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '84708597');
$sql = 'select * from user';
$data = $pdo->query($sql);
foreach ($data as $arr) {
    echo $arr['username'];
    echo '<br>';
    echo $arr['passwd'];
    echo '<hr>';
}
echo "<a href='index.html'>返回主页</a>";