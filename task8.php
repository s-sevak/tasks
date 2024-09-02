<?php

/*
Задача 8: Калькулятор
Создай простой калькулятор, который принимает два числа и оператор (+, -, *, /)
и выполняет соответствующую операцию, используя switch.
*/

$num1 = 1;
$num2 = 0;
$operator = '/';
$result = null;

switch ($operator) {
    case '+':
        $result = $num1 + $num2;
        break;
    case '*':
        $result = $num1 * $num2;
        break;
    case '-':
        $result = $num1 - $num2;
        break;
    case '/':
        if ($num2 != 0) {
            $result = $num1 / $num2;
        } else {
            exit('Деление на ноль');
//            echo 'деление на ноль';
//            exit;
        }
        break;
    default:
        exit($operator . '? что это?');
//        echo $operator . '? что это?';
//        exit;
}

echo $result;
