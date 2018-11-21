<?php
    $storeID = $_GET['storeID'];
    $seller = $_GET['store'];
    $logo = $_GET['logo'];
 ?>
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
    <nav class="container-fluid  ">
      <nav class=" container-fluid">

        <ul class="nav navbar-nav  lead">

          <li class="nav-item active">
            <a class="nav-link text-md-center" href="#"><img src='../photos/<?php echo $logo ; ?>' alt='' class=' img-circle img-responsive logo'>
<?php echo $seller ; ?></a>
          </li>

        </ul>
          <br>
         <button class="navbar-toggler hidden-sm-up menuleft btn-inverse active" type="button" data-toggle="collapse" data-target="#navbar-header" aria-controls="navbar-header">
           <span class="bars">&#9776;</span>
         </button>

         <div class="collapse navbar-toggleable-xs" id="navbar-header">

           <ul class="nav navbar-nav form-inline pull-xs-right lead">

             <li class="nav-item ">
               <a class="nav-link" href="../blog.php">Blog&nbsp;<span class="sr-only">(current)</span></a>
             </li>
             <li class="nav-item ">
               <a class="nav-link" href="#">Advert&nbsp;</a>
             </li>
             <li class="nav-item ">
               <a class="nav-link" href="index.php">Stores&nbsp;</a>
             </li>
             <li class="nav-item ">
               <a class="nav-link" href="../upload.php">Sell&nbsp;</a>
             </li>
           </ul>

         </div>
       </nav> <!-- /navbar -->

    </nav>
    </div>

<!-- <div class="navbar navbar-fixed-top bg-inverse">
  <div class="row ">
    <div class="col-md-4"></div>
    <div class="col-md-5 col-sm-12 text-left container">

        <div class=" navbar navbar-static-top">
            <img src='../photos/<?php echo $logo ; ?>' alt='' class='imglog img-circle img-responsive img-thumbnail logo'>
                <h6 class="lead ">Store.<?php echo $seller ; ?></h6>

        </div>

    </div>
    <div class="col-md-3"></div>

  </div>

</div> -->
<br><br><br><br><br>

<div class="">


<div class="">


  <div class="container-fluid">

    <!-- <div class='col-md-3 image container img-thumbnail'>
       <h4>Electric Iron <span class='blg bg-inverse'>$Price</span></h4>

        <img src='img.jpg' alt='' class='img img-fluid imag'><br>
        <button type='button' class='btn btn-warning' data-toggle='modal' data-target='#myModal2'>Contact Seller</button>
        <span class='lead s_name'>Seller Name <br>Post Date</span><br>

    </div> -->

    <?php
          include "storeDisplay.php";
     ?>


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
