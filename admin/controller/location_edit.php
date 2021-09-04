<?php 
	if (!isset($_SESSION['login_id'])) {
		header('location:login');
	}
	
	$note = '';

	if (isset($_GET['note'])) {
		$note = $_GET['note'];
	}

	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$loc = $pdo->query("SELECT * FROM locations WHERE location_id = '$id'")->fetch();
	}

	if (isset($_POST['update'])) {
		$data = [
			'location_id' => $_POST['id'],
			'location' => $_POST['location']
		];
		$edit = $pdo->prepare("UPDATE locations
			SET location = :location
			WHERE location_id = :location_id");
		$edit->execute($data);
		header('location:location?note=Location updated');
	}


	$vars = [
		'note' => $note,
		'loc' => $loc,
	];
	
	$title = 'Claybrook Zoo - Edit Location';
	$content = zooTemplate('../views/location_edit.php', $vars);
?>