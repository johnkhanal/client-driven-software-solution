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
		$admin = $pdo->query("SELECT * FROM admins WHERE admin_id = '$id'")->fetch();
	}

	if (isset($_POST['update'])) {
		$data = [
			'admin_id' => $_POST['id'],
			'firstname' => $_POST['firstname'],
			'surname' => $_POST['surname'],
			'username' => $_POST['username'],
		];
		
		$edit = $pdo->prepare("UPDATE admins
			SET firstname = :firstname,
			surname = :surname,
			username = :username
			WHERE admin_id = :admin_id");
		$edit->execute($data);
		header('location:admins?note=Admin updated');
	}


	$vars = [
		'note' => $note,
		'admin' => $admin,
	];
	
	$title = 'Claybrook Zoo - Edit Admin';
	$content = zooTemplate('../views/admins_edit.php', $vars);
?>