<?php 

require_once 'connect.php';

session_start();
$errors = array(); 

if (isset($_POST['submit'])) {
	$studid = ( $_POST['studid']);
	$password = ($_POST['password']);
	$re_password = ($_POST['re_password']);
	$studid = mysql_real_escape_string($studid);
	$password = mysql_real_escape_string($password);
	if (strlen($password) == strlen($re_password) < 6) {
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
	 if ($password != $re_password) {
	 	$errors[] .= 'Password mismatch';
	 		// echo '<p style="color: red;">Password mismatch</p>';
	 	}

	 $sql1 = "SELECT * FROM login WHERE studid = '$studid' LIMIT = 1";
	 $result1 = mysqli_query($dbcon, $sql1);
	 
	 if (($result1)>0) {
			 $errors[] .= "username exist";
	 }



	 if (empty($errors)) {
	 	# code...
	 	$password = md5($password);
	 	$errors[] .= 'Success please <a href="login.php">Login</a>';
	 	$sql ="INSERT INTO login (studid, password) VALUES ('$studid', '$password')";
	 	//echo $sql;
	 	$result = $dbcon -> query($sql);
	 }
}
 ?>