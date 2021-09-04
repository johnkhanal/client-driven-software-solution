<?php 
	if (!isset($_SESSION['login_id'])) {
		header('location:login');
	}

	$note = '';

	if (isset($_GET['note'])) {
		$note = $_GET['note'];
	}
	
	$animals = $pdo->prepare("SELECT * 
		FROM animals a 
		JOIN classifications c
		ON a.classification_id = c.class_id
		JOIN locations l 
		ON a.location_id = l.location_id
		WHERE a.archive = '1'");
	$animals->execute();
	
	if (isset($_GET['aid'])) {
		$aid = $_GET['aid'];
		$archive = $pdo->prepare("UPDATE animals SET archive = '0' WHERE animal_id = '$aid'");
		$archive->execute();
		header('location:archived_animals?note=Animal restored successfully');
	}
	
	$vars = [
		'note' => $note,
		'animals' => $animals,
	];
	
	$title = 'Claybrook Zoo - Archived Animals';
	$content = zooTemplate('../views/archived_animals.php', $vars);
?>