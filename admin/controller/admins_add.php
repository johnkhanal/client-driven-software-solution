<?php
	if (!isset($_SESSION['login_id'])) {
		header('location:login');
	}
	
	$note = '';

	if (isset($_POST['submit'])) {
		$data = [
			'firstname' => $_POST['firstname'],
			'surname' => $_POST['surname'],
			'username' => $_POST['username'],
			'role' => $_POST['role'],
			'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
		];
		
		if ($_POST['password'] == $_POST['confirm_password']) {
			$adminData = new modelZoo($pdo, 'admins');
			$adminData->save($data);
			header('location:admins?note=Admin registered successfully');
		} else{
			$note = 'Password not matched';
		}
	}

	if (isset($_GET['note'])) {
		$note = $_GET['note'];
	}

	$vars = [
		'note' => $note,
	];
	
	$title = 'Claybrook Zoo - Add Admin';
	$content = zooTemplate('../views/admins_add.php', $vars);
?>