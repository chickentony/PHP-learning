<?php

// Дано натуральное число n. Вычислить: 11 + 22 + .. + nn. Вывести на экран квадраты этих чисел, а также сумму квадратов этих чисел.

function squareOfNumber($n) 
{
	$result = 1;
	$res = 0;
	for ($i = 1; $i <= $n; $i++) {
		$result = powNumber($i, $i);
		$res += $result;
		echo $result;
		echo $res;
	}
}

echo squareOfNumber(4);

// Функция возведени числа в степень.
function powNumber($number, $square)
{
	$result = $number;
	for ($i = 1; $i < $square; $i++) {
		$result *= $number;
	}
	return $result;
}

?>
