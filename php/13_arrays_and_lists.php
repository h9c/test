<?php
/**
 * Created by PhpStorm.
 * User: sergejcervakov
 * Date: 25/01/2019
 * Time: 15:03
 */
$dash = function () {
    echo '<br>';
    for ($i = 0; $i < 5; $i++) echo ' --- --- --- ';
    echo '<br>';
};

echo '<br><b>Выводим значение массива, уазав его номер вручную:</b><br>';
$arrays = ['Первый', 'Второй', 'Третий', 'Четвертый', 3, 4];
echo $arrays[3] . '<br>';
echo $arrays[0] . '<br>';
echo $arrays[5];
$dash ();

echo '<b>Перечислем все значения массива с помощью for:</b><br>';
$list = ['Год', 'Город', 'Село', 'Страна'];
for ($i = 0; $i < count($list); $i++)
    echo $list[$i] . ', ';
$dash ();

echo '<b>Перечислем все значения массива с помощью for:</b><br>';
for ($i = 0; $i < count($arrays); $i++)
    echo $arrays[$i] . ', ';
$dash ();

$arraysd = ['Первый', 'Второй', 'Третий', 'open', 3, 4];
for ($i = 0; $i < count($arraysd); $i++) //count считает кол.о эл. массива
    echo $arraysd[$i] . ', ';
$dash ();

$a = ['1 первый', 2, 3, 4, 5, '6 шестой'];

echo count($a) . ' - количество элиментов в массиве <br>';
$as = count($a);
--$as;
echo $as . ' - Количество элиментов в массиве от 0 до ' . $as . '<br>';

for ($i = 0; $i < count($a); $i++)
    echo $a[$i] . ', ';
echo 'Просто выводим массив<br>';


for ($i = 0; $i <= count($a); $i++)
    switch ($i) :
        case 0:
            echo $a[0] . ', ';
            break;
        case ($i < $as):
            echo $a[$i] . ', ';
            break;
        case ($i <= $as):
            echo '<b>' . $a[$as] . '</b>. (Тут ТОЧКА) ';
            break;
    endswitch;
echo 'Выводим массив с помощью <b>switch</b> чередуем значения запятой и в конце ставим точку<br>';


for ($i = 0; $i <= count($a); $i++)
    if ($i < $as) :
        echo $a[$i] . ', ';
    elseif ($i <= $as) :
        echo '<b>' . $a[$as] . '</b>. (Тут ТОЧКА) ';
    endif;
echo 'Выводим массив с помощью <b>if elseif</b>, чередуем значения запятой и в конце ставим точку<br>';

do {
    for ($i = 0; $i <= $as; $i++)
        echo '<b>' . $a[$i] . '</b>, ';
} while ($i <= $as);
echo ' Выводим массив с помощью <b>do while</b>.';
$dash ();

echo '<b>Выводиим значения массива №1:</b><br>';
$name = ['name' => 'Michael', 'age' => '21', 'job' => 'teacher'];
echo 'Имя - ' . $name['name'] . '<br> Возраст - ' . $name['age'] . '<br> Профессия - ' . $name['job'] . '';
$dash ();

echo 'Выводим второй раз значения массива №2.<br>';
$age = ['age' => '32', 'job' => 'Работа', 'name' => 'Сергей', 'surname' => 'Червяков'];
echo 'Мое имя ' . $age['name'] . ', а фамилия ' . $age['surname'] . '. Мой возраст ' . $age['age'] . ' года.';
$dash ();

echo '<b>Выводиим значения массива в ручную:</b><br>';
$agei = [['Сергей,', 'Мое имя ', 39, 34], ['Червяков.', 23, ' а фамилия ', 32], [' Мой возраст ', ' Червяков.'], [' года.']];
echo $agei[0][1] . $agei[0][0] . $agei[1][2] . $agei[1][0] . $agei[2][0] . $agei[1][3] . $agei[3][0];
$dash ();

echo '<b>Выводиим все значения массива с помощью for:</b><br>';
for ($i = 0; $i < count($agei); $i++) {
    for ($w = 0; $w < count($agei[$i]); $w++)
        echo $agei[$i][$w] . ' ';
}
$dash ();

/* Двумерный массив */
$models = [
    [
        'name' => 'Milana',
        'age' => '26',
        'job' => 'teacher'
    ],
    [
        'name' => 'Susan',
        'age' => '25',
        'job' => 'barbershop'
    ],
    [
        'name' => 'Marta',
        'age' => '18',
        'job' => 'student'
    ]
];
echo '<b>Выводим вручную значение двумерного массива:</b><br>';
echo 'Имя - ' . $models[1]['name'] . '<br>Возраст - ' . $models[1]['age'] . '<br>Профессия - ' . $models[1]['job'] . '<br>';

