<?php
  include "config.php";



  $query = "SELECT * FROM orderTB WHERE userID = $sessionID ORDER BY time DESC";
  $result = mysqli_query($link, $query);
  $num = mysqli_num_rows($result);
  $number = 1;
  if ($num > 0) {
    while ($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $c_email = $row['c_email'];
        $phone = $row['phone'];
        $item = $row['item'];
        $message = $row['message'];
        $time = $row['time'];
        $userID = $row['userID'];

        echo "
        <div class='panel panel-default'>
         <div class='panel-heading'>
           <span class='panel-title'>
             <li>&nbsp;
             <a role='button' data-toggle='collapse' data-parent='#accordion' href='#collapseThree' data-target='#$id'>
               $c_email  /  $phone
             </a>
           </li>
           </span>
         </div>
         <div id='$id' class='panel-collapse collapse'>
           <div class='panel-body'>
               $message <br/>
               From:&nbsp;cobby <br/>
               <span class='text-right'>$time</span>
           </div>
         </div>
        </div>

        ";

        $number++;
        }
    }

 ?>
 <!-- <div class='panel panel-default'>
  <div class='panel-heading'>
    <ol class="panel-title">
      <li>&nbsp;
      <a role='button' data-toggle='collapse' data-parent='#accordion' href='#collapseThree'>
        Email || phone
      </a>
    </li>
    </ol>
  </div>
  <div id='collapseThree' class='panel-collapse collapse'>
    <div class='panel-body'>
        message Here
    </div>
  </div>
 </div><br> -->
