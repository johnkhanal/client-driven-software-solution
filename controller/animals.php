<?php 
	$note = '';

	if (isset($_GET['note'])) {
		$note = $_GET['note'];
	}

	if (isset($_GET['cid'])) {
		$id = $_GET['cid'];
		$class = $pdo->query("SELECT * FROM classifications WHERE class_id = '$id'")->fetch();

		$animals = $pdo->prepare("SELECT * FROM animals WHERE classification_id = '$id' AND archive = '0' ORDER BY animal_id DESC");
		$animals->execute();	
	}

	$vars = [
		'note' => $note,
		'animals' => $animals,
		'class' => $class,
	];
	$title = 'Claybrook Zoo - Animals';
	$content = zooTemplate('../views/animals.php', $vars);
?>