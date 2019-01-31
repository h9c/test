<?php
/**
 * Created by PhpStorm.
 * User: sergejcervakov
 * Date: 31/01/2019
 * Time: 17:46
 */




$num = [2, 5, 4, 9, 7];
$num_1 = [3, 8, 2, 9, 5, 6, 8,];
$numers = $num + $num_1;
foreach ($numers as $value) {
    if ($value % 2 == 0) {
        echo $value . ', ';
        $value++;
    }
}
echo '<br><br>';

$myname = ['Червяков', 'Сергей', '31'];
$fname = $myname[0];
$sname = $myname[1];
$age = $myname[2];

echo $fname.' '.$sname.' '.$age.'<br>';

list($fname, $sname, $age) = $myname;
echo "$fname, $sname, $age <br>----------<br>";

$models = ['Вика', 'Оксана', 'Анастасия'];
list($vi, $oks, $an) = $models;
echo $oks.'<br>';

$models = ['Гал', 'Клин', 'Ели'];
list(, $kl, $ell) = $models;
echo $kl.' '.$ell.'<br>----------<br>';







$arr_1 = ['name_1' => 'Michael1', 'name_2' => 'Igor1'];
$arr_2 = ['name_3' => 'Alex1', 'name_4' => 'Homer1'];
$arr = $arr_1 + $arr_2;
foreach ($arr as &$value) echo $value.', ';
echo '<br>----------<br>';



$arr_1 = ['name_1' => 'Michael2', 'name_2' => 'Igor2'];
$arr_2 = ['name_1' => 'Alex2', 'name_2' => 'Homer2', 'name_3' => 'Bart2'];
$arr = $arr_1 + $arr_2;
foreach ($arr as $value) echo $value.', ';

echo '<br />';
echo "Элимент равен {$arr_1['name_1']}";


