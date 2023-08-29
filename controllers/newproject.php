<?php

	if(isset($_POST["send"])){

		foreach($_POST as $key => $value) {
			$_POST[ $key ] = trim(htmlspecialchars(strip_tags($value)));
		}

		if(isset($_POST["title"]) &&
			isset($_POST["description"]) &&
			isset($_POST["img_description"]) &&
			isset($_POST["text1"]) &&
			isset($_FILES["img_description"]) &&
			mb_strlen($_POST["title"]) >= 1 &&
			mb_strlen($_POST["title"]) <= 64 &&
			mb_strlen($_POST["description"]) <= 1000){

		require_once("models/projects.php");

		$modelProjects = new Projects();

		move_uploaded_file($_FILES["img_description"]["tmp_name"], "img/projects/" . $_FILES["img_description"]["name"]);

		$project = $modelProjects->newProject($_POST);

		header("Location:/admin/projectsadmin");

		}else{
			$message = "Please fill the form correctly.";
		}

	}

	require("views/newproject.php");
?> 