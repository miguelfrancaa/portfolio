 <?php
	require_once("models/about.php");

	$modelAbout = new About();

	$about = $modelAbout->getAboutInfo();

	require_once("models/objectives.php");

	$modelObjectives = new Objectives();

	$objectives = $modelObjectives->getObjectives();

	require_once("models/services.php");

	$modelServices = new Services();

	$services = $modelServices->getServices();

	require("views/aboutadmin.php");
?>