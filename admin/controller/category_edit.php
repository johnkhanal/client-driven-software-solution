<?php 
	if (!isset($_SESSION['login_id'])) {
		header('location:login');
	}
	
	$note = '';

	if (isset($_GET['note'])) {
		$note = $_GET['note'];
	}

	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$cat = $pdo->query("SELECT * FROM categories WHERE category_id = '$id'")->fetch();
	}

	if (isset($_POST['update'])) {
		$data = [
			'category_id' => $_POST['id'],
			'category_name' => $_POST['category_name']
		];
		$edit = $pdo->prepare("UPDATE categories
			SET category_name = :category_name
			WHERE category_id = :category_id");
		$edit->execute($data);
		header('location:category?note=Category updated');
	}


	$vars = [
		'note' => $note,
		'cat' => $cat,
	];
	
	$title = 'Claybrook Zoo - Edit Category';
	$content = zooTemplate('../views/category_edit.php', $vars);
?>