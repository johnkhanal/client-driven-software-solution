<?php 
	if (!isset($_SESSION['login_id'])) {
		header('location:login');
	}
	
	$note = '';

	if (isset($_GET['note'])) {
		$note = $_GET['note'];
	}

	if (isset($_GET['event_id'])) {
		$id = $_GET['event_id'];
		$cat = $pdo->query("SELECT * FROM events WHERE event_id = '$id'")->fetch();
	}

	if (isset($_POST['update'])) { 
        $fileName = $cat['imageName'];
        if ($_FILES['sponsorImage']['error'] == 0) {
            $parts = explode('.', $_FILES['sponsorImage']['name']);
            $extension = end($parts);
            $fileName = uniqid() . '.' . $extension;
            move_uploaded_file($_FILES['sponsorImage']['tmp_name'], '../../images/events/' . $fileName);
        }

		$data = [
			'event_id' => $id,
            'eventName' => $_POST['eventName'],
            'description' => $_POST['description'],
            'eventDate' => $_POST['eventDate'],
            'noOfDays' => $_POST['noOfDays'],
            'imageName' => $fileName
		];
		$edit = $pdo->prepare("UPDATE events
			SET eventName = :eventName,
            description = :description,
            eventDate = :eventDate,
            noOfDays = :noOfDays,
            imageName = :imageName
			WHERE event_id = :event_id");
		$edit->execute($data);
		header('location:viewEvents?note=Event updated');
	}


	$vars = [
		'note' => $note,
		'cat' => $cat,
	];
	
	$title = 'Claybrook Zoo - Edit Events';
	$content = zooTemplate('../views/edit_events.php', $vars);
?>