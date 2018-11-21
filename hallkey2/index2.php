<?php 
require_once 'php/connect.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Key Collection App</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>

<?php 

// SELECT hall_rooms.room_id, hall_rooms.room_no, hall_rooms.hallid, hall_room_occupants.key_in_out, hall_room_occupants.id, hall_room_occupants.studid, hall_room_occupants.room_id, key_in_out.studid, key_in_out.key_no, key_in_out.keyinout FROM hall_rooms, hall_room_occupants, key_in_out WHERE hall_rooms.room_id=hall_room_occupants.room_id AND room_no = '12' AND hallid = 'SRC' ORDER BY hall_rooms.room_id

$query = "SELECT hall_rooms.room_id, hall_rooms.room_no, hall_rooms.hallid, hall_room_occupants.key_in_out, hall_room_occupants.id, hall_room_occupants.studid, hall_room_occupants.room_id FROM hall_rooms, hall_room_occupants WHERE hall_rooms.room_id=hall_room_occupants.room_id AND room_no = '12' AND hallid = 'SRC' ORDER BY hall_rooms.room_id";
	
	$result = $dbcon -> query($query);
	$errors = array();

	if (isset($_POST['submitbox']) && isset($_GET('in')) {
		

		$sql1="I";


 ?>


	<div class="container">
		<h2 style="margin-top: 20px; background-color: #C3C3C3; padding-bottom: 10px;" class="text-center">Key Collection App</h2>
		<div style="margin-top: 50px;" class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6" style="background-color: #f8f8f8;">
			<div style="margin-top: 8px;" class="text-center">
				<form class="form" action="index.php" method="POST" enctype="multipart/form-data">
					
					<label for="room_no" class="mb-2 mr-sm-3">Room Number*: </label>
					<input type="text" id="room_no" name="room_no" class="form-control mb-2 mr-sm-5" placeholder="Enter Key Number">

					<input type="submit" name="search"  value="Search" class="btn btn-success">
				</form>


				<div style="margin-top: 60px;">
					<table class="table table-bordered table-striped">
						<thead>
							<th>Recident</th>
							<th>Key</th>
							<!-- <th>Out</th> -->
						</thead>
						<tbody>
							<tr class="bg-primary">
								<td>Recident Name</td>
								<td>Key In</td>
								<td>Key Out</td>
							</tr>
							<?php  while($row = mysqli_fetch_assoc($result)):?>
							<tr>
								<td name="studid"><p><?php echo $row['studid'] ?></p></td> 
								<td> 
									<input type="checkbox" name="in">
								</td>
								<td>
									<input type="checkbox" name="out">
								</td>
							</tr>
						<?php endwhile; ?>
						</tbody>

						<input type="submit" id="submitbox" name="submitbox" value="Submit" class="btn btn-success">
					</table>
					
				</div>
				<div style="margin-bottom: 50px;"></div>
			</div>
			</div>
			<div class="col-md-3"></div>
		</div>
	</div>
</body>
</html>