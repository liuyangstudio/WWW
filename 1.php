<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post" action="1.php">

    <input type="text" name="num" placeholder="请输入一个整数"><br>
    <input type="submit" name="jin" value="金字塔">
    <input type="submit" name="ling" value="空心菱形">

</form>
</body>
</html>


<?php
$num=$_POST['num'];

if ($_POST['jin']) {                   //输出 金字塔
    for ($i = 1; $i <= $num; $i++) {
        for ($l = ($num - $i) - 1; $l >= 0; $l--) {
            echo '<span style="color: #FFFFFF">*</span>';
        }
        for ($j = 1; $j <= 2 * $i - 1; $j++) {
            echo '*';
        }
        echo "<br>";
    }

} else if ($_POST['ling']) {           //输出 空心菱形
    for ($i = 1; $i <= $num; $i++) {   //上半部分

        for ($l = ($num - $i) - 1; $l >= 0; $l--) {
            echo '<span style="color: #FFFFFF">*</span>';
        }
        echo '*';
        if ($i == 1) {
        } else {
            for ($q = 1; $q <= 2 * $i - 3; $q++) {
                echo '<span style="color: #FFFFFF">*</span>';
            }
            echo '*';
        }
        echo "<br>";
    }
    for ($i = 1; $i <= $num - 1; $i++) {//下半部分

        for ($l = 1; $l <= $i; $l++) {
            echo '<span style="color: #FFFFFF">*</span>';
        }
        echo '*';
        if ($i == $num - 1) {
        } else {
            for ($q = 2 * ($num - $i) - 4; $q >= 0; $q--) {
                echo '<span style="color: #FFFFFF">*</span>';
            }
            echo '*';
        }
        echo "<br>";
    }
}

?>