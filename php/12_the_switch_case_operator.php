<?php
/**
 * Created by PhpStorm.
 * User: sergejcervakov
 * Date: 22/01/2019
 * Time: 21:52
 */
$dash = function () {
    echo '<br>';
    for ($i = 0; $i < 5; $i++) echo ' --- --- --- ';
    echo '<br>';
};

echo "<form action=\"?number\" method=\"get\" title=\"Число\">
    <p>Введите любое число: <input type=\"text\" name=\"number\" placeholder=\" Число\"/><input type=\"submit\"/></p>
</form>";
$number = htmlspecialchars($_GET['number']);

$i = $number;
if (is_numeric($number)) :
switch ($i) :
    case 0:
        echo "i равно 0";
        break;
    case 1:
        echo "i равно 1";
        break;
    case 2:
        echo "i равно 2";
        break;
    default:
        echo 'Ваше число больше 2';
endswitch;
else: echo 'Вы ввели строку';
endif;
$dash ();

switch ($i) :
    case ($i < 10);
        echo 'i = '. $i.'; i < 10';
        break;
    case ($i > 10);
        echo 'i = '. $i.'; i > 10';
        break;
    default;
        echo 'Альтернативный вариант';
endswitch;
$dash ();

switch ($beer) :
    case 'tuborg';
    case 'carlsberg';
    case 'heineken';
        echo 'Хороший выбор';
        break;
    default;
        echo 'Пожалуйста, сделайте новый выбор...';
        break;
endswitch;;
$dash ();


$x = 2.5;
if (gettype($x) == "string") echo 'x - это строка';
elseif (gettype($x) == "integer") echo 'x - это целое число';
elseif (gettype($x) == "boolean") echo 'x - это boolean';
else echo 'x - это неизвестный тип';
echo '<br />';
switch (gettype($x)) {
    case "string":
        echo 'x - это строка';
        break;
    case "integer":
        echo 'x - это целое число';
        break;
    case "boolean":
        echo 'x - это boolean';
        break;
    default:
        echo 'x - это неизвестный тип';
}
echo '<br />';
$a = 2;
$b = 2;
switch ($a <=> $b) {
    case 0:
        echo "$b = $a";
        break;
    case 1:
        echo "$a > $b";
        break;
    case -1:
        echo "$a < $b";
}

echo '<br />';
switch (gettype($x)) :
    case "string":
        echo 'x - это строка';
        break;
    case "integer":
        echo 'x - это целое число';
        break;
    case "boolean":
        echo 'x - это boolean';
        break;
    default:
        echo 'x - это неизвестный тип';
endswitch;

$dash ();
echo "<form action=\"?number\" method=\"post\" title=\"Возраст и Имя\">
        <p>Ваше имя: <input type=\"text\" name=\"name\" placeholder=\" Сергей\"/></p>
        <p>Ваш возраст: <input type=\"text\" name=\"age\" placeholder=\" Лет\"/><input type=\"submit\"/></p>
    </form>";

$number = $_POST['number'] ?? false;

switch (isset($_POST['name'])):
    case 1:
        $name = htmlspecialchars($_POST['name']);
        switch (empty ($name)):
            case "0":
                switch (is_numeric($name)):
                    case "0":
                        echo 'Ваше имя  <b>' . $name . '</b> <br />';
                        break;
                    case "1":
                        echo 'Вы ввели число: <b>' . $name . '</b>, а хотелось бы увидеть тут буквы <br />';
                        break;
                endswitch;
                break;
            case "1":
                echo 'Вы не ввели ИМЯ <br />';
        endswitch;
        break;
    case 0:
        echo 'Введите свое ИМЯ.<br />';
        break;
endswitch;

switch (isset ($_POST['age'])):
    case 1:
        $age = htmlspecialchars($_POST['age']);
        switch (empty ($age)):
            case "0":
                switch (is_numeric($age)):
                    case "1":
                        echo 'Ваш возраст  <b>' . (int)$_POST['age'] . '</b> ';
                        if (($age % 100 >= 11) && ($age % 100 <= 19)) {
                            echo ' лет';
                        } else {
                            switch ($age % 10):
                                case 1:
                                    echo ' год';
                                    break;
                                case 2:
                                case 3:
                                case 4:
                                    echo ' года';
                                    break;
                                default:
                                    echo ' лет';
                            endswitch;
                        }
                        break;
                    case "0":
                        echo 'Вы ввели текст: <b>' . $age . '</b>, а хотелось бы увидеть тут цифры';
                        break;
                endswitch;
                break;
            case "1":
                echo 'Вы не ввели сколько вам лет';
        endswitch;
        break;
    case 0:
        echo 'Введите сколько вам лет. <br />';
        break;
endswitch;