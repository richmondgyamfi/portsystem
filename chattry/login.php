<?php 

include 'header.php';

include 'php/loginscript.php';

 ?>

<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div>
				<form style="margin-top: 50px; background-color: #C3C3C3; border: 2px solid" method="POST" class="form-group text-center">
					<div style="background-color: black;">
					<h2 style="margin-top: 0px; padding: 20px; color: white;" class="text-center">Login</h2>
					</div>
					<br>
					<?php 
					 if (!empty($errors)) {
						echo display_errors($errors);
						}
					 ?>
					<div style="padding: 20px;">
						<!-- <label for = "studid">Student ID</label> -->
						<input type="text" name="studid" id="studid" class="form-control" placeholder="Student ID"><br><br>
						<!-- <label for = "studid">Student ID</label> -->
						<input type="password" name="password" id="password" class="form-control" placeholder="Password">
						
					</div>
					<button type="submit" name="submit" class="btn btn-dark ">Submit</button>
					<p  style="padding: 20px;">New user? Click <a href="register.php">Here</a> to register</p>
				</form>
			</div>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>
</body>
</html>