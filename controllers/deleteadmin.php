<?php

	require("models/admins.php");

	$model = new Admins();

	$admins = $model->deleteAdmin($resource_id);

	header("Location:/admin/adminslist");