<?php

	require("models/projects.php");

	$model = new Projects();

	$project = $model->getProjectDetails($id);

	$projectimgs = $model->getProjectImgs($id);

	require("views/project.php");
