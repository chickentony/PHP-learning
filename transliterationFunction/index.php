<?php

    $someString = '';
    $separator = '_';
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
        '_' => '_',

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
        'k' => 'к',
        'l' => 'л',
        'm' => 'м',
        'n' => 'н',
        'o' => 'о',
        'p' => 'п',
        'q' => 'ку',
        'r' => 'р',
        's' => 'с',
        't' => 'т',
        'u' => '',
        'v' => 'в',
        'w' => 'в',
        'x' => 'х',
        'y' => 'у',
        'z' => 'з',
    ];

    function removeSpaces($someString) {
    global $separator;
    $res = '';

    if(!is_string($someString)) {
        echo 'В функцию передана не строка';
    }
    elseif (is_string($someString)) {
        $res = preg_split('//u',$someString,-1,PREG_SPLIT_NO_EMPTY);

        for($index = 0; $index < count($res); $index++) {
            if ($res[$index] === ' ') {
                $res[$index] = $separator;
            }
        }
    }
    return implode($res);
    };

    function translate($someString) {

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

    //Заменяем пробелы в строке на нижниее подчеркивания.
    $resultArray  = removeSpaces($someString);
    //Приводим строку к нижнему регистру, если пользователь вдруг ввел заглавную букву.
    $resultArray  = mb_strtolower($resultArray);
    //Переводим строку в массив, выражение работает корректно для кирилицы.
    $stringAsArray = preg_split('//u',$resultArray,-1,PREG_SPLIT_NO_EMPTY);
    //Массив куда будем записывать переведенную строчку.
    $result = [];
    global $letterArray;

        foreach ($stringAsArray as $value) {

            foreach($letterArray as $k => $v) {

            if ($k === $value) :
                array_push($result, $v);
            endif;
        }

    }
    return implode($result);

    };
    echo translate('Lol eto');
