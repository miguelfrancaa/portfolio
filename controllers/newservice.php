<?php

	if(isset($_POST["send"])){

			foreach($_POST as $key => $value) {
				$_POST[ $key ] = trim(htmlspecialchars(strip_tags($value)));
			}

			if(isset($_POST["titleService"]) &&
				isset($_POST["contentService"]) &&
				mb_strlen($_POST["titleService"]) >= 1 &&
				mb_strlen($_POST["titleService"]) <= 64 &&
				mb_strlen($_POST["contentService"]) >= 1){

			require_once("models/services.php");

			$model = new Services();

			$service = $model->newService($_POST);

			header("Location:/admin/aboutadmin");

			}else{
				$message = "Please fill the form correctly."
			}

	}

	require("views/newservice.php");
?>