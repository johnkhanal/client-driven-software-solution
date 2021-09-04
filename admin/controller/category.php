<?php 
	if (!isset($_SESSION['login_id'])) {
		header('location:login');
	}
	
	$note = '';

	if (isset($_GET['note'])) {
		$note = $_GET['note'];
	}

	$catData = new modelZoo($pdo, 'categories');
	$categories = $catData->findAll();

	if (isset($_GET['did'])) {
		$id = $_GET['did'];
		$delete = new modelZoo($pdo, 'categories');
		$delete->delete('category_id', $id);
		header('location:category?note=Category Deleeted');
	}

	$vars = [
		'note' => $note,
		'categories' => $categories,
	];
	
	$title = 'Claybrook Zoo - Category';
	$content = zooTemplate('../views/category.php', $vars);
?>