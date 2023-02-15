<html>
<head> <title> Добавление новой ос </title> </head>
<body>
<H2>Добавление новой ос:</H2>
<form action="save_new_os.php" metod="get">
Название: <input name="os_name" size="30" type="varchar"><br>
Тип ос: <input name="os_type" size="20" type="varchar"><br>
Разрядность: <input name="os_bit" size="40" type="int"><br>
Разработчик: <input name="os_dev" size="30" type="varchar"><br>
Кол-во пользователь: <input name="os_users" size="11" type="int">
<p><input name="add" type="submit" value="Добавить">
<input name="b2" type="reset" value="Очистить"></p>
</form>
<?php echo "<p><a href=os.php> Вернуться к списку ОС </a>"; ?>
</body>
</html>
