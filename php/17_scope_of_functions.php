<?php
/**
 * Created by PhpStorm.
 * User: sergejcervakov
 * Date: 01/02/2019
 * Time: 16:18
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
$x = 4;
function test($x)
{
    $x++;
    echo $x;
}

test(10); // Выводит 11, $x В данном случае это локальная переменная
br();
echo $x; // Выводит 4
dash();

$x = 14;
function testi()
{
    global $x;
    $x++;
    echo $x;
}

echo testi();
br();
echo $x;
dash();

function testGlobals()
{
    $GLOBALS['x']++;
}

testGlobals();
echo $x;
dash();

foreach ($GLOBALS as $key => $value) {
    if (is_array($value)) continue;
    echo "$key, $value <br>";
}
dash();

function test3()
{
    static $a = 0;
    $a++;
    return $a;
}

echo test3() . '<br>';
echo test3() . '<br>';
echo test3() . '<br>';
echo test3();

dash();

$a = 2;
$b = 4;
$c = 7;
function test4()
{
    $d = $GLOBALS['a'] * $GLOBALS['b'];
    global $a, $b, $c;
    echo 'Умножаем используя глобальную переменную GLOBALS. Результат: ' . $a . ' * ' . $b . ' = ' . $d . ' Так же тут выводим переменную $c = ' . $c;

}
test4();