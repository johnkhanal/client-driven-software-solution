<?php 
	$note = '';

	if (isset($_GET['note'])) {
		$note = $_GET['note'];
	}

	if (isset($_GET['aid'])) {
		$id = $_GET['aid'];
		$animal = $pdo->query("SELECT * 
			FROM animals a
			JOIN classifications c
			ON a.classification_id = c.class_id
			JOIN locations l
			ON a.location_id = l.location_id
			WHERE animal_id = '$id'"
		)->fetch();

		if (isset($_POST['sponser'])) {
			$data = [
				'animal_id' => $_POST['animal_id'],
				'sponser_id' => $_POST['sponser_id'],
				'band' => $_POST['band'],
				'quantity' => $_POST['quantity'],
				'total_price' => $_POST['total_price'],
				'from_date' => $_POST['from_date'],
				'sponsorship_approval' => 'No'
			];
			print_r($data);
			$sponserData = new modelZoo($pdo, 'animal_sponser');
			$sponserData->save($data);
			header('location:view?aid='.$id.'&note=Thank you for sponsering animal.');
		}
	}

	$vars = [
		'note' => $note,
		'animal' => $animal,
	];
	$title = 'Claybrook Zoo - Animal Details';
	$content = zooTemplate('../views/view.php', $vars);
?>