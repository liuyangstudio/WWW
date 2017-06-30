<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="6.php" method="post">


    <input type="text" name="u">
    <input type="text" name="a">
<input type="submit" name="sub" value="查询">
    <input type="text" name="q">
    <input type="text" name="w">
    <input type="submit" name="sub2" value="插入">
</form>
</body>
<script>
</script>
</html>
<?php
if (isset($_POST['sub2'])) {
    $user=$_POST['q'];
    $age=$_POST['w'];


    $link=mysqli_connect('localhost','root','84708597','test');

    $str='insert t1 values("'.$user.'","'.$age.'")';
    mysqli_query($link,$str);





    mysqli_close($link);



}








if (isset($_POST['sub'])) {
    $user = $_POST['u'];
    $age=$_POST['a'];


    $link=mysqli_connect('localhost','root','84708597','test');

    $str='SELECT * FROM t1 WHERE user="'.$user.'"AND age="'.$age.'" ';
    $data=mysqli_query($link,$str);
    $arr=mysqli_fetch_all($data,MYSQLI_ASSOC);

    if ($arr) {
        echo 'ok';

    }else
    {echo 'fail!!!!!';}


    mysqli_close($link);


}


?>