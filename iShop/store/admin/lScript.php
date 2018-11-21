<?php




    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $seller  = $_POST['seller'];
      $password  = $_POST['password'];

        include_once "config.php";

			 $query = "SELECT * FROM iShopLoginTB WHERE seller = '$seller' and password = '$password'";
			 $result = mysqli_query($link, $query);
			 if ($result) {

				 	$row=  mysqli_fetch_assoc($result);

				 	$dbSeller = $row['seller'];
				 	$dbPassword = $row['password'];

				 	if ( $dbSeller == "$seller" && $dbPassword == "$password"  ) {
              session_start();
              $_SESSION['userid'] = $row['userID'];
              $_SESSION['shop'] = $row['seller'];
              $_SESSION['location'] = $row['location'];
              $_SESSION['email'] = $row['email'];
              $_SESSION['phone'] = $row['phone'];

            // echo "<script> window.location ='store/admin/view.php'</script>";
						echo "<script> window.location ='view.php'</script>";

				 	}else{
   		 			echo "<script> alert('Wrong username or password or both do not match')</script>";
   					echo "<script> window.location ='login.php'</script>";
   				}


			 }else{
		 			echo "<script> alert('Wrong username or password or both do not match')</script>";
					echo "<script> window.location ='signup.php'</script>";
				}


	}

 ?>
