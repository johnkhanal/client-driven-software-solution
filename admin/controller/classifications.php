<?php 
	if (!isset($_SESSION['login_id'])) {
		header('location:login');
	}
	
	$note = '';

	if (isset($_GET['note'])) {
		$note = $_GET['note'];
	}

	$classData = new modelZoo($pdo, 'classifications');
	$classifications = $classData->findAll();

	if (isset($_GET['did'])) {
		$id = $_GET['did'];
		$delete = new modelZoo($pdo, 'classifications');
		$delete->delete('class_id', $id);
		header('location:classifications?note=Classification Deleeted');
	}

	$vars = [
		'note' => $note,
		'classifications' => $classifications,
	];
	
	$title = 'Claybrook Zoo - Classifications';
	$content = zooTemplate('../views/classifications.php', $vars);
?>