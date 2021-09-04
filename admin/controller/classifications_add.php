<?php
	if (!isset($_SESSION['login_id'])) {
		header('location:login');
	}
	
	$note = '';

	if (isset($_POST['submit'])) {
		$data = [
			'name' => $_POST['name'],
		];
		
		$classData = new modelZoo($pdo, 'classifications');
		$classData->save($data);
		header('location:classifications?note=Classification added successfully');
	}

	if (isset($_GET['note'])) {
		$note = $_GET['note'];
	}


	$vars = [
		'note' => $note,
	];
	
	$title = 'Claybrook Zoo - Add Classifications';
	$content = zooTemplate('../views/classifications_add.php', $vars);
?>