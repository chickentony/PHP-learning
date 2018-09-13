<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Галерея для загрузки фото</title>
</head>
<body>
    <form method = "POST" action = "../public/index.php" enctype = "multipart/form-data">
        <input type = "hidden" name = "MAX_FILE_SIZE" value = "3000000">
        <input type = "file" name = "userfile"/>
        <br>
        <input type = "submit" value = "Отправить файл">
    </form>
</body>
</html>
