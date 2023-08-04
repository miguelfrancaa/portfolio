 <?php
	require("models/about.php");

	$modelAbout = new About();

	$about = $modelAbout->getAboutInfo();

	require("models/services.php");

	$modelServices = new Services();

	$services = $modelServices->getServices();

	require("views/aboutadmin.php");
?>