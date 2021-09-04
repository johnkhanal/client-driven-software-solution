<?php
	if (!isset($_SESSION['login_id'])) {
		header('location:login');
	}
	
	$vars = [

	];
	
	$title = 'Claybrook Zoo - Home';
	$content = zooTemplate('../views/home.php', $vars);
?>