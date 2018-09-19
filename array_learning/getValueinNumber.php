<?php

//Вам нужно разработать программу, которая считала бы количество вхождений какой-нибуть выбранной вами цифры в выбранном вами числе.
//Например: цифра 5 в числе 442158755745 встречается 4 раза

function getValueInNumber($value, $number) {
    $count = 0;
    $arr = [];
    $result = 0;
    //Приведение чисел к строке
    $number = (string)$number;
    $value = (string)$value;
    //Преобразование строки с числами к массиву
    $arr = str_split($number);
    for($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] === $value) {
            $result = ++$count;
        }
    }

    return $result;
}
echo getValueInNumber(5, 1132);
