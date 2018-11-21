
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
  <link rel="shortcut icon" href="">
  <link href="css/font-awesome.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>

<body class="container">

	<?php include($content_view);?>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>