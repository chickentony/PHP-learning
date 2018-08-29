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
        'b' => 'б',
        'c' => 'с',
        'd' => 'д',
        'e' => 'е',
        'f' => 'ф',
        'g' => 'г',
        'h' => 'х',
        'i' => '',
        'j' => 'ж',
        'k' => 'к'
    ];
    if(!is_string($someString)) {
        echo 'Полученные данные, не являются строкой';
    }
    elseif (empty($someString)) {
        echo 'Строка является пустой';
    }
    //Нужно подумать о реализации кейсы со спецсимволами.
//    elseif (preg_match('/[[:punct:]]|\s/', $someString)){
//        echo 'В строке есть спецсимволы';
//    }

    $someString = mb_strtolower($someString);
    $stringAsArray = str_split($someString,2);
    $result = [];

        foreach ($stringAsArray as $value) {

            foreach($letterArray as $k => $v) {

            if ($k == $value) :
                array_push($result, $v);
            endif;
        }

    }
    return implode($result);
};
echo translate('лол[]');

?>
