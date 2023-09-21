<?php
	require("models/projectimgs.php");

	$model = new Projectimgs();

	$project = $model->getImageToEdit($resource_id);

	$projectimg = $model->deletePhoto($resource_id);



	header("Location: /admin/editprojectphotos/".$project["project_id"]."");
?>