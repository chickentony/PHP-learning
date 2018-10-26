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
    private function stringToArray($someString)
    {
        return explode(' ', $someString);

    }

    private function checkFirstElem($val)
    {
        $result = '';
        $res = [];
        $this->removeSpecialChars($val);
        $result = $this->stringToArray($val);
//        var_dump($result);
        for ($i = 0; $i < count($result); $i++) {
            if (strlen($result[$i]) > 2) {
//                var_dump($result[$i]);
                $newString = $result[$i];
                $a = $this->stringToArray($newString);
                var_dump($a);
//                var_dump($newString);
//                $newArr = array_push($res, $val[$i]);
//                var_dump($newArr);
//                var_dump($result[$i]);
            }
        }
        return $result;

    }

    public function searchWord($someWord)
    {
        $result = '';
//        $strArr = $this->stringToArray($someWord);
        $result = $this->checkFirstElem($someWord);
//        var_dump($result);
        // for($i = 0; $i < count($arr); $i++) {
        //     if (strlen($arr[$i]) > 1) {
        //        }
        // }
        if (is_string($someWord[0])) {
            $result = $someWord[0];
//            var_dump($result);
        }
        return $this->removeSpecialChars($result);
    }
}
$someString = new SearchFirstWord;
echo $someString->searchWord('l lox, pidor');
