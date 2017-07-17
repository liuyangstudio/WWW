<?php
if (isset($_POST['submit'])) {

    $username=$_POST['username'];
    $passwd=$_POST['passwd'];

    $pdo=new PDO('mysql:host=localhost;dbname=test','root','84708597');
    $sql='INSERT user(username,passwd)VALUES ("'.$username.'","'.$passwd.'") ';
    print_r($pdo);
    if ($pdo->exec($sql)) {
        echo 'ok';
       header("Location: show.php");
    } else {
        echo 'fail';

}}



