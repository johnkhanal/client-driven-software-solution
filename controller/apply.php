<?php 
	$note = '';

	if (isset($_GET['note'])) {
		$note = $_GET['note'];
	}

	if (isset($_GET['aid'])) {
		$id = $_GET['aid'];
		$vacancy = $pdo->query("SELECT * FROM vacancies WHERE vacancy_id = '$id'")->fetch();


		if (isset($_POST['submit'])) {
			if ($_FILES['cv']['error'] == 0) {
				$parts = explode('.', $_FILES['cv']['name']);
				$extension = end($parts);
				$fileName = uniqid() . '.' . $extension;
				move_uploaded_file($_FILES['cv']['tmp_name'], '../images/cvs/' . $fileName);
				$data = [
					'vacancy_id' => $id,
					'firstname' => $_POST['firstname'],
					'surname' => $_POST['surname'],
					'email' => $_POST['email'],
					'contact' => $_POST['contact'],
					'cv' => $fileName,
					'approval_status' => 'No'
				];

				$appData = new modelZoo($pdo, 'applicants');
				$appData->save($data);
				$note = 'Your application is submitted. We will contact you soon.';
			}
			else {
				$note = 'There was an error uploading your CV';
			}
		}
	}

	$vars = [
		'note' => $note,
		'vacancy' => $vacancy,
	];

	$title = 'Claybrook Zoo - Apply';
	$content = zooTemplate('../views/apply.php', $vars);
?>