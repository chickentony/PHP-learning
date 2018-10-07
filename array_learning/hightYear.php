<?php

//Вам нужно разработать программу, которая проверяла бы введенное пользователем число (год, является ли она високосным).
// Число может быть в диапазоне от 1 до 9999.

function hightYear($number) {
	$result = '';
	if (is_string($number)) {
		echo 'Передана строка.';
	}
	else if ($number >= 100) {
		$yearArr = (string)$number;
		// var_dump($yearArr);
		$lastButOneEl = $yearArr[strlen($yearArr) - 2];
		$lastEl = $yearArr[strlen($yearArr) - 1];
		$twoLastElements = $lastButOneEl . $lastEl;
		// var_dump($twoLastElements);
		if (($twoLastElements % 4) === 0) {
			$result = 'Год является високсным';
		}
		else {
			$result = 'Год не високосный';	
		}
	}
	else if ($number < 100 && $number > 0) {
		if (($number % 4) === 0) {
			$result = 'Год является високосным';
		}
		else {
			$result = 'Год не високсный';
		}
	}
	return $result;
}

echo hightYear(0);
?>
