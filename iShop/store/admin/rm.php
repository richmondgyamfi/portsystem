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
   <div class="row mar_del">
         <div class="col-md-2">

         </div>
         <div class="col-md-9  container " >
           <div class="container">
              <h2><span class="lead text-danger text-center">ARE SURE YOU WANT TO DELETE THIS</span></h2>
                <hr>
           </div>

           <!-- <div class="container  "> -->
             <div class="">
                  <?php echo "<img src='../../photos/$photo' class='img img-thumbnail del_img img-responsive'>" ?>

             </div><br/>
             <!-- </div> -->
             <div class="  container">
               <span><strong class='lead c_btn'>Contact:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $phone; ?></strong></span><br/>
               <span><strong class='lead c_btn'>Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $email; ?></strong></span><br/>
               <span><strong class='lead c_btn'>Location:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $location; ?></strong></span><br/>
               <span><strong class='lead c_btn'>Item:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $item; ?></strong></span><br/>
               <span><strong class='lead c_btn'>Price:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $price; ?></strong></span><br/>
               <span><strong class='lead c_btn'>Category:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $category; ?></strong></span>
               <span><p><strong class='lead c_btn'>Description:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <?php echo $description; ?></strong></span><br/>

                 <div class=''>
                     <a href='rm_item.php?id=<?php echo $id ?>'><button type='button' class='btn btn-warning '>Delete</button></a>&nbsp;&nbsp;&nbsp;
                     <a href='view.php'><button type='button' class='btn btn-danger '>Cancel</button></a>

                 </div>

             </div>

         </div>
         <div class="col-md-1">

         </div>



<br><br><br>




<!-- this where iput the modal -->
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
