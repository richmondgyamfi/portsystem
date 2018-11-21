<?php 
	$dbcon = mysqli_connect('localhost','root','','hallkey');

	if (mysqli_connect_errno()) {
		# code...
		echo "Database connection failed: " . mysqli_connect_error();
		die();
	}
 ?>

