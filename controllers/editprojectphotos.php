<?php
	require("models/projects.php");

	$model = new Projects;

	$projectimgs = $model->getProjectImgs($resource_id);

	require("views/editprojectphotos.php");

?>