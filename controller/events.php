<?php 	
	$note = '';

	if (isset($_GET['note'])) {
		$note = $_GET['note'];
	}

	$ticketData = new modelZoo($pdo, 'events');
    $tickets = $ticketData->findAll();
    $tickets = $ticketData->find('archive','0');
    
	$vars = [
		'note' => $note,
		'tickets' => $tickets,
	];
	
	$title = 'Claybrook Zoo -  Events';
	$content = zooTemplate('../views/events.php', $vars);
?>