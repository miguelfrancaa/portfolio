<?php
	require("models/about.php");

	$model = new About();

	$about = $model->getAboutInfo();

	if(isset($_POST["send"])){

			foreach($_POST as $key => $value) {
			$_POST[ $key ] = trim(htmlspecialchars(strip_tags($value)));
		}

		if(isset($_POST["title"])){

		$about = $model->editTitle($_POST);

		header("Location: /admin/aboutadmin");

		}else{
			$message = "Please fill the form correctly.";
		}
	}

	require("views/titleabout.php");
?>