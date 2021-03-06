<?php
require_once '../templates/index.tpl';
require_once '../config/main.php';
require_once '../render/resize.php';

$uploadDir = 'upload/';
$uploadFile = $uploadDir . ($_FILES['userfile']['name']);
$error = $_FILES['userfile']['error'];
$expansion = ($_FILES['userfile']['type'] === 'image/jpg' || $_FILES['userfile']['type'] === 'image/jpeg' || $_FILES['userfile']['type'] === 'image/png' || $_FILES['userfile']['type'] === 'image/gif');

function generateExeption($error) {
    switch ($error) {
        case UPLOAD_ERR_INI_SIZE :
            echo 'Размер принятого файла превысил максимально допустимый размер, который задан директивой.';
            break;
        case UPLOAD_ERR_FORM_SIZE :
            echo 'Файл превышает допустимый размер для загрузки.';
            break;
        case UPLOAD_ERR_NO_FILE :
            echo 'Не выбран файл для загрузки.';
            break;
        case UPLOAD_ERR_PARTIAL :
            echo 'Загружаемый файл был получен только частично.';
            break;
    }
}

if ($_FILES['userfile']['error'] === UPLOAD_ERR_OK) {
    if ($expansion === true) {
        move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadFile);
    }
    else {
        echo 'Неверный формат файла';
    }
}
else {
    generateExeption($error);
}

if (is_dir($uploadDir)){
    $file = scandir($uploadDir);
    for($i = 0; $i < count($file); $i++) {
        if ($file[$i] !== '.' && $file[$i] !== '..') {
            $path = $uploadDir . $file[$i];   
            echo "<a href='$path' target=_blank><img src = $path width = 300; height = 300; class = 'img-thumbnail'; style= 'margin-left: 20px';></a>";
        }
    }
}
