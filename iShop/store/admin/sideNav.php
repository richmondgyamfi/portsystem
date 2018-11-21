
<div id="mySidenav" class="sidenav">
  <?php
    include "config.php";

    $query1 = "SELECT logo FROM iShopLoginTB WHERE userID = '$_SESSION[userid]'";
    $result1 = mysqli_query($link, $query1);
    if ($result1) {
      while ($row1 = mysqli_fetch_assoc($result1)) {
        $logo = $row1['logo'];

        echo "<div class='container text-md-center'>
        <img src='../../photos/$logo' alt='' class='img-thumbnail img-responsive logo'>
            </div><hr>
        ";
      }

    }


   ?>


  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="view.php">View Items</a>
  <a href="upload.php">Post Items</a>
  <a href="orders.php">View Orders</a>
  <a href="events.php">Advertise</a>
  <a href="writeBlog.php">Blog</a>
  <a href="profile.php">Profile</a>
  <a href="logout.php">Logout</a>
</div>
