<?php 

if (!isset($_SESSION['visitor_id'])) {
		header('location:visitorLogin');
	}
	$note = '';

	if (isset($_GET['note'])) {
		$note = $_GET['note'];
	}

	if (isset($_POST['submit'])) {
		$data = [
			'name' => $_POST['name'],
			'persons' => $_POST['persons'],
			'contact' => $_POST['contact'],
			'visiting_date' => $_POST['visiting_date'],
			'total_price' => $_POST['total_price'],
			'archive_status' => 'No',
            'approval_status' => 'No'
		];
		
		$ticketData = new modelZoo($pdo, 'tickets');
		$ticketData->save($data);
		header('location:ticket?note=Thank you <b>'.$_POST['name'].'</b> for buying tickets.<br>Your tickets are valid only on <b>'.$_POST['visiting_date'].'</b>. and you will be notified after approval');
	}

	$vars = [
		'note' => $note
	];
	
	$title = 'Claybrook Zoo - Buy Tickets';
	$content = zooTemplate('../views/ticket.php', $vars);
?>