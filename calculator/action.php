<?php
//var_dump($_POST); 
//echo (int)$_POST['firstNumber'];
 
if (isset($_POST['firstNumber']) && isset($_POST['secondNumber']) && $_POST['firstNumber'] !== '' && $_POST['secondNumber'] !== '') {
    $firstNumber = (int)$_POST['firstNumber'];
    $secondNumber = (int)$_POST['secondNumber'];
    $mathOperation = $_POST['operations'];
}
else {
    echo 'Значение введено некорректно.';
    exit;
}


if ($mathOperation === 'dev' && $secondNumber === 0) {
    echo 'На ноль делить нельзя.';
}
else if ($mathOperation === 'sub') {
    echo $firstNumber - $secondNumber;
}
else if ($mathOperation === 'sum') {
    echo $firstNumber + $secondNumber;
}
else if ($mathOperation === 'multiple') {
    echo $firstNumber * $secondNumber;
}
else if ($mathOperation === 'dev') {
    echo $firstNumber / $secondNumber;
}


//var_dump($_POST['operations'][0]);
