<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="6.php" method="post" enctype="multipart/form-data" >
    <input type="file" name="myfile">
    <input type="submit" value="上传文件">




</form>

</body>
<script>

</script>
</html>
<?php

print_r($_FILES);
$tmp_name=$_FILES['myfile']['tmp_name'];
echo $tmp_name;


?>

