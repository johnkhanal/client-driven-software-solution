<section class="py-5 vacancies">
	<div class="container">
		<h1 class="text-green">Vacancies</h1>
		<hr class="hr">

		<div class="col-md-8 pl-0">
			<?php if ($vacancies->rowCount() < 1) {
				echo 'No Vacancy available';
			} else { 
				foreach ($vacancies as $key) { ?>
					<div class="card mb-4 bg-light">
						<div class="card-body">
							<div class="row">
								<div class="col-md-10">
									<h4 class="font-weight-bold"><?php echo $key['position']; ?></h4>
								</div>
								<div class="col-md-2 text-right">
									<?php echo '<a href="apply?aid='.$key['vacancy_id'].'" class="btn btn-warning">Apply</a>'; ?>
								</div>
							</div>
							<p class="mb-0"><b>Deadline: </b><?php echo $key['deadline']; ?></p>
							<p class="mb-0"><b>Requirements:</b></p>
							<p class="mb-0 text-justify"><?php echo $key['requirement']; ?></p>
						</div>
					</div>
				<?php }
			} ?>
		</div>
	</div>
</section>