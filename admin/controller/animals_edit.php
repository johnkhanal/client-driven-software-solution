<?php 
	if (!isset($_SESSION['login_id'])) {
		header('location:login');
	}
	
	$note = '';

	if (isset($_GET['note'])) {
		$note = $_GET['note'];
	}

	$classData = new modelZoo($pdo, 'classifications');
	$classifications = $classData->findAll();

	$catData = new modelZoo($pdo, 'categories');
	$categories = $catData->findAll();

	$locData = new modelZoo($pdo, 'locations');
	$locations = $locData->findAll();

	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$animal = $pdo->query("SELECT * FROM animals WHERE animal_id = '$id'")->fetch();
	}

	if (isset($_POST['update'])) {

		$data = [
			'animal_id' => $_POST['id'],
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
			'category_id' => $category_id,
			'body_temp' => $_POST['body_temp'],
		];

		$edit = $pdo->prepare("UPDATE animals
			SET species_name = :species_name,
			given_name = :given_name,
			dob = :dob,
			gender = :gender,
			life_span = :life_span,
			classification_id = :classification_id,
			location_id = :location_id,
			diet_requirement = :diet_requirement,
			habitat_desc = :habitat_desc,
			population_distribution = :population_distribution,
			date_joined = :date_joined,
			dimension = :dimension,
			nest = :nest,
			clutch_size = :clutch_size,
			wing_span = :wing_span,
			fly = :fly,
			bird_colour = :bird_colour,
			fish_body_temp = :fish_body_temp,
			water_type = :water_type,
			fish_colour = :fish_colour,
			reproduction_type = :reproduction_type,
			avg_clutch_size = :avg_clutch_size,
			avg_offspring = :avg_offspring,
			gestational_period = :gestational_period,
			category_id = :category_id,
			body_temp = :body_temp
			WHERE animal_id = :animal_id");
		$edit->execute($data);
		header('location:animals?note=Animal updated');
	}

	$vars = [
		'note' => $note,
		'animal' => $animal,
		'classifications' => $classifications,
		'categories' => $categories,
		'locations' => $locations,
	];
	
	$title = 'Claybrook Zoo - Edit Animals';
	$content = zooTemplate('../views/animals_edit.php', $vars);
?>