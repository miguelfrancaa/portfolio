<?php
	require("models/about.php");

	$model = new About();

	$about = $model->getAboutInfo();

	if(isset($_POST["send"])){

		$about = $model->editText2($_POST);

		header("Location: /admin/aboutadmin");
	}

	require("views/text2about.php");
?>