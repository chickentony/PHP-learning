<?php

//Работа светофора запрограммирована таким образом: с начала каждого часа, в течении трех минут горит зеленый сигнал, следующие две минуты горит красный, дальше в течении трех минут - зеленый и т. д.
// Вам нужно разработать программу, которая по введенному числу определяла какого цвета сейчас горит сигнал.

function trafficLight($number) {

    $res = '';
    if ($number >= 0) {
         $res = checkLight($number);
    }
    else {
        return 'Введены некорректные данные.';
    }
    return $res;
}

echo trafficLight(1009);

function checkLight($someNumber) {

    $result = (string)$someNumber;
    $condition = $result[strlen($result) - 1];
    $redLight = '';
    if ($someNumber == 0) {
        return 'Сейчас зеленый.';
    }
    if ($condition > 3 && $condition < 6 || $condition > 8 && $condition < 10 || $condition === 0) {
        return $redLight = 'Сейчас красный свет.';
    }
    else {
       return 'Сейчас зеленый свет.';
    }
}
