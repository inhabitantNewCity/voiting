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
                <li><a href="#"><span class = "Color-top-span dropdown-header">Get link this voiting</span></a></li>
              </ul>
            </li>
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class = "Color-top-span">Property Voiting</span> <span class="Color-top-span caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#" onclick="setPrivate()"  data-tuggle = "tooltip" title="Voiting result will be sended in your e-mail"><span class = "Color-top-span ">Set private </span></a></li>
                <li><a href="#" data-tuggle = "tooltip" title="Voiting result will be visible all"><span class = "Color-top-span">Set public</span></a></li>
              </ul>
            </li>
            <li>
            <a href="#" data-tuggle = "tooltip" title="Voiting result will be sended in your e-mail"><span class = "Color-top-span ">Show page voting</span></a>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    </header>

 <form name="test" method="post" action="input1.php">
      <p><b>Choose of variants:</b><Br>
      <!--!@#%start-->
      <input type="radio" name="voit" value="one"> dfghjkl<Br>
      <!--fghjklstart-->
      <input type="radio" name="voit" value="one"> dfghjklwewe<Br>
      <!--fsdfsdstart-->
      <input type="radio" name="voit" value="one"> dsfsdfsd<Br>
      <!--!@#%finish-->
      <!--!@#%start-->
      <input type="radio" name="voit" value="one"> <Br>
      <!--!@#%finish-->
      <input type="radio" name="voit" value="two"> <Br>
      <input type="radio" name="voit" value="three"> <Br>
      </p>
  <p><input type="submit" value="Submit">
      <input type="reset" value="Resalt">
   <input type="reset" value="Cancel"></p>
 
 </form>

 </body>  
</html>alue="Submit">
      <input type="reset" value="Resalt">
   <input type="reset" value="Cancel"></p>
 
 </form>

 </body>  
</html>