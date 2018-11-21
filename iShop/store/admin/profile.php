<?php
  session_start();
  if (!isset($_SESSION['userid'])) {
      header('Location: ../../signup.php');
  }

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

    <title>iShopperAdminStore</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/material.min.css">
    <link href="css/local.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
  </head>


<body class="jumbotron">

<?php
    include "sideNav.php";
 ?>

<div id="main">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>




 <div class="container card-img-overlay">
   <div class="row">
         <div class="col-md-1">

         </div>

         <div class="col-md-11 con_black " >

           <div class="container text-md-center">
                 <p class="text-md-center lead"><strong>Profile.<?php echo $_SESSION['shop']; ?></strong>
                   <form class="form-inline ">

                     <input class="form-control" type="text" placeholder="Search">
                     <button class="btn btn-outline-warning" type="submit">Search</button>

                   </form>
                 </p><hr>
           </div>




        <h1>PROFILING....</h1>

        <br>


     </div>


<br><br><br>






   </div>
 </div>


<!-- this where iput the modal -->

<!-- where i end the Modal -->




<script>

</script>

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

</body>
</html>
