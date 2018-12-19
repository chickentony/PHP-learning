<?php
/**
 * Проверим такой пример последовательности: (1, 2, 5, 3, 4, 7, 6) и мы можем видеть здесь три инверсии
 * - 5 и 3; - 5 и 4; - 7 и 6.
 * Вам дана последовательность уникальных чисел и вы должны подсчитать число инверсий в этой последовательности.
 */
class CountInversion
{
    public function getCountInversion($array)
    {
        $firstArrEl = $array[0];
        $count = null;
        for ($i = 0; $i < count($array); $i++) {
            if ($firstArrEl <= $array[$i]) {
                $firstArrEl = $array[$i];

//                var_dump($firstArrEl);
            } else {
                ++$count;
            }
        }
        var_dump($count);
    }
}
$value = new CountInversion();
$value->getCountInversion([1, 2, 5, 3, 4, 7, 6]);
