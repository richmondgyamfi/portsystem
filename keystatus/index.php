<!DOCTYPE html>
<html>
<head>
	<title>Key Collection App</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container">
		<h2 style="margin-top: 20px; background-color: #C3C3C3; padding-bottom: 10px;" class="text-center">Key Collection App</h2>
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6" style="background-color: #f8f8f8;">
			<form class="form text-center" action="php/connect.php" method="POST" id="formview">
			<label for="room_no">Room Number*: </label>
			<input type="text" name="room_no" class="form-control" placeholder="Enter Key Number"><br>
			<input type="sumbit" name="search" value="Search" class="btn btn-success">
			<br><br>

			
			<div style="margin-top: 60px;">
				<table class="table table-bordered table-striped">
					<thead class="bg-primary">
						<th>Room Resident</th>
						<th>Key Status</th>
					</thead>
					<tbody>
						<tr>
							<td><input type="hidden" name="student[]" value=""><?php echo $_POST['studid']; ?></td>
							<td><input type="radio" name="keyno[]"></td>
						</tr> 
					</tbody>
				</table>
			</div>
			</form>
			</div>
			<div class="col-md-3"></div>
			</div>
	</div>
</body>
</html>