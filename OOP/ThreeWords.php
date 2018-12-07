<?php
/**
 * Давайте научим наших роботов отличать слова от чисел.
 * Дана строка со словами и числами, разделенными пробелами (один пробел между словами и/или числами). Слова состоят только из букв.
 * Вам нужно проверить есть ли в исходной строке три слова подряд. Для примера, в строке "start 5 one two three 7 end" есть три слова подряд.
 */

class ThreeWords
{
    public function checkWords($text)
    {
        $count = 0;
        $result = false;
        $textAsArray = explode(' ', $text);
        for($i = 0; $i < count($textAsArray); $i++) {
            if (is_numeric($textAsArray[$i])) {
                $count = 0;
                } else {
                    $count++;
                    if ($count === 3) {
                        $result = true;
                        break;
                    }
                }
        }
        return $result;
    }
}

$string = new ThreeWords();
var_dump($string->checkWords('start 5 one two three 7 end'));
