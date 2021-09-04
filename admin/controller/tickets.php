<?php 
	if (!isset($_SESSION['login_id'])) {
		header('location:login');
	}
	
	$note = '';

	if (isset($_GET['note'])) {
		$note = $_GET['note'];
	}

	$ticketData = new modelZoo($pdo, 'tickets');
	$tickets = $ticketData->findAll();

	if (isset($_GET['did'])) {
		$id = $_GET['did'];
		$delete = new modelZoo($pdo, 'tickets');
		$delete->delete('ticket_id', $id);
		header('location:tickets?note=Ticket Deleted');
	}

	if(isset($_GET['aid'])){
		$data = [
			'ticket_id' => $_GET['aid'],
			'archive_status' => 'Yes'
		];
		$edit = $pdo->prepare("UPDATE tickets
			SET archive_status = :archive_status
			WHERE ticket_id = :ticket_id");
		$edit->execute($data);
		header('location:tickets?note=Ticket Archived');
	}

	if(isset($_GET['apid'])){
		$data = [
			'ticket_id' => $_GET['apid'],
			'approval_status' => 'Yes'
		];
		$edit = $pdo->prepare("UPDATE tickets
			SET approval_status = :approval_status
			WHERE ticket_id = :ticket_id");
		$edit->execute($data);
		header('location:tickets?note=Ticket Approved');
	}

	if(isset($_GET['rid'])){
		$data = [
			'ticket_id' => $_GET['rid'],
			'archive_status' => 'No'
		];
		$edit = $pdo->prepare("UPDATE tickets
			SET archive_status = :archive_status
			WHERE ticket_id = :ticket_id");
		$edit->execute($data);
		header('location:tickets?note=Ticket Restored');
	}

	$vars = [
		'note' => $note,
		'tickets' => $tickets,
	];
	
	$title = 'Claybrook Zoo - Tickets';
	$content = zooTemplate('../views/tickets.php', $vars);
?>