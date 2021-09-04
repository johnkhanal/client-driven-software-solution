<?php
	if (!isset($_SESSION['login_id'])) {
		header('location:login');
	}
	
	$note = '';

	if (isset($_POST['submit'])) {
		$data = [
			'category_name' => $_POST['category_name'],
		];
		
		$catData = new modelZoo($pdo, 'categories');
		$catData->save($data);
		header('location:category?note=Category added successfully');
	}

	if (isset($_GET['note'])) {
		$note = $_GET['note'];
	}


	$vars = [
		'note' => $note,
	];
	
	$title = 'Claybrook Zoo - Add Category';
	$content = zooTemplate('../views/category_add.php', $vars);
?>