<?php
	session_start();
	require '../../db/dbConnection.php';
	require '../../model/modelZoo.php';
	require '../../function/zooTemplate.php';

	if (isset($_GET['page'])) {
		$page = $_GET['page'];
	} else {
		$page = 'home';
	}

	require '../controller/'.$page.'.php';

	$templateVar = [
		'title' => $title,
		'content' => $content
	];

	$html = zooTemplate('../views/template.php', $templateVar);
	echo $html;
?>
