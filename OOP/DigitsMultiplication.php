<?php
/**
 * Дано положительное целое число. Вам необходимо подсчитать произведение всех цифр в этом числе, за исключением нулей.
 * Для примера: Дано число 123405. Результат будет: 1*2*3*4*5=120 (не забудьте исключить нули).
 */

class DigitsMultiplication
{
    public function getMultiplication($number)
    {
        $arr = str_split($number);
        $result = 1;
//        $res = '';
        for ($i = 0; $i < count($arr); $i++) {
            $intNumberArray = (int)$arr[$i];
            if ($arr[$i] !== 0) {
                $result *= $intNumberArray;
            }
        }
        return $result;
    }
}

$value = new DigitsMultiplication();
$value->getMultiplication(12345);
