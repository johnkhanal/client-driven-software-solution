<section class="py-5 login-page">
	<div class="container">
		<div class="col-md-8 mx-auto"> <?php include 'note.php'; ?></div>
		<div class="row pt-4">
			<div class="col-md-8 mx-auto bg-light">
				<div class="row align-items-center login-row">
					<div class="col-md-7">
						<div class="text-center card ml-5 bg-transparent border-0">
							<div class="card-body pt-0">
								<h1 class="text-green text-center">Login to your account (Visitor)</h1>
								<hr class="hr ml-auto">

								<form method="POST" class="text-center justify-content-center ">
									<div class="row form-group">
										<input type="username" class="form-control rounded-pill" name="username" placeholder="Enter username" required>
									</div>

									<div class="row form-group">
										<input type="password" class="form-control rounded-pill" name="password" placeholder="Enter Password" required>
									</div>

									<div class="row text-center">
										<input type="submit" name="login" value="Login" class="btn btn-primary btn-block rounded-pill">
									</div>
								</form>
								<hr>
								<div class="text-center">
									<a class="small" href="#">Forgot Password?</a>
								</div>
								<div class="text-center">
									<a class="small" href="registerForVisitor">Create an Account!</a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-5 text-right pr-0">
						<img src="../images/logo.jpg" class="img-fluid">
					</div>
				</div>
			</div>
		</div>
</section>