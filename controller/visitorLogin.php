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

		$sponsers = $pdo->prepare("SELECT * FROM visitors WHERE username = '$user'");
		$sponsers->execute();
		if ($sponsers->rowCount() > 0) {
			$sponser = $sponsers->fetch();
			if (password_verify($pass, $sponser['password'])) {
				session_start();
				$_SESSION['visitor_id'] = $sponser['visitor_id'];
				$_SESSION['username'] = $sponser['username'];
				header('location:home');
			} else {
				$faults = 1;
			}
		} else {
			$faults = 1;
		}
		if ($faults != 0) {
			header('location:visitorLogin?note=Username or password do not match or you are not approved yet');
		}
	}

	$vars = [
		'note' => $note,
	];

	$title = 'Claybrook Zoo - Login';
	$content = zooTemplate('../views/visitorLogin.php', $vars);
?>