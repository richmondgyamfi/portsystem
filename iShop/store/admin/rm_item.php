<?php
	#
	$id = $_GET['id'];



  include_once "config.php";

	$query = "DELETE FROM iShopTB WHERE id=$id";

	mysqli_query($link, $query);

	echo "<script>alert('Delete Succeful');</script>";
	echo "<script> window.location ='view.php'</script>";


	mysqli_close($link);


 ?>
