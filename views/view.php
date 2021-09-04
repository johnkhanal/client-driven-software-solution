<?php 
require '../db/dbConnection.php';
if (!empty($animal['category_id'])) {
	$cat_id = $animal['category_id'];
	$cat = $pdo->query("SELECT * FROM categories WHERE category_id = '$cat_id'")->fetch();
}

$aid = $animal['animal_id'];
$images = $pdo->prepare("SELECT * 
	FROM images i
	JOIN animals a
	ON i.animal_id = a.animal_id
	WHERE i.animal_id = '$aid'");
$images->execute();
?>

<section class="py-5 view-animals">
	<div class="container">
		<h1 class="text-green"><?php echo $animal['given_name']; ?></h1>
		<hr class="hr">

		<div class="row">
			<div class="col-md-6 col-sm-12">
				<div class="row">
					<p class="col-md-4 mb-0"><b>Species Name:</b></p>
					<p class="col-md-8 mb-0"><?php echo $animal['species_name']; ?></p>
				</div>
				<div class="row">
					<p class="col-md-4 mb-0"><b>Given Name:</b></p>
					<p class="col-md-8 mb-0"><?php echo $animal['given_name']; ?></p>
				</div>
				<div class="row">
					<p class="col-md-4 mb-0"><b>Gender:</b></p>
					<p class="col-md-8 mb-0"><?php echo $animal['gender']; ?></p>
				</div>
				<div class="row">
					<p class="col-md-4 mb-0"><b>Date of Birth:</b></p>
					<p class="col-md-8 mb-0"><?php echo $animal['dob']; ?></p>
				</div>
				<div class="row">
					<p class="col-md-4 mb-0"><b>Life Span:</b></p>
					<p class="col-md-8 mb-0"><?php echo $animal['life_span']; ?></p>
				</div>
				<div class="row">
					<p class="col-md-4 mb-0"><b>Date Joined</b></p>
					<p class="col-md-8 mb-0"><?php echo $animal['date_joined']; ?></p>
				</div>
				<div class="row">
					<p class="col-md-4 mb-0"><b>Dimension:</b></p>
					<p class="col-md-8 mb-0"><?php echo $animal['dimension']; ?></p>
				</div>
				<div class="row">
					<p class="col-md-4 mb-0"><b>Pop. Distribution:</b></p>
					<p class="col-md-8 mb-0"><?php echo $animal['population_distribution']; ?></p>
				</div>
				<div class="row">
					<p class="col-md-4 mb-0"><b>Classification:</b></p>
					<p class="col-md-8 mb-0"><?php echo $animal['name']; ?></p>
				</div>
				<div class="row">
					<p class="col-md-4 mb-0"><b>Location:</b></p>
					<p class="col-md-8 mb-0"><?php echo $animal['location']; ?></p>
				</div>
				<div class="row">
					<p class="col-md-4 mb-0"><b>Diet Requirement:</b></p>
					<p class="col-md-8 mb-0"><?php echo $animal['diet_requirement']; ?></p>
				</div>
				<div class="row">
					<p class="col-md-4 mb-0"><b>Habitat Requirement:</b></p>
					<p class="col-md-8 mb-0"><?php echo $animal['habitat_desc']; ?></p>
				</div>

				<?php if (!empty($animal['nest'])) { ?>
					<div class="row">
						<p class="col-md-4 mb-0"><b>Nest Construction:</b></p>
						<p class="col-md-8 mb-0"><?php echo $animal['nest']; ?></p>
					</div>
				<?php } ?>
				<?php if (!empty($animal['clutch_size'])) { ?>
					<div class="row">
						<p class="col-md-4 mb-0"><b>Clutch Size:</b></p>
						<p class="col-md-8 mb-0"><?php echo $animal['clutch_size']; ?></p>
					</div>
				<?php } ?>
				<?php if (!empty($animal['wing_span'])) { ?>
					<div class="row">
						<p class="col-md-4 mb-0"><b>Wings Span:</b></p>
						<p class="col-md-8 mb-0"><?php echo $animal['wing_span']; ?></p>
					</div>
				<?php } ?>
				<?php if (!empty($animal['fly'])) { ?>
					<div class="row">
						<p class="col-md-4 mb-0"><b>Can fly?</b></p>
						<p class="col-md-8 mb-0"><?php echo $animal['fly']; ?></p>
					</div>
				<?php } ?>
				<?php if (!empty($animal['bird_colour'])) { ?>
					<div class="row">
						<p class="col-md-4 mb-0"><b>Bird colour:</b></p>
						<p class="col-md-8 mb-0"><?php echo $animal['bird_colour']; ?></p>
					</div>
				<?php } ?>
				<?php if (!empty($animal['fish_body_temp'])) { ?>
					<div class="row">
						<p class="col-md-4 mb-0"><b>Fish Body Temperature:</b></p>
						<p class="col-md-8 mb-0"><?php echo $animal['fish_body_temp']; ?></p>
					</div>
				<?php } ?>
				<?php if (!empty($animal['water_type'])) { ?>
					<div class="row">
						<p class="col-md-4 mb-0"><b>Water Type:</b></p>
						<p class="col-md-8 mb-0"><?php echo $animal['water_type']; ?></p>
					</div>
				<?php } ?>
				<?php if (!empty($animal['fish_colour'])) { ?>
					<div class="row">
						<p class="col-md-4 mb-0"><b>Fish Colour:</b></p>
						<p class="col-md-8 mb-0"><?php echo $animal['fish_colour']; ?></p>
					</div>
				<?php } ?>

				<?php if (!empty($animal['reporduction_type'])) { ?>
					<div class="row">
						<p class="col-md-4 mb-0"><b>Reporduction Type:</b></p>
						<p class="col-md-8 mb-0"><?php echo $animal['reporduction_type']; ?></p>
					</div>
				<?php } ?>
				<?php if (!empty($animal['avg_clutch_size'])) { ?>
					<div class="row">
						<p class="col-md-4 mb-0"><b>Avg. Clutch Size:</b></p>
						<p class="col-md-8 mb-0"><?php echo $animal['avg_clutch_size']; ?></p>
					</div>
				<?php } ?>
				<?php if (!empty($animal['avg_offspring'])) { ?>
					<div class="row">
						<p class="col-md-4 mb-0"><b>Avg. Offspring:</b></p>
						<p class="col-md-8 mb-0"><?php echo $animal['avg_offspring']; ?></p>
					</div>
				<?php } ?>

				<?php if (!empty($animal['gestational_period'])) { ?>
					<div class="row">
						<p class="col-md-4 mb-0"><b>Gestational Period:</b></p>
						<p class="col-md-8 mb-0"><?php echo $animal['gestational_period']; ?></p>
					</div>
				<?php } ?>
				<?php if (!empty($animal['category_id'])) { ?>
					<div class="row">
						<p class="col-md-4 mb-0"><b>Category:</b></p>
						<p class="col-md-8 mb-0"><?php echo $cat['category_name']; ?></p>
					</div>
				<?php } ?>
				<?php if (!empty($animal['body_temp'])) { ?>
					<div class="row">
						<p class="col-md-4 mb-0"><b>Body Temperature:</b></p>
						<p class="col-md-8 mb-0"><?php echo $animal['body_temp']; ?></p>
					</div>
				<?php } ?>
			</div>

			<div class="col-md-6 col-sm-12 view-img">
				<?php foreach ($images as $key) {
					echo '<img src="../images/animals/'.$key['image'].'" class="img-fluid mb-4" align="Image">';
				} ?>
			</div>
		</div>

  <hr>
  <hr>
        
		<?php
	$sponsorData = $pdo->prepare("SELECT *
	FROM animal_sponser a
	JOIN sponsers s
	ON a.sponser_id = s.sponser_id
	WHERE a.animal_id = '$aid' 
	AND a.sponsorship_approval = 'Yes'");
	$sponsorData->execute();
		
		if ($sponsorData->rowCount() > 0) {
			$sponser = $sponsorData->fetch();
		?>

		<div class="row">
			<p class="col-md-4 mb-0"><b> This animal has been sponsored by :</b></p>
			<p class="col-md-8 mb-0"><?php echo $sponser['name']; ?></p>
		</div>

		<div class="row">
			<p class="col-md-4 mb-0"><b> Email :</b></p>
			<p class="col-md-8 mb-0"><?php echo $sponser['email']; ?></p>
		</div>

		<div class="row">
			<p class="col-md-4 mb-0"><b> Phone :</b></p>
			<p class="col-md-8 mb-0"><?php echo $sponser['phone']; ?></p>
		</div>

		<div class="row">
			<p class="col-md-4 mb-0"><b> Address :</b></p>
			<p class="col-md-8 mb-0"><?php echo $sponser['address']; ?></p>
		</div>

		<div class="col-md-6 col-sm-12 view-img">
				<?php
				echo '<img src="../images/sponsors/'.$sponser['imageName'].'" class="img-fluid mb-4" align="Image">';
				 ?>
			</div>
	
	 <?php	
	} else { ?>

		<div class="sponser mt-5" id="sponser">
			<h3 class="text-green">Sponser this Animal</h3>
			<hr class="hr">

			<div class="row">
				<div class="col-md-6">
					<div class="card my-4 p-4 bg-light">
						<div class="card-body">
							<?php include 'note.php'; ?>

							<form method="POST">
								<div class="row">
									<input type="hidden" name="sponser_id" value="<?php echo $_SESSION['user_id']; ?>">
									<input type="hidden" name="animal_id" value="<?php echo $animal['animal_id']; ?>">
									<div class="col-md-6 mb-4">
										<label class="col-form-label">Animal Name</label>
										<input type="text" class="form-control" name="name" value="<?php echo $animal['given_name']; ?>" readonly>
									</div>
									<div class="col-md-6 mb-4">
										<label class="col-form-label">Select Band:</label>
										<select name="band" id="band" class="form-control" onchange="return viewSponserPrice();">
											<option value="E">E (£500)</option>
											<option value="D">D (£1000)</option>
											<option value="C">C (£1500)</option>
											<option value="B">B (£2000)</option>
											<option value="A">A (£2500)</option>
										</select>
									</div>
									<div class="col-md-6 mb-4">
										<label class="col-form-label">Number of Animals</label>
										<input type="number" class="form-control" name="quantity" id="quantity" minlength="1" maxlength="5" value="1" required onchange="return viewSponserPrice()">
									</div>
									<div class="col-md-6 mb-4">
										<label class="col-form-label">Agreement From</label>
										<input type="date" class="form-control" name="from_date" required>
									</div>
									<div class="col-md-6 mb-4">
										<label class="col-form-label">Yearly Price (£)</label>
										<input type="text" class="form-control" name="total_price" id="total_price" required>
									</div>
								</div>
								<div>
									<?php if (!isset($_SESSION['user_id'])) { ?>
										<input type="submit" name="submit" value="Sponser" class="btn btn-primary" disabled>
										<small class="text-danger pl-2">Please Login first to sponser</small>
									<?php } else { ?>
										<input type="submit" name="sponser" value="Sponser" class="btn btn-primary" onclick="return confirm('Are you sure to sponser?')">
									<?php } ?>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>
</section>