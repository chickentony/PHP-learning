<?php

/**
  *Даны 2 строки. Необходимо найти индекс второго вхождения второй строки в первую.
  *Разберем самый первый пример, когда необходимо найти второе вхождение "s" в слове "sims". 
  *Если бы нам надо было найти ее первое вхождение, то тут все просто: с помощью функции indexOf мы можем узнать, что "s" – это самый первый символ в слове "sims", а значит индекс первого вхождения равен 0. 
  *Но нам необходимо найти вторую "s", а она 4-ая по счету. Значит индекс второго вхождения (и ответ на вопрос) равен 3.
  */


class SecondIndex {

    public function getSecondIndex($string, $letter)
    {
        if (is_string($string) && is_string($letter)) {
            if (strlen($letter) <= 1) {
                $strArray = str_split($string);
                for ($i = 0; $i < count($strArray); $i++) {
                    if ($strArray[$i] === $letter) {
                        $res[] = $i;
                    }
                }
            } else {
                throw new Exception('Второй элемент должен содержать один символ.');
            }
        }

        return $res[1];
    }
}

$str = new SecondIndex();

try {

    echo $str->getSecondIndex('ti pidor i lox', 'i');
}
catch (Exception $e) {
    echo $e->getMessage();
}
