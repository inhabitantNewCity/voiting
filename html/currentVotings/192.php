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
    <link href="../../css/bootstrap.css" rel="stylesheet">
   <link href="../../css/main.css" rel="stylesheet">
   <link rel="shortcut icon" href="../../img/logo.png" type="image/x-icon">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <script src="../../js/UpdateResultVoiting.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   <script src="../../js/bootstrap.js"></script>
    <script type="text/javascript" src="../../js/CreateNewVoiting.js"></script>
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
          <a class="navbar-brand" href="../../index.php"><span class = "Color-top-span">EasyVoiting</span></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class = "Color-top-span">File</span> <span class="Color-top-span caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <!--<li><a href="#" id="save" onclick="saveCurentPage()"><span class = "Color-top-span">Save file</span></a></li>-->
                <li><a href="html/work-space.php"><span class = "Color-top-span">New file</span></a></li>
              </ul>
            </li>
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
                <form  class="form-horizontal" id="createNewVoiting"  method="POST" action="javascript:void(null);">
                  <div class="control-group has-feedback" id="firstDiv">
                  <label class="control-label" for="inputEmail"><h2 class="textInVoiting">ngghjv</h2></label>
                  <span class="glyphicon form-control-feedback"></span>
                </div>
                    <p class = "textInVoiting" id = "fildParent"><b = class = "textInVoiting">Choose of variants:</b><Br>
                        
                        <!--!@#%start-->
                    <span id = "span0" class = "textInVoiting"><input type="radio" name="voit" id="0" value="radioButtonVote0"class = "textInVoiting"> ghjhgffghj</span><br>
                        <!--!@#%finish-->
                    <span id = "span1" class = "textInVoiting"><input type="radio" id="1" name="voit" value="radioButtonVote1"class = "textInVoiting"> ghjhgghjjk</span><br>
                    <!--!@#%add-->
                    </p>
                    <p id="divSubmit"><input type="button" id = "submitVoite" onclick="vote()"  value="Submit">
                    <input type="reset" id = "resetVoite" value="Resalt">
                    <input type="reset" id="cancelVoite" value="Cancel"></p>
                    <input type="hidden" id="countVoite" name = "countVoite" value="2">
                    <input id = "linkOnPage" type="hidden"  name="link" value="http://localhost/voting/html/currentVotings/192.php">
                    <input type="hidden" name = "voit0" value="<--currentNumberVoit0=1-->">
                        <!--StartCountClick-->
                    <input type="hidden" name = "voit1" value="<--currentNumberVoit1=0-->">
                    <!--StartCountClick-->
                    <!--addNewRadioButton-->
              </form>
            </div>
            <div class="col-md-4 col-lg-4">
              <div class="control-group has-feedback">
                  <label class="control-label"  for="inputEmail"><h2 class = "textInVoiting">Current link</h2></label>
                  <div class="controls">
                    <h2><input id = "linkOnPage" type="text" id="inputEmail" name="variant1" value="http://localhost/voting/html/currentVotings/192.php" class="form-control" required="required"></h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>     
    </main>
  </body>
</html>