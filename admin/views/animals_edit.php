<div class="row justify-content-center">
	<div class="col-xl-10 col-lg-12 col-md-9">
		<div class="card o-hidden border-0 shadow-lg my-5">
			<div class="card-body p-0">
				<div class="row">
					<div class="col-lg-12 mx-auto">
						<div class="p-5">
							
							<?php include_once 'note.php'; ?>

							<div class="text-center">
								<h1 class="h4 text-gray-900 mb-5">Edit Animals</h1>
							</div>

							<form class="user" method="POST" action="">
								<input type="hidden" name="id" value="<?php echo $animal['animal_id']; ?>">

								<p class="font-weight-bold">Basic Information <small class="text-danger">(All information are required)</small></p>
								<hr>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="col-form-label">Species Name</label>
											<input type="text" class="form-control form-control-user1" name="species_name" value="<?php echo $animal['species_name']; ?>">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label class="col-form-label">Given Name</label>
											<input type="text" class="form-control form-control-user1" name="given_name" value="<?php echo $animal['given_name']; ?>">
										</div>
									</div>

									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">Gender</label>
											<div>
												<input type="radio" name="gender" value="Male" checked>
												<label>Male</label>
												<input type="radio" name="gender" value="Female" class="ml-4" <?php echo $animal['gender'] == 'Female' ? 'checked' : ''; ?>>
												<label>Female</label>
											</div>
										</div>
									</div>

									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">Date of Birth</label>
											<input type="date" class="form-control form-control-user1" name="dob" value="<?php echo $animal['dob']; ?>">
										</div>
									</div>

									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">Life Span</label>
											<input type="text" class="form-control form-control-user1" name="life_span" placeholder="2 years" value="<?php echo $animal['life_span']; ?>">
										</div>
									</div>
									

									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">Date Joined</label>
											<input type="date" class="form-control form-control-user1" name="date_joined" value="<?php echo $animal['date_joined']; ?>">
										</div>
									</div>

									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">Dimension</label>
											<input type="text" class="form-control form-control-user1" name="dimension" placeholder="height, weight" value="<?php echo $animal['dimension']; ?>">
										</div>
									</div>

									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">Population Distribution</label>
											<input type="text" class="form-control form-control-user1" name="population_distribution" value="<?php echo $animal['population_distribution']; ?>">
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label class="col-form-label">Classification</label>
											<select name="classification_id" class="form form-control form-control-user1" required>
												<?php foreach ($classifications as $class) {
													if ($class['class_id'] == $animal['classification_id']) {
														echo '<option value="'.$class['class_id'].'" selected>'.$class['name'].'</option>';
													} else {
														echo '<option value="'.$class['class_id'].'">'.$class['name'].'</option>';
													}
													
												} ?>
											</select>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label class="col-form-label">Location</label>
											<select name="location_id" class="form form-control form-control-user1" required>
												<?php foreach ($locations as $loc) {
													if ($loc['location_id'] == $animal['location_id']) {
														echo '<option value="'.$loc['location_id'].'" selected>'.$loc['location'].'</option>';
													} else {
														echo '<option value="'.$loc['location_id'].'">'.$loc['location'].'</option>';
													}
												} ?>
											</select>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label class="col-form-label">Diet Requirement</label>
											<textarea class="form-control" name="diet_requirement"><?php echo $animal['diet_requirement']; ?></textarea>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label class="col-form-label">Habitat Description</label>
											<textarea class="form-control" name="habitat_desc"><?php echo $animal['habitat_desc']; ?></textarea>
										</div>
									</div>
								</div>

								<br>
								<p class="font-weight-bold">In case of Bird</p>
								<hr>

								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">Nest Construction Method</label>
											<input type="text" class="form-control form-control-user1" name="nest" value="<?php echo $animal['nest']; ?>">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">Clutch Size</label>
											<input type="text" class="form-control form-control-user1" name="clutch_size" value="<?php echo $animal['clutch_size']; ?>">
										</div>
									</div>

									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">Wings Span</label>
											<input type="text" class="form-control form-control-user1" name="wing_span" value="<?php echo $animal['wing_span']; ?>">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">Ability to Fly</label>
											<div>
												<input type="radio" name="fly" value="Yes" <?php echo $animal['fly'] == 'Yes' ? 'checked' : ''; ?>>
												<label>Yes</label>
												<input type="radio" name="fly" value="No" class="ml-4" <?php echo $animal['fly'] == 'No' ? 'checked' : ''; ?>>
												<label>No</label>
											</div>
										</div>
									</div>

									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">Colour</label>
											<input type="text" class="form-control form-control-user1" name="bird_colour" value="<?php echo $animal['bird_colour']; ?>">
										</div>
									</div>
								</div>

								<br>
								<p class="font-weight-bold">In case of Fish</p>
								<hr>

								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">Average Body Temperature</label>
											<input type="text" class="form-control form-control-user1" name="fish_body_temp" value="<?php echo $animal['fish_body_temp']; ?>">
										</div>
									</div>

									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">Water type</label>
											<input type="text" class="form-control form-control-user1" name="water_type" value="<?php echo $animal['water_type']; ?>">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">Colour</label>
											<input type="text" class="form-control form-control-user1" name="fish_colour" value="<?php echo $animal['fish_colour']; ?>">
										</div>
									</div>
								</div>

								<br>
								<p class="font-weight-bold">In case of Reptiles and Amphibians</p>
								<hr>

								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">Reproduction type</label>
											<input type="text" class="form-control form-control-user1" name="reproduction_type" value="<?php echo $animal['reproduction_type']; ?>">
										</div>
									</div>

									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">Average Clutch Size</label>
											<input type="text" class="form-control form-control-user1" name="avg_clutch_size" value="<?php echo $animal['avg_clutch_size']; ?>">
										</div>
									</div>

									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">Average offsprings</label>
											<input type="text" class="form-control form-control-user1" name="avg_offspring" value="<?php echo $animal['avg_offspring']; ?>">
										</div>
									</div>
								</div>

								<br>
								<p class="font-weight-bold">In case of Mammals</p>
								<hr>

								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">Gestational Period</label>
											<input type="text" class="form-control form-control-user1" name="gestational_period" value="<?php echo $animal['gestational_period']; ?>">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">Category</label>
											<select name="category_id" class="form form-control form-control-user1">
												<option value="null">--Select Category--</option>
												<?php foreach ($categories as $cat) {
													if ($cat['category_id'] == $animal['category_id']) {
														echo '<option value="'.$cat['category_id'].'" selected>'.$cat['category_name'].'</option>';
													} else {
														echo '<option value="'.$cat['category_id'].'">'.$cat['category_name'].'</option>';
													}
												} ?>
											</select>
										</div>
									</div>

									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">Average body temperature</label>
											<input type="text" class="form-control form-control-user1" name="body_temp" value="<?php echo $animal['body_temp']; ?>">
										</div>
									</div>
								</div>
								<br>

								<div class="row justify-content-center">
									<input type="submit" name="update" value="Update" class="btn btn-primary btn-user mr-3 px-5">
									<a href="animals" class="btn btn-success btn-user px-5">Cancel</a>
								</div>
							</form>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>