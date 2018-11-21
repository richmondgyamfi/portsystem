<!DOCTYPE html>
<html>
<head>
	<title>DG Ent.</title>
	<link rel="icon" type="image/gif" href="img/dglogo.png" sizes="16x16">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	 <?php 
		include 'header.php';
	 ?>
		<div class="log-id">
			<div class="loginid container2">
				
				<form method="POST" action="#">
					<h2 style="text-align: center">Login</h2>
					<hr>
					<div class="imgcontainer">
				    <img src="img/ava/avatar.png" alt="Avatar" class="avatar">
				  </div>

					<label for="username"><b>Username: </b></label>
					<input type="text" name="username" placeholder="Username" required>
					<br><br>

					<label for="password"><b>Password: </b></label>
					<input type="password" name="password" placeholder="Password" required>
					<br><br>

					<button type="submit" name="Login"> Login</button>
					<label>
				      <input type="checkbox" checked="checked" name="remember"> Remember me
				    </label>
					<br>
				</form>
			</div>
			<div class="container" style="background-color:#f1f1f1">
		    <p class="sig">New User? <a href="signup.php">Sign Up</a></p>
		    <span class="psw">Forgot <a href="#">password?</a></span>
		  </div>
		</div>
</body>
</html>
