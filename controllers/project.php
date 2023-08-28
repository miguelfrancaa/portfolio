<?php

	if(!isset($id) || !is_numeric($id)) {
		http_response_code(400);
		header("Location: /400");
		die("Request Invalido");
	}

	require("models/projects.php");

	$model = new Projects();

	$project = $model->getProjectDetails($id);

	$projectimgs = $model->getProjectImgs($id);

	if(empty($project)) {
		http_response_code(404);
		header("Location: /404");
		die("Request Invalido");
	}

	require("views/project.php");
