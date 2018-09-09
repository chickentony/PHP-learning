<?php
$uploaddir = 'uploads/';
$uploadfile = $uploaddir . ($_FILES['userfile']['name']);

var_dump($_FILES['userfile']['tmp_name']);
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo 'успех';
} else {
    echo 'ошибка';
}


?>
