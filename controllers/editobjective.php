<?php
	require("models/objectives.php");

	$model = new Objectives();

	$objective = $model->objectiveToEdit($resource_id);

	if(isset($_POST["send"])){

		$objective = $model->editObjective($_POST);

		header("Location: /admin/aboutadmin");

	}

	require("views/editobjective.php");
?>