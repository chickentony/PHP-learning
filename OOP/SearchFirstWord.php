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
    private function stringToArray($str)
    {
        return explode(' ', $str);
    }

    private function removeShortLetters($str)
    {
        return preg_replace('/\b(\S{1,3}|\S{})\b/', "",  $str);
    }

    /**
     * Метод убирает из строки слова меньше трех букв.
     */
    public function searchWord($letter)
    {
        $result = $this->removeSpecialChars($letter);
        $result = $this->removeShortLetters($result);
        $result = $this->stringToArray($result);
        foreach ($result as $key => $value) {
            if ($value !== '') {
                $res = $value;
                break;
            }
        }

        return $res;
    }
}

$someString = new SearchFirstWord;
echo $someString->searchWord('etot je psrosto ne veroyatno');
