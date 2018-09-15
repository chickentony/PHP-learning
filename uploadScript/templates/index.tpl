<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Галерея для загрузки фото.</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
   
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Меню</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
              <a class="nav-item nav-link active" href="#">Главная <span class="sr-only">(current)</span></a>
              <a class="nav-item nav-link" href="#">Features</a>
              <a class="nav-item nav-link" href="#">Pricing</a>
<!--              <a class="nav-item nav-link disabled" href="#">Disabled</a>-->
          </div>
      </div>
    </nav>
    
    <div class = "container">
     <form method = "post" action = "../public/index.php" enctype = "multipart/form-data">
        <div class = "form-group">
         <input type = "hidden" name = "MAX_FILE_SIZE" value = "4000000">
         <span class="btn btn-default btn-file">
             <input type = "file" name = "userfile" class = "form-control-file">
         </span>
<!--         <br>-->
         <input type = "submit" value = "Отправить файл" class="btn btn-primary">
        </div>
     </form>
    </div>
</body>
</html>
