<section class="py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8 col-sm-12">
				<div class="text-center">
					<h1 class="text-green">Buy Tickets</h1>
					<hr class="hr ml-auto">
					<p class="mb-0">Buy tickets online & Get 20% off</p>
				</div>
				<div class="card my-4 p-4 bg-light">
					<div class="card-body">
						<?php include 'note.php'; ?>

						<form method="POST">
							<div class="row">
								<div class="col-md-6 mb-4">
									<label class="col-form-label">Fullname</label>
									<input type="text" class="form-control" name="name" required >
								</div>
								<div class="col-md-6 mb-4">
									<label class="col-form-label">Number of tickets/persons</label>
									<input type="number" class="form-control" name="persons" id="persons" onchange="return viewPrice();" required>
								</div>
								<div class="col-md-6 mb-4">
									<label class="col-form-label">Contact Number</label>
									<input type="text" class="form-control" name="contact" required >
								</div>
								<div class="col-md-6 mb-4">
									<label class="col-form-label">Visiting Date</label>
									<input type="date" class="form-control" name="visiting_date" required onchange="return viewPrice();">
								</div>

								<div class="col-md-6 mb-4">
									<label class="col-form-label">Actual Price (£)</label>
									<input type="text" class="form-control" name="actual_price" id="actual_price" required >
								</div>
								<div class="col-md-6 mb-4">
									<label class="col-form-label">Payable Price (£)</label>
									<input type="text" class="form-control" name="total_price" id="total_price" required >
								</div>
							</div>
							
							<small class="text-muted">Standard cost per person: £110</small>
							<div class="mt-4">
								<input type="submit" name="submit" value="Buy Ticket" class="btn btn-primary">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
