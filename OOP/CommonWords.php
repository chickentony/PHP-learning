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
        $res = '';
        $firstStringAsArray = explode(',', $firstString);
        $secondStringAsArray = explode(',', $secondString);
        for ($i = 0; $i < count($firstStringAsArray); $i++) {
            for ($j = 0; $j < count($secondStringAsArray); $j++) {
                if ($secondStringAsArray[$j] === $firstStringAsArray[$i]) {
                    $res = implode($firstStringAsArray[$i]);
                }
            }
        }
    }
}
