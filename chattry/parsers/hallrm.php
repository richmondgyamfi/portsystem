<?php
require_once '../php/connect.php';

if (isset($_POST["insert"])) {
	# code...
	$sqlin = "INSERT INTO key_in_out(key_no, stuid, key_in_out) VALUES('".$_POST["insert"]."', :stuid, :keystatus)"
	$result -> mysqli_query($dbcon, $sqlin);
	echo"data";
}
 ?>