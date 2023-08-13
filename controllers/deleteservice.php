<?php

	require("models/services.php");

	$model = new Services();

	$service = $model->deleteService($resource_id);

	header("Location:/admin/aboutadmin");
