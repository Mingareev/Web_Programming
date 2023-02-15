<?php
require_once 'connect.php';
$mysqli = new mysqli($host, $user, $password, $database) or die ("Невозможно
подключиться к серверу");
$id_key = $_GET['id_key'];
    $result = $mysqli->query("DELETE FROM kl WHERE id_key='$id_key'");

header("Location: key.php");

exit;
?>

