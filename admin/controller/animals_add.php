<?php
	if (!isset($_SESSION['login_id'])) {
		header('location:login');
	}

	$note = '';

	$classData = new modelZoo($pdo, 'classifications');
	$classifications = $classData->findAll();

	$catData = new modelZoo($pdo, 'categories');
	$categories = $catData->findAll();

	$locData = new modelZoo($pdo, 'locations');
	$locations = $locData->findAll();

	if (isset($_POST['submit'])) {
		$data = [
			'species_name' => $_POST['species_name'],
			'given_name' => $_POST['given_name'],
			'dob' => $_POST['dob'],
			'gender' => $_POST['gender'],
			'life_span' => $_POST['life_span'],
			'classification_id' => $_POST['classification_id'],
			'location_id' => $_POST['location_id'],
			'diet_requirement' => $_POST['diet_requirement'],
			'habitat_desc' => $_POST['habitat_desc'],
			'population_distribution' => $_POST['population_distribution'],
			'date_joined' => $_POST['date_joined'],
			'dimension' => $_POST['dimension'],
			'nest' => $_POST['nest'],
			'clutch_size' => $_POST['clutch_size'],
			'wing_span' => $_POST['wing_span'],
			'fly' => $_POST['fly'],
			'bird_colour' => $_POST['bird_colour'],
			'fish_body_temp' => $_POST['fish_body_temp'],
			'water_type' => $_POST['water_type'],
			'fish_colour' => $_POST['fish_colour'],
			'reproduction_type' => $_POST['reproduction_type'],
			'avg_clutch_size' => $_POST['avg_clutch_size'],
			'avg_offspring' => $_POST['avg_offspring'],
			'gestational_period' => $_POST['gestational_period'],
			'category_id' => $_POST['category_id'],
			'body_temp' => $_POST['body_temp'],
		];

		print_r($data);
		$animalData = new modelZoo($pdo, 'animals');
		$animalData->save($data);

		$animal_id = $pdo->lastInsertId();
		$count = count($_FILES['file']['name']);
		for($i=0; $i<$count; $i++){
			$image_name = $_FILES['file']['name'][$i];
			$saveImage = $pdo->prepare("INSERT INTO images(animal_id, image)
		        		VALUES('$animal_id', '$image_name')");
        	$stored = $saveImage->execute();

        	if ($stored) {
        		move_uploaded_file($_FILES['file']['tmp_name'][$i], '../../images/animals/'.$image_name);
        	} else{
        		$note = 'Failed to save image';
        	}
		}
		header('location:animals?note=Animal added successfully');
	}

	if (isset($_GET['note'])) {
		$note = $_GET['note'];
	}

	$vars = [
		'note' => $note,
		'classifications' => $classifications,
		'categories' => $categories,
		'locations' => $locations,
	];

	$title = 'Claybrook Zoo - Add Animals';
	$content = zooTemplate('../views/animals_add.php', $vars);
?>