<?php
	require("models/services.php");

	$model = new Services();

	$service = $model->serviceToEdit($resource_id);

	if(isset($_POST["send"])){

		$service = $model->editService($_POST);

		header("Location: /admin/aboutadmin");

	}

	require("views/editservice.php");
?>