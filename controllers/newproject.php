<?php

	require_once("models/categories.php");

	$modelCategories = new Categories;

	$categories = $modelCategories->getCategories();

	if(isset($_POST["send"])){

		foreach($_POST as $key => $value) {
			if($key != 'category'){
			$_POST[ $key ] = trim(htmlspecialchars(strip_tags($value)));
		}
	}

		if(isset($_POST["title"]) &&
			isset($_POST["description"]) && $_POST["description"] != '' &&
			isset($_POST["text1"]) && $_POST["text1"] != '' &&
			(file_exists($_FILES['img_description']['tmp_name']) || is_uploaded_file($_FILES['img_description']['tmp_name'])) &&
			mb_strlen($_POST["title"]) >= 4 &&
			mb_strlen($_POST["title"]) <= 64 &&
			mb_strlen($_POST["description"]) <= 1000){

		$extension = explode(".", strtolower($_FILES['img_description']['name']));

		$cat = $_POST['category'];

		$categories_fk = implode(',', $cat);

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