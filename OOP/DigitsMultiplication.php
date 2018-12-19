<?php
/**
 * Дано положительное целое число. Вам необходимо подсчитать произведение всех цифр в этом числе, за исключением нулей.
 * Для примера: Дано число 123405. Результат будет: 1*2*3*4*5=120 (не забудьте исключить нули).
 */

class DigitsMultiplication
{
    public function getMultiplication($number)
    {
        //Предусловие 0 < number < 10 в 6
        if ($number < 1 || $number > 1000000) {
            throw new Exception('Число меньше 0 либо больше 1 000 000');
        } else {
            $arr = str_split($number);
            $result = 1;
            for ($i = 0; $i < count($arr); $i++) {
                $intNumberArray = (int)$arr[$i];
                if ($intNumberArray !== 0) {
                    $result *= $intNumberArray;
                }
            }
        }
        return $result;
    }
}

$value = new DigitsMultiplication();
try {
    echo $value->getMultiplication(123040);
}
catch (Exception $e) {
    echo $e->getMessage();
}
