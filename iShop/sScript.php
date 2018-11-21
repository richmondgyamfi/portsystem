<?php

  $seller = $_POST['seller'];
  $contact = $_POST['contact'];
  $location = $_POST['location'];
  $password1 = $_POST['password1'];
  $password2 = $_POST['password2'];
  $email = $_POST['email'];
  $storeType = $_POST['storeType'];

  $logo = basename($_FILES['logo']['name']);
  $l_temp = $_FILES['logo']['tmp_name'];
  $l_si = $_FILES['logo']['size'];



  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($password1 == $password2) {
        include_once "config.php";

        $query = "INSERT INTO iShopLoginTB (seller, phone, email, logo, storeType, location, password) VALUES ('$seller', '$contact', '$email', '$logo', '$storeType', '$location', '$password2')";
        $result = mysqli_query($link, $query);

        if ($result) {
            move_uploaded_file($l_temp, "photos/$logo");

            echo "<script> alert('Signed Up Successfully. You can now login to iShopper')</script>";
            echo "<script> window.location ='signup.php'</script>";
        }else {
            echo "<script> alert('Signing Up Unsuccessful.  Please try Again')</script>";
				    echo "<script> window.location ='signup.php'</script>";
        }

    }else {
			echo "<script> alert('Both Passwords do not match.  Please try Again ')</script>";
			echo "<script> window.location ='signup.php'</script>";
    }
    # code...
  }
 ?>
