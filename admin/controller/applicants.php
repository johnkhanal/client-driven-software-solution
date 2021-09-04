<?php 
	if (!isset($_SESSION['login_id'])) {
		header('location:login');
	}
	
	$note = '';

	if (isset($_GET['note'])) {
		$note = $_GET['note'];
	}

	if (isset($_GET['vid'])) {
		$id = $_GET['vid'];

		$appData = new modelZoo($pdo, 'applicants');
		$applicants = $appData->find('vacancy_id', $id);

		$vacancy = $pdo->query("SELECT * FROM vacancies WHERE vacancy_id = $id")->fetch();
	}

	if(isset($_GET['apid'])){
		$data = [
			'vacancy_id' => $_GET['apid'],
			'approval_status' => 'Yes'
		];
		$edit = $pdo->prepare("UPDATE applicants
			SET approval_status = :approval_status
			WHERE vacancy_id = :vacancy_id");
		$edit->execute($data);
		header('location:vacancies?note=Application Approved For Further Processing');
	}

	$vars = [
		'note' => $note,
		'applicants' => $applicants,
		'vacancy' => $vacancy,
	];
	
	$title = 'Claybrook Zoo - Applicants';
	$content = zooTemplate('../views/applicants.php', $vars);
?>