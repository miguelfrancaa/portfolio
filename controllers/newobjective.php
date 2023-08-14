<?php

	if(isset($_POST["send"])){

			require_once("models/objectives.php");

			$model = new Objectives();

			$objective = $model->newObjective($_POST);

			header("Location:/admin/aboutadmin");

	}

	require("views/newobjective.php");
?>