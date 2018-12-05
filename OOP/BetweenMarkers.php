<?php

/**
 * Вам дана строка и два маркера (начальный и конечный). Вам необходимо найти текст, заключенный между двумя этими маркерами. Но есть несколько важных условий:
 * Начальный и конечный маркеры всегда разные
 * Если нет начального маркера, то началом считать начало строки
 * Если нет конечного маркера, то концом считать конец строки
 * Если нет ни конечного, ни начального маркеров, то просто вернуть всю строку
 * Если конечный маркер стоит перед начальным, то вернуть пустую строку
 */
class BetweenMarkers
{
    private function checkIfEmptyFirstMarker($text, $secondMarker)
    {
        $result = stristr($text, $secondMarker, true);
        return $result;
    }

    private function checkIfEmptySecondMarker($text, $firstMarker)
    {
        //Убрать из текста все лишние символы.
        $position = strpos($text, $firstMarker);
        $result = substr($text, $position);
        return $result;
    }

    public function getBetweenMarkers($text, $firstMarker, $secondMarker)
    {
        $res = [];
        $result = [];
        $firstMarkerPos = strpos($text, $firstMarker);
        $secondMarkerPos = strpos($text, $secondMarker);

        if (!empty($firstMarker) && !empty($secondMarker)) {
            $textAfterFirstMarker = substr($text, $firstMarkerPos);
            $textBelowSecondMarker = stristr($textAfterFirstMarker, $secondMarker, true);
            $textArr = str_split($textBelowSecondMarker);
            for ($i = 1; $i < count($textArr); $i++) {
                array_push($res, $textArr[$i]);
            }
            $result = implode($res);
        }

        if ($firstMarker === '' && $secondMarker !== '') {
           return $this->checkIfEmptyFirstMarker($text, $secondMarker);
        }

        if ($secondMarker === '' && $firstMarker !== '') {
            return $this->checkIfEmptySecondMarker($text, $firstMarker);
        }

        if ($firstMarker === $secondMarker && !empty($firstMarker) && !empty($secondMarker)) {
            throw new Exception('Начальный и конечный маркеры, должны отличаться!');
        }

        if (empty($firstMarker) && empty($secondMarker)) {
            $result = $text;
        }

        if ($secondMarkerPos < $firstMarkerPos) {
            return ' ';
        }

        return $result;
    }
}

$value = new BetweenMarkers();

try {
    echo $value->getBetweenMarkers('Ваш шедевр готов!
    Не следует, однако забывать, что консультация с широким активом требуют от нас анализа направлений прогрессивного развития. 
    Повседневная практика показывает, что начало повседневной работы по формированию позиции обеспечивает широкому кругу (специалистов {участие в формировании системы обучения кадров, соответствует насущным потребностям. 
    Таким образом новая модель организационной деятельности/ требуют от нас анализа систем массового участия. 
    Не следует, однако забывать, что постоянное информационно-пропагандистское обеспечение нашей деятельности позволяет оценить значение направлений прогрессивного развития.', '{' ,'');
}
catch (Exception $e) {
    echo $e->getMessage();
}

