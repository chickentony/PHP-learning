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
    $min = null;
    $houersSpend = null;
    $houers = [60, 120, 180, 240, 300];
    
    for($i = 0; $i <= $number; $i++) {
        $count = $i / 0.5;
        //Счетчик для количества пройденных часов.
        for($index = 0; $index < count($houers); $index++) {
            if($houers[$index] == $count) {
                $houersSpend++;
//                var_dump($houersSpend);
            }
    }
        //Реализация для минут, подумать
        if(($number % 60) !== 0) {
            $res = $number % 60;
            $min = $res / 0.5;
//            var_dump($min);
//            var_dump($res);
            $result = "$houersSpend . $min";
            
        }
        
    }
    return $result;
//    echo $result;
//    var_dump($houersSpend);
//    var_dump($min);
//    var_dump($result);  
    
}

echo houresCount(73);
