<div class="row justify-content-center">
	<div class="col-xl-10 col-lg-12 col-md-9">
		<div class="card o-hidden border-0 shadow-lg my-5">
			<div class="card-body p-0">
				<div class="row">
					<div class="col-lg-8 mx-auto">
						<div class="p-5">
							
							<?php include_once 'note.php'; ?>

							<div class="text-center">
								<h1 class="h4 text-gray-900 mb-5">Add Admin</h1>
							</div>

							<form class="user" method="POST" action="">
								<div class="row form-group">
									<label class="col-form-label col-md-4">Firstname</label>
									<input type="text" class="form-control form-control-user col-md-8" name="firstname" required>
								</div>
								<div class="row form-group">
									<label class="col-form-label col-md-4">Surname</label>
									<input type="text" class="form-control form-control-user col-md-8" name="surname" required>
								</div>
								<div class="row form-group">
									<label class="col-form-label col-md-4">Username</label>
									<input type="text" class="form-control form-control-user col-md-8" name="username" required>
								</div>
								<div class="row form-group">
									<label class="col-form-label col-md-4">Password</label>
									<input type="password" class="form-control form-control-user col-md-8" name="password" required>
								</div>

								<div class="row form-group">
									<label class="col-form-label col-md-4"> Admin Type</label>
									<select name="role" class="form-control col-md-8">
									     <option value="root" selected> Root </option>
										 <option value="manager"> Manager </option>
										 <option value="zookeeper"> Zoo Keeper </option>
									</select>
									
								</div>

								<div class="row form-group">
									<label class="col-form-label col-md-4">Confirm Password</label>
									<input type="password" class="form-control form-control-user col-md-8" name="confirm_password" required>
								</div>

								<div class="row justify-content-center">
									<input type="submit" name="submit" value="Register" class="btn btn-primary btn-user btn-block">
								</div>
							</form>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>