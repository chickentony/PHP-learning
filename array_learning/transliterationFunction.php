<?php

$someString = 'абв';
function translate($someString){
$letterArray = [
    'а' => 'a',
    'б' => 'b',
    'в' => 'v',
    'г' => 'g',
    'д' => 'd',
    'е' => 'e'
];

$arr = str_split($someString, 2);
$emptyArr = [];
foreach($letterArray as $k => $v) {
    foreach($arr as $value) {
        if ($k == $value) {
            $emptyArr = $v;
            echo $emptyArr;
        }
    }
}
};
echo translate('аббв');
?>
