<?php
/*
Разработайте программу, которая определяла количество прошедших часов по введенным пользователем градусах. Введенное число может быть от 0 до 360.
*/

function hoursCount($degrees) {
//    30 градусов = 1 час
//    15 градусов = 30 минут;
    $residue = null;
    $res = null;
    $result = null;
    $min = null;
    $hours = null;
    $minutes = '';
    $hour = '';

    //Получаем количество пройденных часов.
    $res = $degrees / 30;
    $hours = floor($res);
    //Получаем количество пройденных минут.
    $residue = $res - floor($res);
    $min = $residue * 60;
    //В переменную передаем слова "минуты", в правильном склонении. 
    $minutes = declensionMinutes($min);
    $hour = declensionHours($hours);
    $result = "$hours $hour : $min $minutes.";
    return $result;
}

 echo hoursCount(340);

//Функция для склонения минут.
function declensionMinutes($minNumber) {
    $minStr = '';
    $someStr = (string)$minNumber;
    $condition = $someStr[strlen($someStr) - 1];

    if ($condition >= 2 && $condition < 5) {
        return $minStr = 'минуты';
    }
    else if ($condition >= 5 && $condition <= 9 || $condition == 0) {
        return $minStr = 'минут';
    }
    else if ($condition == 1) {
        return $minStr = 'минута';
    }
}

//Функция для склонения часов.
function declensionHours($hourNumber) {
    $hourStr = '';
    $someString = (string)$hourNumber;
    if (strlen($someString) === 1) {
        $hourCondition = $someString[0];

        if ($hourCondition == 1) {
            return $hourStr = 'час';
        }
        else if ($hourCondition >= 2 && $hourCondition < 5) {
            return $hourStr = 'часа';
        }
        else if ($hourCondition >= 5 && $hourCondition < 10 || $hourCondition == 0) {
            return $hourStr = 'часов';
        }
    }
    else {
        $hourCondition = $someString[0];

        if ($hourCondition == 1) {
            return $hourStr = 'часов';
        }
    }
} 
