<?php 
$dbcon = mysqli_connect('localhost','root','','autoapp');

function fillbrand($dbcon){
	$output = '';
	$sql ="SELECT * FROM brand";
	$result = mysqli_query($dbcon, $sql);
	while ($row = mysqli_fetch_array($result)) {
		$output .='<option value="'.$row["brandid"].'">'.$row["brandname"].'</option>';
	}
	return $output;
}

function fillproduct($dbcon){
	$output = '';
	$sql ="SELECT * FROM product";
	$result = mysqli_query($dbcon, $sql);
	
	while ($row = mysqli_fetch_array($result)) {
		$output .='<option>'.$row["productname"].'</option>';
	}
	return $output;	

}


 ?>
}

<!DOCTYPE html>
<html>
<head>
	<title>Auto select App</title>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <link rel="stylesheet" href="css/main.css"> -->
    <!-- <link rel="stylesheet" href="css/main.css"> -->

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="../css/bootstrap1.min.css"> -->
	<link rel="stylesheet" href="css/material.min.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>
	<form class="container">
		<div class="form-group">
			<div class="col-md-5">
			<select class="form-control col-md-5" name="brand" id="brand">
				<option>Parent</option>

				<?php echo fillbrand($dbcon); ?>

			</select>
			</div>
			<div class="col-md-2"></div>
			<div class="col-md-5">
			<select class="form-control col-md-5" name="child" id="product">
				<option>Child</option>

				
				
			</select>
			</div>
		</div>
	</form>
</body>
</html>
<script>
	$(document).ready(function(){
		$('#brand').change(function(){
			var brandid = $(this).val();

			$.ajax({
				url: 'loaddata.php',
				method: 'POST',
				data: {brandid : brandid},
				success: function(data){
					$('#product').html(data);
			}
		});
	});
</script>