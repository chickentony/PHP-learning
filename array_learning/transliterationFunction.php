<?php
$someString = '';
function translate($someString){
    $letterArray = [
        'а' => 'a',
        'б' => 'b',
        'в' => 'v',
        'г' => 'g',
        'д' => 'd',
        'е' => 'e',
        'ё' => 'yo',
        'ж' => 'j',
        'з' => 'z',
        'и' => 'i',
        'й' => '',
        'к' => 'k',
        'л' => 'l',
        'м' => 'm',
        'н' => 'n',
        'о' => 'o',
        'п' => 'p',
        'р' => 'r',
        'с' => 's',
        'т' => 't',
        'у' => 'u',
        'ф' => 'f',
        'х' => 'h',
        'ц' => '',
        'ч' => 'ch',
        'ш' => 'sh',
        'щ' => '',
        'Ъ' => '',
        'ы' => '',
        'ь' => '',
        'э' => '',
        'ю' => 'y',
        'я' => 'ja',

        'a' => 'а',
        'b' => 'б'
    ];
    $someString = mb_strtolower($someString);
    $stringAsArray = str_split($someString,2);
    $result = [];
    foreach($letterArray as $k => $v) {

        foreach ($stringAsArray as $value) {

            if ($k == $value) :
                array_push($result, $v);
            print_r($result);

            elseif (is_int($someString)) :
                echo 'Переданное значение - число';

            endif;
        }

    }
    return implode($result);
};
echo translate('АНТОН');

?>
