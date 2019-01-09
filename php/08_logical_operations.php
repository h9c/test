<?php
/**
 * Created by PhpStorm.
 * User: sergejcervakov
 * Date: 09/01/2019
 * Time: 13:20
 */
$dash = function () {
    for ($i = 0; $i < 5; $i++) echo ' --- --- --- ';
    echo '<br>';
};
$x = 10;
$y = 0;
$lo_1 = $x > 10;
$lo_2 = $y == 0;
$lo_3 = $x >= 10;
echo "x = $x; y = $y<br>";
$dash ();
echo "x > 10 = <ins>$lo_1</ins>; x >= 10 = <ins>$lo_3</ins>; (y == 0) = <ins>$lo_2</ins><br>";
$dash ();
$b_1 = true;
$b_11 = true;
$b_2 = false;
echo "b_1 = <ins><b>$b_1</b></ins> <i>(true)</i>; b_2 = $b_2 <i>  (false)</i><br />";
$dash ();
echo 'Отрицание b_1 - ' . !$b_1 . '<br>' . 'Отрицание b_2 - ' . !$b_2 . '<br>';
$dash ();
echo 'b_1 = true<br>b_11 = true<br>b_2 = false<br><br>';
echo 'b_1 ИЛИ b_2: [' . ($b_1 || $b_2) . '] - Значение имеет один или два true, выводит <b>[1]</b> <br />';
echo 'b_1 И b_2: = ' . ($b_1 && $b_2) . ' <br>';
echo '$b_1 И $b_11 = <b>[' . ($b_1 && $b_11) . ']</b> Оба значения должны быть <i>true</i>. Выводит <b>[1]</b><br>';
$dash();
echo 'b_1 Исключающее ИЛИ b_2: <b>[' . ($b_1 xor $b_2) . ']</b> Выводит <i>true</i> если значения b_1 и b_2 разное.<br>';
$dash ();
echo (!($b_1 && $b_2) xor (!$b_1 || $x < 10)) . '<br />';
$dash ();
$x = 5;
$y = '5';
$yy = 5;
echo 'x = '.$x.'; y = '.$y.'(<i>строка</i>); yy = '.$yy.'; <br>';
echo 'Результат проверки на равенство x и y = <b>[' . ($x == $y) . ']</b><br />';
echo 'Результат проверки на эквивалентность x и y = ' . ($x === $y) . ' <br />';
echo 'Результат проверки на эквивалентность x и yy = <b>[' . ($x === $yy) . ']</b> если $a равно $b и имеет тот же тип<br />';