echo 'Выводим все значения массива $models<br>';
for ($i = 0; $i < count($models); $i++)
    foreach ($models[$i] as $key => $value) {
        echo $value . ', ';
    }
$dash ();


echo '<b>Выводим сумму всех элементов массива:</b><br>';
$s = 0;
$sum = [6, 1, 1, 1, 1, 1];
echo 'Вывожу первое число из массива: ' . $sum[0] . '<br>';
echo 'Вывожу все числа массива: ';
for ($i = 0; $i < count($sum); $i++)
    echo $sum[$i] . ',';
echo '<br>';

for ($e = 0; $e < count($sum); $e++)
    $s += $sum[$e];
echo 'Сумма всех элементов массива равна: <b>' . $s . '</b>';
$dash ();

$number = [3, 3, 5, 3, 3, 2, 5, 3];
echo 'Элиментов в массиве - ' . count($number) . '<br>';
for ($i = 0; $i < count($number); $i++)
    $su += $number[$i];
echo 'Сумма чисел массива $number ' . $su.'<br>';
echo 'Выводим все элименты массива - ';
for ($i = 0; $i < count($number); $i++)
    echo $number[$i].', ';
$dash ();

echo '<b>Сумма чисел массива:</b><br>';
$q = 0;
$w = 0;
$sums = [5, 5, 1, 1, 5];
echo 'Вывожу все числа массива: ';
for ($i = 0; $i < count($sums); $i++)
    echo $sums[$i] . ',';
echo '<br>';

while ($w <= count($sums)) {
    $q += $sums[$w];
    $w++;
}
echo 'Сумма чисел от 1 до ' . count($sums) . ' равна ' . $q;
$dash ();


/* Массив Названия цветов, стоимости и колличества в таблице */
$flowers = [
    [
        'name' => 'Цветы',
        "price" => 'Цена',
        "amount" => 'Количество'
    ],
    [
        'name' => 'розы',
        "price" => 100,
        "amount" => 15
    ],
    [
        'name' => "тюльпаны",
        "price" => 60,
        "amount" => 25
    ],
    [
        'name' => "орхидеи",
        "price" => 180,
        "amount" => 7
    ]
];
$a = 1;
echo 'Маленькая таблица<br>';
echo '<table border=\'1\' cellpadding=\'3\'>
        <tr>';
for ($th = 1; $th < 4; $th++) {
    echo '<th>Столбец № ' . $th . '</th>';
}
echo '</tr>';

for ($row = 0; $row < 4; $row++) {
    echo '<tr>';
    foreach ($flowers[$row] as $key => $value) {
        echo '<td style="text-align: center">' . $value . '</td>';
    }
    echo '</tr>';
}
echo '</table>';
$dash ();

// Подсчитать колонки и автоматически их выводить
// Автоматически заполнить таблицу




echo 'Большая таблица сотрудников<br>';
/* МАССИВ С ПОМОЩЬЮ ПЕРЕМЕННЫХ */
// массивы с данными на работников предприятия
$aa = ['Александр', 'Новиков', '35', 'ул. Новоясеневский проспект д. 7', '125-89-63'];
$ab = ['Алексей', 'Бодров', '28', 'ул. Астраханская д. 45', '256-89-63'];
$ac = ['Николай', 'Хмельницкий', '28', 'ул. Боровицкая д. 25', '100-89-63'];
$ad = ['Вася', 'Нестеров', '44', 'ул. Каховка д. 11', '330-80-63'];
$ae = ['Олег', 'Нестеров', '44', 'ул. Каховка д. 11', '330-80-63'];
$af = ['Петя', 'Нестеров', '44', 'ул. Каховка д. 11', '330-80-63'];
// двумерный массив с данными о сотрудниках
$ds = [$aa, $ab, $ac, $ad, $ae, $af];

echo '<table border=\'1\' cellpadding=\'2\'>
        <tr>
            <th>Имя</th><th>Фамилия</th><th>Возраст</th><th>Адрес</th><th>Телефон</th>
        </tr>';
for ($i = 0; $i < count($ds); $i++) {
    $summa = count($ds[$i]);
    echo '<tr>';
    for ($q = 0; $q < $summa; $q++) {
        echo '<td>' . $ds[$i][$q] . '</td>';
    }
    echo '</tr>';
}
echo '</table>';
echo '<br><br>'; //КОНЕЦ