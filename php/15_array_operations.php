<?php
/**
 * Created by PhpStorm.
 * User: sergejcervakov
 * Date: 31/01/2019
 * Time: 17:46
 */

function dash()
{
    echo '<br>';
    for ($i = 0; $i < 5; $i++) {
        echo ' --- --- --- ';
    }
    echo '<br>';
}

function br()
{
    echo '<br>';
}

dash();

$num = [2, 5, 4, 9, 7];
$num_1 = [3, 8, 2, 9, 5, 6, 8,];
$numers = $num + $num_1;

foreach ($num as $value) {
    echo $value;
}
echo ' - Выводим значения первого массива';
br();
foreach ($num_1 as $value) {
    echo $value;
}
echo ' - Выводим значения второго массива';
br();

foreach ($numers as $value) {
    echo $value;
}
echo ' - Из двух массивов выводит один но только часть второго';
br();
foreach ($num as $value) {
    if ($value % 2 == 0) {
        echo $value . ', ';
        $value++;
    }
}
foreach ($num_1 as $value) {
    if ($value % 2 == 0) {
        echo $value . ', ';
        $value++;
    }
}
echo ' - Выводим только четные числа двух массивов';
dash();


$myname = ['Червяков', 'Сергей', '32'];

$name = $myname[0];
$surname = $myname[1];
$age = $myname[2];
echo $name . ', ' . $surname . ', ' . $age . '. '; //Вывожу в ручную
br();

list($name, $surname, $age) = $myname;
echo "$name, $surname, $age"; // Вывожу с помощью list
br();

list($qwerty, , $age) = $myname;
echo "$qwerty \$name $age";  //Не выводит ту чать которая не задана

br();
echo $qwerty;
dash();

$models = ['Вика', 'Оксана', 'Анастасия'];
list($vi, $oks, $an) = $models;
echo $oks;
br();

$models2 = ['Жанна', 'Наташа', 'Света'];
list($j, ,) = $models2;
echo $j;
br();
$models = ['Гал', 'Клин', 'Ели'];
list(, $kl, $ell) = $models;
echo $kl . ' ' . $ell . $j;
dash();

$arr_1 = ['name_1' => 'Сергей', 'name_2' => 'Червяков'];
$arr_2 = ['name_3' => 'Иван', 'name_4' => 'Петров'];
$arr = $arr_1 + $arr_2;
foreach ($arr as $value) echo $value . ', ';
dash();


$arr_1 = ['name_1' => 'Червяков', 'name_2' => 'Сергей'];
$arr_2 = ['name_1' => 'Кекс', 'name_2' => 'Кот', 'name_3' => 'Викторович'];
$arr = $arr_1 + $arr_2;
foreach ($arr as $value) echo $value . ', '; //$name_1 и $name_2 не выводит массив $arr_2, а только $name_3
dash();
echo "Элимент равен {$arr_1['name_1']}";


