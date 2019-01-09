<?php
/**
 * Created by PhpStorm.
 * User: sergejcervakov
 * Date: 08/01/2019
 * Time: 19:23
 */
$dash = function () {
    for ($i = 0; $i < 5; $i++) echo ' --- --- --- ';
    echo '<br>';
};

$s_1 = "Выводим первую строку";
$s_2 = "Вторая строка";
echo $s_1 . ' - ' . $s_2 . '<br />';
$dash ();
$s = $s_1 . '. ' . $s_2.'<br>';
echo $s;
$dash ();
$s_3 = 'H<b>e</b>llo World';
echo 'Выводим - "'.$s_3.'" и из полученой строки выводим 2й символ - <b>'.$s_3[4].'</b><br>';
$dash ();
echo "Выводим символ \" Мы его экранировали с помощью \\ <br>";
$dash ();
echo 'Тут переменная $s_1 не подставится. Далее мы выводим одиночную кавычку с помощью <b>\\</b> -  <b>\'</b><br>';
$dash ();
echo "Тут будет {} ошибка $s_1N <br>";
echo "Тут не будет {} ошибки <b>{$s_1}N</b><br>";
$dash ();
echo "Выводим слэш /";
echo "<br />Выводим обратный слэш \\<br>";
$dash ();
$res = `date`;
echo $res;
echo "<br>";
echo iconv("CP866", "UTF-8", $res).'<br>';
$dash ();
echo date("l").'<br>';
echo date("d").'<br>';
echo date("c");