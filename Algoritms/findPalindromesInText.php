<?php

$text = 'Мам смотри тут что-то есть.';
$letters = [];
$reversedLetters = [];
$resArr = [];
$result = '';

$lowercaseText = mb_strtolower($text);
$textAsArray = explode(' ', $lowercaseText);
for ($i = 0; $i < count($textAsArray); $i++) {
    $letters[] = preg_split('//u', $textAsArray[$i], -1, PREG_SPLIT_NO_EMPTY);
}

for ($j = 0; $j < count($letters); $j++) {
    $reversedLetters[] = array_reverse($letters[$j]);
}

for ($k = 0; $k < count($letters); $k++) {
    for ($y = 0; $y < count($reversedLetters); $y++) {
        if ($letters[$k] === $reversedLetters[$y]) {
          $resArr[] = $letters[$k];
        }
    }
}


foreach ($resArr as $k => $v) {
    $result .= implode($resArr[$k]);
}

echo $result;
