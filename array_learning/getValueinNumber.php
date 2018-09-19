<?php

//Вам нужно разработать программу, которая считала бы количество вхождений какой-нибуть выбранной вами цифры в выбранном вами числе.
//Например: цифра 5 в числе 442158755745 встречается 4 раза

function getValueInNumber($value, $number) {
    $id = 0;
    $arr = [];
    //Приведение чисел к строке
    $number = (string)$number;
    $value = (string)$value;
    //Преобразование строки с числами к массиву
    $arr = str_split($number);
    for($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] === $value) {
            $result = ++$id;
        }
    }

    return $result;
}
echo getValueinNumber(1, 1132);
