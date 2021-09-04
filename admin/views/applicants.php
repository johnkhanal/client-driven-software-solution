<div class="container-fluid">
	<?php include_once 'note.php'; ?>
	
	<div class="card shadow mb-4">
		<div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
			<h6 class="m-0 font-weight-bold text-primary">Applicants for <?php echo $vacancy['position']; ?></h6>
		</div>

		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>Firstname</th>
							<th>Surname</th>
							<th>Email</th>
							<th>Contact</th>
							<th>Resume</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>Firstname</th>
							<th>Surname</th>
							<th>Email</th>
							<th>Contact</th>
							<th>Resume</th>
							<th>Actions</th>
						</tr>
					</tfoot>
					<tbody>
						<?php 
						foreach ($applicants as $app) { ?>
							<tr>
								<td><?php echo $app['firstname']; ?></td>
								<td><?php echo $app['surname']; ?></td>
								<td><?php echo $app['email']; ?></td>
								<td><?php echo $app['contact']; ?></td>
								<td><?php echo '<a href="../../images/cvs/'.$app['cv'].'" class="btn btn-sm btn-info">Download</a>' ?></td>
								<?php if($app['approval_status'] == 'No'){ ?>
								<td><?php echo '<a href="applicants?apid='.$app['vacancy_id'].'" class="btn btn-sm btn-warning"> Approve </a>' ?></td>
								<?php }else { ?>
									<td><?php echo '<a href="#" class="btn btn-sm btn-success">Already Approved </a>' ?></td>
								<?php }?>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>