<?php
	/**
	 * Created by PhpStorm.
	 * User: sergejcervakov
	 * Date: 25.10.2018
	 * Time: 13:23
	 */
	$a = 5;
	$b = & $a;
	$a = 2;
	echo 'Переменная $b = $a '.$b.'<br>';
	echo 'К переменной $b прибавим 10 = '.($b += 10).' <br>';
	echo 'Зададим жесткю ссылку на $t и $e <br />';
	$t = 'Указываем оператор $e, а выводит все равно $t';
	$e =& $t;
	echo $e .'<br />';

	echo 'Сейчас $b или $a равно ' .$b .' и '.$a .'<br />';
	echo '"Забудим" $a ))), т.к. $a ссылается на $b то достаточно стереть из памяти $a или $b <br /><br />';
	unset($a);
	$a = 1;
	$b = 2;
	echo 'Теперь $a = ' .$a .' а $b = '.$b .';';
	echo '<br />';
	echo '<br /><br />';
	echo 'Файл для портфолио. Червяков Сергей Викторович<br /><br />';

	/* Символические ссылки */
	$a = 3;
	$b = 'a'; // т.к $b = 'a' то $a будет равно 3
	echo 'Символичекские ссылки <br /> $a = ' .$a .'<br /> $b = \'a\' //тут мы ссылаемся на переменную $a<br />';
	echo 'Выводим: '.$$b .' //echo $$b; Строкавая переменная которая содержит имя другой переменной ($$)<br /><br />';
	echo 'Поменяем занчение переменной $$b на 10 <br />$$b = 10; //сли $b = a, то $a будет равен 10<br />';
	$$b = 10;// Если $b = a, то $a будет равен 10
	echo 'Выводим: $a = '.$a;




