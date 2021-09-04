<?php 
	if (!isset($_SESSION['login_id'])) {
		header('location:login');
	}
	
	$note = '';

	if (isset($_GET['note'])) {
		$note = $_GET['note'];
	}

	$ticketData = new modelZoo($pdo, 'events');
	$tickets = $ticketData->findAll();

	if (isset($_GET['did'])) {
		$id = $_GET['did'];
		$delete = new modelZoo($pdo, 'events');
		$delete->delete('event_id', $id);
		header('location:viewEvents?note=Event Deleted');
	}

	if(isset($_GET['aid'])){
		$data = [
			'event_id' => $_GET['aid'],
			'archive' => '1'
		];
		$edit = $pdo->prepare("UPDATE events
			SET archive = :archive
			WHERE event_id = :event_id");
		$edit->execute($data);
		header('location:viewEvents?note=Event Archived');
	}

	if(isset($_GET['rid'])){
		$data = [
			'event_id' => $_GET['rid'],
			'archive' => '0'
		];
		$edit = $pdo->prepare("UPDATE events
			SET archive = :archive
			WHERE event_id = :event_id");
		$edit->execute($data);
		header('location:viewEvents?note=Event Restored');
	}

	$vars = [
		'note' => $note,
		'tickets' => $tickets,
	];
	
	$title = 'Claybrook Zoo - Events';
	$content = zooTemplate('../views/viewEvents.php', $vars);
?>