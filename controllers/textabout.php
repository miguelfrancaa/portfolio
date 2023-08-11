<?php
	require("models/about.php");

	$model = new About();

	$about = $model->getAboutInfo();

	if(isset($_POST["send"])){

		$about = $model->editText($_POST);

		header("Location: /admin/aboutadmin");
	}

	require("views/textabout.php");
?>