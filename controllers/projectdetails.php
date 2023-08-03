<?php

	require("models/projects.php");

	$model = new Projects();

	$project = $model->getProjectDetails($resource_id);

	$projectimgs = $model->getProjectImgs($resource_id);

	require("views/projectdetails.php");
