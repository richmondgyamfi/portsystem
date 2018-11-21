<?php 
	$dbcon = mysqli_connect('localhost','root','','cscdb');

	if (mysqli_connect_errno()) {
		# code...
		echo "Database connection failed with this error: " .mysqli_connect_error();
		die();
	}
 ?>