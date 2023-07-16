<?php
	require("models/projects.php");

	$modelProjects = new Projects();

	$projects = $modelProjects->getAllProjects();

	require("views/projects.php");
?>