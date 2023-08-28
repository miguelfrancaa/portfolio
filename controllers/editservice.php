<?php
	require("models/services.php");

		if(!isset($resource_id) || !is_numeric($resource_id)) {
		http_response_code(400);
		header("Location: /400");
		die("Request Invalido");
	}

	$model = new Services();

	$service = $model->serviceToEdit($resource_id);

	if(isset($_POST["send"])){

		if(isset($_POST["service_title"]) &&
			isset($_POST["oservice_content"]) &&
			mb_strlen($_POST["service_title"]) >= 1 &&
			mb_strlen($_POST["service_title"]) <= 64 &&
			mb_strlen($_POST["service_content"]) >= 1){

		$service = $model->editService($_POST);

		header("Location: /admin/aboutadmin");
	}else{
		$message = "Please fill the form correctly.";
	}

	}

	if(empty($service)) {
		http_response_code(404);
		header("Location: /404");
		die("Request Invalido");
	}

	require("views/editservice.php");
?>