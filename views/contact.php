<section class="py-5">
	<div class="container">
		<div class="row align-items-centerr">
			<div class="col-md-6 col-sm-12">
				<h1 class="text-green text-center">Contact Us</h1>
				<hr class="hr ml-auto">
				<div class="card my-4 p-4 bg-light">
					<div class="card-body">
						<?php include 'note.php'; ?>

						<form method="POST">
							<div class="row form-group">
								<label class="col-form-label col-md-4">Firstname</label>
								<input type="text" class="form-control col-md-8" name="firstname" required>
							</div>

							<div class="row form-group">
								<label class="col-form-label col-md-4">Surname</label>
								<input type="text" class="form-control col-md-8" name="surname" required>
							</div>

							<div class="row form-group">
								<label class="col-form-label col-md-4">Email</label>
								<input type="email" class="form-control col-md-8" name="email" required>
							</div>

							<div class="row form-group">
								<label class="col-form-label col-md-4">Contact No.</label>
								<input type="text" class="form-control col-md-8" name="contact" required>
							</div>

							<div class="row form-group">
								<label class="col-form-label col-md-4">Message</label>
								<textarea class="form-control col-md-8" name="message" rows="5" required></textarea>
							</div>

							<div class="text-center">
								<input type="submit" name="submit" value="Send Message" class="btn btn-primary">
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<h1 class="text-green text-center">Our Location</h1>
				<hr class="hr ml-auto">
				<div class="mapouter pt-2">
					<div class="gmap_canvas">
						<iframe id="gmap_canvas" class="shadow rounded" src="https://maps.google.com/maps?q=university%20of%20northampton&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
						<a href="https://www.whatismyip-address.com/divi-discount/"></a>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>