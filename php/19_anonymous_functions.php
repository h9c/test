<?php
/**
 * Created by PhpStorm.
 * User: sergejcervakov
 * Date: 08/01/2019
 * Time: 15:25
 */
    $hello = function ($string) {
        echo "$string test<br>";
    };
    $hello ('world, затем идет слово - ');

    $hellotwo = function ($string) {
        $a = 2;
        $b = 2;
        $c = $a * $b;
        echo "$string 2+2=<b>$c</b><br>";
    };
    $hellotwo ('World; ');
    $hellotwo ('');
    $hello ('');

    function test($a, $b) {
        $arr = [];
        for ($i = 0; $i < $a; $i++) {
            $arr[] = $b($i);
        }
        return $arr;
    }
    $arr = test(10, 2);
    echo $arr;