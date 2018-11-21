<?php 
$sql = "SELECT * FROM categories WHERE parent = 0";
$parentquery = $dbcon->query($sql);
 ?>
	<div class="back">
		<nav class="navbar navback navbar-default navbar-fixed-top" role="navigation">
			<div class="container-fluid">
			<div class="navbar-header" style="text-align: center;">
				<a  class="hd-top navbar-brand" href="index.html">DG Local Shop</a>
				<button type="button " class="navbar-toggle btn btn-default" data-toggle="collapse" data-target="#example-navbar-collapse"> Menu          
	                <span class="sr-only">Toggle navigation</span>          
	                <span class="icon-bar"></span>          
	                <span class="icon-bar"></span>          
	                <span class="icon-bar"></span>       
	                <span class="icon-bar"></span>       
            	</button>
            	</div>
            	<div class="collapse navmen navbar-collapse" id="example-navbar-collapse">    
				<ul class="nav navbar-nav">
					<li><a href="loginpage.php">Login/Register</a></li>
					<li><a href="#">Contact</a></li>
					<li><a href="#">Order item</a></li>
					<?php while($parent = mysqli_fetch_assoc($parentquery)): ?>             					
					<?php $parent_id = $parent['id']; 
						$sql2 = "SELECT * FROM categories WHERE parent == '$parent_id'";
						$cquery = $db->query($sql2);
					?>
					<li class="dropdown">             
		                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $parent['categories'];?> <span class="caret"></span></a>
		                <ul class="dropdown-menu" role="menu">              
		                    <li><a class="text-center" href="#">Mens Wear <span class="caret"></span></a></li>
		                    <li><a class="text-center" href="#">Lady's Wear</a></li>
		                    <li><a class="text-center" href="#">Boys Wear</a></li>
		                    <li><a class="text-center" href="#">Girls Wear</a></li>
		                </ul> 
						         
	                </li>
					<?php endwhile;?>
					<li><a href="index.php" class="active">All Items</a></li
				</ul>
				</div>
			</div>
		</nav>
	<!-- 	<nav class="navbar navbar-fixed-top">
			<div class="container">
				<div class="col-md-4">
					<h1 class="hd-top"><a href="index.html">DG Local Shop</a></h1>
				
				</div>
				<div class="col-md-8">
					<ul class="nav nav-tabs">
						<li><a href="loginpage.php">Login/Register</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Order item</a></li>
						<li><a href="index.php" class="active">All Items</a></li>
						
					</ul>
				</div>
				
			</div>	
		</nav> -->

		<h1 id="headid">DG ENT.</h1>
	</div>
