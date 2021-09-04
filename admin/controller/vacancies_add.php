<?php
	if (!isset($_SESSION['login_id'])) {
		header('location:login');
	}
	
	$note = '';

	if (isset($_POST['submit'])) {
		$data = [
			'position' => $_POST['position'],
			'deadline' => $_POST['deadline'],
			'requirement' => $_POST['requirement'],
		];
		
		$vacData = new modelZoo($pdo, 'vacancies');
		$vacData->save($data);
		header('location:vacancies?note=Vacancy added successfully');
	}

	if (isset($_GET['note'])) {
		$note = $_GET['note'];
	}


	$vars = [
		'note' => $note,
	];
	
	$title = 'Claybrook Zoo - Add Vacancy';
	$content = zooTemplate('../views/vacancies_add.php', $vars);
?>