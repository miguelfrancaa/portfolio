<?php

	require("models/objectives.php");

	$model = new Objectives();

	$objective = $model->deleteObjective($resource_id);

	header("Location:/admin/aboutadmin");
