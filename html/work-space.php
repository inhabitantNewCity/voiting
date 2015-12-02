<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>EasyVoting</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.css" rel="stylesheet">
   <link href="../css/main.css" rel="stylesheet">
   <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <header class="navbar navbar-static-top bs-docs-nav" id="top" role="banner">
    <nav class="navbar navbar-default  navbar-fixed-top top-bar" role = "navigtion">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../index.php"><span class = "Color-top-span">EasyVoiting</span></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class = "Color-top-span">File</span> <span class="Color-top-span caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#" id="save" onclick="saveCurentPage()"><span class = "Color-top-span">Save file</span></a></li>
                <li><a href="html/work-space.php"><span class = "Color-top-span">New file</span></a></li>
                <li class="divider"></li>
              </ul>
            </li>
          <li class="dropdown">
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    </header>
    <main class = "bs-docs-masthead" id="content" role="main" >
      <div class=" jumbotron main-background-container">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-lg-4"></div>
            <div class="col-md-4 col-lg-4">
              <form onsubmit="return false" class="form-horizontal" id="createNewVoiting"  method="POST" action="../php/SaveCurentPagePublic.php">
                <div class="control-group has-feedback" id="firstDiv">
                  <label class="control-label" for="inputEmail"><h2>Title</h2></label>
                  <div class="controls">
                   <!-- <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> -->
                    <h2><input type="text" class="form-control" required="required" id="inputEmail" name="title" placeholder="title" pattern="[A-Za-z0-9]{6,40}"></h2>
                  </div>
                  <span class="glyphicon form-control-feedback"></span>
                </div>
                <div class="control-group has-feedback">
                  <label class="control-label" for="inputEmail"><h2>Variants</h2></label>
                  <div class="controls">
                    <h2><input type="text" id="inputEmail" name="variant1" placeholder="add variant" class="form-control" required="required" pattern="[A-Za-z0-9]{6,40}"></h2>
                  </div>
                </div>
                <div class="control-group">
                  <div class="controls">
                    <h2><input type="text" id="inputEmail" name="variant2" placeholder="add variant" class="form-control" required="required" pattern="[A-Za-z0-9]{6,40}"></h2>
                  </div>
                </div>
                <div class="control-group" id="lastDiv">
                  <div class="controls">
                    <button type="button" id="addVariant" onclick="addNewVariant()" class="btn">Add new parametr</button>
                  </div>
                </div>
              </form>
              <br>
              <div class="alert alert-success hidden" id="success-alert">
                <h2>Sucssses</h2>
                <div>Your data was sent sucssed</div>
              </div>
            </div>
          </div>
        </div>
      </div>      <!--<h1><?php //require_once("php/source.php");?>Hello, world!</h1>-->
    </main>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="../js/CreateNewVoiting.js"></script>
    <script>
        $(function() {
          //при нажатии на кнопку с id="save"
          $('#save').click(function() {
            //переменная formValid
            var formValid = true;
            //перебрать все элементы управления input 
            $('input').each(function() {
            //найти предков, которые имеют класс .form-group, для установления success/error
            var formGroup = $(this).parents('.form-group');
            //найти glyphicon, который предназначен для показа иконки успеха или ошибки
            var glyphicon = formGroup.find('.form-control-feedback');
            //для валидации данных используем HTML5 функцию checkValidity
            if (this.checkValidity()) {
              //добавить к formGroup класс .has-success, удалить has-error
              formGroup.addClass('has-success').removeClass('has-error');
              //добавить к glyphicon класс glyphicon-ok, удалить glyphicon-remove
              glyphicon.addClass('glyphicon-ok').removeClass('glyphicon-remove');
            } else {
              //добавить к formGroup класс .has-error, удалить .has-success
              formGroup.addClass('has-error').removeClass('has-success');
              //добавить к glyphicon класс glyphicon-remove, удалить glyphicon-ok
              glyphicon.addClass('glyphicon-remove').removeClass('glyphicon-ok');
              //отметить форму как невалидную 
              formValid = false;  
            }
          });
          //если форма валидна, то
          if (formValid) {
            $('#save').onclick = "";
            //save.onclick = 'return false'
            //сркыть модальное окно
            $('#myModal').modal('hide');
            //отобразить сообщение об успехе
            $('#success-alert').removeClass('hidden');
          }
        });
      });
</script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.js"></script>
  </body>
</html>
   
