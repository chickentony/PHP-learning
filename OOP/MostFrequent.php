<?php
/**
 * You have a sequence of strings, and you’d like to determine the most frequently occurring string in the sequence.
 */

class MostFrequent
{
    public function getMostFrequent($array)
    {
//        $element = $array[0];
        $arrCounted = array_count_values($array);
//        var_dump($arrCounted);
        //$count = 0;
        for ($i = 0; $i < count($array); $i++) {
            foreach ($arrCounted as $k => $v) {
//                var_dump($v);
                if ($v <= 1) {
                    $result = $array[$i];
                } else {
                    $result = $array[$i];
                }
            }
        }
        var_dump($result);
    }
}

$value = new MostFrequent();
$value->getMostFrequent(['a', 'a', 'bi']);
