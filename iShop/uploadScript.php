<?php


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
    $query = "INSERT INTO iShopTB (shopName, item, price, category, photo, description, phone, email, location)
              VALUES('$shop', '$item', '$price', '$category', '$foto', '$description', '$phone', '$email', '$location')";
    $result = mysqli_query($link, $query);
    if ($result) {
      move_uploaded_file($p_temp, "photos/$foto");

      echo "<script>alert('Upload Succeful');</script>";
      echo "<script> window.location ='index.php'</script>";
    }else {
      echo "Danger";
    }
  }
 ?>
