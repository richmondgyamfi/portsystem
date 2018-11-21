<?php 
include 'header.php';
 
include ('php/regscript.php');
 ?>

<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div>
				<form style="margin-top: 50px; background-color: #C3C3C3; border: 2px solid" method="POST" class="form-group text-center">
					<div style="background-color: black;">
					<h2 style="margin-top: 0px; padding: 20px; color: white;" class="text-center">Sign Up</h2>
					</div>
					<br>
					<!-- <div id="errors">
					
					</div> -->
					<?php 
					 if (!empty($errors)) {
						echo display_errors($errors);
						}
					 ?>

		
					<div style="padding: 20px;">
						<input type="text" name="studid" id="studid" class="form-control" placeholder="Student ID" >
						<!-- <p><?php echo $stuerr; ?></p> -->
						<br><br>
						<!-- <label for = "studid">Student ID</label> -->
						<input type="password" name="password" id="password" class="form-control" placeholder="Password" >
						<!-- <p><?php echo $passerror; ?></p>
						<p><?php echo $passerr; ?></p> -->
						<br><br>
						<input type="password" name="re_password" id="re_password" class="form-control" placeholder="Reenter Password" >
						<!-- <p><?php echo $passerr; ?></p>
						<p><?php echo $passerror; ?></p> -->
					</div>
					<button type="submit" name="submit" class="btn btn-dark " style="margin-bottom: 20px;">Submit</button>
					<p>Already a user <a href="login.php">login Here</a></p>
				</form>
			</div>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>
</body>
</html>