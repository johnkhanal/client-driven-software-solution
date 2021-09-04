<?php
	$note = '';

	if (isset($_GET['note'])) {
		$note = $_GET['note'];
	}

	$animals = $pdo->prepare("SELECT * FROM animals WHERE archive = '0' ORDER BY animal_id DESC LIMIT 6");
	$animals->execute();

	$sponsered = $pdo->prepare("SELECT * 
		FROM animal_sponser an 
		JOIN animals a 
		ON an.animal_id = a.animal_id 
		JOIN sponsers s 
		ON an.sponser_id = s.sponser_id
		WHERE an.sponsorship_approval = 'Yes'
		LIMIT 2");
	$sponsered->execute();

	$vars = [
		'note' => $note,
		'animals' => $animals,
		'sponsered' => $sponsered,
	];
	
	$title = 'Claybrook Zoo - Home';
	$content = zooTemplate('../views/home.php', $vars);
?>