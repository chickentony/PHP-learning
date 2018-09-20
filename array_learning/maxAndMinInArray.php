<?php
/**
 * Created by PhpStorm.
 * User: mirolyubov
 * Date: 18.09.18
 * Time: 16:29
 */

$arr = [];

for($i = 0; $i <= 10; $i++) {
        array_push($arr, rand(100, 10000));
    }

print_r($arr);
echo "<br>";


//for($i = 0; $i < count($arr); $i++) {
//    $min = min($arr);
//    $max = max($arr);
//
//}
//var_dump($min);
//var_dump($max);
$max = 0;
$maxValue = $arr[0];
$min = 0;
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
//var_dump($max, $maxValue);
echo "<br>";
//var_dump($min, $minValue);<?php
/**
 * Created by PhpStorm.
 * User: mirolyubov
 * Date: 18.09.18
 * Time: 16:29
 */

$arr = [];

for($i = 0; $i <= 10; $i++) {
        array_push($arr, rand(100, 10000));
    }

print_r($arr);
echo "<br>";


//for($i = 0; $i < count($arr); $i++) {
//    $min = min($arr);
//    $max = max($arr);
//
//}
//var_dump($min);
//var_dump($max);
$max = 0;
$maxValue = $arr[0];
$min = 0;
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
//var_dump($max, $maxValue);
echo "<br>";
//var_dump($min, $minValue);
