<?
include("checks.php");
require_once 'connect.php'; ?>
<html>
<head><title> Сведения о пользователях сайта </title></head>

<body>
    
<h2>Мингареев Радмир Адикович ПИ-423</h2>
<table border="1">

    <h2>Зарегистрированные пользователи:</h2>
    <table border="1">
        <tr>
            <th> Имя</th>
            <th> Изменить</th>
            <th> Стереть</th>
        </tr>

        <?php
        if ($_SESSION['type'] == 2) {
            $link = mysqli_connect($host, $user, $password, $database)
            or die("Ошибка " . mysqli_error($link));

            $result = mysqli_query($link, "SELECT id_u, username, `password` FROM users");// запрос на выборку сведений о пользователях
            mysqli_select_db($link, "users");

            while ($row = mysqli_fetch_array($result)) {// для каждой строки из запроса
                echo "<tr>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td><a href='edit_users.php?id_u=" . $row['id_u'] . "'> Редактировать </a> </td>"; // запуск скрипта для редактирования
                echo "<td><a href='delete_users.php?id_u=" . $row['id_u'] . "'> Удалить </a></td>"; // запуск скрипта для удаления записи
                echo "</tr>";
            }
            print "</table>";
            $num_rows = mysqli_num_rows($result); // число записей в таблице БД
            print("<P> Всего пользователей: $num_rows </p>");
            echo "<p><a href=new_users.php> Добавить пользователя </a>";
            echo "<p><a href=osAdm.php> На Главную </a>";
        } else {
            echo "Недостаточно прав";
            echo "<p><a href=os.php> На Главную </a>";
        }
        include("checkSession.php");
        ?>
</body>
</html>