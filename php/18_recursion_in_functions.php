<?php
/**
 * Created by PhpStorm.
 * User: sergejcervakov
 * Date: 03/02/2019
 * Time: 17:32
 */
function dash($br = 2)
{
    switch ($br):
        case (1):
            echo '<br>';
            break;
        case (2):
            echo '<br>';
            for ($i = 0; $i < 5; $i++) echo ' --- --- --- ';
            echo '<br>';
            break;
        default:
            echo 'Неизвестный параметр';
    endswitch;
}

dash(4);
dash();

function test($a) // Считаем фактариал (Рекурсия)
{
    if ($a <= 1) return 1;
    return $a * test($a - 1);
}

echo test(4);
dash();

function test2($a) // Считаем число фибаначи (Рекурсия)
{
    if ($a < 2) return $a;
    return (test2($a - 1) + test2($a - 2));
}

echo 'Фибаначи ' . test2(7);
dash();

function test3($a) // Считаем факториал через цикл for
{
    $p = 1;
    for ($i = 0; $i < $a; $i++) {
        $p = $p * ($i + 1);
    }
    return $p;
}

echo 'Считаем факториал через цикл for ' . test3(5);
dash();


function factorial($a, $b)
{
    if ($b == 0) return 1; // нужно $b привести к нулю
    return $a * factorial($a, $b - 1);
}

echo factorial(4, 4);

dash();

function stepen($a, $b)
{
    if ($b == 0) return 1;
    return $a * stepen($a, $b - 1);
}

echo '2 в 4й степени = ' .stepen(2, 4);

dash();
echo 'Ниже просто тренинг для функций из урока 16';
dash(1);

function qwe($a)
{
    if ($a == 1) return 1;
    elseif ($a == 2) return 2;
    elseif ($a == 3) return 'Вы задали параметр функции <b>3</b>';
    return 'Вы задали параметр функции больше 3х, это <b>' . $a . ',</b>';
}

$qwer = qwe(3);
echo $qwer;