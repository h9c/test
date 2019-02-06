<?php
/**
 * Created by PhpStorm.
 * User: sergejcervakov
 * Date: 08/01/2019
 * Time: 15:25
 */

function dash($a = 0)
{
    if ($a == 1) :
        echo '<br>';
    elseif ($a == 0) :
        echo '<br>';
        for ($i = 0; $i < 5; $i++) {
            echo ' --- --- --- ';
        }
        echo '<br>';
    else: echo 'иначе';
    endif;
}

dash();

$a = function ($a = 'Если не задан параметр, по умолчанию выводим эту строку') {
    echo $a . ' Текст. ';
};
$a ('Выводим переменную $a = ');
dash();

echo $a('Выводим переменную $a ') . $a();
dash();

$b = function ($a = '$b + $c = $d') {
    $b = 4;
    $c = 5;
    $d = $b + $c;
    echo $a . $b . ' + ' . $c . ' = ' . $d;
};

$b('Равно ');
dash();

function test($a, $b)
{
    $arr = [];
    for ($i = 0; $i < $a; $i++)
    {
        $arr[] = $b($i);
    }
    return $arr;
}
$arr = test(6 , function($x) {
    return $x * $x;

});
foreach ($arr as $v) echo $v.', ';