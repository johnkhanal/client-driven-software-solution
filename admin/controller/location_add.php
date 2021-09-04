<?php
	if (!isset($_SESSION['login_id'])) {
		header('location:login');
	}
	
	$note = '';

	if (isset($_POST['submit'])) {
		$data = [
			'location' => $_POST['location'],
		];
		
		$locData = new modelZoo($pdo, 'locations');
		$locData->save($data);
		header('location:location?note=Location added successfully');
	}

	if (isset($_GET['note'])) {
		$note = $_GET['note'];
	}


	$vars = [
		'note' => $note,
	];
	
	$title = 'Claybrook Zoo - Add Location';
	$content = zooTemplate('../views/location_add.php', $vars);
?>