 <?php 
$dbcon = mysqli_connect('localhost','root','','chat');

//check connection
if (!$dbcon) {
	die("connection failed: " . mysqli_connect_error());
}

require_once 'helper.php';
//echo "Connected Successfully";
 ?>