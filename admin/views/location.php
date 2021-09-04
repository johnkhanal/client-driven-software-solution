<div class="container-fluid">
	<?php include_once 'note.php'; ?>
	
	<div class="card shadow mb-4">
		<div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
			<h6 class="m-0 font-weight-bold text-primary">Locations</h6>
			
			<a href="location_add" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Add Location</a>
		</div>

		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>Name</th>
							<th>Action</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>Name</th>
							<th>Action</th>
						</tr>
					</tfoot>
					<tbody>
						<?php 
						foreach ($locations as $loc) { ?>
							<tr>
								<td><?php echo $loc['location']; ?></td>
								<td>
									<a href="<?php echo 'location_edit?id='.$loc['location_id']; ?>" class="btn btn-sm btn-success">Edit</a>
									<a href="<?php echo 'location?did='.$loc['location_id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete this?')">Delete</a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>