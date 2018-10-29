<?php
/**
 * Дана строка и нужно найти ее первое слово.
 * При решении задачи обратите внимание на следующие моменты:
 * В строке могут встречатся точки и запятые
 * Строка может начинаться с буквы или, к примеру, с пробела или точки
 * В слове может быть апостроф и он является частью слова
 * Весь текст может быть представлен только одним словом и все
 */
class SearchFirstWord
{

    /**
     * Метод убирает не нужные знаки припенания.
     */
    private function removeSpecialChars(string $someString)
    {
        return preg_replace("|[^\d\w ]+|i"," ", $someString);
    }

    /**
     * Метод превращает строку в массив.
     */
    private function stringToArray(string $someString)
    {
        return explode(' ', $someString);
    }

    /**
     * Метод убирает символы короче 2 из начала строки.
     */
    private function removeShortLetters(string $someSting)
    {
        return preg_replace('/\b(\S{1,2}|\S{})\b/', "",  $someSting);
    }

    /**
     * Основной метод, осуществляет поиск первого слова в строке.
     */
    public function searchWord(string $someWords)
    {
        if ($someWords !== '') {
            $words = $this->removeSpecialChars($someWords);
            $words = $this->removeShortLetters($words);
            $words = $this->stringToArray($words);
            foreach ($words as $key => $value) {
                if ($value !== '') {
                    $result = $value;
                    break;
                }
            }
            return $result;
        } else {
            throw new Exception('Передана пустая строка.');
        }

        return false;
    }
}

$someString = new SearchFirstWord;

try {

    echo $someString->searchWord('test');
}

catch (Exception $e) {

    echo 'Message: ' . $e->getMessage();
}
