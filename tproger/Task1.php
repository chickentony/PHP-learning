<?php
//Задача 1
// Есть список a = [1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89].
// Выведите все элементы, которые меньше 5.

$a = [1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89];
$arrLength = count($a);

for ($i = 0;  $i < $arrLength; $i++) {
    if ($a[$i] < 5) {
        echo $a[$i];
    }
}