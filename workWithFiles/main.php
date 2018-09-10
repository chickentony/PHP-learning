<?php
$uploaddir = 'uploads/';
$uploadfile = $uploaddir . ($_FILES['userfile']['name']);
$error = $_FILES['userfile']['error'];
//var_dump($error);
//var_dump($_FILES['userfile']['type']); 
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
    if ($_FILES['userfile']['type'] === 'image/jpg' || $_FILES['userfile']['type'] === 'image/jpeg') {
        move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);    
    }
    else {
        echo 'Неверный формат файла';
    }
}
else {
    generateExeption($error);
}

?>
