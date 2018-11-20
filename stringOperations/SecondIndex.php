<?php

function secondIndex($string, $findInString) {
//    $arr = [];
    if (is_string($string) && is_string($findInString)) {
        $strArray = str_split($string);
        for ($i = 0; $i < count($strArray); $i++) {
            if ($strArray[$i] === $findInString) {
                $res[] = $i;
            }
        }
        return $res[1];
    }

}

echo secondIndex('pidor pid', 'p');
