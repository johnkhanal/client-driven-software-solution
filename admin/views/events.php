<div class="row justify-content-center">
	<div class="col-xl-10 col-lg-12 col-md-9">
		<div class="card o-hidden border-0 shadow-lg my-5">
			<div class="card-body p-0">
				<div class="row">
					<div class="col-lg-8 mx-auto">
						<div class="p-5">
							
							<?php include_once 'note.php'; ?>

							<div class="text-center">
								<h1 class="h4 text-gray-900 mb-5">Add Event</h1>
							</div>

							<form class="user" method="POST" action="" enctype="multipart/form-data">
								<div class="row form-group">
									<label class="col-form-label col-md-4">Event Name</label>
									<input type="text" class="form-control form-control-user col-md-8" name="eventName" required>
								</div>
								<div class="row form-group">
									<label class="col-form-label col-md-4">Event Description</label>
									<input type="text" class="form-control form-control-user col-md-8" name="description" required>
								</div>
								<div class="row form-group">
									<label class="col-form-label col-md-4">Event Date</label>
									<input type="date" class="form-control form-control-user col-md-8" name="eventDate" required>
								</div>
								<div class="row form-group">
									<label class="col-form-label col-md-4">Number of Days </label>
									<input type="text" class="form-control form-control-user col-md-8" name="noOfDays" required>
								</div>
                                
                                <div class="row form-group">
                                    <label class="col-form-label col-md-4">Image</label>
                                    <div>
                                        <input type="file" name="sponsorImage" class="form-control form-control-user col-md-12" >
                                    </div>
                                </div>
									

								<div class="row justify-content-center">
									<input type="submit" name="submit" value="Add Event" class="btn btn-primary btn-user btn-block">
								</div>
							</form>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>