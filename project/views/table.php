<?php 
session_start();
		$name=$_SESSION['Acc_full'];
		$access=$_SESSION['Acc_priv'];
	  include('dbconfig.php');
	  if (isset($_POST["submit"])) {

		    $file =$_FILES["file"]["name"];
		    $folder ="img/";
		    move_uploaded_file($_FILES["file"]["tmp_name"], "$folder".$file);

		    if (!empty($file)) {
		    	$query1="INSERT INTO box(filename,full_name) VALUES('$file','$name')";
				$result=mysqli_query($con,$query1);
		    }
	  }
 ?>


<table class="table"> 
	<caption><?="<p>Welcome $name<p>"; ?></caption> 
	<thead> 
		<tr> <th>#</th> <th>File Name</th> <th>Source</th> <th>Date-Time</th> </tr> 
	</thead>
	<tbody> 
	<?php 
	    	$query="SELECT * FROM box";
			$result_run=mysqli_query($con,$query);
			while ($download=mysqli_fetch_assoc($result_run)) {
				 $user_name=$download['full_name'];
                  $date=$download['date_time'];
                  $id=$download['id'];
		?>
			<?php //echo "<a href=\"img/".$download["filename"]."\" download>".$download["filename"]."</a><br/>"; ?>
		<?php if($access == 'Granted')
				{
					echo "<br/>
			 <tr> <th scope='row'>$id</th> <td><a href='img/".$download["filename"]."' download>".$download["filename"]."</a></td> <td>$user_name</td> <td>$date</td> </tr>";
				}else{
					echo "<br/>
			 <tr> <th scope='row'>$id</th> <td><a href='#'>".$download["filename"]."</a></td> <td>$user_name</td> <td>$date</td> </tr>";
				}
			 
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
