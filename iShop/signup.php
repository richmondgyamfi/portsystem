

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
  </head>

  <body >

    <nav class="navbar navbar-dark bg-inverse bg-faded navbar-fixed-top ">
      <div class="container">

      <ul class="nav navbar-nav  lead">

        <li class="nav-item active">
          <a class="nav-link" href="index.php"><span class="text-danger">i</span>Shopper</a>
        </li>

      </ul>

       <button class="navbar-toggler hidden-sm-up menuleft btn-inverse active" type="button" data-toggle="collapse" data-target="#navbar-header" aria-controls="navbar-header">
         &#9776;
       </button>

       <div class="collapse navbar-toggleable-xs" id="navbar-header">

         <ul class="nav navbar-nav form-inline pull-xs-right lead">
           <li class="nav-item ">
             <a class="nav-link" href="upload.php">Sell&nbsp;<span class="sr-only">(current)</span></a>
           </li>
           <li class="nav-item ">
             <a class="nav-link" href="index.php">Shop&nbsp;</a>
           </li>
           <li class="nav-item ">
             <a class="nav-link" href="store/index.php">Stores&nbsp;</a>
           </li>
           <li class="nav-item ">
             <a class="nav-link" href="blog.php">Blog&nbsp;</a>
           </li>
         </ul>

       </div>
     </div>
     </nav> <!-- /navbar -->


    <!-- navbar start -->
    <!-- <nav class="navbar navbar-fixed-top navbar-dark bg-inverse">
        <div class="container">


      <ul class="nav navbar-nav  lead">
        <li class="nav-item active">
          <a class="nav-link" href="index.php"><span class="text-danger">i</span>Shopper</a>
        </li>

      </ul>

      <ul class="nav navbar-nav menuleft ">
        <li class="nav-item active">
          <a class="nav-link" href="upload.php">SELL<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="index.php">SHOP</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">ABOUT</a>
        </li>
      </ul>
      </div>
    </nav> -->
    <!-- navbar end -->

    <div class="" id="main">
      <img src="desktop.jpg" alt="" id="main1">
    </div>
    <div class="container  card-img-overlay">
    	<div class="row container">

          <div class="col-md-5  container col-sm-12 sig_mar" >
              <!-- sign up here -->

              <div class="container" id="up_form">


              <div class="container">

                  <div class="">
                  <div class="" >
                      <h4 class="form-signin-heading">Set_up a Store Today</h4><hr>
                  </div>

                      <form class="f_mar" action="sScript.php" method="post" enctype="multipart/form-data"  >

                          <div class="input-group">
                            <input type="text" class="form-control " name="seller" id="seller" placeholder="Seller / Company / Shop" required>
                          </div><br>

                           <div class="input-group">
                            <input type="text" class="form-control " name="contact" id="contact" placeholder="Phone" required>
                          </div><br>


                          <div class="input-group">
                           <input type="email" class="form-control " name="email" id="email" placeholder="Email" required>
                         </div><br>

                          <div class="input-group">
                           <input type="text" class="form-control " name="location" id="location" placeholder="Location" required>
                         </div><br>

                         <div class="input-group">
                          <input type="text" class="form-control " name="storeType" id="storeType" placeholder="Type of Store" required>
                        </div><br>

                         <div class="input-group">
                          <input type="password" class="form-control " name="password1" id="password1" placeholder="Password" required>
                        </div><br>

                        <div class="input-group">
                         <input type="password" class="form-control " name="password2" id="password3" placeholder="Confirm Password" required>
                       </div><br>

                       <div class="input-group"><span class="lead text-primary">Store Logo</span>
                        <input type="file" class="form-control " name="logo" id="logo" placeholder="" required>
                      </div><br>

                          <button type="submit" class="btn bg-inverse" name="submit">Post Item</button><br><br>

                        </form>

                  </div>
                  </div>
              </div><br>


        </div>



      <div class="container" >
    	  <div class="col-md-2"></div>


    	     <div class="col-md-5 log_mar col-sm-12 container" id="log_form">
<!-- Login here -->







              <div class="">
              <div class="container" id="up_form">
                  <h2 class="form-signin-heading">Sign in</h2>
              </div><hr>

              <div class="container">

              <form class="form-signin f_mar"  action="lScript.php" method="post">

                <label for="inputEmail" class="sr-only">Email address</label>
                <input type="text" id="inputEmail" name="seller" class="form-control" placeholder="Store name / Seller" required autofocus>
                <br>
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                <br>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value="remember-me"> Remember me
                  </label>
                </div>
                <button class=" btn-lg bg-inverse btn-block" type="submit">Sign in</button>
              </form>

            </div> <br><br><br><!-- /container -->

                  <!-- <form class="f_mar" action="lScript.php" method="post" >

                       <div class="input-group">
                        <label for="seller" class="lead">Seller</label><br>
                        <input type="text" class="form-control  " name="seller" id="seller" placeholder="" required>
                      </div><br>


                     <div class="input-group">
                      <label for="password" class="lead">Password</label><br>
                      <input type="password" class="form-control " name="password" id="password" required>
                    </div><br>

                      <button type="submit" class="btn btn-warning" name="submit">Post Item</button><br><br>

                    </form> -->

              </div>

          </div><br><br><br>





    	  </div>




    	</div>
    </div>





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
