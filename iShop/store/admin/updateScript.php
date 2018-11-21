<?php

  $id = $_POST['id'];
  $shop = $_POST['shop'];
  $item = $_POST['item'];
  $price = $_POST['price'];
  $category = $_POST['category'];
  // $photo = $_POST['photo'];
  $description = $_POST['description'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $location = $_POST['location'];


  $foto = basename($_FILES['photo']['name']);

  $p_temp = $_FILES['photo']['tmp_name'];
  $p_si = $_FILES['photo']['size'];

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include_once "config.php";

    $query = "UPDATE  iShopTB SET shopName='$shop', item='$item', price='$price', category='$category', photo='$foto', description='$description', phone='$phone', email='$email', location='$location' WHERE id='$id'";
    $result = mysqli_query($link, $query);
    if ($result) {
      move_uploaded_file($p_temp, "../../photos/$foto");

      echo "<script>alert('Update Succeful');</script>";
      echo "<script> window.location ='view.php'</script>";
    }else {
      echo "Danger";
    }
  }
 ?>
