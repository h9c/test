<?php
/**
 * Created by PhpStorm.
 * User: sergejcervakov
 * Date: 18/01/2019
 * Time: 16:27
 */

$dash = function () {
    for ($i = 0; $i < 5; $i++) echo ' --- --- --- ';
    echo '<br>';
};
$q = 1;
while ($q < 10) {  // Пока q меньше 10 выполняется.
    echo $q . ', ';
    $q++;
}
echo '<br>';
$dash ();

$e = 1;
do {
    $e++;
    echo $e . ', ';
} while ($e < 10);
echo '<br>';
$dash ();

$su = 0;
$p = 5;
$e = 0;
while ($e <= $p) {
    $su += $e;
    $e++;
}
echo 'Сумма чисел от 1 до ' . $p . ' равна ' . $su;
echo '<br>';
$dash ();

$x = 5; //Если будет больше 10 то цикл будет повторятся бесконечно
do {
    echo $x;
} while ($x > 10); //Если меньше десяти выполняется echo $x;
echo '<br>';
$dash ();

do {            // DO выполняется пока условие while истинное
    $x++;       // x = 5, в данном случае он увеличивается на 1.
    echo $x . ', ';
} while ($x < 10);
echo '<br>';

$dash ();

$i = 0;
while ($i < 10) :
    echo "$i<br />";
    $i++;
endwhile;
$dash ();

/* Нужно разобраться в этой теме */
echo 'Остаток от деления - ' . (10 % 2) . ' (результат нужен ниже) <br>'; // Остаток от деления

$u = 0;
$y = 14;

while ($u <= $y) {
    $summ += $u;
    $u++;
}
echo 'Результат суммы чисел: ' . $y . ' равна ' . $summ . '<br>';

$summa = 14;
$i = 0;
while ($summa % 2 == 0) {
    $pp = $i + $summa;
    $summa++;
    echo 'Остаток от деления выводит только когда <b>0</b> ';
}
echo ' Получаем - ' . $pp . '<br />';
$dash ();

$num = 10;
$sum = 0;
if ($num >= 10 && $num <= 20) {
    echo "<b>Четные числа от $num до 20:</b> ";
    do {
        if ($num % 2 == 0) {
            echo $num . ' ';
            $sum += $num;
        }
        $num++;
    } while ($num <= 20);

    echo "<br><b>Cумма четных чисел из заданного диапазона равна:</b> " . $sum . '<br>';
} else {
    echo "Число должно быть больше 10 и не более 20";
}
$dash ();


$a = 2;            // Пробуем альтернативный синтаксис
$b = 0;
if ($a >= 0 && $a <= 20) :
    echo 'Выводим четные числа ';
    do {
        if ($a % 2 == 0) :
            echo $a . ' ';
            $b += $a;
        endif;
        $a++;
    } while ($a <= 20);
    echo 'Конец<br>';
else: echo 'Если нет то нет<br>';
endif;
$dash ();

$a = 100;
$b = 0;
if ($a >= 0 && $a <= 100) :
    echo 'Обратно ';
    do {
        if ($a % 2 == 0) :
            echo $a . ' ';
            $b += $a;
        endif;
        $a--;
    } while ($a >= 50);
    echo 'Конец';
else: echo 'не сработало';
endif;
$dash ();

echo " <form action=\"?number\" method=\"get\" title=\"Возраст и Имя\">
    <p>Введите число: <input type=\"text\" name=\"number\" placeholder=\" от 0 до 100\"/><input title=\"Отправить\" type=\"submit\"/></p>
</form>";
$number = htmlspecialchars($_GET['number']);
echo 'Число которое Вы ввели: <b>' . $number . '</b><br>';
$dash ();
$b = 0;
if (is_numeric($number)) :
    if ($number >= -100 && $number <= 100) :
        echo 'Четные числа от ' .$number. ': ';
        do {
            if ($number % 2 == 0) :
                echo $number . ', ';
                $b += $number;
            endif;
            $number++;
        } while ($number <= 100);
        echo '. ';
    else: echo 'Не сработало т.к. Вы ввели ' . $number . ' попробуйте ввести число от 0 до 100';
    endif;
else: echo 'Вы пытаетесь ввести текст';
endif;