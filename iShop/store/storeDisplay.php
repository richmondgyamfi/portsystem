<?php
    include "../config.php";



    $query = "SELECT * FROM iShopTB WHERE userID = '$storeID' ORDER BY time DESC";
    $result = mysqli_query($link, $query);
    $num = mysqli_num_rows($result);
    if ($num > 0) {
      while ($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $shopName  = $row['shopName'];
        $item  = $row['item'];
        $price  = $row['price'];
        $category  = $row['category'];
        $photo  = $row['photo'];
        $description  = $row['description'];
        $time  = $row['time'];
        $phone  = $row['phone'];
        $location = $row['location'];
        $email = $row['email'];
        $userID = $row['userID'];


        echo "

        <div class='col-md-3 container img img-thumbnail'>
           <h4>$item <span class='blg bg-inverse'>&cent;&nbsp;$price</span></h4>

          <img src='../photos/$photo' alt='' class='img img-fluid img-responsive imag'><br>
            <button type='button' class='btn  c_btn_b' data-toggle='modal' data-target='#$id'>View</button>
            <span class='s_name'>$shopName <br>$time<br>

        </div>








        <div id='$id' class='modal fade' tabindex='-1' role='dialog' aria-labelledby='myModalLabel2'>
           <div class='modal-dialog' role='document'>
             <div class='modal-content'>
               <div class='modal-header bg-inverse'>
                 <button type='button' class='close ' data-dismiss='modal' aria-hidden='true'><span class='bars '>&times;</span></button>
                 <h3 class='modal-title H_text text-md-center' id='myModalLabel2'>Contact Seller</h3>
               </div>
               <div class='modal-body'>
                 <p>
                     <img src='../photos/$photo' alt='' class='img img-thumbnail img-responsive imageModal col-xs-12'>
                 </p><br/>


                       <br>
                       <br>
                       <input type='hidden' name='userID' value='$userID'>
                       <span><strong class='lead c_btn'>Seller:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$shopName</strong></span><br/>
                       <span><strong class='lead c_btn'>Contact:&nbsp;&nbsp;&nbsp;$phone</strong></span><br/>
                       <span><strong class='lead c_btn'>Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$email</strong></span><br/>
                       <span><strong class='lead c_btn'>Location:&nbsp;&nbsp;$location</strong></span><br/>
                       <span><strong class='lead c_btn'>Item:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$item</strong></span><br/>
                       <span><strong class='lead c_btn'>Price:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></span><br/>
                       <span><strong class='lead c_btn'>Category:&nbsp;&nbsp;$category</strong></span>
                       <span><p><strong class='lead c_btn'>Details:&nbsp;&nbsp;&nbsp;&nbsp;  $description</strong></span><br/>

                       <p class='action'>
                            <a href='orderItem.php?seller=$shopName&id=$id&price=$price&item=$item&category=$category&photo=$photo&email=$email&location=$location&phone=$phone&description=$description&userID=$userID'><button type='button' class='btn c_btn_b'>Order Item</button></a>&nbsp;&nbsp;&nbsp;
                       </p>



               </div>
             </div>
           </div>
       </div>


        ";
      }
    }else{
      echo "<h1>STORE EMPTY AT THE MOMENT</h1>";
    }


 ?>
