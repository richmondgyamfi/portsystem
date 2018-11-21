<!DOCTYPE html>
<html>
<head>
	<title>Welcome page</title>
	<link rel="icon" type="image/gif" href="img/dglogo.png" sizes="16x16">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<p>Welcome <?php echo $_POST["username"]; ?> <br>
		Your email is: <?php echo $_POST["email"]; ?>
	</p>
</body>
</html>