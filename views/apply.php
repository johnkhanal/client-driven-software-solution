<section class="py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8 col-sm-12">
				<div class="text-center">
					<h1 class="text-green">Apply to Vacancy</h1>
					<hr class="hr ml-auto">
					<p class="mb-0"><?php echo $vacancy['position']; ?></p>
				</div>
				<div class="card my-4 p-4 bg-light">
					<div class="card-body">
						<?php include 'note.php'; ?>

						<form method="POST" enctype="multipart/form-data">
							<div class="row">
								<div class="col-md-6 mb-4">
									<label class="col-form-label">Firstname</label>
									<input type="text" class="form-control" name="firstname" required >
								</div>
								<div class="col-md-6 mb-4">
									<label class="col-form-label">Surname</label>
									<input type="text" class="form-control" name="surname" required >
								</div>
								<div class="col-md-6 mb-4">
									<label class="col-form-label">Contact Number</label>
									<input type="text" class="form-control" name="contact" required >
								</div>
								<div class="col-md-6 mb-4">
									<label class="col-form-label">Email</label>
									<input type="email" class="form-control" name="email" required >
								</div>
								<div class="col-md-6 mb-4">
									<label class="col-form-label">Resume</label>
									<input type="file" class="form-control" name="cv" required>
								</div>
							</div>

							<div class="mt-4">
								<input type="submit" name="submit" value="Apply" class="btn btn-primary">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
