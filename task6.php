<?php

/*
Задача 6: Числа Фибоначчи
Напиши скрипт, который выводит первые 10 чисел Фибоначчи, используя цикл do-while.
*/

$i = 2;
$result = [0, 1];

do {
    $result[$i] = $result[$i - 2] + $result[$i - 1];
    $i++;
} while ($i < 10);

print_r($result);
