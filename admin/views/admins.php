<div class="container-fluid">
	<?php include_once 'note.php'; ?>

	<div class="card shadow mb-4">
		<div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
			<h6 class="m-0 font-weight-bold text-primary">Admins</h6>
			
			<a href="admins_add" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Register New Admin</a>
		</div>

		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>Firstname</th>
							<th>Surname</th>
							<th>Username</th>
							<th>Role</th>
							<th>Action</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>Firstname</th>
							<th>Surname</th>
							<th>Username</th>
							<th>Role</th>
							<th>Action</th>
						</tr>
					</tfoot>
					<tbody>

						<?php foreach ($admins as $admin) { ?>
							<tr>
								<td><?php echo $admin['firstname']; ?></td>
								<td><?php echo $admin['surname']; ?></td>
								<td><?php echo $admin['username']; ?></td>
								<td><?php echo $admin['role']; ?></td>
								<td>
									<a href="<?php echo 'admins_edit?id='.$admin['admin_id']; ?>" class="btn btn-sm btn-success">Edit</a>
									<a href="<?php echo 'admins?did='.$admin['admin_id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete this?')">Delete</a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>