<section class="py-5 profile">
	<div class="container">
		<h1 class="text-green">My Profile</h1>
		<hr class="hr">
		<div class="row">
			<div class="col-md-8 bg-light profile-details">
				<div class="row align-items-center">
					<div class="col-md-6">
						<div class="ml-5">
							<h3 class="text-green"><?php echo $profile['name']; ?></h3>
							<h6 class="mb-0"><?php echo $profile['email']; ?></h6>
							<h6 class="mb-0"><?php echo $profile['phone'].', '.$profile['secondary_phone']; ?></h6>
							<h6 class="mb-0"><?php echo $profile['address'].', '.$profile['city'].', '.$profile['state'].', '.$profile['zip']; ?></h6>
							<h6 class="mb-0"><?php echo $profile['username']; ?></h6>
						</div>
					</div>
					<div class="col-md-6 text-right pr-0">
						<img src="../images/logo.jpg" alt="Logo" class="img-fluid">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="pb-5">
	<div class="container">
		<h1 class="text-green">Sponsered Animals</h1>
		<hr class="hr">
		<div class="table-responsive">
			<table class="table table-sm">
				<thead>
					<th>S.N</th>
					<th>Animal</th>
					<th>Band</th>
					<th>Quantity</th>
					<th>Total Price</th>
					<th>Agreement From</th>
					<th>Action</th>
				</thead>
				<tbody>
					<?php if ($sponsers->rowCount()<1) {
						echo "<tr><td colspan='7' class='text-center'>You haven't sponsered any animal yet.</td></tr>";
					} ?>
					<?php
						$sn = 1;
						foreach ($sponsers as $row) { ?>
							<tr>
								<td><?php echo $sn++; ?></td>
								<td><?php echo $row['given_name']; ?></td>
								<td><?php echo $row['band']; ?></td>
								<td><?php echo $row['quantity']; ?></td>
								<td>£<?php echo $row['total_price']; ?></td>
								<td><?php echo $row['from_date']; ?></td>
								<td>
									<a href="<?php echo 'view?aid='.$row['animal_id']; ?>" class="btn btn-sm btn-info">View</a>
								</td>
							</tr>
						<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</section>