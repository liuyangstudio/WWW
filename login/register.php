

<?php

echo '123';
if (!empty($_POST['sub'])) {
    $username=$_POST['username'];
    $passwd=$_POST['passwd'];
    $file=$_FILES['myfile'];


    $ext=pathinfo($file['name'],PATHINFO_EXTENSION);
    $uniname=md5(uniqid(microtime(true),true));
    $path='/var/www/timeyiyi/img/'.$uniname.'.'.$ext;
    move_uploaded_file($file['tmp_name'],$path);

    $url='/img/'.$uniname.'.'.$ext;
    $pd=password_hash($passwd,1);


    $pdo=new PDO('mysql:host=localhost;dbname=test','root','84708597');
    $sql='INSERT user(username,passwd,url) VALUES ("'.$username.'","'.$pd.'","'.$url.'")';
    $inst=$pdo->exec($sql);




echo '233';



}


?>