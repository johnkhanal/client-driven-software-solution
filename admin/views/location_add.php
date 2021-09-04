<div class="row justify-content-center">
	<div class="col-xl-10 col-lg-12 col-md-9">
		<div class="card o-hidden border-0 shadow-lg my-5">
			<div class="card-body p-0">
				<div class="row">
					<div class="col-lg-8 mx-auto">
						<div class="p-5">
							
							<?php include_once 'note.php'; ?>

							<div class="text-center">
								<h1 class="h4 text-gray-900 mb-5">Add Location</h1>
							</div>

							<form class="user" method="POST" action="">
								<div class="row form-group">
									<label class="col-form-label col-md-3">Location</label>
									<input type="text" class="form-control form-control-user col-md-9" name="location" required>
								</div>

								<div class="row justify-content-center">
									<input type="submit" name="submit" value="Submit" class="btn btn-primary btn-user btn-block">
								</div>
							</form>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>