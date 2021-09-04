<?php 
$note = '';

if (isset($_GET['note'])) {
	$note = $_GET['note'];
}

if (isset($_POST['submit'])) 
{

    $fileName = "";
    if ($_FILES['sponsorImage']['error'] == 0) {
        $parts = explode('.', $_FILES['sponsorImage']['name']);
        $extension = end($parts);
        $fileName = uniqid() . '.' . $extension;
        move_uploaded_file($_FILES['sponsorImage']['tmp_name'], '../../images/events/' . $fileName);
    }

    $data = [
        'eventName' => $_POST['eventName'],
        'description' => $_POST['description'],
        'eventDate' => $_POST['eventDate'],
        'noOfDays' => $_POST['noOfDays'],
        'archive' => 0,
        'imageName' => $fileName
    ];
    
    $register = new modelZoo($pdo, 'events');
    $register->save($data);
    header('location:events?note=Added Successfully!');
}


$vars = [
	'note' => $note
];

$title = 'Claybrook Zoo - Event';
$content = zooTemplate('../views/events.php', $vars);
?>