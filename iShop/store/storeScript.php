<?php
    include "../config.php";

    $query = "SELECT seller, phone ,email, storeType, location, userID, logo FROM iShopLoginTB ORDER BY seller ASC";
    $result = mysqli_query($link, $query);

    if ($result) {
      while ($row = mysqli_fetch_assoc($result)){
          $storeID = $row['userID'];
          $seller = $row['seller'];
          $phone  = $row['phone'];
          $email  = $row['email'];
          $location  = $row['location'];
          $storeType  = $row['storeType'];
          $logo  = $row['logo'];

          echo "
            <div class=' c_list btn btn-outline-warning '>
            <a href='myStore.php?storeID=$storeID&store=$seller&logo=$logo'>  <img src='../photos/$logo' alt='' class='imglog img-circle img-thumbnail'></a>

              <div class='txt-mar c_text text-left'>

                  <strong class=''>
                    $seller <br>
                    $phone <br>
                    $email<br>
                    $location<br>
                    $storeType<br>
                    </strong>
                  
              </div>
            </div><br/><br/>
          ";


        }

    }else {
      echo "Danger";
    }
  ?>
