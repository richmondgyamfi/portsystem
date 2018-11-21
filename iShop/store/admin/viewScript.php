<?php

    include "config.php";

    $shop = $_SESSION['shop'];
    $userID = $_SESSION['userid'];

    // $location = $_SESSION['location'];
    // $email = $_SESSION['email'];
    // $phone = $_SESSION['phone'];

    // will user the userid in the iShopTB later
  


    $query = "SELECT * FROM iShopTB WHERE shopName ='$shop'";
    $result = mysqli_query($link, $query);
    $num = mysqli_num_rows($result);
    if ($num > 0) {
      while ($row = mysqli_fetch_assoc($result)){
           $id = $row['id'];
          // $shopName  = $row['shopName'];
          $item  = $row['item'];
          $price  = $row['price'];
          $category  = $row['category'];
          $photo  = $row['photo'];
          $description  = $row['description'];
          $time  = $row['time'];
          $email  = $row['email'];
          $location  = $row['location'];
          $phone  = $row['phone'];
          // $shop = $_SESSION['shop'];

        echo "

        <div class='col-md-2 image container img-thumbnail'>
           <h4>$item <span class='blg bg-inverse'>&cent;&nbsp;$price</span></h4>

          <img src='../../photos/$photo' alt='' class='img img-fluid img-responsive imag'><br>
            <button type='button' class='btn  c_btn_b' data-toggle='modal' data-target='#$id'>View Details</button>
            <span class='s_name'>Store.$shop<br>$time<br>

        </div>








         <div id='$id' class='modal fade' tabindex='-1' role='dialog' aria-labelledby='myModalLabel2'>
            <div class='modal-dialog' role='document'>
              <div class='modal-content'>
                <div class='modal-header bg-inverse'>
                  <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                  <h3 class='modal-title H_text text-md-center' id='myModalLabel2'>Information</h3>
                </div>
                <div class='modal-body'>
                  <p>
                      <img src='../../photos/$photo' alt='' class='img img-thumbnail img-responsive imageModal col-xs-12'>
                  </p><br/>


                        <br>
                        <span><strong class='lead c_btn'>Seller/Company:&nbsp;&nbsp;&nbsp;$shop</strong></span><br/>
                        <span><strong class='lead c_btn'>Contact:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$phone</strong></span><br/>
                        <span><strong class='lead c_btn'>Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$email</strong></span><br/>
                        <span><strong class='lead c_btn'>Location:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$location</strong></span><br/>
                        <span><strong class='lead c_btn'>Item:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$item</strong></span><br/>
                        <span><strong class='lead c_btn'>Price:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></span><br/>
                        <span><strong class='lead c_btn'>Category:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$category</strong></span>
                        <span><p><strong class='lead c_btn'>Description:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  $description</strong></span><br/>



                      <p class='action'>
                          <a href='update.php?id=$id&price=$price&item=$item&category=$category&photo=$photo&email=$email&location=$location&phone=$phone&description=$description'><button type='button' class='btn btn-warning '>Update</button></a>&nbsp;&nbsp;&nbsp;
                          <a href='rm.php?id=$id&price=$price&item=$item&category=$category&photo=$photo&email=$email&location=$location&phone=$phone&description=$description'><button type='button' class='btn btn-danger '>Remove</button></a>

                      </p>
                      <br/><br/>

                </div>
              </div>
            </div>
        </div>


        ";
      }
    }else{
      echo "Store is Empty at the moment";
    }


 ?>
