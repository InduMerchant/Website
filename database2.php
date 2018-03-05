<?php
$db_host = 'localhost';
$db_name = 'quizzersoc';
$db_user = 'root';
$db_pass = '';

$mysqli = new mysqli($db_host,$db_user, $db_pass, $db_name);

if($mysqli->connect_error)
{
    printf("connection failed",$mysqli->connect_error);
    exit();
}


?>