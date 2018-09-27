<?php

function houresCount($degrees) {
//    30 = 1 houre
//    15 = 30 min;
//    7.5 = 15 min
//    3.75 = 7.5 min
//    0.5 = 1 min
    $count = null;
    $res = null;
    $result = null;
    $min = null;
    $houers = null;
    $houerStr = '';
    if ($degrees === 0) {
        return $result = '12 : 00 пока не прошло и минуты.';
    }
    else if ($degrees === 360) {
        return $result = 'Прошло 12 часов.';
    }
    else if ($degrees > 0 && $degrees <= 360) {

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

//    var_dump($result);
//    var_dump($min);
        $result = "$houers $houerStr : $min";
        return $result;
    }

}

echo houresCount(260);
