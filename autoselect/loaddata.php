<?php 

$dbcon = mysqli_connect('localhost','root','','autoapp');

$output = '';

if (isset($_POST["brandid"])) {
	if ($_POST["brandid"] != '') {
		$sql = "SELECT * FROM product WHERE brandid = '".$_POST["brandid"]."'";
	}
	else{
		$sql = "SELECT * FROM product";
	}
	$result = mysqli_query($dbcon, $sql);

	while ($row = mysqli_fetch_array($result)) {
		$output .='<option>'.$row["productname"].'</option>';
	}
	echo $output;
}

 ?>