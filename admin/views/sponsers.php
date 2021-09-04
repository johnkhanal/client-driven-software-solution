<div class="container-fluid">
	<div class="card shadow mb-4">
		<div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
			<h6 class="m-0 font-weight-bold text-primary">Sponsers</h6>
		</div>

		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>Name</th>
							<th>Email</th>
							<th>Contact</th>
							<th>Secondary Contact</th>
							<th>Address</th>
							<th>City</th>
							<th>State</th>
							<th>Zip Code</th>
							<th>Username</th>
							<th>Action</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>Name</th>
							<th>Email</th>
							<th>Contact</th>
							<th>Secondary Contact</th>
							<th>Address</th>
							<th>City</th>
							<th>State</th>
							<th>Zip Code</th>
							<th>Username</th>
							<th>Action</th>
						</tr>
					</tfoot>
					<tbody>
						<?php
						foreach ($sponsers as $row) { ?>
							<tr>
								<td><?php echo $row['name']; ?></td>
								<td><?php echo $row['email']; ?></td>
								<td><?php echo $row['phone']; ?></td>
								<td><?php echo $row['secondary_phone']; ?></td>
								<td><?php echo $row['address']; ?></td>
								<td><?php echo $row['city']; ?></td>
								<td><?php echo $row['state']; ?></td>
								<td><?php echo $row['zip']; ?></td>
								<td><?php echo $row['username']; ?></td>
							


								<?php if($row['approval_status'] == 'No')
								{ ?>
								<td>
									<a href="<?php echo 'sponsers_edit?id='.$row['sponser_id']; ?>" class="btn btn-sm btn-success">Edit</a>
									<a href="<?php echo 'sponsers?did='.$row['sponser_id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete this?')">Delete</a>
									<a href="<?php echo 'sponsers?apid='.$row['sponser_id']; ?>" class="btn btn-sm btn-warning" onclick="return confirm('Are you sure to approve this?')">Approve</a>
								</td>
								<?php } else if($row['approval_status']=='Yes'){?>
								
									<td>
									<a href="#" class="btn btn-sm btn-success" >Approved</a>
									</td>
								<?php } ?>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>