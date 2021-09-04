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
		$class = $pdo->query("SELECT * FROM classifications WHERE class_id = '$id'")->fetch();
	}

	if (isset($_POST['update'])) {
		$data = [
			'class_id' => $_POST['id'],
			'name' => $_POST['name']
		];
		$edit = $pdo->prepare("UPDATE classifications
			SET name = :name
			WHERE class_id = :class_id");
		$edit->execute($data);
		header('location:classifications?note=Classifications updated');
	}


	$vars = [
		'note' => $note,
		'class' => $class,
	];
	
	$title = 'Claybrook Zoo - Edit Classifications';
	$content = zooTemplate('../views/classifications_edit.php', $vars);
?>