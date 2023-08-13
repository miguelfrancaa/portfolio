<?php

	if(isset($_POST["send"])){

			require_once("models/services.php");

			$model = new Services();

			$service = $model->newService($_POST);

			header("Location:/admin/aboutadmin");

	}

	require("views/newservice.php");
?>