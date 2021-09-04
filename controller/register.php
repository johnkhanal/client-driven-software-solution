<?php 
$note = '';

if (isset($_GET['note'])) {
	$note = $_GET['note'];
}

if (isset($_POST['register'])) {
	if ($_POST['password'] == $_POST['confirm_password']) {
		$fileName = "";
		if ($_FILES['sponsorImage']['error'] == 0) {
			$parts = explode('.', $_FILES['sponsorImage']['name']);
			$extension = end($parts);
			$fileName = uniqid() . '.' . $extension;
			move_uploaded_file($_FILES['sponsorImage']['tmp_name'], '../images/sponsors/' . $fileName);
		}

		$data = [
			'name' => $_POST['name'],
			'email' => $_POST['email'],
			'phone' => $_POST['contact'],
			'secondary_phone' => $_POST['secondary_contact'],
			'address' => $_POST['address'],
			'city' => $_POST['city'],
			'state' => $_POST['state'],
			'zip' => $_POST['zip'],
			'username' => $_POST['username'],
			'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
			'approval_status' => 'No',
			'imageName' => $fileName
		];
		
		$register = new modelZoo($pdo, 'sponsers');
		print_r($data);
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
$content = zooTemplate('../views/register.php', $vars);
?>