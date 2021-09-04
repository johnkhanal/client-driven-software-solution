<?php
	if (!isset($_SESSION['login_id'])) {
		header('location:login');
	}
	
	$note = '';

	if (isset($_GET['note'])) {
		$note = $_GET['note'];
	}

	$sponsers = $pdo->prepare("SELECT * 
		FROM animal_sponser an
		JOIN animals a
		ON a.animal_id = an.animal_id
		JOIN sponsers s 
		ON s.sponser_id = an.sponser_id
		");
	$sponsers->execute();

	if(isset($_GET['apid'])){
		$data = [
			'as_id' => $_GET['apid'],
			'sponsorship_approval' => 'Yes'
		];
		$edit = $pdo->prepare("UPDATE animal_sponser
			SET sponsorship_approval = :sponsorship_approval
			WHERE as_id = :as_id");
		$edit->execute($data);
		header('location:sponsered_animals?note=Approved');
	}

	$vars = [
		'note' => $note,
		'sponsers' => $sponsers,
	];
	
	$title = 'Claybrook Zoo - Sponsered Animals';
	$content = zooTemplate('../views/sponsered_animals.php', $vars);
?>