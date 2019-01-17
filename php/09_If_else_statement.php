<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: sergejcervakov
 * Date: 14/01/2019
 * Time: 11:39
 */
$dash = function () {
    for ($i = 0; $i < 5; $i++) echo ' --- --- --- ';
    echo '<br>';
};
$dash ();
?>

<?php


$num1 = $_GET['num1'] ?? false;
$num2 = $_GET['num2'] ?? false;
if (($num1 == false) && ($num2 == false)) {
    $num1 = 5;
    $num2 = 2;
    $zn = ' + ';
    $num3 = $num1 + $num2;
} elseif (($num1 == true) && ($num2 == true)) {
    $num3 = $num1 + $num2;
    $zn = ' + ';
} elseif (($num1 == true) && ($num2 == false)) {
    $num2 = 2;
    $num3 = $num1 + $num2;
    $zn = ' + ';
}
elseif (($num1 == false) && ($num2 == true)) {
    $num1 = 5;
    $num3 = $num1 + $num2;
    $zn = ' + ';
}


echo "<form action=\"?calculator\" method=\"get\" title=\"Калькулятор\">
    <p>Задайте параметры <input type=\"text\" name=\"num1\" placeholder=\" Число по умолчанию $num1\"/>
        $zn <input type=\"text\" name=\"num2\" placeholder=\" Число по умолчанию $num2\"/><input type=\"submit\"/> =  $num3</p>
</form>";




$dash ();
?>


<form action="?number_1" method="post" title="Число">
    <p>Число №1 (POST): <input type="text" name="number_01" placeholder=" Число №1"/><input type="submit"/><br><i>Данные
            на сервер посылаются в запросе браузера</i></p>
</form>
<?php
$dash ();
$number01 = htmlspecialchars($_POST['number_01']);
echo 'Число которое Вы ввели: <b>' . $number01 . '</b><br>';
$dash ();

?>
<form action="?number_2" method="get" title="Число 2">
    <p>Число №2 (GET): <input type="text" name="number_02" placeholder=" Число №2"/></p>
    <p>Число №3 (GET): <input type="text" name="number_03" placeholder=" Число №3"><input type="submit"><br><i>Введеные
            данные видны в адресной строке</i></p>
</form>
<?php
$number02 = htmlspecialchars($_GET['number_02']); //Подготавливаем для вывода значения из формы
$number03 = htmlspecialchars($_GET['number_03']);
echo 'Число которое Вы ввели в строке №2 : <b>' . $number02 . '</b><br>';
echo 'Число которое Вы ввели в строке №3 : <b>' . $number03 . '</b><br>';
$dash ();
if ($number02 < 5) echo 'Число из строки №2 меньше <b>5</b><br>';
else echo 'Введенное число из строки №2 больше <b>5</b><br>';
if ($number02 < 10) echo 'Число из строки №2 меньше <b>10</b><br>';
else echo 'Введеное число из строки №2 больше <b>10</b><br>';
$dash ();

echo 'Введите числа в строку №2 и №3<br>'; // Пример для логического оператора или
echo 'Вы ввели №2 - ' . $number02 . ' и число №3 - ' . $number03 . '<br>';
if ($number02 > $number03) echo 'Число №2 больше числа №3<br>';
else echo 'Число №3 больше числа №2<br>';
$dash ();
if ($number02 < $number03 || $number02 == $number03) echo 'Истина если: №2 меньше №3 или №2 равен №3'; // Сравниваем
else echo 'Ложь если: №2 больше №3 и Они не равны';
echo '<br>';
$dash ();

$a = 5; // далее пример для ввывода оп умолчанию значения в строке №3
$b = 3;
$test = '"Параметр введен вручную"';
if (empty($_GET['number_03'])) {
    $test = $a + $b;
    echo 'Переменные заданы по умолчанию для строки №3 как: ' . $test . '<br>';
} elseif ($number03) echo 'Выводим переменную которую мы задали №3 = ' . $number03 . '<br>';
echo 'Теперь по умолчанию для формы в строке №3 задана - ' . $test . '<br>';
$dash ();

$p = 7;
if ($p < 10) echo 'p меньше 10';
else echo 'p больше или равен 10';
echo '<br>';

$test3 = $_GET['number_03'] ?? false; // Упрощеный вариантнаписания
if ($test3 == false) {
    echo 'В строке №3 не задан параметр, задайте его<br>';
} else echo $test3 . ' - этот параметр был задан вручную в строке №3<br>';
$dash ();

$test3 = $_GET['number_03'] ?? false;
if ($test3 == false) {
    $test3 = 23;
    echo $test3 . ' - по умолчанию задан этот параметр если Вы не ввели в строку №3 число';
} else echo $test3 . ' - вы ввели это число вручную';


if (isset($_GET['com'])) $com = htmlspecialchars($_GET['com']);
else $com = false;
echo $com;
echo '<br>';
$dash ();

$com = $_GET['com'] ?? false;
echo '<br>';
if ($com == 'add') {
    $summa = $a + $b;
    echo "$a + $b = $summa";
} elseif ($com == 'mult') {
    $mult = $a * $b;
    echo "$a * $b = $mult";
} elseif ($com) echo 'Неизвестная операция!';

?>
<div>
    <a href="?com=add">Сложить</a>
    <a href="?com=mult">Перемножить</a>
</div>
<?php


$dash ();
$hello = 'Привет мир, переменная задана и поэтому мы ее выводим <br /><br />';
if (isset($a)) echo 'Переменная не задана, ее нет <br /><br />';
else echo $hello;

$a = 11;
$b = 10;
$c = 20;
if (($a + 5) > $b) {
    $a++;
    echo 'это $a = ' . $a . ' a > b но на самом деле $a - 11<br /><br />';
} elseif ($a < $b) echo 'a < b <br /><br />';
else echo 'Просто все сломалось И не нашлось решения <br />';

$qw = $a < $b;
$qe = $a == $b;
echo 'a = ' . $a . '<br />b = ' . $b . '<br />';
if ($qw) echo 'a < b<br /><br />';
elseif ($qe) echo 'a = b<br /><br />';
else echo 'a > b<br /><br />';

if ($a < $b || !($a > $b)) echo 'Истина<br /><br />';
else echo 'Первое значение false второе true, но второе отрицане, значит false<br /><br />';

if ($a < $b || $a > $b) echo 'Истина<br /><br />';
else echo 'Первое значение false второе true<br /><br />';

if (!($a < $b) && $a > $b) echo 'Истина<br /><br />';
else echo 'ssss<br /><br />';

if (!($a < $b) xor $a > $b) echo 'Истина<br /><br />';
else echo 'Ложь<br /><br />';

$q = 5;
echo $q++ . '<br />' . $q . '<br />' . ++$q . '<br />' . $q . '<br /><br />';


$img = $_GET['img'] ?? false;

if ($img == 'full') echo '<img src="https://pp.userapi.com/c836429/v836429454/35370/w8Tmme62q4Q.jpg" width="320"  alt=""/>';
elseif ($img == 'smol') echo '<img src="https://pp.userapi.com/c836429/v836429454/35370/w8Tmme62q4Q.jpg" width="120"  alt=""/>';
elseif ($img) echo 'Неизвестно';
?>


<div>
    <a href="?img=smol">Маленькая картинка</a>
    <a href="?img=full">Большая картинка</a><br/><br/>
</div>


</body>
</html>








