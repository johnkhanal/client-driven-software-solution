<?php
	$note = '';

	if (isset($_GET['note'])) {
		$note = $_GET['note'];
	}
	$now = Date('Y-m-d');
	$vacancies = $pdo->prepare("SELECT * FROM vacancies WHERE deadline > '$now' ORDER BY vacancy_id DESC");
	$vacancies->execute();

	$vars = [
		'note' => $note,
		'vacancies' => $vacancies,
	];
	
	$title = 'Claybrook Zoo - Vacancies';
	$content = zooTemplate('../views/vacancy.php', $vars);
?>