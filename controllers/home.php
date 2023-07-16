<?php
	require("models/projects.php");

	$modelProjects = new Projects();

	$projects = $modelProjects->getProjectsIndex();

	$numberProjects = $modelProjects->getNumberProjects();

	require("views/home.php");
?>