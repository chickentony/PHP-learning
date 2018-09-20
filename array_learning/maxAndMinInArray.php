<?php

 // Ваше задание — создать массив, наполнить его случайными значениями (можно использовать функцию rand),
//  найти максимальное и минимальное значение массива и поменять их местами.
 
$arr = [];
//Наполняем пустой массив случанйми значениями.
if (is_array($arr)) {
for($i = 0; $i <= 10; $i++) {
        array_push($arr, rand(100, 1000));
    }
}
print_r($arr);
echo "<br>";
//Счетчики для индексов.
$max = null;
$min = null;
//Максимальное значение.
$maxValue = $arr[0];
//Минимальное значение.
$minValue = $arr[0];
for($i = 1; $i <= 10; $i++) {
    
    if ($arr[$i] > $maxValue) {
        $max = $i;
        $maxValue = $arr[$i];
    }
    if ($arr[$i] < $minValue) {
        $min = $i;
        $minValue = $arr[$i];
    }
}
$arr[$max] = $minValue;
$arr[$min] = $maxValue;
print_r($arr);
