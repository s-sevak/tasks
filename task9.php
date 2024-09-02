<?php

/*
Задача 9: Фильтрация массива
Напиши скрипт, который удаляет все отрицательные числа из массива.
Используй цикл foreach и continue.
*/

$arr = [-1, 2, 3, -8, 3, -1];

foreach ($arr as $key => $value) {
    if ($value < 0) {
        unset($arr[$key]);
    }
}
print_r($arr);
