<div class="row justify-content-center">
	<div class="col-xl-10 col-lg-12 col-md-9">
		<div class="card o-hidden border-0 shadow-lg my-5">
			<div class="card-body p-0">
				<div class="row">
					<div class="col-lg-8 mx-auto">
						<div class="p-5">
							
							<?php include_once 'note.php'; ?>

							<div class="text-center">
								<h1 class="h4 text-gray-900 mb-5">Edit Admin</h1>
							</div>

							<form class="user" method="POST" action="">
								<input type="hidden" name="id" value="<?php echo $admin['admin_id']; ?>">

								<div class="row form-group">
									<label class="col-form-label col-md-4">Firstname</label>
									<input type="text" class="form-control form-control-user col-md-8" name="firstname" value="<?php echo $admin['firstname']; ?>">
								</div>
								<div class="row form-group">
									<label class="col-form-label col-md-4">Surname</label>
									<input type="text" class="form-control form-control-user col-md-8" name="surname" value="<?php echo $admin['surname']; ?>">
								</div>
								<div class="row form-group">
									<label class="col-form-label col-md-4">Username</label>
									<input type="text" class="form-control form-control-user col-md-8" name="username" value="<?php echo $admin['username']; ?>">
								</div>

								<div class="row justify-content-center">
									<input type="submit" name="update" value="Update" class="btn btn-primary btn-user mr-3 px-5">
									<a href="admins" class="btn btn-success btn-user px-5">Cancel</a>
								</div>
							</form>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>