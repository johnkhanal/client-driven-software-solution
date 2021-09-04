<div class="container-fluid">

<div class="card shadow mb-4">
	<div class="card shadow mb-4">
		<div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
			<h6 class="m-0 font-weight-bold text-primary">Booked Tickets</h6>
			<a href="add_Ticket" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Add Tickets</a>
		</div>

		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>Visiting Date</th>
							<th>Name</th>
							<th>No. of tickets</th>
							<th>Contact</th>
							<th>Total Price</th>
							<th>Action</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>Visiting Date</th>
							<th>Name</th>
							<th>No. of tickets</th>
							<th>Contact</th>
							<th>Total Price</th>
							<th>Action</th>
						</tr>
					</tfoot>
					<tbody>
						
						<?php 
						foreach ($tickets as $ticket) { ?>
							<tr>
								<td><?php echo $ticket['visiting_date']; ?></td>
								<td><?php echo $ticket['name']; ?></td>
								<td><?php echo $ticket['persons']; ?></td>
								<td><?php echo $ticket['contact']; ?></td>
								<td>£<?php echo $ticket['total_price']; ?></td>
								<?php if($ticket['archive_status'] == 'No' && $ticket['approval_status'] == 'No')
								{ ?>
									<td>
										<a href="<?php echo 'tickets?did='.$ticket['ticket_id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete this?')">Delete</a>
										<a href="<?php echo 'tickets?aid='.$ticket['ticket_id']; ?>" class="btn btn-sm btn-warning" onclick="return confirm('Are you sure to archive this?')">Archive</a>
										<a href="<?php echo 'tickets?apid='.$ticket['ticket_id']; ?>" class="btn btn-sm btn-success" onclick="return confirm('Are you sure to approve this?')">Approve</a>
									</td>
								<?php } else if($ticket['approval_status'] == 'Yes' && $ticket['archive_status']=='No'){?>
								
									<td>
										<a href="<?php echo 'tickets?did='.$ticket['ticket_id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete this?')">Delete</a>
										<a href="<?php echo 'tickets?aid='.$ticket['ticket_id']; ?>" class="btn btn-sm btn-warning" onclick="return confirm('Are you sure to archive this?')">Archive</a>
										<a href="#" class="btn btn-sm btn-success" >Approved</a>
									</td>
								<?php } else if($ticket['archive_status'] == 'Yes'){ ?>
								<td>
									<a href="<?php echo 'tickets?rid='.$ticket['ticket_id']; ?>" class="btn btn-sm btn-info" onclick="return confirm('Are you sure to restore this?')">Restore</a>
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