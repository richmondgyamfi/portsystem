<?php

  session_start();
    $id = $_GET['id'];
    $item  = $_GET['item'];
    $price  = $_GET['price'];
    $category  = $_GET['category'];
    $photo  = $_GET['photo'];
    $description  = $_GET['description'];
    $email  = $_GET['email'];
    $location  = $_GET['location'];
    $phone  = $_GET['phone'];
    $shop = $_SESSION['shop'];
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


<br><br><br>

 <div class="container card-img-overlay">
   <div class="row">
         <div class="col-md-3">

         </div>
         <div class="col-md-6 con_black container col-sm-12" >

         <div class="container" id="up_form">

           <div class="container">

               <div class="conn">

                   <h5 class=" col_black" id="up_form">Edit  Item(s) or Service Info</h5>
               <hr>

                   <form class="f_mar" action="updateScript.php" method="post" enctype="multipart/form-data" class="">

                     <div class="input-group">
                       <input type="hidden" class="form-control " name="id" id="id" value="<?php echo $id; ?>" required>
                     </div><br>


                       <div class="input-group">
                         <span class="lead" name="shop" ><?php echo $shop; ?></span>
                       </div><br>

                       <div class="input-group">
                         <input type="text" class="form-control " name="phone" id="contact" value="<?php echo $phone; ?> " placeholder="Phone" required>
                       </div><br>

                       <div class="input-group">
                         <input type="text" class="form-control " name="email" id="email" value="<?php echo $email; ?>" placeholder="Email" required>
                       </div><br>

                       <div class="input-group">
                         <input type="text" class="form-control " name="location" id="location" value="<?php echo $location; ?>" placeholder="location" required>
                       </div><br>

                        <div class="form-control">
                         <input type="text" class="form-control inpt" name="item" id="item" value="<?php echo $item; ?>" placeholder="Item Name / Service" required><br>

                         <input type="text" class="form-control inpt1" name="price" id="price" value="<?php echo $price; ?>" placeholder="Price" required>
                       </div><br>

                        <div class="input-group">
                         <input type="text" class="form-control " name="category" id="category" value="<?php echo $category; ?>" placeholder="Category" required>
                       </div><br>

                        <div class="input-group">
                         <label for="photo" class="lead">Retain / Change Photo</label><br>
                         <input type="file" class="form-control  btn btn-outline-warning" name="photo" id="photo" value="<?php echo "<img src='../../photos/$photo' class='img img-thumbnail img-responsive>" ?>" placeholder="Photo" required>
                       </div><br>

                        <div class="input-group">
                         <input type="text" class="form-control " name="description" id="description" value="<?php echo $description; ?>" placeholder="Short Description" required>
                       </div><br>

                       <button type="submit" class="btn btn-warning ">Update</button>&nbsp;&nbsp;&nbsp;
                       <a href="view.php"><button type="button" class="btn btn-danger ">Cancel</button></a><br>


                     </form>

               </div>
               </div>
         </div><br>


     </div>


<br><br><br>

<div class="col-md-3">
  <p>
      <?php echo "<img src='../../photos/$photo' class='img img-thumbnail img-responsive'>" ?>
  </p><br/>
</div>




   </div>
 </div>








<script src="js/modal.js"></script>
<script src="js/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
<script>document.write<script src="js/jquery.min.js"></script></script>
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
