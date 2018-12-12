<?php
/**
 * Дан массив с положительными числами и число N. Вы должны найти N-ую степень элемента в массиве с индексом N. Если N за границами массива, тогда вернуть -1. Не забывайте, что первый элемент имеет индекс 0.
 * Давайте посмотрим на несколько примеров:
 *  - массив = [1, 2, 3, 4] и N = 2, тогда результат 32 == 9;
 *  - массив = [1, 2, 3] и N = 3, но N за границами массива, так что результат -1.
 * Предусловие: 0 < len(array) ≤ 10
 * 0 ≤ N
 * all(0 ≤ x ≤ 100 for x in array)
 */

class IndexPower
{

    private function pow($firstValue, $secondValue)
    {
        $result = $firstValue;
        for ($i = 1; $i < $secondValue; $i++) {
            $result *= $firstValue;
        }
        return $result;
    }

    public function getIndexPower($array, $index)
   {
       if ($index >= 0) {
           for ($i = 0; $i < count($array); $i++) {
               if (max($array) <= 100 && min($array) >= 0) {
                   if ($i === $index) {
                       $result = $this->pow($array[$i], $index);
                       break;
                   } else {
                       $result = -1;
                   }
               } else {
                   $result = 'Элемент массива больше ста или меньше нуля.';
               }
           }
       } else {
           $result = 'Индекс меньше нуля.';
       }
       return $result;
    }
}

$arr = new IndexPower();
echo $arr->getIndexPower([1, 2, 3, 99], -2);
