<div class="container-fluid">

<div class="card shadow mb-4">
	<div class="card shadow mb-4">
		<div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
			<h6 class="m-0 font-weight-bold text-primary"> Scheduled Events</h6>
			<a href="events" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Add Events</a>
		</div>

		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>Event Name</th>
							<th>Event Description</th>
							<th>No. of days</th>
							<th>Starting Date</th>
							<th>Action</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
                            <th>Event Name</th>
							<th>Event Description</th>
							<th>No. of days</th>
							<th>Starting Date</th>
							<th>Action</th>
						</tr>
					</tfoot>
					<tbody>
						
						<?php 
						foreach ($tickets as $ticket) { ?>
							<tr>
								<td><?php echo $ticket['eventName']; ?></td>
								<td><?php echo $ticket['description']; ?></td>
								<td><?php echo $ticket['noOfDays']; ?></td>
								<td><?php echo $ticket['eventDate']; ?></td>
								<?php if($ticket['archive'] == '0')
								{ ?>
									<td>
										<a href="<?php echo 'viewEvents?did='.$ticket['event_id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete this?')">Delete</a>
										<a href="<?php echo 'viewEvents?aid='.$ticket['event_id']; ?>" class="btn btn-sm btn-warning" onclick="return confirm('Are you sure to archive this?')">Archive</a>
										<a href="<?php echo 'edit_events?event_id='.$ticket['event_id']; ?>" class="btn btn-sm btn-info">Edit</a>
									</td>
								<?php } else if($ticket['archive'] == '1'){ ?>
								<td>
									<a href="<?php echo 'viewEvents?rid='.$ticket['event_id']; ?>" class="btn btn-sm btn-info" onclick="return confirm('Are you sure to restore this?')">Restore</a>
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