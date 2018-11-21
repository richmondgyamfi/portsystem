<?php 
	$dbcon = mysqli_connect('localhost','root','','hallkey');

	if (mysqli_connect_errno()) {
		# code...
		echo "Database connection failed: " . mysqli_connect_error();
		die();
	}

	<?php 
	
	if (isset($_POST['search'])) {

	$valueToSearch = $_POST['room_no'];
	$query = "SELECT hall_rooms.room_id, hall_rooms.room_no, hall_rooms.hallid, hall_room_occupants.key_in_out, hall_room_occupants.id, hall_room_occupants.studid, hall_room_occupants.room_id FROM hall_rooms, hall_room_occupants WHERE hall_rooms.room_id=hall_room_occupants.room_id AND room_no = '$valueToSearch' AND hallid = 'SRC' ORDER BY hall_rooms.room_id";
	$search_result = $dbcon -> query($query);
	
	}

	 ?>
?>