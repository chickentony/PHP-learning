<?php

$someString = '';
$arr = [];

function revertString($someString) {

    if(!is_string($someString)) {
        echo 'Пошел на хер';
    }

    else {
        //функция которая коректно разбивает строку на массив, вместе с пробелами и со всей историей
        $result = preg_split('//u',$someString,-1,PREG_SPLIT_NO_EMPTY);
        global $arr;

        for ($i = count($result) - 1; $i >= 0; --$i) {
            array_push($arr, $result[$i]);
        }
    }
    return implode($arr);
};

echo revertString('САНЯ');

?>
