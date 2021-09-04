<?php 
	$note = '';

	if (isset($_GET['note'])) {
		$note = $_GET['note'];
	}

	if (isset($_POST['submit'])) {
		$data = [
			'firstname' => $_POST['firstname'],
			'surname' => $_POST['surname'],
			'email' => $_POST['email'],
			'contact' => $_POST['contact'],
			'message' => $_POST['message'],
		];
		
		$inboxData = new modelZoo($pdo, 'inbox');
		$inboxData->save($data);
		header('location:contact?note=Thank you for your message. We will get back to you soon.');
	}

	$vars = [
		'note' => $note
	];
	
	$title = 'Claybrook Zoo - Contact';
	$content = zooTemplate('../views/contact.php', $vars);
?>