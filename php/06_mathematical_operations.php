<?php
/**
 * Created by PhpStorm.
 * User: sergejcervakov
 * Date: 25.10.2018
 * Time: 15:43
 */
$dash = function () {
    for ($i = 0; $i < 5; $i++) echo ' --- --- ';
    echo '<br />';
};

$a = 5;
$aa = 2;
$b = 10;
$c = 12;
echo '$a = ' . $a . ', $b = ' . $b . ', $c = ' . $c . ';<br>';
$dash ();
$abc = $a + $b + $c;
echo 'Сложение.<br>$a + $b + $c = ' . $abc . '<br>' . $a . ' + ' . $b . ' + ' . $c . ' = ' . $abc . '<br>';
$dash ();
$abc2 = $c - $b;
echo 'Вычитание.<br>$c - $b = ' . $abc2 . '<br>' . $c . ' - ' . $b . ' = ' . $abc2 . '<br>';
$dash ();
$abc3 = $a * $b;
echo 'Умножение.<br>$a * $b = ' . $abc3 . '<br>' . $a . ' * ' . $b . ' = ' . $abc3 . '<br>';
$dash ();
$abc4 = $b / $a;
echo 'Деление.<br>$b / $a = ' . $abc4 . '<br>' . $b . ' / ' . $a . ' = ' . $abc4 . '<br>';
$dash ();
$abc5 = $c % $a;
echo $abc5 . '<br>' . (78 % 33) . '<br>' . (17 % 3) . '<br>';
$dash ();
$d = 17;
$f = 3;
$df = $d % $f;
$g = 15;
$fg = $g / $f;
$dg = $d - $g;
$dfg = $f * $fg + $dg;
echo '17 % 3 = ' . $df . ' - Остаток от деления<br>' . $g . ' / ' . $f . ' = ' . $fg . ' Находим наибольшее число до «' . $d . '», которое делится на «' . $f . '» без остатка<br>' . $d . ' - ' . $g . ' = ' . $dg . '<br> Проверяем:<br>' . $d . ' = ' . $fg . ' * ' . $f . ' + ' . $dg;
echo '<br>' . $d . ' = ' . $dfg . '<br>';
$dash ();
$aaa = $a ** $aa;
echo $a . ' в степени ' . $aa . ' = ' . $aaa . '<br>';
$dash ();
echo "Квадратный корень из $a равен " . ($a ** 0.5) . '<br>';
$dash ();
$a++;
echo $a . ' - увеличиваем $a на 1<br>';
unset($a);
$a = 5;
echo $a . '- Задаем новое зеачение переменной $a<br>';
$a--;
echo '$a = ' . $a . ' уменьшили $a на 1<br>';
$a -= 2;
echo '$a = ' . $a . ' - вычитаем 2 от $a<br>';
$a += 8;
echo $a . ' прибавим 8 к $a';


