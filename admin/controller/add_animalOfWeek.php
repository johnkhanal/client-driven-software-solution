<?php 
if (!isset($_SESSION['login_id'])) {
        header('location:login');
    }
	$note = '';

	if (isset($_GET['note'])) {
		$note = $_GET['note'];
	}

	if (isset($_GET['id'])) {
        $todayDate = date('Y-m-d');
        $a = $pdo->prepare("SELECT * FROM animalofWeek");
        $a->execute();
        $data = $a->fetch();

        if($todayDate > $data['finalDateOfChange']){
            $stmt = $pdo->prepare("DELETE FROM animalofweek");
            $stmt->execute();
    
            $data = [
                'animal_id' => $_GET['id'],
                'finalDateOfChange' => date('Y-m-d', strtotime(' + 7 days'))
            ];
            $ticketData = new modelZoo($pdo, 'animalofweek');
            $ticketData->save($data);
            header('location:add_animalOfWeek?note=Animal of Week Has Been Changed.');
        }else{
            header('location:add_animalOfWeek?note=Animal of Week Cannot Be Changed Before 7 days.');
        }
    }
    
    $animals = $pdo->prepare("SELECT * 
    FROM animals a 
    JOIN images i
    ON a.animal_id = i.animal_id
    WHERE a.archive = '0'");

    $animals->execute();

	$vars = [
        'note' => $note,
        'animals' => $animals
	];
	
	$title = 'Claybrook Zoo - Animal Of Week';
	$content = zooTemplate('../views/add_animalOfWeek.php', $vars);
?>