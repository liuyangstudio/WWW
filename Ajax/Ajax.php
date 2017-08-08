<?php
$data='';

if (isset($_POST['name'])) {

$data .= md5($_POST['name']);
echo $data;

}