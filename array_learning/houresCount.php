<?php

function houresCount($number) {
//    30 = 1 houre
//    15 = 30 min;
//    7.5 = 15 min
//    3.75 = 7.5 min
//    0.5 = 1 min
//    $minute =  null;    
    $count = null;
    $res = null;
    $result = null;
    $houers = [60, 120, 180, 240, 300];
    $minutes = [30, 90, 150, 210, 270];
//    $oneHouer = 60;
//    $twoHouers = 120;
    
//    var_dump($result);
    for($i = 0; $i <= $number; $i++) {
        $count = $i / 0.5;
        //Счетчик для количества пройденных часов.
        for($index = 0; $index < count($houers); $index++) {
            if($houers[$index] == $count) {
                $result++;
                var_dump($result);
            }
    }
        //Реализация для минут, подумать
        if()
        var_dump($count);
    }
//    return $count;
//    
//    if ($number === 0) {
//        echo '12 : 00.';
//    }
//    else if ($number === 180) {
//        echo 'Six hores spend.';
//    }
    
}

 houresCount (120);
