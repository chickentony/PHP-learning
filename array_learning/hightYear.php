<?php
//Вам нужно разработать программу, которая проверяла бы введенное пользователем число (год, является ли она високосным).
// Число может быть в диапазоне от 1 до 9999.

function hightYear($number) {
    $result = '';
    if ($number < 100 && $number > 0) {
        if (($number % 4) === 0) {
            $result = 'Год является високосным.';
        }
        else {
            $result = 'Год не високсный.';
        }
    }
    else if ($number > 0) {
        $yearArr = (string)$number;
        //Находим последний и предпоследний элементы и создаем из них число, далее проверям делится ли оно без остатка на 4, это и будет наш високосный год.
        $lastButOneEl = $yearArr[strlen($yearArr) - 2];
        $lastEl = $yearArr[strlen($yearArr) - 1];
        $twoLastElements = $lastButOneEl . $lastEl;
        //Вычесляем високосный ли год.
        if (($twoLastElements % 4) === 0) {
            $result = 'Год является високсным.';
        }
        else {
            $result = 'Год не високосный.';
        }
    }
    //Кейс когда год от 1 до 100.
    else if ($number === 0 || $number <= 0 || is_string($number)) {
        $result = 'Введены некорректные данные.';
    }

    return $result;
}

echo hightYear(2014);
?>
