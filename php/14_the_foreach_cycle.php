<?php
/**
 * Created by PhpStorm.
 * User: sergejcervakov
 * Date: 29/01/2019
 * Time: 13:41
 */

function dash()
{
    echo '<br>';
    for ($i = 0; $i < 5; $i++)
        echo ' --- --- --- ';
    echo '<br>';
}

function br()
{
    echo '<br>';
}

dash();


echo 'Заполняем массив с помощью for: <br>';
$number = [];
for ($i = 0; $i < 5; $i++) {
    $number[] += $i;
}
foreach ($number as &$value) {
    $value += 2;
    echo $value;
}
echo '<br>';
foreach ($number as $value) {
    $value += 2;
    echo $value;
}
echo '<br>';
foreach ($number as $value) {
    $value += 1;
    echo $value;
}
echo '<br>';
//unset($value);
foreach ($number as $value) {
    $value += 1;
    echo $value;
}
echo '<br>';
foreach ($number as $value) {
    $value += 1;
    echo $value;
}
echo '<br>';
foreach ($number as $value) {
    $value += 1;
    echo $value;
}
echo '<br>';
foreach ($number as $value) {
    echo $value;
}
echo '<br>';
foreach ($number as $value) {
    echo $value;
}
echo '<br>';
dash();


$age = [
    [
        'name' => 'Сергей',
        'surname' => 'Червяков',
        'age' => '32'
    ],
    [
        'name' => 'Варвара',
        'surname' => 'Хавронич',
        'age' => '28'
    ],
    [
        'name' => 'Иван',
        'sername' => 'Иванов',
        'age' => '23'
    ]
];

echo 'Выводим значение массива <br>';
foreach ($age as $value) {
    foreach ($value as $key => $name) {
        echo "$key - $name, ";
    }
    echo '<br>';
}
dash();

echo "<table border='1' cellpadding='3'>
  <tr>";
foreach ($age as $value) {
    foreach ($value as $name) {
        echo '<td>' . $name . '</td>';
    }
    echo '</tr>';
}
echo '</table>';
dash();

echo 'Заполняем массив и выводим его заняение<br>';
$arr = [];
for ($i = 0; $i < 20; $i++) {
    $arr[] = $i * 2;
}
foreach ($arr as $key => $value) {
    echo $value . ', ';
}
dash();

echo '<b>Заполняем №2</b><br>';
foreach ($arr as $value) {
    $value *= 3;
    echo $value . ', '; // Выводим готовый результат
}

dash();
echo '<b>Заполняем №3</b><br>Пример 1<br>';
foreach ($arr as $key => $value) {
    $arr[$key] = $value * 4; //
    echo $value . ', ';
}
echo '<br>';
foreach ($arr as $value) {
    echo $value . ', '; //
}
echo '<br>';
foreach ($arr as $value) {
    echo $value . ', '; //
}
echo '<br>';
foreach ($arr as $key => $value) {
    $arr[$key] = $value * 4;
}
foreach ($arr as $value) {
    echo $value . ', '; //
}
echo '<br>';
foreach ($arr as $value) {
    echo $value . ', '; //
}

echo '<br>Пример 2. Выводим сразу значения.<br>';
foreach ($arr as $value) {
    $value *= 4;
    echo $value . ', ';
}
echo '<br>';
foreach ($arr as &$value) {
    $value *= 4;
    echo $value . ', ';
}
echo '<br>';
foreach ($arr as $value) {
    $value *= 4;
    echo $value . ', ';
}
echo '<br>';
foreach ($arr as $value) {
    // $value *= 4;
    echo $value . ', ';
}
echo '<br>';
foreach ($arr as $value) {
    $value *= 4;
    echo $value . ', ';
}

dash();
echo '<b>Умножаем полученные результаты на 2 - 20 раз:</b><br>';
foreach ($arr as &$value) {
    $value *= 4; // Умножаем на 2 предидущий результат
}
foreach ($arr as $value) {
    echo $value . ', ';
}
echo '<br>';
foreach ($arr as &$value) {
    $value *= 4; // Умножаем на 2 предидущий результат
}
foreach ($arr as $value) {
    echo $value . ', ';
}
echo '<br>';
foreach ($arr as &$value) {
    $value *= 4; // Умножаем на 2 предидущий результат
}
foreach ($arr as $value) {
    echo $value . ', ';
}
echo '<br>';
foreach ($arr as &$value) {
    $value *= 4; // Умножаем на 2 предидущий результат
}
foreach ($arr as $value) {
    echo $value . ', ';
}
echo '<br>';
foreach ($arr as $value) {
    echo $value . ', ';
}
dash();


