<div class="modal fade details-1" id="details-1" tabindex="-1" role="dialog" aria-labelledby="details-1" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button class="close" type="button" data-dismiss="modal" aria-label="close">
				<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title text-center">Write bead</h4>
			</div>
			<hr>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6">
							<div class="center-block">
								<img src="img/beads/download.jpg" alt="wrist Bead" class="mydetails details img-responsive" />
							</div>
						</div>
						<!-- <div class="col-md-2"></div> -->
						<div class="col-md-6">
							<h4> Details</h4>
							<p> These wrist beads are amazing</p>
							<p> Price: $18.22</p>
							<hr>
							<form action="addtoCart.php" method="post">
								<div class="form-group">
									<div class="col-xs-3">
										<label for="quantity">Quantity:</label>
										<input type="text" class="form-control" id="quantity" name="quantity">
									</div><div class="col-xs-9"></div>
									<p>Available: 2</p>
								</div><br><br>
								<div class="form-group">
									<label for="size">Size:</label>
									<select name="size" id="size" class="form-control">
										<option value=""></option>
										<option value="2">2</option>
										<option value="4">4</option>
									</select>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button class="btn btn-default" data-dismiss="modal">Close</button>
				<button class="btn btn-warning" type="submit"> <span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart</button>
			</div>
		</div>
	</div>
</div>