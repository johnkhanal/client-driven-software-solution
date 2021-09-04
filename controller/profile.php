<?php
	if (!isset($_SESSION['user_id'])) {
		header('location:login');
	}

	$note = '';

	if (isset($_GET['note'])) {
		$note = $_GET['note'];
	}

	$id = $_SESSION['user_id'];
	$profile = $pdo->query("SELECT * FROM sponsers WHERE sponser_id = '$id'")->fetch();

	$sponsers = $pdo->prepare("SELECT * 
		FROM animal_sponser an
		JOIN animals a
		ON a.animal_id = an.animal_id
		JOIN sponsers s 
		ON s.sponser_id = an.sponser_id
		WHERE an.sponser_id = '$id'
		AND an.sponsorship_approval = 'Yes'
		");
	$sponsers->execute();

	$vars = [
		'note' => $note,
		'profile' => $profile,
		'sponsers' => $sponsers,
	];
	
	$title = 'Claybrook Zoo - Profile';
	$content = zooTemplate('../views/profile.php', $vars);
?>