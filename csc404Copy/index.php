<?php
	require_once 'php/connect.php';
	include 'header.php';	
	include 'navigation.php';
	include 'headcont.php';
	include 'leftbar.php';

?>
	
		
		<div class="col-md-8">
			<div class="row">
				<h3 class="text-center" style="text-align: center;">Product List</h3>
				<div class="col-md-4">
					<h5>Wrist Bead</h5>
					<img width="auto" height="120" src="img/beads/download.jpg" alt="wrist Bead"/>
					<p class="list-price text-danger"> List Price <s>$20.11</s></p>
					<p class="price">Our Price: $18.22</p>
					<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
				</div>

				<div class="col-md-4">
					<h5>Earring bead</h5>
					<img width="auto" height="120" src="img/beads/bead-earrings.jpg" alt="earring Bead"/>
					<p class="list-price text-danger"> List Price <s>$9.99</s></p>
					<p class="price">Our Price: $18.22</p>
					<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
				</div>

				<div class="col-md-4">
					<h5>Earring bead</h5>
					<img width="auto" height="120" src="img/beads/earing.jpg" alt="wrist Bead"/>
					<p class="list-price text-danger"> List Price <s>$20.11</s></p>
					<p class="price">Our Price: $18.22</p>
					<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
				</div>

				<div class="col-md-4">
					<h5>Earring bead</h5>
					<img width="auto" height="120" src="img/beads/earring.jpg" alt="wrist Bead"/>
					<p class="list-price text-danger"> List Price <s>$20.11</s></p>
					<p class="price">Our Price: $18.22</p>
					<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
				</div>

				<div class="col-md-4">
					<h5>Earring bead</h5>
					<img width="auto" height="120" src="img/beads/earrings.jpg" alt="wrist Bead"/>
					<p class="list-price text-danger"> List Price <s>$20.11</s></p>
					<p class="price">Our Price: $18.22</p>
					<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
				</div>

				<div class="col-md-4">
					<h5>Necklace</h5>
					<img width="auto" height="120" src="img/beads/images1.jpg" alt="Necklace Bead"/>
					<p class="list-price text-danger"> List Price <s>$20.11</s></p>
					<p class="price">Our Price: $18.22</p>
					<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
				</div> 
			</div>
		</div>
	

	<!-- The Modal -->

	<?php 
		include 'rightbar.php';
		include 'modal.php';
		include 'footer.php';
	 ?>