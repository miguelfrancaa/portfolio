<?php

	if(isset($_POST["send"])){

			foreach($_POST as $key => $value) {
				$_POST[ $key ] = trim(htmlspecialchars(strip_tags($value)));
			}

			if(isset($_POST["titleObjective"]) &&
				isset($_POST["contentObjective"]) &&
				mb_strlen($_POST["titleObjective"]) >= 1 &&
				mb_strlen($_POST["titleObjective"]) <= 64 &&
				mb_strlen($_POST["contentObjective"]) >= 1){

			require_once("models/objectives.php");

			$model = new Objectives();

			$objective = $model->newObjective($_POST);

			header("Location:/admin/aboutadmin");

			}else{
				$message = "Please fill the form correctly."
			}

	}

	require("views/newobjective.php");
?>