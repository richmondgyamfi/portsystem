<?php 
session_start();
		
		
	  include('dbconfig.php');
	  if (isset($_POST["submit"])) {

		    $file =$_FILES["file"]["name"];
		    $folder ="img/";
		    move_uploaded_file($_FILES["file"]["tmp_name"], "$folder".$file);

		    if (!empty($file)) {
		    	$query1="INSERT INTO box(filename,full_name) VALUES('$file','$name')";
				$result=mysqli_query($con,$query1);
		    }
	  }elseif (isset($_POST["submit1"])) {
	  	$user=$_POST["user"];
	  	
	  	
	  		$query2="UPDATE book SET privilage='Granted' WHERE username='$user'";
			$result2=mysqli_query($con,$query2);
	  }elseif(isset($_POST["submit2"])){
	  	$user=$_POST["user"];
	  		$query2="UPDATE book SET privilage='Denied' WHERE username='$user'";
			$result2=mysqli_query($con,$query2);
	  	}
	  	# code...
 ?>



<!DOCTYPE html>
<html>
<head>
	<?php
		include('pageloader.php');
	?>
  <title><?php echo $title; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="" />
  <!-- Bootstrap -->
   <link href="switch.css" rel="stylesheet">
  <link rel="shortcut icon" href="">
  <link href="css/font-awesome.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>

<body class="container">

	<table class="table"> 
	<caption></caption> 
	<thead> 
		<tr> <th>#</th> <th>Full Name</th> <th>Username</th> <th>Status</th> <th>Action</th> </tr> 
	</thead>
	<tbody> 
	<?php 
	    	$query="SELECT * FROM book";
			$result_run=mysqli_query($con,$query);
			while ($download=mysqli_fetch_assoc($result_run)) {
				 $full_name=$download['full_name'];
                 $user_name=$download['username']; 
                 $id=$download['id'];
                 $priv=$download['privilage'];
		?>
			<?php //echo "<a href=\"img/".$download["filename"]."\" download>".$download["filename"]."</a><br/>"; ?>
		<?php 
					echo "<br/>
			 <tr> <th scope='row'>$id</th> <td>$full_name</td> <td>$user_name</td> <td>
			 $priv
			 
			 </td><td>
			 <form method='post' action=''>
			 <div class='form-group'>
			 	<input type='hidden' name='user' value=$user_name ></input>
			 	<button type='submit' name='submit2' class='btn btn-default btn-sm'><i class='' aria-hidden='true'></i>&nbsp;Deny</button>
			 	<button type='submit' name='submit1' class='btn btn-default btn-sm'><i class='' aria-hidden='true'></i>&nbsp;Grant</button>
			 	</div>
			 	</form>
			 </td></tr>";
				
			 
			}
		 ?>	
	
	 </tbody> 
</table> 

<div class="row" style="margin-top: 40px">
	<div class="col-lg-4 well">
		<form method="post" action="" enctype="multipart/form-data">
			<div class="form-group">
			    <input type="file" id="exampleInputFile" name="file">
			</div>
			<button type="submit" name="submit" class="btn btn-default btn-sm"><i class="fa fa-upload" aria-hidden="true"></i>&nbsp;Upload file</button>
		</form>
	</div>
</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>