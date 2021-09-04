<?php
	if (!isset($_SESSION['login_id'])) {
		header('location:login');
	}
	
	$note = '';

	if (isset($_GET['note'])) {
		$note = $_GET['note'];
	}

	$adminData = new modelZoo($pdo, 'admins');
	$admins = $adminData->findAll();

	if (isset($_GET['did'])) {
		$id = $_GET['did'];
		$delete = new modelZoo($pdo, 'admins');
		$delete->delete('admin_id', $id);
		header('location:admins?note=Admin Deleeted');
	}

	$vars = [
		'note' => $note,
		'admins' => $admins,
	];
	
	$title = 'Claybrook Zoo - Admins';
	$content = zooTemplate('../views/admins.php', $vars);
?>