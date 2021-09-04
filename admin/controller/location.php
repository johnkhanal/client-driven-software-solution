<?php 
	if (!isset($_SESSION['login_id'])) {
		header('location:login');
	}
	
	$note = '';

	if (isset($_GET['note'])) {
		$note = $_GET['note'];
	}

	$locData = new modelZoo($pdo, 'locations');
	$locations = $locData->findAll();

	if (isset($_GET['did'])) {
		$id = $_GET['did'];
		$delete = new modelZoo($pdo, 'locations');
		$delete->delete('location_id', $id);
		header('location:location?note=Location Deleeted');
	}

	$vars = [
		'note' => $note,
		'locations' => $locations,
	];
	
	$title = 'Claybrook Zoo - Location';
	$content = zooTemplate('../views/location.php', $vars);
?>