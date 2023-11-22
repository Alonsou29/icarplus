<?php

$user = 'root';
$pass = '';
$host = 'localhost';
$db = 'botellones';

$conn = mysqli_connect($host,$user,$pass,$db);

if(!$conn){
    echo "error ".mysqli_connect_error();}

?>