 <?php
 	$error= "";

 	$servername = "localhost";
 	$username = "root";
 	$password = "";
 	$dbname = "todo";

 	$dbcon = mysqli_connect($servername, $username, $password, $dbname);

 	if (isset($_POST['submit'])) {
 		# code...
 		$task = $_POST['task'];
 		if (empty($task)) {
 			$error = "Please fill in the task";
 		}
 		else{

 		mysqli_query($dbcon, "INSERT INTO tasks (task) VALUES ('$task')");
 		header('location: index.php');
 		}
 	}
 	if (isset($_GET['del_task'])) {
 		$id = $_GET['del_task'];
 		mysqli_query($dbcon, "DELETE FROM tasks WHERE id = $id");
 		header('location: index.php');
 	}

 	$tasks = mysqli_query($dbcon, "SELECT * FROM tasks");
  ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Todo App</title>
 	<link rel="stylesheet" type="text/css" href="css/todo.css">
 </head>
 <body>
 	<div class="todohead">
 		<h2>Todo list</h2>
 	</div>

 	<form class="formclass" method="POST" action="index.php">
 		<?php if (isset($error)) { ?>
 			<p id="err"><?php echo $error; ?></p>
 		<?php } ?>
 		<input type="text" name="task" class="taskstyle">
 		<button type="submit" class="task_button" name="submit">Add Task</button>
 	</form>

 	<table>
 		<thead>
 			<tr>
 				<th>No</th>
 				<th> Task</th>
 				<th>Action</th>
 			</tr>
 		</thead>
 		<tbody>
 			<?php $i = 1; while ($row = mysqli_fetch_array($tasks)) { ?>
 			<tr>
 				<td><?php echo $i; ?></td>
 				<td class="tasklist"><b><?php echo $row['task'] ?></b></td>
 				<td class="delete"><a href="index.php?del_task=<?php echo $row['id']; ?>">x</a></td>
 			</tr>
 			<?php $i++;}?>
 			
 		</tbody>
 	</table>
 </body>
 </html>