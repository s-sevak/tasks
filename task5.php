<?php

/*
Задача 5: Проверка на простоту
Создай программу, которая принимает число и проверяет, является ли оно простым.
Если число простое, выведи "Простое число", если нет — "Не простое число".
Используй цикл for и break.
*/

$a = 9;

if ($a > 1) {
    $prime = true;
} else {
    $prime = false;
}

for ($i = 2; $i < $a; $i++) {
    if ($a % $i == 0) {
        $prime = false;
        break;
    }
}

echo $prime ? "Простое число" : "Не простое число";
