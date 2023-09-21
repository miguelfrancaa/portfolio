<?php
	require("models/projects.php");

	$model = new Projects();

	$project = $model->getProjectDetails($resource_id);

	if(isset($_POST["send"])){
		if(isset($_POST["project_title"]) && !empty($_POST["project_title"]) &&
			isset($_POST["project_description"]) && !empty($_POST["project_description"]) &&
			isset($_POST["project_text1"]) && !empty($_POST["project_text1"]) 
	
		){

			move_uploaded_file($_FILES["project_imgdescription"]["tmp_name"], "img/projects/" . $_FILES["project_imgdescription"]["name"]);

			$project = $model->editProject($_POST);

			header("Location:/admin/projectsadmin");

		}else{
			$message = "Please fill the form correctly.";
		}
	}

	require("views/editproject.php");
?>