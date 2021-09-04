<div class="container-fluid">
	<?php include_once 'note.php'; ?>
	
	<div class="card shadow mb-4">
		<div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
			<h6 class="m-0 font-weight-bold text-primary">Classifications</h6>
			
			<a href="classifications_add" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Add Classification</a>
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
						foreach ($classifications as $class) { ?>
							<tr>
								<td><?php echo $class['name']; ?></td>
								<td>
									<a href="<?php echo 'classifications_edit?id='.$class['class_id']; ?>" class="btn btn-sm btn-success">Edit</a>
									<a href="<?php echo 'classifications?did='.$class['class_id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete this?')">Delete</a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>