<?php
$year =& $_POST['year'];
if ($year % 4 == 0 && $year % 100 !== 0 || $year % 400 == 0) {
    echo $year . '是闰年';
} else {
    echo $year . '不是闰年';
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<form action="2.php" method="post">

    <input type="text" name="year" placeholder="输入一个年份" maxlength="4" minlength="4" size="4">
    <input type="submit" value="提交">


</form>


</body>
</html>