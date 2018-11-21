<?php 
include 'header.php';
 ?>
 <body>
 	<nav class="navbar navbar-primary fixed-top bg-dark flex-md-nowrap p-0 shadow">
	    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Leave Setup</a>
	      <ul class="navbar-nav px-3">
	        <li class="nav-item text-nowrap">
	          <!--<a class="nav-link " href="#logout"><button class="btn btn-">Sign out</button></a>-->
	        </li>
	      </ul>
	</nav>
<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
			<div class="col-md-6">
				<form style="margin-top: 80px; background-color: #f0f0f0; border: 2px solid">
					<div style="background-color: #4E545B;">
					<h2 style="margin-top: 0px; padding: 20px; color: white;" class="text-center">Leave Setup</h2>
					</div>
					<div style="padding: 10px;">
					<div class="form-group">
					<label for="position">Position:</label>
					<select class="form-control" id="position" name="position">
						<option></option>
						<option>lecturer</option>
					</select>
					</div>
					<br>
					<div class="form-group">
					<label for="days">Days:</label>
					<input class="form-control" type="text" name="days" id="days">
					</div>
					<button type="submit" name="submit" class="btn btn-secondary ">Submit</button>
					</div>
				</form>
				</table>
				<br>
				<div style="text-align: right;">
					<a href="index.php">Back</a>
				</div>
 			</div>
 			<div class="col-md-3"></div>
 		</div>
 	</div>
 </body>