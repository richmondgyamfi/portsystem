<?php
    $photo = $_GET['photo'];
    $item = $_GET['item'];
    $price = $_GET['price'];
    $u_email = $_GET['email'];
    $shopName = $_GET['seller'];
    $userID = $_GET['userID'];
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

    <title>iShopper.com</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/material.min.css">
    <link href="css/local.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

    <script>

    </script>




  </head>

  <body class="row color jumbotron ">

  <div class="container-fluid navbar navbar-dark bg-inverse bg-faded navbar-fixed-top">
  <nav class="container  ">
    <nav class=" container">

      <ul class="nav navbar-nav  lead">

        <li class="nav-item active">
          <a class="nav-link" href="index.php"><span class="text-danger">i</span>Shopper</a>
        </li>

      </ul>

       <button class="navbar-toggler hidden-sm-up menuleft btn-inverse active" type="button" data-toggle="collapse" data-target="#navbar-header" aria-controls="navbar-header">
         &#9776;
       </button>

       <div class="collapse navbar-toggleable-xs" id="navbar-header">

         <!-- <ul class="nav navbar-nav form-inline pull-xs-right lead">
           <li class="nav-item ">
             <a class="nav-link" href="../upload.php">Sell&nbsp;<span class="sr-only">(current)</span></a>
           </li>
           <li class="nav-item ">
             <a class="nav-link" href="../signup.php">Register&nbsp;</a>
           </li>
           <li class="nav-item ">
             <a class="nav-link" href="store/index.php">Stores&nbsp;</a>
           </li>
           <li class="nav-item ">
             <a class="nav-link" href="blog.php">Blog&nbsp;</a>
           </li>
         </ul> -->

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


    <div class"text-md-center ">


        <div class="starter-template container">
          <h4 class="text-md-center">ORDER DETAIL FORM</h4>
          <p class="lead text-md-center">Fill form to complete your order.<br>
          </p>

        </div>

      <div class="container-fluid row">


        <div class="container-fluid row" id="txtHint">

          <!-- <div class='col-md-3 image container img-thumbnail'>
             <h4>Electric Iron <span class='blg bg-inverse'>$Price</span></h4>

              <img src='img.jpg' alt='' class='img img-fluid imag'><br>
              <button type='button' class='btn btn-warning' data-toggle='modal' data-target='#myModal2'>Contact Seller</button>
              <span class='lead s_name'>Seller Name <br>Post Date</span><br>

          </div> -->




        </div>
            <div class="col-md-4">

            </div>

            <div class="container col-md-4">
              <?php
                echo "
                <div class='col-md-3 container image img-thumbnail'>
                   <h4>$item <span class='blg bg-inverse '>&cent;&nbsp;$price</span></h4>

                  <img src='photos/$photo' alt='' class='img img-fluid img-responsive imag'><br>
                    <span class='lead '><h6>From:  $shopName</h6>

                </div>
                ";

               ?>

            <form class="form-signin f_mar"  action="orderScript.php" method="post">

              <label for="userID" class="sr-only"></label>
              <input type="hidden" id="userID" name="userID" class="form-control" value="<?php echo $userID ;?>" required>
              <br>

              <label for="u_email" class="sr-only"></label>
              <input type="hidden" id="u_email" name="seller_email" class="form-control" value="<?php echo $u_email ;?>" required>
              <br>


              <label for="item" class="sr-only"></label>
              <input type="hidden" id="item" name="item" class="form-control" value="<?php echo $item ;?>" required>
              <br>


              <label for="price" class="sr-only"></label>
              <input type="hidden" id="price" name="price" class="form-control" value="<?php echo $price ;?>" required>
              <br>

              <label for="photo" class="sr-only"></label>
              <input type="hidden" id="photo" name="photo" class="form-control" value="<?php echo $photo ;?>" required>
              <br>

              <label for="buyer" class="sr-only">Name</label>
              <input type="text" id="buyer" name="buyer" class="form-control" placeholder="Name" required>
              <br>

              <label for="phone" class="sr-only">Phone</label>
              <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone" required>
              <br>

              <label for="email" class="sr-only">Email</label>
              <input type="text" id="email" name="buyer_email" class="form-control" placeholder="Email" required>
              <br>

              <label for="location" class="sr-only">Location</label>
              <input type="text" id="location" name="location" class="form-control" placeholder="location" required>
              <br>


              <button type="submit" class="btn btn-warning ">Order</button>&nbsp;&nbsp;&nbsp;
              <a href="index.php"><button type="button" class="btn btn-danger ">Cancel</button></a><br>

            </form>

          </div>

          <div class="col-md-4">

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
