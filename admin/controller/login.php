<?php
	if (isset($_SESSION['login_id'])) {
		header('location:home');
	}
	
	$note = '';

	if (isset($_GET['note'])) {
		$note = $_GET['note'];
	}

	if (isset($_POST['login'])) {
		$faults = 0;

		$user = $_POST['username'];
		$pass = $_POST['password'];

		$admins = $pdo->prepare("SELECT * FROM admins WHERE username = '$user'");
		$admins->execute();
		if ($admins->rowCount() > 0) {
			$admin = $admins->fetch();
			if (password_verify($pass, $admin['password'])) {
				session_start();
				$_SESSION['login_id'] = $admin['admin_id'];
				$_SESSION['user'] = $admin['username'];
				$_SESSION['role'] = $admin['role'];
				header('location:home');
			} else {
				$faults = 1;
			}
		} else {
			$faults = 1;
		}
		if ($faults != 0) {
			header('location:login?note=Username or password do not match');
		}
	}

	$vars = [
		'note' => $note,
	];

	$title = 'Claybrook Zoo - Login';
	$content = zooTemplate('../views/login.php', $vars);
?>