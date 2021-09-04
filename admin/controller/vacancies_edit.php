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
		$vac = $pdo->query("SELECT * FROM vacancies WHERE vacancy_id = '$id'")->fetch();
	}

	if (isset($_POST['update'])) {
		$data = [
			'vacancy_id' => $_POST['id'],
			'position' => $_POST['position'],
			'deadline' => $_POST['deadline'],
			'requirement' => $_POST['requirement'],
		];
		$edit = $pdo->prepare("UPDATE vacancies
			SET position = :position,
			deadline = :deadline,
			requirement = :requirement
			WHERE vacancy_id = :vacancy_id");
		$edit->execute($data);
		header('location:vacancies?note=Vacancy updated');
	}

	$vars = [
		'note' => $note,
		'vac' => $vac,
	];
	
	$title = 'Claybrook Zoo - Edit Vacancy';
	$content = zooTemplate('../views/vacancies_edit.php', $vars);
?>