<?php
/**
 * Created by PhpStorm.
 * User: sergejcervakov
 * Date: 18/01/2019
 * Time: 13:48
 */
$dash = function () {
    for ($i = 0; $i < 5; $i++) echo ' --- --- ---';
    echo '<br>';
};

for ($i = 0; $i <= 5; $i++) echo $i . ', ';
echo '<br>';
$dash ();

for ($i = 0; $i < 10; $i++) echo 'Привет, ';
echo 'Мы вывели слово "Привет" 10 раз<br>';
$dash ();

for ($i = 1698; $i >= 0; $i -= 43) echo $i . ', ';
echo '<br>';
$dash ();

for ($i = 0; $i < 1234; $i += 34) echo $i . ', ';
echo '<br>';
$dash ();

for ($i = 0; $i < 100; $i += 5) {
    if ($i == 95) echo $i . '.<br>';
    else echo $i . ', ';
};
$dash ();

for ($i = 0; ; $i += 5) {
    if ($i == 95) {
        echo $i . '.<br>';
        break;
    }
    echo $i . ', ';
};
$dash ();

for ($i = 1; $i <= 20; $i++) : // Альтернативный синтаксис for
    $w += $i;
endfor;
echo 'Альтернативный синтаксис for '.$w.'<br>';
$dash ();

for ($i = 1; $i <= 15; $i++) {
    $s += $i;
}
echo 'Сумма чисел от 1 до 15 равна = '.$s.'<br>';
$dash ();

define('HI', 'Привет.<br />'); // Используем константы
define('HIDOT', 'Привет, ');
$a = 0;
$b = 4;
$c = --$b;
for ($pri = $a; $pri <= $b; $pri++) {
    if ($pri < $b) echo HIDOT;
    elseif ($pri == $c) echo HI;
};
$dash ();

$um = 0;
$v = 3;
for ($q = 0; $q <= $v; $q++) {
    $um += $q;
    echo $um . ', ';
};
echo "<br />Сумма чисел от 1 до $v равна $um<br />";
$dash ();

for ($h = 1; $h < 10; $h++) {
    if ($h == 4) continue;
    echo $h . ', ';
    if ($h == 6) break;
}
echo '<br />';
$dash ();