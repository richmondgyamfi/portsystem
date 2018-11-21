<?php 

require_once 'connect.php';

session_start();

$errors = array(); 

if ($_SERVER['REQUEST_METHOD']=='POST') {
if (isset($_POST['submit'])) {
	$studid = ( $_POST['studid']);
	$password = ($_POST['password']);
	// $studid = stripslashes($studid);
	// $password = stripslashes($password);
	// $studid = mysql_real_escape_string($studid);
	// $password = mysql_real_escape_string($password);
	if (strlen($password) < 6) {
		$errors[] .= 'Password limit not reached';
		// echo '<p style="color: red;">Password limit not reached</p>';
		//header("location: ../register.php");
		}
	if (empty($studid)) {
		$errors[] .= 'Student ID is required';
	 	// echo '<p style="color: red;"> Student ID is required </p>';
	 	}
	 if (empty($password)) {
	 	$errors[] .= 'Password is required';
	 	// echo '<p style="color: red;">Password is required</p>';
		 }
		 
	$sql = "SELECT * FROM login WHERE studid = '$studid' AND password = '$password'";
		$result = mysqli_query($dbcon, $sql);
		if (!$result) {
			die('Error: ' .mysqli_error($dbcon));
		}
		$num1 = mysqli_num_rows($result);
	if ($num1 > 0) {
			// $row = mysqli_fetch_assoc($result);
			// $studid = $row['studid'];
			// $password = $row['password'];

		$errors[] .= 'Username already exist';
	 // if ($studid == "$studid" && $password == "$password") {
		
		//  $errors[] .= 'success';
		 header('location: index.php');
	 // }
}
}
}

 ?>