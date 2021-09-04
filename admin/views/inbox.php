<div class="container-fluid">
	<div class="card shadow mb-4">
		<div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
			<h6 class="m-0 font-weight-bold text-primary">Inbox</h6>
			
			<!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Add inbox</a> -->
		</div>

		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>Name</th>
							<th>Email</th>
							<th>Contact</th>
							<th>Message</th>
							<th>Action</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>Name</th>
							<th>Email</th>
							<th>Contact</th>
							<th>Message</th>
							<th>Action</th>
						</tr>
					</tfoot>
					<tbody>
						
						<?php 
						foreach ($inbox as $row) { ?>
							<tr>
								<td><?php echo $row['firstname'].' '.$row['surname']; ?></td>
								<td><?php echo $row['email']; ?></td>
								<td><?php echo $row['contact']; ?></td>
								<td><?php echo $row['message']; ?></td>
								<td>
									<a href="<?php echo 'mailto:'.$row['email']; ?>" class="btn btn-sm btn-info">Reply</a>
									<a href="<?php echo 'inbox?did='.$row['inbox_id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete this?')">Delete</a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>