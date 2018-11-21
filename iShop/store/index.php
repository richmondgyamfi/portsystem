<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>iShopper.Store</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/material.min.css">
    <link href="../css/local.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
    <style media="screen">
        .bars{
          color: white;
        }
    </style>
  </head>

  <body>

    <div class="container-fluid navbar navbar-dark bg-inverse bg-faded navbar-fixed-top">
    <nav class="container  ">
      <nav class=" container">

        <ul class="nav navbar-nav  lead">

          <li class="nav-item active">
            <a class="nav-link" href="index.php"><span class="text-danger">i</span>Shopper</a>
          </li>

        </ul>

         <button class="navbar-toggler hidden-sm-up menuleft btn-inverse active" type="button" data-toggle="collapse" data-target="#navbar-header" aria-controls="navbar-header">
            <span class="bars">&#9776;</span>
         </button>

         <div class="collapse navbar-toggleable-xs" id="navbar-header">

           <ul class="nav navbar-nav form-inline pull-xs-right lead">
             <li class="nav-item ">
               <a class="nav-link" href="../upload.php">Sell&nbsp;<span class="sr-only">(current)</span></a>
             </li>
             <li class="nav-item ">
               <a class="nav-link" href="../signup.php">Register&nbsp;</a>
             </li>
             <li class="nav-item ">
               <a class="nav-link" href="admin/index.php">Sign in&nbsp;</a>
             </li>
             <li class="nav-item ">
               <a class="nav-link" href="../blog.php">Blog&nbsp;</a>
             </li>
           </ul>

         </div>
       </nav> <!-- /navbar -->

    </nav>
    </div>


<div class="container jumbotron">
    <!-- <nav class="navbar navbar-fixed-top navbar-dark bg-inverse">
        <div class="container">


      <ul class="nav navbar-nav  lead">

        <li class="nav-item active ">
          <a class="nav-link" href="index.php"><span class="text-danger">i</span>Shopper</a>
        </li>

      </ul>

      <ul class="nav navbar-nav menuleft ">
        <li class="nav-item ">
          <a class="nav-link" href="../upload.php">SELL<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="../signup.php">JOIN</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="#">ABOUT</a>
        </li>
      </ul>
      </div>
    </nav> -->






            <form class="form-inline text-md-center">
              <span class="lead text-md-center"><h4>Available Store List</h4>
                Click on the logo to visit store <br>
             <input class="form-control" type="text"  placeholder="Search">
             <button class="btn btn-outline-warning" type="submit">Search</button>
              </span> <hr>
           </form>




    <div class="row">


        <div class="col-md-4">

        </div>

        <div class='col-md-3 text-md-center '>

          <div class=' c_list btn btn-outline-warning '>
            <div class=''>
              <img src='../img.jpg' alt='' class='imglog img-circle img-thumbnail '>
              <div class=' c_text '>
                <strong>
                  Shop Name <br>
                  Telephone <br>
                  Email<br>
                  Location<br>
                  Type of Store/shop<br>
                  </strong>
                </div>
            </div>
          </div><br><br>

          <?php
              include "storeScript.php";
           ?>



        </div>
        <div class="col-md-4">

          </div>
      </div>
</div>







    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../js/modal.js"></script>
    <script src="../js/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="../js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
    <script type="text/javascript" src="../js/material.min.js"></script>
    <script src="../js/local.js"></script>
  </body>
</html>
