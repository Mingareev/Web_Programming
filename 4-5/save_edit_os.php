<html><body>
<?php
require_once 'connect.php';
$mysqli = new mysqli($host, $user, $password, $database);
if ($mysqli->connect_errno) {
    echo "Невозможно подключиться к серверу";
}
$id_os=$_GET['id_os'];
    
$os_name=$_GET['os_name'] ;   
$os_type=$_GET['os_type'];
$os_bit= $_GET['os_bit'];
$os_dev=$_GET['os_dev'];
$os_users=$_GET['os_users'];

$zapros="UPDATE os SET os_name='$os_name', os_type='$os_type',
os_bit='$os_bit', os_dev='$os_dev', os_users='$os_users' 
WHERE id_os='$id_os'";

$result = $mysqli->query ($zapros);

if ($result) {
    
        echo "Все сохранено.<a href=os.php> Вернуться к списку ОС </a>";
    
} else {
   
        echo "Ошибка сохранения.<a href=os.php> Вернуться к списку ОС </a>";
  
}
?>
</body></html>