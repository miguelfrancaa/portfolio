<?php
	require("models/objectives.php");

	if(!isset($resource_id) || !is_numeric($resource_id)) {
		http_response_code(400);
		header("Location: /400");
		die("Request Invalido");
	}

	$model = new Objectives();

	$objective = $model->objectiveToEdit($resource_id);

	if(isset($_POST["send"])){

		if(isset($_POST["objective_title"]) &&
			isset($_POST["objective_content"]) &&
			mb_strlen($_POST["objective_title"]) >= 1 &&
			mb_strlen($_POST["objective_title"]) <= 64 &&
			mb_strlen($_POST["objective_content"]) >= 1){

		$objective = $model->editObjective($_POST);

		header("Location: /admin/aboutadmin");

		}else{
			$message = "Please fill the form correctly.";
		}

	}

	if(empty($objective)) {
		http_response_code(404);
		header("Location: /404");
		die("Request Invalido");
	}

	require("views/editobjective.php");
?>