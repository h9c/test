<?php
	/**
	 * Created by PhpStorm.
	 * User: sergejcervakov
	 * Date: 25.10.2018
	 * Time: 10:40
	 */
	$a = 10;
	$b = 12;
	$c = 'Переменная строка';
	if (isset($a)) {
		echo 'Эта переменная существует поэтому выводится этот текст<br>';
	}
	echo 'Проверям существует ли переменная - '.isset($var).'- Переменной <b>$var</b> - нет, поэтому в начале пусто<br>';
	$var = 3;
	echo 'Зададим переменную <b>$var</b> = '.$var.'<br>';
	echo 'Проверим тип переменной <b>$var</b> - '.gettype($var).' - В пременной задано число<br>';
	echo 'Проверим тип переменной <b>$c</b> - '.gettype($c).' - Это строка<br>';
	$c = (double) $c;
	echo 'Меняем тип переменной на - '.gettype($c).'<br>';
	$c = 'Hello World';
	echo is_string($c).' - Выводит<b> 1</b><br>';
	echo ((int)$c).' - Пытались преобразовать строку в целый тип<br>';
	echo is_numeric($c).' - Ничего, $c это строка<br>';
	echo is_numeric($b).' - проверка показала что переменная число '.$b.'<br>';
	$str = '1234';
	echo 'Проверяем тип переменной $str - '.gettype($str).'<br>';
	$str = (int)$str;
	echo 'Проверяем тип переменной <b>$str</b> - '.gettype($str).' - тип переменной изменен <br>';
	echo is_numeric($str).' переменная число - выводит <b>1</b><br>';

	$d = 5;
	$v = 0;
	echo 'Проверяем существует ли переменная - <b>'.isset($d).'</b> - да(1)<br>';
	echo 'Проверяем, заполнена переменная $d - '.empty($d).'<br>';
	echo 'Проверяем, заполнена переменная $v - <b>'.empty($v).'</b> - Не заполнена(1)<br>';
	unset($d);
	echo 'Переменную $d - стерли из памяти '.isset($d).'<br>';
	$d = 9;
	echo 'Создаем переменную $d - '.$d;
