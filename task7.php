<?php

/*
Задача 7: Перебор массива
Создай массив с несколькими числами и напиши скрипт, который находит и выводит
наибольшее число в этом массиве, используя цикл foreach.
*/

$arr = [53, 5, 1, 2, 3];
$maxNumber = $arr[0];

foreach ($arr as $v) {
    if ($v > $maxNumber) {
        $maxNumber = $v;
    }
}
echo $maxNumber . "\n";
$maxNumber2 = max($arr);
echo $maxNumber2;
