<?php
	if (isset($_SESSION['user_id'])) {
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

		$sponsers = $pdo->prepare("SELECT * FROM sponsers WHERE username = '$user' AND approval_status='Yes'");
		$sponsers->execute();
		if ($sponsers->rowCount() > 0) {
			$sponser = $sponsers->fetch();
			if (password_verify($pass, $sponser['password'])) {
				session_start();
				$_SESSION['user_id'] = $sponser['sponser_id'];
				$_SESSION['user'] = $sponser['username'];
				header('location:home');
			} else {
				$faults = 1;
			}
		} else {
			$faults = 1;
		}
		if ($faults != 0) {
			header('location:login?note=Username or password do not match or you are not approved yet');
		}
	}

	$vars = [
		'note' => $note,
	];

	$title = 'Claybrook Zoo - Login';
	$content = zooTemplate('../views/login.php', $vars);
?>