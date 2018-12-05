<?php

$arr = [0, 1, 2, 3, 4, 5, 6, 7, 8];
$res = 0;
$last = count($arr) - 1;
if (!empty($arr)) {
	for($i = 0; $i < count($arr); $i++){

		if (($i % 2) === 0) {
			$res += $arr[$i];
		}
	$result = $res * $last;
	}	
} else {
	$result = 0;
}

echo $result;
