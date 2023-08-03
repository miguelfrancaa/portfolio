<?php

	require("models/projects.php");

	$model = new Projects();

	$project = $model->deleteProject($resource_id);

	header("Location:/admin/projectsadmin.php");
