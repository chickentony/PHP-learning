<?php
/**
 * Даны две строки со словами, разделенными запятыми. Попробуйте найти что общего между этими строками.
 * Слова внутри каждой строки не повторяются.
 * Ваша функция должна находить все слова, которые появляются в обеих строках.
 * Результат должен быть представлен, как строка со словами разделенными запятыми и отсортированными в алфавитном порядке.
 */

class CommonWords
{
    public function getCommonWords($firstString, $secondString)
    {
        $result = [];
        $firstStringAsArray = explode(',', $firstString);
        $secondStringAsArray = explode(',', $secondString);
        $countedFirstArray = count($firstStringAsArray);
        $countedSecondArray = count($secondStringAsArray);

        if ($countedFirstArray > 10 || $countedSecondArray > 10) {
            throw new Exception('Длина строки более 10 слов.');
        } else {
            for ($i = 0; $i < $countedFirstArray; $i++) {
                for ($j = 0; $j < $countedSecondArray; $j++) {
                    if ($secondStringAsArray[$j] === $firstStringAsArray[$i]) {
                        array_push($result, $secondStringAsArray[$j]);
                    }
                }
            }
        }

        sort($result);

        if (count($result) > 0) {
            return implode(',', $result);
        } else {
            return 'Пустая строка';
        }

    }
}

$value = new CommonWords();
try {
    echo $value->getCommonWords("one,two,three", "four,five,six");
}
catch (Exception $e) {
    echo $e->getMessage();
}
