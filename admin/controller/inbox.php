<?php 
	if (!isset($_SESSION['login_id'])) {
		header('location:login');
	}
	
	$note = '';

	if (isset($_GET['note'])) {
		$note = $_GET['note'];
	}

	$inboxData = new modelZoo($pdo, 'inbox');
	$inbox = $inboxData->findAll();

	if (isset($_GET['did'])) {
		$id = $_GET['did'];
		$delete = new modelZoo($pdo, 'inbox');
		$delete->delete('inbox_id', $id);
		header('location:inbox?note=Message Deleted');
	}

	$vars = [
		'note' => $note,
		'inbox' => $inbox,
	];
	
	$title = 'Claybrook Zoo - Inbox';
	$content = zooTemplate('../views/inbox.php', $vars);
?>