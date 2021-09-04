<div class="container-fluid">
	<div class="card shadow mb-4">
		<div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
			<h6 class="m-0 font-weight-bold text-primary">Sponsered Animals</h6>
			
			<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Add Sponsered Animal</a>
		</div>

		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>Animal Name</th>
							<th>Sponsered By</th>
							<th>Contact</th>
							<th>Band</th>
							<th>Quantity</th>
							<th>Total Price</th>
							<th>Agreement From</th>
							<th>Action</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>Animal Name</th>
							<th>Sponsered By</th>
							<th>Contact</th>
							<th>Band</th>
							<th>Quantity</th>
							<th>Total Price</th>
							<th>Agreement From</th>
							<th>Action</th>
						</tr>
					</tfoot>
					<tbody>
						<?php foreach ($sponsers as $row) { ?>
							<tr>
								<td><?php echo $row['given_name']; ?></td>
								<td><?php echo $row['username']; ?></td>
								<td><?php echo $row['phone']; ?></td>
								<td><?php echo $row['band']; ?></td>
								<td><?php echo $row['quantity']; ?></td>
								<td>£<?php echo $row['total_price']; ?></td>
								<td><?php echo $row['from_date']; ?></td>
								<?php if ($row['sponsorship_approval'] == 'No'){ ?>
									<td>
										<a href="<?php echo 'sponsered_animals?apid='.$row['as_id']; ?>" class="btn btn-sm btn-info" onclick="return confirm('Are you sure to approve this?')">Approve</a>
									</td>
						        <?php }else{ ?>
									<td>
										<a href="#" class="btn btn-sm btn-success">Approved</a>
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