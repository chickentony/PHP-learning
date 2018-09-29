<?php
require_once 'calculateForm.html';
//var_dump($_POST); 
//echo (int)$_POST['firstNumber'];
 
if (isset($_POST['firstNumber']) && isset($_POST['secondNumber']) && $_POST['firstNumber'] !== '' && $_POST['secondNumber'] !== '') {
    $firstNumber = (int)$_POST['firstNumber'];
    $secondNumber = (int)$_POST['secondNumber'];
    
//    $mathOperation = $_POST['operations'];
}
else {
    echo 'Значение введено некорректно.';
    exit;
}

if (isset($_POST['dev']) && $_POST['dev'] === '/' && $secondNumber === 0) {
    echo 'На ноль делить нельзя.';
}
elseif (isset($_POST['sub']) && $_POST['sub'] === '-') {
    echo $firstNumber - $secondNumber;
}
elseif (isset($_POST['sum']) && $_POST['sum'] === '+') {
    echo $firstNumber + $secondNumber;
}
elseif (isset($_POST['multiple']) && $_POST['multiple'] === '*') {
    echo $firstNumber * $secondNumber;
}
elseif (isset($_POST['dev']) && $_POST['dev'] === '/') {
    echo $firstNumber / $secondNumber;
}


//var_dump($_POST['operations'][0]);
