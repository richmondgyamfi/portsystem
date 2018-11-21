
<?php 
	  require 'database.php';
	  if (isset($_POST["submit"])) {

		    $file =$_FILES["file"]["name"];
		    $folder ="img/";
		    move_uploaded_file($_FILES["file"]["tmp_name"], "$folder".$file);

		    if (!empty($file)) {
		    	$query="INSERT INTO file(filename) VALUES('$file')";
				$result=mysqli_query($connection,$query);
		    }
	  }
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>webinterface</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="" />
  <!-- Bootstrap -->
  <link rel="shortcut icon" href="">
  <link href="css/font-awesome.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>

<body class="container">
<div class="row" style="margin-top: 40px">
	<div class="col-lg-4 well">
		<form method="post" action="" enctype="multipart/form-data">
			<div class="form-group">
			    <input type="file" id="exampleInputFile" name="file">
			</div>
			<button type="submit" name="submit" class="btn btn-default btn-sm"><i class="fa fa-upload" aria-hidden="true"></i>&nbsp;Upload file</button>
		</form>
	</div>

	<div class="col-lg-8">
		<?php 
	    	$query="SELECT * FROM file";
			$result_run=mysqli_query($connection,$query);
			while ($download=mysqli_fetch_assoc($result_run)) {
		?>
			<?php //echo "<a href=\"img/".$download["filename"]."\" download>".$download["filename"]."</a><br/>"; ?>
		<?php 
			 echo "<a href='img/".$download["filename"]."' download>".$download["filename"]."</a><br/>";
			}
		 ?>
	</div>
</div>
<table class="table"> 
	<caption>Optional table caption.</caption> 
	<thead> 
		<tr> <th>#</th> <th>First Name</th> <th>Last Name</th> <th>Username</th> </tr> 
	</thead>
	<tbody> 
	<tr> <th scope="row">1</th> <td>Mark</td> <td>Otto</td> <td>@mdo</td> </tr>
	<tr> <th scope="row">2</th> <td>Jacob</td> <td>Thornton</td> <td>@fat</td> </tr> 
	<tr> <th scope="row">3</th> <td>Larry</td> <td>the Bird</td> <td>@twitter</td> </tr> </tbody> 
</table>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>```````
</html>