<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        img{
            width: 400px;
            height: 300px;
        }
    </style>
</head>
<body>
</body>

</html>


<?php

$pdo=new PDO('mysql:host=localhost;dbname=test','root','84708597');
$sql='select*from img';
$data=$pdo->query($sql);
foreach ($data as $row) {
    echo '<h2>'.$row['title'].'</h2>';
    echo '<img src="'.$row['url'].'">';


}



?>
