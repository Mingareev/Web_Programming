<?php
require_once 'connect.php';
$mysqli = new mysqli($host, $user, $password, $database)
or die ("Невозможно подключиться к серверу");
$id_stores = $_GET['id_stores'];
    $result = $mysqli->query("DELETE FROM stores WHERE id_stores='$id_stores'");

header("Location: stores.php");
exit;
?>
