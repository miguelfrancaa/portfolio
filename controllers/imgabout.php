<?php
	require("models/about.php");

	$model = new About();

	$about = $model->getAboutInfo();

	if(isset($_POST["send"])){

		move_uploaded_file($_FILES["imgabout"]["tmp_name"], "img/" . $_FILES["imgabout"]["name"]);

		$about = $model->editImgAbout($_POST);

		header("Location: /admin/aboutadmin");
	}

	require("views/imgabout.php");
?>