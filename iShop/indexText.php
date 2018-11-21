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

    <title>iShopper.com</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/material.min.css">
    <link href="css/local.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

    <style media="screen">
        .bars{
          color: white;
        }
    </style>




  </head>

  <body class=" color jumbotron container-fluid ">

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
             <a class="nav-link" href="upload.php">Sell&nbsp;<span class="sr-only">(current)</span></a>
           </li>
           <li class="nav-item ">
             <a class="nav-link" href="signup.php">Register&nbsp;</a>
           </li>
           <li class="nav-item ">
             <a class="nav-link" href="store/index.php">Stores&nbsp;</a>
           </li>
           <li class="nav-item ">
             <a class="nav-link" href="blog.php">Blog&nbsp;</a>
           </li>
         </ul>

       </div>
     </nav> <!-- /navbar -->

  </nav>
  </div>


    <!-- <nav class="navbar navbar-fixed-top navbar-dark bg-inverse">
        <div class="container">


      <ul class="nav navbar-nav  lead">

        <li class="nav-item active">
          <a class="nav-link" href="index.php"><span class="text-danger">i</span>Shopper</a>
        </li>

      </ul>

      <ul class="nav navbar-nav menuleft">
        <li class="nav-item active">
          <a class="nav-link" href="upload.php">SELL<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="signup.php">JOIN</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="store/store.php">STORES</a>
        </li>
      </ul>
      </div>
    </nav> -->


    <div class"text-md-center">


        <div class="starter-template container">
          <h4 class="text-md-center">FREE ONLINE MART</h4>
          <p class="lead text-md-center">The shop Center where you shop for anything!. Just contact the seller.<br>
              <form class="form-inline text-md-center ">
               <input class="form-control" type="text" onkeyup="showHint(this.value)" placeholder="Search">
               <button class="btn btn-outline-warning" type="submit">Search</button>
             </form>
          </p>

        </div>

      <div class="">


        <div class="" id="txtHint">

          <!-- <div class='col-md-3 image container img-thumbnail'>
             <h4>Electric Iron <span class='blg bg-inverse'>$Price</span></h4>

              <img src='img.jpg' alt='' class='img img-fluid imag'><br>
              <button type='button' class='btn btn-warning' data-toggle='modal' data-target='#myModal2'>Contact Seller</button>
              <span class='lead s_name'>Seller Name <br>Post Date</span><br>

          </div> -->

          <?php

                include "displayScript.php";
           ?>


        </div>
        </div>




    </div><!-- /.container -->

    <!-- this is the modal BEGIN -->
     <!-- <div id='myModal2' class='modal fade' tabindex='-1' role='dialog' aria-labelledby='myModalLabel2'>
        <div class='modal-dialog' role='document'>
          <div class='modal-content'>
            <div class='modal-header bg-inverse'>
              <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
              <h3 class='modal-title H_text text-md-center' id='myModalLabel2'>Contact Seller</h3>
            </div>
            <div class='modal-body'>
              <p>
                  <img src='img.jpg' alt='' class='img img-thumbnail imageModal col-xs-12'>
                <ul>

                  <li><strong class='lead text-warning'>Seller/Company:&nbsp;&nbsp;</strong>Khobbi's Shop</li>
                  <li><strong class='lead text-warning'>Phone:&nbsp;&nbsp;</strong>0554602954</li>
                  <li><strong class='lead text-warning'>Email:&nbsp;&nbsp;</strong>ampahkwabena5@gmail.com</li>
                  <br>
                  <li><strong class='lead text-warning'>Item:&nbsp;&nbsp;</strong>Electronic Iron</li>
                  <li><strong class='lead text-warning'>Price:&nbsp;&nbsp;</strong>$2000.00 {Fixed | Negotiable Price}</li>
                  <li><strong class='lead text-warning'>Category:&nbsp;&nbsp;</strong>Electronic Device</li>
                  <p><strong class='lead text-warning'>Description:&nbsp;&nbsp;</strong>here is where the description and detaials of the item or service you provide goes.</p>


                </ul>
               </p>
            </div>
          </div>
        </div>
    </div> -->
    <!-- END MODAL -->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/modal.js"></script>
    <script src="js/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script type="text/javascript" src="js/material.min.js"></script>
    <script src="js/local.js"></script>
  </body>
</html>