echo '<b>Перебор массива</b><br>';
$mas = [15, 16, 'hello', 'Строка'];
foreach ($mas as $key => $values) {
    echo "$key, $key = $values = $key, $key" . ', <br>';
}

$arr = ['Hello', 'World'];
foreach ($arr as $key => $value) {
    echo "$key - $value " . br();
}
br();
echo 'Выводим значения массива без ключей: <br>';
foreach ($arr as $value) {
    echo $value . ' ';
}
dash();

$job = [
    [
        'name' => 'Виктория',
        'age' => 31
    ],
    [
        'name' => 'Марго',
        'age' => 30
    ],
    [
        'name' => 'Светлана',
        'age' => 26
    ],
    [
        'name' => 'Анастасия',
        'age' => 21
    ],
    [
        'name' => 'Катерина',
        'age' => 18
    ]
];
echo '<b>Выводит значения массива с ключами</b><br>';
foreach ($job as $key => $value) {
    echo ' <i>' . $key . '</i> - ';
    foreach ($value as $keys => $d) {
        echo "<b>$keys</b> = $d ";
    }
    echo '<br />';
}
br();

echo '<table border="1" cellpadding="3"><tr>';
echo '<th>Имя</th><th>Лет</th></tr><tr>';
foreach ($job as $value) {
    foreach ($value as $item) {
        echo '<td>' . $item . '</td>';
    }
    echo '</tr>';
}
echo '</table>';
br();

foreach ($job as $key => $value) {
    $summa += $job[$key]['age'];
    $key++;
    $sr = $summa / $key;
}
if (($sr % 100 >= 11) && ($sr % 100 <= 19)) {
    $let = 'Лет';
} else {
    switch ($sr % 10) {
        case '1':
            $let = ' год';
            break;
        case 2:
        case 3:
        case 4:
            $let = ' года';
            break;

        default:
            $let = ' лет';
            break;
    }
}
echo 'Средний возраст сотрудников ' . $sr .$let;

dash();

$job = [
    [
        'name' => 'Иванова',
        'names' => 'Иванна',
        'namea' => 'Ивановна',
        'age' => 18
    ],
    [
        'name' => 'Червяков',
        'names' => 'Сергей',
        'namea' => 'Викторович',
        'age' => 32
    ],
    [
        'name' => 'Хавронич',
        'names' => 'Варвара',
        'namea' => 'Юрьевна',
        'age' => 29
    ],
    [
        'name' => 'Поворот',
        'names' => 'Анна',
        'namea' => 'Викторовна',
        'age' => 18
    ],
    [
        'name' => 'Дерн',
        'names' => 'Иван',
        'namea' => 'Сергеевич',
        'age' => 23
    ],
    [
        'name' => 'Шелковников',
        'names' => 'Павел',
        'namea' => 'Сергеевич',
        'age' => 48
    ]
];


$sum = 0;
foreach ($job as $key => $value) {
    $sum += $job[$key]['age'];
    $key++;
    $rez = $sum / $key;
}

if (($rez % 100 >= 11) && ($rez % 100 <= 19)) {
    $let = ' лет';
} else {
    switch ($rez % 10) {
        case '1':
            $let = ' год';
            break;
        case 2:
        case 3:
        case 4:
            $let = ' года';
            break;

        default:
            $let = ' лет';
            break;
    }
}
echo 'Средний возраст сотрудников ' . intval($rez) . ' ' . $let . '<br>';
echo '-------<br><br>';


echo '<table border=\'1\' cellpadding=\'3\'>';
echo '<tr>
    <th>№</th><th>Фамилия</th><th>Имя</th><th>Отчество</th><th>Лет</th>
    </tr>';
echo '<tr>';
foreach ($job as $key => $value) {
    echo ' <td>' . ($key + 1) . '</td>';
    foreach ($value as $d) {
        echo "<td>$d</td> ";
    }
    echo '</tr>';
}

echo '<tr>';

for ($q = 0; $q < count($value); $q++) echo '<td></td>';
echo '<td>' . intval($rez) . ' ' . $let . '</td>
    </tr>';
echo '</table><br>';

$arr = ['name' => 'Имя'];
echo "Выводим массив внутри строки <b>{$arr['name']}</b>";


