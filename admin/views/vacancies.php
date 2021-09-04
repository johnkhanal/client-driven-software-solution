<div class="container-fluid">
	<?php include_once 'note.php'; ?>
	
	<div class="card shadow mb-4">
		<div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
			<h6 class="m-0 font-weight-bold text-primary">Vacancies</h6>
			
			<a href="vacancies_add" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Add Vacancy</a>
		</div>

		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>Position</th>
							<th>Deadline</th>
							<th>Applicants</th>
							<th>Action</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>Position</th>
							<th>Deadline</th>
							<th>Applicants</th>
							<th>Action</th>
						</tr>
					</tfoot>
					<tbody>
						<?php 
						foreach ($vacancies as $row) { 
							require '../../db/dbConnection.php';
							$id = $row['vacancy_id'];
							$applicants = $pdo->query("SELECT count(applicant_id) as applicant FROM applicants WHERE vacancy_id = '$id'")->fetch();
							?>
							<tr>
								<td><?php echo $row['position']; ?></td>
								<td><?php echo $row['deadline']; ?></td>
								<td><?php echo '<a href="applicants?vid='.$row['vacancy_id'].'" class="btn btn-link">View</a> ('.$applicants['applicant'].')'; ?></td>
								<td>
									<a href="<?php echo 'vacancies_edit?id='.$row['vacancy_id']; ?>" class="btn btn-sm btn-success">Edit</a>
									<a href="<?php echo 'vacancies?did='.$row['vacancy_id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete this?')">Delete</a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>