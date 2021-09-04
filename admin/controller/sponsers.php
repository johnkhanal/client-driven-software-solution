<?php 
	if (!isset($_SESSION['login_id'])) {
		header('location:login');
	}
	
	$note = '';

	if (isset($_GET['note'])) {
		$note = $_GET['note'];
	}
	$sponserData = new modelZoo($pdo, 'sponsers');
	$sponsers = $sponserData->findAll();

	if (isset($_GET['did'])) {
		$id = $_GET['did'];
		$delete = new modelZoo($pdo, 'sponsers');
		$delete->delete('sponser_id', $id);
		header('location:sponsers?note=Sponser Deleted');
	}

	if(isset($_GET['apid'])){
		$data = [
			'sponser_id' => $_GET['apid'],
			'approval_status' => 'Yes'
		];
		$edit = $pdo->prepare("UPDATE sponsers
			SET approval_status = :approval_status
			WHERE sponser_id = :sponser_id");
		$edit->execute($data);
		header('location:sponsers?note=Approved');
	}

	$vars = [
		'note' => $note,
		'sponsers' => $sponsers,
	];
	
	$title = 'Claybrook Zoo - Sponsers';
	$content = zooTemplate('../views/sponsers.php', $vars);
?>