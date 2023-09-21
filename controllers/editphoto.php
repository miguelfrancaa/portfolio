<?php

	require("models/projectimgs.php");

	$model = new Projectimgs();

	$projectimg = $model->getImageToEdit($resource_id);

	if(isset($_POST["send"])){

		move_uploaded_file($_FILES["img_project"]["tmp_name"], "img/projects/" . $_FILES["img_project"]["name"]);

		$projectimg = $model->editPhoto($resource_id);

		header("Location: /admin/editprojectphotos/".$_POST["project_id"]."");
	}

	require("views/editphoto.php");
?>