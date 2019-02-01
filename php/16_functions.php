<?php
/**
 * Created by PhpStorm.
 * User: sergejcervakov
 * Date: 31/01/2019
 * Time: 19:23
 */
function dash()
{
    echo '<br>';
    for ($i = 0; $i < 5; $i++) echo ' --- --- --- ';
    echo '<br>';
}

function br()
{
    echo '<br>';
}

dash();

function hello()
{
    echo '<b>Hello World,</b> ';
}

echo 'Вывожу простую функцию ';
hello();
dash();

function hello2($he = 3)
{
    if (!is_int($he)) {
        echo '<b>Параметр не является целым числом</b><br>';
        return;
    }
    for ($i = 0; $i < $he; $i++) hello();
}

echo 'В данном случае будет ошибка: <br>';
hello2('sd');
echo 'Выводим 2 раза:<br>';
hello2(2);
echo '<br>Задаем параметр по умолчанию 3: <br>';
hello2();

dash();

function summa1($a, $b)
{
    echo $a . ' + ' . $b . ' = ' . ($a + $b) . '<br>';
}

summa1(3, 5);

function getSumma($a, $b)
{
    $summa2 = $a + $b;
    return $summa2;
}

$summa2 = getSumma(4, 4);
echo $summa2; // Только сейчас выводим сумму

function getSumma2($a, $b)
{
    $summa3 = $a + $b;
    echo $summa3 . br();
}

$summa3 = getSumma2(5, 5); // Сразу выводим сумму
br();

function summa2($a, $b, $r = false)
{
    if ($r) return ($a + $b);
    echo 'a + b = ' . ($a + $b) . ' или ' . $a . ' + ' . $b . ' = ' . ($a + $b);
}

summa2(4, 10, true); // Эта строка не выводится
summa2(3, 13); // Эта строка выводится
br();
summa2(23, 12, false); //Эта строка тоже выводится
dash();


function um($s, $f, $r = false)
{
    if ($r) return ('Значение true = ') . ($s * $f);
    echo 's * f = ' . ($s * $f);
}

echo um(5, 5, !false) . '<br>';
um(2, 2);
br();

function getUm($a, $b)
{
    $umn = $a * $b;
    return $umn;
}

$umn = getUm(5, 5);
echo '$a * $b = ' . $umn;
dash();

function change($x)
{
    $x++;
}

$a = 5;
change($a);
echo $a . ' Параметр не меняется из за области видимости';
br();
function change2(&$x)
{
    $x++;
}

$a = 5;
change2($a);
echo $a . ' Параметр меняется из за &';

dash();

function summaA()
{
    $summa = 0;
    for ($i = 0; $i < func_num_args(); $i++) {
        $summa += func_get_arg($i);
    }
    return $summa;
}

echo summaA(5, 5, 5, 5, 50, 30, 20) . ' Сумма чисел параметров ';
br();
function summaB()
{
    $summa = 1;
    for ($i = 1; $i < func_num_args(); $i++) {
        $summa *= func_get_arg($i);
    }
    return $summa;
}

echo summaB(2, 2, 4, 4) . ' Умножаем параметры.';
dash();

function summaC()
{
    if (func_num_args() == 0) {
        echo 'Введите параметры!';
        return;
    };
    $summa = 0;
    for ($i = 0; $i < func_num_args(); $i++) {
        $summa += func_get_arg($i);
    }
    return $summa;
}

echo summaC();
dash();

function summaD()
{
    if (func_num_args() == 0) {
        echo 'Вы не ввели параметры';
        return;
    };
    $summa = 0;
    for ($i = 0; $i < func_num_args(); $i++) {
        $arg = func_get_arg($i);
        if (!is_numeric($arg)) {
            echo 'Параметр должен быть числом';
            return;
        }
        $summa += $arg;
    }
    return $summa . ' - Все параметры числа';
}

echo summaD();
br();
echo summaD('sd', 4);
br();
echo summaD(4, 3, 2, 54);
dash();


function di(int $a, int $b): int // Тип возвращаемого значения int
{
    return $a - $b;
}


echo di(10, 5);
br();
echo di(16.1, 5.8);



