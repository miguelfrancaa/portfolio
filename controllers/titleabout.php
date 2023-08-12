<?php
	require("models/about.php");

	$model = new About();

	$about = $model->getAboutInfo();

	if(isset($_POST["send"])){

		$about = $model->editTitle($_POST);

		header("Location: /admin/aboutadmin");
	}

	require("views/titleabout.php");
?>