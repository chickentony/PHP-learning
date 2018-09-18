<?php
function getValueinNumber($value, $number) {
    $id = 0;
    $number = (string)$number;
    $value = (string)$value;
//    var_dump($number);
    echo "<br>";
    $arr = [];
    $arr = str_split($number);
//    var_dump($arr);
    echo "<br>";
    for($i = 0; $i < count($arr); $i++) {
//        var_dump($arr[$i]);
//        echo "<br>";
//        var_dump($arr[$i] === $value);
        if ($arr[$i] === $value) {
            
            $result = ++$id;
//            return $id++;
//            var_dump($result);
        }
    }
        return $result;
//        var_dump($result);

    
}
echo getValueinNumber(5, 555556);
//$a = 55;
//$a = (string)$a;
//echo gettype($a);
