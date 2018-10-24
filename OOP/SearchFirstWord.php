<?php
/**
 * Дана строка и нужно найти ее первое слово.
 * При решении задачи обратите внимание на следующие моменты:
 * В строке могут встречатся точки и запятые +
 * Строка может начинаться с буквы или, к примеру, с пробела или точки
 * В слове может быть апостроф и он является частью слова
 * Весь текст может быть представлен только одним словом и все +

*/

class SearchFirstWord
{
    /**
     * Метод убирает не нужные знаки припенания.

     */
    private function removeSpecialChars($str)
    {
        return preg_replace("|[^\d\w ]+|i"," ",$str);
    }

    /**
     * Метод превращает строку в массив.

     */
//    public function stringToArray($someString)
//    {
//        return explode(' ', $someString);
//    }

//    private function checkFirstElem($val)
//    {
//        $this->removeSpecialChars($val);
//        $this->stringToArray($val);
//        var_dump($val);
//        for ($i = 0; $i < count($val); $i++) {
//            var_dump($val[$i]);
//        }
//
//    }

    public function searchWord($someWord)
    {
        $result = '';
//        $this->stringToArray($someWord);
        $arr = explode(' ', $someWord);
//        var_dump($someWord);
        for($i = 0; $i < count($arr); $i++) {
            if (strlen($arr[$i]) > 1) {
//                var_dump($arr[$i]);
                
            }
        }
        if (is_string($someWord[0])) {
            $result = $someWord[0];
//            var_dump($result);
        }

        return $this->removeSpecialChars($result);
    }
}

$someString = new SearchFirstWord;
//echo $someString->checkValue('22');
//echo $someString->removeSpaces('lox=pidor');

echo $someString->searchWord('l lox, pidor');
