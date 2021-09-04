<div class="container-fluid">
	<?php include_once 'note.php'; ?>
	
	<div class="card shadow mb-4">
		<div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
			<h6 class="m-0 font-weight-bold text-primary">Animals</h6>
			<?php if($_SESSION['role'] != 'zookeeper')
			{?>
			<a href="animals_add" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Add Animal</a>
			<?php } ?>
		</div>

		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>Action</th>
							<th>Species name</th>
							<th>Given Name</th>
							<th>Gender</th>
							<th>Dob</th>
							<th>Life Span</th>
							<th>Date Joined</th>
							<th>Dimension</th>
							<th>Population Distribution</th>
							<th>Classification</th>
							<th>Location</th>
							<th>Diet Requirements</th>
							<th>Habitat Requirements</th>
							<th>Nest Construction</th>
							<th>Clutch Size</th>
							<th>Wings Span</th>
							<th>Can Fly</th>
							<th>Bird Colour</th>
							<th>Fish Body Temperature</th>
							<th>Water Type</th>
							<th>Fish Colour</th>
							<th>Reproduction Type</th>
							<th>Avg Clutch Size</th>
							<th>Average Offspring</th>
							<th>Gestational Period</th>
							<th>Category</th>
							<th>Mammal Body Temperature</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>Action</th>
							<th>Species name</th>
							<th>Given Name</th>
							<th>Gender</th>
							<th>Dob</th>
							<th>Life Span</th>
							<th>Date Joined</th>
							<th>Dimension</th>
							<th>Population Distribution</th>
							<th>Classification</th>
							<th>Location</th>
							<th>Diet Requirements</th>
							<th>Habitat Requirements</th>
							<th>Nest Construction</th>
							<th>Clutch Size</th>
							<th>Wings Span</th>
							<th>Can Fly</th>
							<th>Bird Colour</th>
							<th>Fish Body Temperature</th>
							<th>Water Type</th>
							<th>Fish Colour</th>
							<th>Reproduction Type</th>
							<th>Avg Clutch Size</th>
							<th>Average Offspring</th>
							<th>Gestational Period</th>
							<th>Category</th>
							<th>Mammal Body Temperature</th>
						</tr>
					</tfoot>
					<tbody>
						<?php
						foreach ($animals as $animal) { ?>
							<tr>
							<?php if($_SESSION['role'] != 'zookeeper'){?>
								<td>
									<a href="<?php echo 'animals_edit?id='.$animal['animal_id']; ?>" class="btn btn-sm btn-success">Edit</a>
									<a href="<?php echo 'animals?aid='.$animal['animal_id']; ?>" class="btn btn-sm btn-info mt-1" onclick="return confirm('Are you sure to archive this?')">Archive</a>
									<a href="<?php echo 'animals?did='.$animal['animal_id']; ?>" class="btn btn-sm btn-danger mt-1" onclick="return confirm('Are you sure to delete this?')">Delete</a>
								</td>

							<?php }?>
							<td> Not Available
								</td>

								<td><?php echo $animal['species_name']; ?></td>
								<td><?php echo $animal['given_name']; ?></td>
								<td><?php echo $animal['gender']; ?></td>
								<td><?php echo $animal['dob']; ?></td>
								<td><?php echo $animal['life_span']; ?></td>
								<td><?php echo $animal['date_joined']; ?></td>
								<td><?php echo $animal['dimension']; ?></td>
								<td><?php echo $animal['population_distribution']; ?></td>
								<td><?php echo $animal['name']; ?></td>
								<td><?php echo $animal['location']; ?></td>
								<td><?php echo substr($animal['diet_requirement'], 0, 80); ?>...</td>
								<td><?php echo substr($animal['habitat_desc'], 0, 80); ?>...</td>
								<td><?php echo $animal['nest']; ?></td>
								<td><?php echo $animal['clutch_size']; ?></td>
								<td><?php echo $animal['wing_span']; ?></td>
								<td><?php echo $animal['fly']; ?></td>
								<td><?php echo $animal['bird_colour']; ?></td>
								<td><?php echo $animal['fish_body_temp']; ?></td>
								<td><?php echo $animal['water_type']; ?></td>
								<td><?php echo $animal['fish_colour']; ?></td>
								<td><?php echo $animal['reproduction_type']; ?></td>
								<td><?php echo $animal['avg_clutch_size']; ?></td>
								<td><?php echo $animal['avg_offspring']; ?></td>
								<td><?php echo $animal['gestational_period']; ?></td>

								<?php
									if (!empty($animal['category_id'])) {
										require '../../db/dbConnection.php';
										$cat_id = $animal['category_id'];
										$cat = $pdo->query("SELECT * FROM categories WHERE category_id = '$cat_id'")->fetch();  
										echo '<td>'.$cat['category_name'].'</td>';
									}
									else {
										echo '<td> - </td>';
									}
								?>
								<td><?php echo $animal['body_temp']; ?></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>