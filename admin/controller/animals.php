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
		WHERE a.archive = '0'");
	$animals->execute();
	
	if (isset($_GET['aid'])) {
		$aid = $_GET['aid'];
		$archive = $pdo->prepare("UPDATE animals SET archive = '1' WHERE animal_id = '$aid'");
		$archive->execute();
		header('location:animals?note=Animal archived successfully');
	}

	if (isset($_GET['did'])) {
		$id = $_GET['did'];
		$delete = new modelZoo($pdo, 'animals');
		$delete->delete('animal_id', $id);
		header('location:animals?note=Animal Deleeted');
	}

	$vars = [
		'note' => $note,
		'animals' => $animals,
	];
	
	$title = 'Claybrook Zoo - Animals';
	$content = zooTemplate('../views/animals.php', $vars);
?>