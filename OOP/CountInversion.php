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
        $arrayLength = count($array);
        //Предусловие из задачи 2 < len(sequence) < 200
        if ($arrayLength < 2 || $arrayLength > 200) {
            throw new Exception('Длина последовательности больше 200 символов или меньше 2.');
        } else {
            $firstArrEl = $array[0];
            $count = 0;
            for ($i = 0; $i < $arrayLength; $i++) {
                //Предусловие из задачи all(-100 < x < 100 for x in sequence)
                if ($array[$i] > 100 && $array[$i] > -100) {
                    throw new Exception('Элемент массива больше -100 или больше 100.');
                } else {
                    if ($firstArrEl <= $array[$i]) {
                        $firstArrEl = $array[$i];
                    } else {
                        $count++;
                    }
                }
            }
        }
        return $count;
    }
}

$value = new CountInversion();
try {
    echo $value->getCountInversion([1, 2, 5, 3, 4, 7, 6]);
}
catch (Exception $e) {
    echo $e->getMessage();
}
