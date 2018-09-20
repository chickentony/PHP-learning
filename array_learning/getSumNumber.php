<?php

function getSumNumber($number) {
    $arr = [];
    $result = 0;
    if ($number === '') {
        echo 'Данные некорректны';
    }
    else {
        $arr = str_split($number);

        //Решение с помощью встроенной функции.
        //return array_sum($arr);

        for ($i = 0; $i < count($arr); $i++) {
            $result += $arr[$i];
        }
        return $result;
    }

}

echo getSumNumber(123);
