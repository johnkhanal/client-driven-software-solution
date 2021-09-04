<?php
	session_start();
	require '../db/dbConnection.php';
	require '../function/zooTemplate.php';
	require '../model/modelZoo.php';

	if (isset($_GET['page'])) {
		$page = $_GET['page'];
	} else {
		$page = 'home';
	}

	require '../controller/'.$page.'.php';

	$variables = [
		'title' => $title,
		'content' => $content
	];

	$html = zooTemplate('../views/template.php', $variables);
	echo $html;
?>
