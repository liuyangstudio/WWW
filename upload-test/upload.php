<?php
if (!empty($_POST['sub'])) {

    $file_info = $_FILES['myfile'];
    $title = $_POST['title'];


    $ext = pathinfo($file_info['name'], PATHINFO_EXTENSION);

    $name = md5(uniqid(microtime(true), true)) . '.' . $ext;
    $path = '/var/www/liuyangstudio/img' . '/' . $name;
    move_uploaded_file($file_info['tmp_name'], $path);
    $url = '/img' . '/' . $name;


    $pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '84708597');
    $insert = $pdo->exec('INSERT img (title,url) VALUES ("' . $title . '","' . $url . '")');

    if (!empty($insert)) {
        echo '<script> alert("上传成功！");window.location.href="index.html"</script>';
    } else {
        echo '<script> alert("fail！");window.location.href="index.html"</script>';

    }


}


?>
