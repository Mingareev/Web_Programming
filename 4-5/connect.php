<?php
$host = 'localhost';
$database = 'a0777012_os';
$user = 'a0777012_os';
$password = 'root';
$link = mysqli_connect($host, $user, $password, $database) or die("ошибка в конекте" . mysqli_error($link));
?>
