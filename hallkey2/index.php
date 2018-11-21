<!DOCTYPE html>
<html>
<head>
	<title>Key Collection App</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<?php 
require_once 'php/connect.php';
$errors = array();

//$valueToSearch = $_POST['room_no'];

if (isset($_POST['search'])) {

	//echo "The room number is: " .$_POST['room_no'];
$valueToSearch = $_POST['room_no'];
	$query = "SELECT hall_rooms.room_id, hall_rooms.room_no, hall_rooms.hallid, hall_room_occupants.key_in_out, hall_room_occupants.id, hall_room_occupants.studid, hall_room_occupants.room_id FROM hall_rooms, hall_room_occupants WHERE hall_rooms.room_id=hall_room_occupants.room_id AND room_no = '$valueToSearch' AND hallid = 'SRC' ORDER BY hall_rooms.room_id";
	$search_result = $dbcon -> query($query);

// function searchtable($query){
// 	$dbcon = mysqli_connect('localhost','root','','hallkey');
// 	$filter_result = mysqli_query($dbcon, $query);

// 	return $filter_result;
// }
if (isset($_POST['submitbox'])) {
	$keyno = $_POST['room_no'];
	$student = $_POST['studid'];
	$radiobtn = $_POST['radiobtn'];


}


}
?>

<body>
	<div class="container">
		<h2 style="margin-top: 20px; background-color: #C3C3C3; padding-bottom: 10px;" class="text-center">Key Collection App</h2>
		<div style="margin-top: 50px;" class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6" style="background-color: #f8f8f8;">
			<div style="margin-top: 8px;" class="text-center">
				<form class="form" action="index.php" method="POST" name="formview" enctype="multipart/form-data">
					
					<label for="room_no" class="mb-2 mr-sm-3">Room Number*: </label>
					<input type="text" id="room_no" name="room_no" class="form-control mb-2 mr-sm-5" placeholder="Enter Key Number">

					<input type="submit" name="search"  value="Search" class="btn btn-success">
				


				<!-- <?php 
				//if (isset($_POST['submitbox'])) {
					//if (isset($_POST['radio'])) {
						# code...
						//echo "you select: " .$_POST['radio'];
				//	}
				//}
				 ?> -->
				<div style="margin-top: 60px;">
					<table class="table table-bordered table-striped">
						<thead>
							<th>Recident</th>
							<th>Key</th>
							<!-- <th>Out</th> -->
						</thead>
						<tbody>
							<?php  ?>
							<tr class="bg-primary">
								<td>Recident Name</td>
								<td>Key In</td>
								<!-- <td>Key Out</td> -->
							</tr>
							
							<?php
							
							$valueToSearch = $_POST['room_no'];
							$query = "SELECT hall_rooms.room_id, hall_rooms.room_no, hall_rooms.hallid, hall_room_occupants.key_in_out, hall_room_occupants.id, hall_room_occupants.studid, hall_room_occupants.room_id FROM hall_rooms, hall_room_occupants WHERE hall_rooms.room_id=hall_room_occupants.room_id AND room_no = '$valueToSearch' AND hallid = 'SRC' ORDER BY hall_rooms.room_id";
							$search_result = $dbcon -> query($query);
							$search_result = $dbcon -> query($query);
							// echo "The room number is: " .$_POST['room_no'];
							// echo "The room number is: " .$_POST['radiobtn'];
							 while ($row = mysqli_fetch_assoc($search_result)): ?>
							<tr>
								<td> <input type="hidden" name="studid" value="<?php echo $row['studid']; ?>"><?php echo $row['studid']; ?>
								</td>
								<td> 
									<input type="radio" id="radiobtn" name="radiobtn" <?=((array_key_exists('radiobtn', $_POST) && ($_POST['radiobtn'] == 0))?'1':'0'); ?> value="<?php echo $row['studid']; ?>" checked="checked">

									<input type="hidden" name="studid">
								</td>
						</tr>
						<?php endwhile; ?>
						</tbody>


					</table>
					<input type="submit" id="In" name="In" value="In" class="btn btn-success" onclick="get()" />
					<input type="submit" id="Out" name="Out" value="Out" class="btn btn-success" onclick="get()" />
				</div>
				</form>
				<div style="margin-bottom: 50px;"></div>
			</div>
			</div>
			<div class="col-md-3"></div>
		</div>
	</div>
</body>

<script>

	function get(){

	// 	if (document.getElementById("radiobtn").checked == true) {
	// 		document.getElementById("radiobtn").value = 1;
	// 	} else{
	// 		document.getElementById("radiobtn").value = 0;
	// 	}

	// 	console.log("The value is " document.getElementById("radiobtn").value);

	var getVal = document.formview.radiobtn.value;
	alert(getVal);

	}

</script>

</html>