<?php
/**
 * You have a sequence of strings, and you’d like to determine the most frequently occurring string in the sequence.
 */

class MostFrequent
{
    public function getMostFrequent($array)
    {
        $arrCounted = array_count_values($array);
        $result = [];
        for ($i = 0; $i < count($array); $i++) {
            foreach ($arrCounted as $k => $v) {
                if ($array[$i] === $k && $v > 1) {
                    $result = $array[$i];
                }
            }
        }
        return $result;
    }
}

$value = new MostFrequent();
echo $value->getMostFrequent(['a', 'a', 'bi', 'bi', 'bi', 'a', 'g']);
