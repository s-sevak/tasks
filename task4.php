<?php

/*
Задача 4: Вывод четных чисел
Напиши скрипт, который выводит все четные числа от 1 до 20, используя цикл while.
*/

$sum = 0;
$i = 0;

while ($i <= 20) {
    if ($i % 2 == 0) {
        $sum += $i;
    }
    $i++;
}
echo $sum;
