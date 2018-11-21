<?php
session_start();
if (!isset($_SESSION['userid'])) {
    header('Location: ../../signup.php');
}


$shop = $_SESSION['shop'];
$userID = $_SESSION['userid'];
$location = $_SESSION['location'];
$email = $_SESSION['email'];
$phone = $_SESSION['phone'];



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




 <div class="container card-img-overlay">
   <div class="row container">
         <div class="col-md-3">

         </div>
         <div class="col-md-6 con_black container" >


           <div class="container" id="up_form">

           <div class="container">

                   <h5 class=" col_black text-md-center" id="up_form">PostItems.<?php echo $shop; ?></h5>
               <hr>

                   <form class="container" action="uploadScript.php" method="post" enctype="multipart/form-data" class="">




                     <div class="input-group">
                       <input type="text" class="form-control " name="phone" id="contact" value="<?php echo $phone ?>" placeholder='phone' required>
                     </div><br>

                     <div class="input-group">
                       <input type="text" class="form-control " name="email" id="email" value="<?php echo $email ?>" placeholder='email' required>
                     </div><br>

                     <div class="input-group">
                       <input type="text" class="form-control " name="location" id="location" value="<?php echo $location ?>" placeholder='location' required>
                     </div><br>

                      <div class="form-control">
                       <input type="text" class="form-control inpt" name="item" id="item" placeholder="Item / Service"  required><br>

                       <input type="number" class="form-control inpt1" name="price" id="price" placeholder="($)Price" required>
                     </div><br>

                      <div class="input-group">
                       <input type="text" class="form-control " name="category" id="category" placeholder="Category" required>
                     </div><br>

                      <div class="input-group">
                       <label for="photo" class="lead">Photo(s)</label><br>
                       <input type="file" class="form-control  btn btn-outline-warning" name="photo" id="photo" placeholder="" required>
                     </div><br>

                      <div class="input-group">
                       <input type="text" class="form-control " name="description" id="description" placeholder="Short Description" required>
                     </div><br>

                     <button type="submit" class="btn btn-warning ">Post Item</button>



                     </form>


               </div>






     </div>
     <div class="col-md-3">

     </div>









   </div>
 </div>


<!-- this where iput the modal -->
<div id='myModal2' class='modal fade' tabindex='-1' role='dialog' aria-labelledby='myModalLabel2'>
   <div class='modal-dialog' role='document'>
     <div class='modal-content'>
       <div class='modal-header bg-inverse'>
         <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
         <h3 class='modal-title H_text text-md-center' id='myModalLabel2'>Contact Seller</h3>
       </div>
       <div class='modal-body'>
         <p>

             <img src='img.jpg' alt='' class='img img-thumbnail imageModal col-xs-12'>
         </p><br/>

         <br>
       <span><strong class='lead c_btn'>Seller/Company:&nbsp;&nbsp;$shopName</strong></span><br/>
       <span><strong class='lead c_btn'>Phone:&nbsp;&nbsp;0554602954</strong></span><br/>
       <span><strong class='lead c_btn'>Email:&nbsp;&nbsp;ampahkwabena5@gmail.com</strong></span><br/>

       <span><strong class='lead c_btn'>Item:&nbsp;&nbsp;$item</strong></span><br/>
       <span><strong class='lead c_btn'>Price:&nbsp;&nbsp;&cent;&nbsp;$price</strong></span><br/>
       <span><strong class='lead c_btn'>Category:&nbsp;&nbsp;$category</strong></span><br/>
       <span><p><strong class='lead c_btn'>Description:&nbsp;&nbsp;  $description</strong></span><br/>

      <p class="action">
          <a href="update.php"><button type="button" class="btn btn-primary ">Update</button></a>&nbsp;&nbsp;&nbsp;
          <a href="#"><button type="button" class="btn btn-danger ">Remove</button></a>


          <!-- <form class="" action="rm_item.php" method="post">
            <button type="submit" class="btn btn-danger ">Remove</button>
          </form> -->

      </p>

      <br><br>
       </div>
     </div>
   </div>
</div>
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
