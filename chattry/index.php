<!DOCTYPE html>
<?php 
include 'header.php';
require_once 'php/connect.php';

// if (isset($_POST['studid']) ) {
// 	$errors[] .= "new user";
// 	header('location: index.php');
// }else{
// 	header('location: login.php');
// }

 ?>
<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div>
				<h2>Welcome <?php echo $studid; ?></h2>
				<p><a href="login.php">Logout</a></p>
			</div>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>
</body>
</html>