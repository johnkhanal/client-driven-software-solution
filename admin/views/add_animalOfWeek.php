<div class="container-fluid">
	<?php include_once 'note.php'; ?>
	
	<div class="card shadow mb-4">
		<div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
			<h6 class="m-0 font-weight-bold text-primary"> Choose Animal of the Week </h6>
		</div>

		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>Image</th>
							<th>Name</th>
							<th>Category</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>Image</th>
							<th>Species Name</th>
							<th>Given Name</th>
							<th>Actions</th>
						</tr>
					</tfoot>
					<tbody>
						<?php 
						foreach ($animals as $animal) { ?>
							<tr>
                                <td> <img src="../../images/animals/<?php echo $animal['image']; ?>" width="150px" height="150px" alt="Image"></td>
								<td><?php echo $animal['species_name']; ?></td>
								<td><?php echo $animal['given_name']; ?></td>
								<td><?php echo '<a href="add_animalOfWeek?id='.$animal['animal_id'].'" class="btn btn-sm btn-info"> Marks as Animal Of Week </a>' ?></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>