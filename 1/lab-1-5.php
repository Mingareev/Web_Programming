
<p> 3.PHP-скрипт, в котором вычисляется значение заданного выражения ((2 * c + 51 * d)/(d - a - 1)), для случайных аргументов из интервала [-20, 20]:

    <?php
$a = rand(-20,20);
$d = rand(-20,20);
$b = rand(-20,20);
$c = rand(-20,20);
echo '<br> a ='. $a;
echo '<br> b ='. $b;
echo '<br> d ='. $d;
echo '<br> c ='. $c;
echo '<br>';
print ('((2 * c + 51 * d)/(d - a - 1))' . '=' . ((2 * $c + 51 * $d)/($d - $a - 1)) . '<br><br>');
?>
<p> 8.PHP-скрипт, в котором вычисляется значение заданного выражения ((b * (2 * c) + d - 52)/(a / 3 + 1)), для случайных аргументов из интервала [-20, 20]:

 <?php
$a = rand(-20,20);
$d = rand(-20,20);
$b = rand(-20,20);
$c = rand(-20,20);
echo '<br> a ='. $a;
echo '<br> b ='. $b;
echo '<br> d ='. $d;
echo '<br> c ='. $c;
echo '<br>';
print ('((b * (2 * c) + d - 52)/(a / 3 + 1))' . '=' . (($b * (2 * $c) + $d - 52)/($a / 3 + 1)) . '<br>');
?>