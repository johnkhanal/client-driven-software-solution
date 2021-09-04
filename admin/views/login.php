<div class="row justify-content-center">
	<div class="col-xl-10 col-lg-12 col-md-9">
		<div class="card o-hidden border-0 shadow-lg my-5">
			<div class="card-body p-0">
				<div class="row">
					<div class="col-lg-8 mx-auto">
						<div class="p-5">
							<?php include_once 'note.php'; ?>
							
							<div class="text-center">
								<h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
							</div>
							<form class="user" method="POST">
								<div class="form-group">
									<input type="text" class="form-control form-control-user" placeholder="Enter Username" name="username">
								</div>
								<div class="form-group">
									<input type="password" class="form-control form-control-user" placeholder="Enter Password" name="password">
								</div>
								<div class="form-group">
									<div class="custom-control custom-checkbox small">
										<input type="checkbox" class="custom-control-input" id="customCheck">
										<label class="custom-control-label" for="customCheck">Remember Me</label>
									</div>
								</div>
								<input type="submit" name="login" value="Login" class="btn btn-primary btn-user btn-block">
							</form>
							<hr>
							<div class="text-center">
							</div>
							<div class="text-center">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>