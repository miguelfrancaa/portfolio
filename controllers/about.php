<?php

	require("models/about.php");

	$modelAbout = new About();

	$about = $modelAbout->getAboutInfo();

	require("models/objectives.php");

	$modelObjectives = new Objectives;

	$objectives = $modelObjectives->getObjectives();

	require("models/services.php");

	$modelServices = new Services;

	$services = $modelServices->getServices();

	require("views/about.php");

?>