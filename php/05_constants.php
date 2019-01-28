<?php
	/**
	 * Created by PhpStorm.
	 * User: sergejcervakov
	 * Date: 25.10.2018
	 * Time: 15:19
	 */
	define('NAME', 'Привет меня зовут Сергей,');    //define — Определяет именованную константу
	echo NAME .'<br />';
	define('FML', 'Моя фамилия Червяков,');
	echo FML .'<br />';
	define('AGE', 'Мне 31 год.');
	echo AGE .'<br /><br />';
	define('JOB', 'Моя работа, php программист');
	echo JOB .'<br>';
	define('COLOR', '#AF0BBB'); //Зададим цвет
	echo COLOR.'<br>';
	echo '<font color='.COLOR.'>Hello</font>';
	echo ' Встроенные константы в PHP<br />';

	/* Встроенные константы в PHP */

	echo '<br />';
	echo __LINE__ .' - Номер строки'.'<br />'; //Выводим номер строки в файле.
	echo __FILE__.' - Полный путь.'.'<br />'; //Выводим место нахождения файла.
	echo __DIR__.' - Директория файла.'.'<br />'; //Директория файла.


	echo '<br />';
	echo 'Версия PHP - ' .PHP_VERSION .'<br />'; //Версия PHP