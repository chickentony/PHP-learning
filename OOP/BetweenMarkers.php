<?php
/**
 * Вам дана строка и два маркера (начальный и конечный). Вам необходимо найти текст, заключенный между двумя этими маркерами. Но есть несколько важных условий:
 * Начальный и конечный маркеры всегда разные
 * Если нет начального маркера, то началом считать начало строки
 * Если нет конечного маркера, то концом считать конец строки
 * Если нет ни конечного, ни начального маркеров, то просто вернуть всю строку
 * Если конечный маркер стоит перед начальным, то вернуть пустую строку

 */

class BetweenMarkers
{
    public function getBetweenMarkers($text, $firstMarker, $secondMarker)
    {
        if (!empty($firstMarker) && !empty($secondMarker)) {
            $firstPos = strpos($text, $firstMarker);
            $secondPos = strpos($text, $secondMarker);
//            $strArr= str_split($string);

            $res = substr($text, $firstPos);
            $result = stristr($res, $secondMarker, true);
            var_dump($result);
//            $strArr = str_split($res);

//            var_dump($res);

//            for ($i = 0; $i < count($strArr); $i++) {
////                var_dump($strArr[$i]);
//                if ($strArr[$i] === $firstMarker || $strArr[$i] === $secondMarker) {
//                    var_dump($i);
//                }
//            }
        }
    }
}

$value = new BetweenMarkers();
$value->getBetweenMarkers('eto -sanya/ kim', '-', '/');
