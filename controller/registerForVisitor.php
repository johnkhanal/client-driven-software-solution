<?php 
$note = '';

if (isset($_GET['note'])) {
	$note = $_GET['note'];
}

if (isset($_POST['register'])) {
	if ($_POST['password'] == $_POST['confirm_password']) {

		$data = [
			'username' => $_POST['username'],
			'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
		];
		
		$register = new modelZoo($pdo, 'visitors');
		$register->save($data);
		header('location:login?note=Registered successfully!');
	} else {
		header('location:login?note=Password not matched');
	}
}

$vars = [
	'note' => $note
];

$title = 'Claybrook Zoo - Register';
$content = zooTemplate('../views/registerForVisitor.php', $vars);
?>