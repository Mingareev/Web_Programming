<?php
include("checks.php");
require_once 'connect.php';
$link = mysqli_connect($host, $user, $password, $database);
if (mysqli_connect_errno()) {
    printf("Не удалось подключиться: %s\n", mysqli_connect_error());
    exit();
} // установление соединения с сервером и подключение к базе данных:
 // Строка запроса на добавление записи в таблицу:
mysqli_query($link,"INSERT INTO os SET os_name='". $_GET['os_name']
."', os_type='".$_GET['os_type']."', os_bit='".$_GET['os_bit']
."', os_dev='".$_GET['os_dev']."', os_users='".$_GET['os_users']. "'");
 if (mysqli_affected_rows($link)>0){ 
    print "<p>Спасибо, Ваша oc добавлена в базу данных.";
    
        echo "<p><a href=os.php> Вернуться к списку ОС </a>";
    
} else {
    
        echo "Ошибка сохранения . <p><a href=os.php> Вернуться к списку ОС </a>";
   
}
mysqli_close($link);

?>
