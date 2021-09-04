<?php 
	if (!isset($_SESSION['login_id'])) {
		header('location:login');
	}
	
	$note = '';

	if (isset($_GET['note'])) {
		$note = $_GET['note'];
	}

	$vacData = new modelZoo($pdo, 'vacancies');
	$vacancies = $vacData->findAll();

	if (isset($_GET['did'])) {
		$id = $_GET['did'];
		$delete = new modelZoo($pdo, 'vacancies');
		$delete->delete('vacancy_id', $id);
		header('location:vacancies?note=Vacancy Deleeted');
	}

	$vars = [
		'note' => $note,
		'vacancies' => $vacancies,
	];
	
	$title = 'Claybrook Zoo - Vacancies';
	$content = zooTemplate('../views/vacancies.php', $vars);
?>