<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link rel="stylesheet" href="../css/styles.css"/>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

</head>

<body>
	<header>
		<?php require 'header.php'; ?>
	</header>

	<section>
		<main>
			<?php echo $content; ?>
		</main>
	</section>

	<footer>
		<?php require 'footer.php'; ?>
	</footer>

	<script src="../js/styles.js"></script>
	<script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.js"></script>
	<script src="../js/popper.js"></script>
</body>
</html>
