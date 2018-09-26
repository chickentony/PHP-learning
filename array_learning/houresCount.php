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
    $houersArr = [60, 120, 180, 240, 300, 360, 420, 480, 540, 600];
//    if ($number === 180) {
//        return $result = '6:00';
//    }

    for($i = 0; $i <= $number; $i++) {
        $count = $i / 0.5;
//        var_dump($count);
        //Счетчик для количества пройденных часов.
        for($index = 0; $index < count($houersArr); $index++) {
//            var_dump($houers[$index]);
//            var_dump($houersArr[$index] == $count);
            if($houersArr[$index] == $count) {
                $houersSpend++;
                var_dump($houersSpend);
            }
        }
        //Реализация для минут
        if(($number % 60) !== 0) {
            $res = $number % 60;
            $min = $res / 0.5;
//
//            if ($min == 60) {
//                $min = '00';
//            }
            
//            var_dump($min);
            var_dump($res);
//
        }
////        var_dump(($number % 60) == 0);
        else if (($number % 60) == 0) {
            $min = '00';
//            var_dump(($number % 60) == 0);
        }
//
        $result = "$houersSpend : $min";
    }
    return $result;


}
echo houresCount(210);
