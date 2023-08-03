<?php

	require("models/projects.php");

	$model = new Projects();

	$projects = $model->listProjects();

	require("views/projectsadmin.php");