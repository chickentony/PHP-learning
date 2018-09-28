<?php

function houresCount($degrees) {
//    30 = 1 houre
//    15 = 30 min;

    $count = null;
    $res = null;
    $result = null;
    $min = null;
    $houers = null;
    $houerStr = '';
    $minStr = '';
//    if ($degrees === 0) {
//        return $result = '12 : 00 пока не прошло и минуты.';
//    }
//    else if ($degrees === 360) {
//        return $result = 'Прошло 12 часов.';
//    }
//    $degrees > 0 && $degrees <= 360

        //Получаем количество пройденных часов.
    $res = $degrees / 30;
    $houers = floor($res);
    //Получаем количество пройденных минут.
    $count = $res - floor($res);
    $min = $count * 60;
    if (($degrees % 30) === 0) {
        $min = '00';
    }
    if ($houers == 1) {
        $houerStr = 'час';
    }
    else if ($houers == 2 || $houers == 3 || $houers == 4) {
        $houerStr = 'часа';
    }
    else {
        $houerStr = 'часов';
    }


//    if ($min >= 2 && $min < 5 || $min > 21 && $min < 25 || $min > 31 && $min < 35 || $min > 41 && $min < 45 || $min > 51 && $min < 55) {
//    if ($min >= 2 && $min < 5 || $min > 21 && $min < 25 || $min > 31 && $min < 35 || $min > 41 && $min < 45 || $min > 51 && $min < 55) {
//        $minStr = 'минуты';
//    }
//    else if ($min > 4 && $min < 21 || $min > 24 && $min < 31 || $min > 34 && $min < 41 || $min > 44 && $min < 51 || $min > 54 && $min < 60) {
//        $minStr = 'минут';
//    }

    $result = "$houers $houerStr : $min $minStr";
    return $result;

}

 houresCount(161);

function declension ($number) {

    $someStr = (string)$number;
    $condition = $someStr[strlen($someStr) - 1];
//    var_dump($hourStr);
    if ($condition >= 2 && ) {

    }
}
