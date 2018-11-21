<?php

  $name = $_POST['buyer'];
  $phone = $_POST['phone'];
  $buyer_email = $_POST['buyer_email'];
  $location =$_POST['location'];
  $photo =$_POST['photo'];
  $item =$_POST['item'];
  $price =$_POST['price'];
  $userID =$_POST['userID'];
  $seller_email =$_POST['seller_email'];


  // echo $name . " <br/>";
  // echo $phone . " <br/>";
  // echo $buyer_email . " <br/>";
  // echo $location . " <br/>";
  // echo $photo . " <br/>";
  // echo $item . " <br/>";
  // echo $price . " <br/>";
  // echo $userID . " <br/>";
  // echo $seller_email . " <br/> <br/>";



  $from = $buyer_email;
  $to = $seller_email;
  $subject = "ODER FROM CUSTOMER";
  $message = "i have ordered " . $item . " of Price: ". $price ."; \n" ;
  $message .= "The following is my Contact;\n Name: " . $name. "\n Phone: " . $phone. "\n Email: " . $buyer_email. "\n Location: " . $location. "\n Hope to hear from you soon!.\n Thank you";

// echo $message . " <br/> <br/>" ;



  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include_once "config.php";
    $query = "INSERT INTO orderTB (name, c_email, phone, item, message, userID) VALUES ('$name', '$buyer_email', '$phone', '$item', '$message', '$userID')";
    $result = mysqli_query($link, $query);

      if ($result) {

          mail($to, $subject, $message, $from);
          echo "<script> alert('Your order has been sent.')</script>";
					echo "<script> window.location ='index.php'</script>";

      }else {
        echo "BAD";
      }
    }


// mysql query statement goes here

 ?>
