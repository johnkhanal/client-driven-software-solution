<section class="py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8 col-sm-12">
				<div class="text-center">
					<h1 class="text-green">Register Now</h1>
					<hr class="hr ml-auto">
					<small>Wants to sponser a animal? Please fill the form to register.</small>
				</div>
				<div class="card my-4 p-4 bg-light">
					<div class="card-body">
						<?php include 'note.php'; ?>

						<form method="POST" enctype="multipart/form-data">
							<p>User Information</p>
							<div class="row form-group">
								<div class="col-md-6">
									<input type="text" class="form-control" name="username" placeholder="Username" required>
								</div>
								<div class="col-md-6 mb-4">
									<input type="password" class="form-control" name="password" placeholder="Password" required>
								</div>
								<div class="col-md-6">
									<input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required >
								</div>
							</div>
							
							<div class="form-check form-group">
								<input class="form-check-input" type="checkbox" id="accept_terms" name="accept_terms" value="1">
								<label class="form-check-label col-md-6">By clicking this, i hereby agree to the <a class="" data-toggle="modal" data-target="#terms">terms and conditions</a> of the zoo.</label>
							</div>

							<div class="mt-4">
								<input type="submit" name="register" value="Register" class="btn btn-primary">
							</div>
						</form>
						<div class="mt-4 text-muted">
							Already registered? Go to <a href="visitorLogin">Login Page</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<div class="modal fade" id="terms" tabindex="-1" aria-labelledby="termsLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="termsLabel">Terms and Conditions</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>