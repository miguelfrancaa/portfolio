<?php

	if(isset($_POST["send"])){

		require_once("models/projects.php");

		$modelProjects = new Projects();

		move_uploaded_file($_FILES["img_description"]["tmp_name"], "img/projects/" . $_FILES["img_description"]["name"]);

		$project = $modelProjects->newProject($_POST);

		header("Location:/admin/projectsadmin");

	}

	require("views/newproject.php");
?>