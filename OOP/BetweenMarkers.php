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
    private function emptyFirstMarker($value, $secondValue)
    {
        $result = stristr($value, $secondValue, true);

        return $result;
    }

    public function getBetweenMarkers($text, $firstMarker, $secondMarker)
    {
        $res = [];
        $result = [];
        if (!empty($firstMarker) && !empty($secondMarker)) {
            $firstPos = strpos($text, $firstMarker);
            $secondPos = strpos($text, $secondMarker);
            $textAfterFirstMarker = substr($text, $firstPos);
            // var_dump($res);
            $textBelowSecondMarker = stristr($textAfterFirstMarker, $secondMarker, true);
            // var_dump($result);
            $textArr = str_split($textBelowSecondMarker);
            for ($i = 1; $i < count($textArr); $i++) {
                // var_dump($textArr[$i]);
                array_push($res, $textArr[$i]);
                // var_dump($res);
            }
            $result = implode($res);
//            var_dump($result);
        }
        if ($firstMarker === '') {
           $result =  $this->emptyFirstMarker($text, $secondMarker);
        }

        return $result;
    }
}
$value = new BetweenMarkers();
echo $value->getBetweenMarkers('Ваш шедевр готов!
Не следует, однако забывать, что консультация с широким активом требуют от нас анализа направлений прогрессивного развития. 
Повседневная практика показывает, что начало повседневной работы по формированию позиции обеспечивает широкому кругу (специалистов {участие в формировании системы обучения кадров, соответствует насущным потребностям. 
Таким образом новая модель организационной деятельности/ требуют от нас анализа систем массового участия. 
Не следует, однако забывать, что постоянное информационно-пропагандистское обеспечение нашей деятельности позволяет оценить значение направлений прогрессивного    развития.', '' ,'/');
