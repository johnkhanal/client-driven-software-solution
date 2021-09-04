<?php 
require '../db/dbConnection.php';
$images = $pdo->prepare("SELECT * 
	FROM images");
$images->execute();
?>
<section class="py-5 gallery">
	<div class="container">
		<h1 class="text-green">Glimpse of the Zoo</h1>
		<hr class="hr">
		<div class="row mt-4">
			<?php foreach ($images as $key) {
				    echo '<div class="col-md-3 col-sm-6 mb-4">';
					echo '<img src="../images/animals/'.$key['image'].'" class="img-fluid mb-4" align="Image">';
					echo '</div>';
				} ?>
		</div>
	</div>
</section>