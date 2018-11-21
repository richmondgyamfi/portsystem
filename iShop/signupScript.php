<?php
    include_once "config.php";

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		if ($_POST['password1'] == $_POST['password2']) {



			$seller = $_POST['seller'];
			$contact = $_POST['contact'];
			$location = $_POST['location'];
			$password1 = $_POST['password1'];
			$password2 = $_POST['password2'];

      echo $seller;
      echo $contact;
      echo $location;
      echo $password1;

	// 		$query = "INSERT INTO iShopLoginTB(seller, contact, location, password)VALUES('$seller', '$contact', '$location', '$password2')";
  //
	// 		$result =  mysqli_query($link, $query);
  //
  //
	// 		if ($result) {
  //
	// 			echo "<script> alert('Signed Up Successfully. You can now login to iShopper');</script>";
	// 			echo "<script> window.location ='signup.php'</script>";
	// 			# code...
	// 		}else{
	// 			echo "<script> alert('Signing Up Unsuccessful.  Please try Again');</script>";
	// 			echo "<script> window.location ='signup.php'</script>";
	// 		}
  //
	// 	}else{
	// 		echo "<script> alert('Both Passwords do not match.  Please try Again 1');</script>";
	// 		echo "<script> window.location ='signup.php'</script>";
		}


	}

 ?>
